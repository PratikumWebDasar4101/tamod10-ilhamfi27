<?php
/**
 *
 */
require_once 'Koneksi.php';
class Mahasiswa_model{
    private $conn;
    function __construct(){
        $db = new Koneksi();
        $this->conn = $db->db_connect();
    }

    public function list_mahasiswa($nim=null){
        if (isset($nim)) {
            $query = "SELECT
                      `id`,
                      `nim`,
                      CONCAT(
                          `nama_depan`,
                          ' ',
                          `nama_belakang`
                      ) AS nama,`kelas`,
                      `tanggal_lahir`,
                      `hobby`,
                      `wisata_favorit`,
                      `genre_film_favorit`
                    FROM
                      `mahasiswa`
                    WHERE
                      `nim` LIKE '%$nim%'
                    ";
        } else{
            $query = "SELECT
                      `id`,
                      `nim`,
                      CONCAT(
                          `nama_depan`,
                          ' ',
                          `nama_belakang`
                      ) AS nama,`kelas`,
                      `tanggal_lahir`,
                      `hobby`,
                      `wisata_favorit`,
                      `genre_film_favorit`
                    FROM
                      `mahasiswa`
                    ";
        }
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        $data = array();
        while($d = mysqli_fetch_assoc($result)){
            array_push($data, $d);
        }
        return $data;
    }

    public function detail_mahasiswa($id){
        $query = "SELECT
                  `id`,
                  `nim`,
                  `nama_depan`,
                  `nama_belakang`,
                  `kelas`,
                  `tanggal_lahir`,
                  `hobby`,
                  `wisata_favorit`,
                  `genre_film_favorit`
                FROM
                  `mahasiswa`
                WHERE
                  `id` = '$id'
                ";
        $result = mysqli_query($this->conn,$query) or die (mysqli_error($this->conn));
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    public function insert_data_mahasiswa($nim,$nama_depan,$nama_belakang,$kelas,$tanggal_lahir,$hobby,$tempat_wisata,$genre_film){
        $query = "INSERT INTO `mahasiswa` (
                  `nim`,
                  `nama_depan`,
                  `nama_belakang`,
                  `kelas`,
                  `tanggal_lahir`,
                  `hobby`,
                  `wisata_favorit`,
                  `genre_film_favorit`
                )
                VALUES
                  (
                    '$nim',
                    '$nama_depan',
                    '$nama_belakang',
                    '$kelas',
                    '$tanggal_lahir',
                    '$hobby',
                    '$tempat_wisata',
                    '$genre_film'
                  );
                ";
        $result = mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
        return $result;
    }

    public function update_data_mahasiswa($nim,$nama_depan,$nama_belakang,$kelas,$tanggal_lahir,$hobby,$tempat_wisata,$genre_film,$id){
        $query = "UPDATE
                      `mahasiswa`
                    SET
                      `nim` = 'nim',
                      `nama_depan` = '$nama_depan',
                      `nama_belakang` = '$nama_belakang',
                      `kelas` = '$kelas',
                      `tanggal_lahir` = '$tanggal_lahir',
                      `hobby` = '$hobby',
                      `wisata_favorit` = '$tempat_wisata',
                      `genre_film_favorit` = '$genre_film'
                    WHERE `id` = '$id';
                    ";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }

    public function hapus_data_mahasiswa($id){
        $query = "DELETE
                    FROM
                      `mahasiswa`
                    WHERE `id` = '$id';
                    ";
        $result = mysqli_query($this->conn, $query);
        return $result;
    }
}

?>
