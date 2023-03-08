<?php
include '../../config/config.php';
class Nguoidung
{
    public $id;

    public $tenDN;

    public $matkhau;

    public $email;

    public $sodienthoai;

    public $diemtichluy;

    public $URL;

    public $vaitro;


    public function __construct($id, $tenDN, $matkhau, $email, $sodienthoai, $diemtichluy, $URL, $vaitro)
    {
        $this->id = $id;
        $this->tenDN = $tenDN;
        $this->matkhau = $matkhau;
        $this->email = $email;
        $this->sodienthoai = $sodienthoai;
        $this->diemtichluy  = $diemtichluy;
        $this->URL = $URL;
        $this->vaitro = $vaitro;
    }
    public static function findById(int $id): self
    {
        $record =  Database::getInstance()->query("SELECT * FROM nguoidung WHERE ID = $id")[0];
        return new Nguoidung(
            $record['ID'],
            $record['TenDN'],
            $record['MatKhau'],
            $record['Email'],
            $record['SoDienThoai'],
            $record['DiemTichLuy'],
            $record['URL'],
            $record['VaiTro'],
        );
    }
}
?>