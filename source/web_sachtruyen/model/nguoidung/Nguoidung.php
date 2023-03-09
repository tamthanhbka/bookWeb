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
    public static function findById($id): self
    {
        $record =  Database::getInstance()->query("SELECT * FROM nguoidung WHERE ID = '$id'")[0];
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
    public static function findByUsername($tenDN): self
    {
        $record =  Database::getInstance()->query("SELECT * FROM nguoidung WHERE TenDN = '$tenDN'");
        if ($record == NULL) return new Nguoidung(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
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
    public static function getnumberbook($id): int
    {
        $record =  Database::getInstance()->query("SELECT COUNT(SachID)FROM muasach WHERE NguoiDung = '$id'")[0];
        return $record;
    }
    public static function checklogin($tenDN,$matkhau): string
    {
        $records =  Database::getInstance()->query("SELECT * FROM NguoiDung WHERE tenDN = '$tenDN'");
        if ($records != NULL){
            $record = $records[0];
            new Nguoidung(
                $record['ID'],
                $record['TenDN'],
                $record['MatKhau'],
                $record['Email'],
                $record['SoDienThoai'],
                $record['DiemTichLuy'],
                $record['URL'],
                $record['VaiTro'],
            );
            if($record[2] == $matkhau){
                return "Đăng nhập thành công";
            }else {
                return "Mật khẩu không đúng";
            }
        }
        else return "Tài khoản không tồn tại";
    }
}
?>