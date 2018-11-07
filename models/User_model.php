<?php
/**
 *
 */
require_once 'Koneksi.php';
class User_model{
    private $conn;
    function __construct(){
        $db = new Koneksi();
        $this->conn = $db->db_connect();
    }

    public function user_registration($username, $password){
        $query = "INSERT INTO `user`(`username`, `password`) VALUES ('$username','".md5($password)."')";
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        return $result;
    }

    public function user_login_check($username, $password){
        $query = "SELECT
                  `id`,
                  `username`,
                  `password`
                FROM
                  `user`
                WHERE
                  `username` = '$username' AND `password` = '$password'
                ";
        echo $query;
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        return $result;
    }

    public function detail_user($id){
        $query ="SELECT
                  `id`,
                  `username`,
                  `password`,
                  `nama_depan`,
                  `nama_belakang`,
                  `jenis_kelamin`,
                  `tanggal_lahir`,
                  `foto`,
                  `email`
                FROM
                  `ta_webdas-9`.`user`
                  ";
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        return $result;
    }

    public function update_profile_user($username,$nama_depan,$nama_belakang,$jenis_kelamin,$tanggal_lahir,$email,$password=null,$id){
        if (isset($password)) {
            $query ="UPDATE
                    `user`
                    SET
                    `username` = '$username',
                    `password` = '$password',
                    `nama_depan` = '$nama_depan',
                    `nama_belakang` = '$nama_belakang',
                    `jenis_kelamin` = '$jenis_kelamin',
                    `tanggal_lahir` = '$tanggal_lahir',
                    `email` = '$email'
                    WHERE `id` = '$id';
                    ";
        } else {
            $query ="UPDATE
                    `user`
                    SET
                    `username` = '$username',
                    `nama_depan` = '$nama_depan',
                    `nama_belakang` = '$nama_belakang',
                    `jenis_kelamin` = '$jenis_kelamin',
                    `tanggal_lahir` = '$tanggal_lahir',
                    `email` = '$email'
                    WHERE `id` = '$id';
                    ";
        }
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        return $result;
    }
}

?>
