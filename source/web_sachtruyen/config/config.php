<?php
class Database
{
    private $connect;
    private static $database;
    private function __construct()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "bookweb");
        if (!$this->connect) die("Could not connect to database");
    }

    public static function getInstance(): Database
    {
        if (!isset(self::$database)) self::$database =  new Database();
        return self::$database;
    }
 
    public function query(string $sql): array
    {
        try {
            $records = [];
            $result = mysqli_query($this->connect, $sql);
            while ($record = mysqli_fetch_array($result)) {
                array_push($records, $record);
            }
            return $records;
        } catch (\Throwable $th) {
            throw new Exception("Could not query");
        }
    }
}

// $db = Database::getInstance();
// $records = $db->query("select * from sach");
// foreach ($records as $record) {
//     echo $record['TenSach'] . "<br/>";
// }

// $result = mysqli_query($connect, $sql);
// $row = mysqli_fetch_array($result);
