<?php
// include ('..\..\config\config.php');
require_once(__DIR__."\..\..\config\config.php");
class Sach
{
    public $id;

    public $ten;

    public $trangThai;

    public $tacGia;

    public $ngayHoanThanh;

    public $ngaySangTac;

    public $soChuong;

    public $URLbiaSach;

    public $giaSach;

    public $theLoai;

    public $moTa;

    public function __construct($id, $ten, $trangThai, $tacGia, $ngayHoanThanh, $ngaySangTac, $soChuong, $URLbiaSach, $giaSach, $theLoai, $moTa)
    {
        $this->id = $id;
        $this->ten = $ten;
        $this->trangThai = $trangThai;
        $this->tacGia = $tacGia;
        $this->ngayHoanThanh = $ngayHoanThanh;
        $this->ngaySangTac  = $ngaySangTac;
        $this->soChuong = $soChuong;
        $this->URLbiaSach = $URLbiaSach;
        $this->giaSach = $giaSach;
        $this->theLoai = $theLoai;
        $this->moTa = $moTa;
    }
 
    public static function findById(int $id): self
    {
        $record =  Database::getInstance()->query("SELECT * FROM sach WHERE ID = $id")[0];
        $soChuong = Database::getInstance()->query("SELECT count(*) FROM chuong WHERE SachID = $id")[0];
        return new Sach(
            $record['ID'],
            $record['TenSach'],
            $record['TrangThai'],
            $record['TacGia'],
            $record['NgayHoanThanh'],
            $record['NgaySangTac'],
            $soChuong[0],
            $record['URLBiaSach'],
            $record['GiaSach'],
            $record['TheLoai'],
            $record['MoTa']
        );
    }
    public static function getListBook(int $id): array
    {
        $sach = Sach::findById($id);
        $records = array();
        $rerusl = Database::getInstance()->query("SELECT * FROM sach WHERE TheLoai = '$sach->theLoai' limit 5");
        foreach ($rerusl as $record) {
            $sach = new Sach($record[0], $record[1], $record[2], $record[3], $record[4], $record[5], $record[6], $record[7], $record[8], $record[9], $record[10]);
            array_push($records, $sach);
        }
        return $records;
    }
    public static function getAllBooks():array
    {
        $result = Database::getInstance()->query("SELECT * FROM sach limit 5");
        $records = array();
        foreach ($result as $record) {
            $sach = new Sach($record[0], $record[1], $record[2], $record[3], $record[4], $record[5], $record[6], $record[7], $record[8], $record[9], $record[10]);
            array_push($records, $sach);
        }
        return $records;
    }
    public static function getBooksByCategory($theLoai):array
    {
        $result = Database::getInstance()->query("SELECT * from sach WHERE TheLoai = '$theLoai'");
        $records = array();
        foreach ($result as $record){
            $sach = new Sach($record[0], $record[1], $record[2], $record[3], $record[4], $record[5], $record[6], $record[7], $record[8], $record[9], $record[10]);
            array_push($records, $sach);
        } 
        return $records;
    }
    public static function getAllCategory():array
    {
        $result = Database::getInstance()->query("SELECT DISTINCT TheLoai FROM sach");
        $records = array();
        foreach ($result as $record){
            $temp = $record[0];
            array_push($records, $temp);
        }
        return $records;
    }
}
class Chuong
{
    public $id, $idSach, $tenChuong, $chiSo, $noiDung;

    public function __construct($id, $idSach, $tenChuong, $chiSo, $noiDung)
    {
        $this->id = $id;
        $this->idSach = $idSach;
        $this->tenChuong = $tenChuong;
        $this->chiSo = $chiSo;
        $this->noiDung = $noiDung;
    }
 
    public static function findById(int $Sachid, int $chiSo): Chuong
    {
        $records = Database::getInstance()->query("SELECT * FROM chuong WHERE SachID = $Sachid and ChiSoChuong = $chiSo");

        if (!isset($records[0])) throw new Exception("Could not find Chapter");
        else
            $record = $records[0];
        return new Chuong($record[0], $record[1], $record[2], $record[3], $record[4]);
    }

    public static function findBySachId(int $id): array
    {
        $records = array();
        $rerusl = Database::getInstance()->query("SELECT * FROM chuong WHERE SachID = $id");
        foreach ($rerusl as $record) {
            $chuong = new Chuong($record[0], $record[1], $record[2], $record[3], $record[4]);
            array_push($records, $chuong);
        }
        return $records;
    }
}
