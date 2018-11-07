<?php
include_once '../models/Mahasiswa_model.php';
$mm = new Mahasiswa_model();
if (isset($_GET['proses'])) {
    switch ($_GET['proses']) {
        case 'input':
            $nama_depan     = isset($_POST['nama_depan']) ? $_POST['nama_depan'] : "";
            $nama_belakang  = isset($_POST['nama_belakang']) ? $_POST['nama_belakang'] : "";
            $nim            = isset($_POST['nim']) ? $_POST['nim'] : "";
            $kelas          = isset($_POST['kelas']) ? $_POST['kelas'] : "";
            $tanggal_lahir  = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : "";
            $hobby          = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "";
            $tempat_wisata  = isset($_POST['tempat_wisata']) ? implode(", ", $_POST['tempat_wisata']) : "";
            $genre_film     = isset($_POST['genre_film']) ? implode(", ", $_POST['genre_film']) : "";
            $result = $mm->insert_data_mahasiswa($nim,$nama_depan,$nama_belakang,$kelas,$tanggal_lahir,$hobby,$tempat_wisata,$genre_film);
            if ($result) {
                header('location: ../dashboard.php');
            } else {
                header('location: ../new_data.php');
            }
            break;

        case 'update':
            $id             = isset($_POST['id']) ? $_POST['id'] : "";
            $nama_depan     = isset($_POST['nama_depan']) ? $_POST['nama_depan'] : "";
            $nama_belakang  = isset($_POST['nama_belakang']) ? $_POST['nama_belakang'] : "";
            $nim            = isset($_POST['nim']) ? $_POST['nim'] : "";
            $kelas          = isset($_POST['kelas']) ? $_POST['kelas'] : "";
            $tanggal_lahir  = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : "";
            $hobby          = isset($_POST['hobby']) ? implode(", ", $_POST['hobby']) : "";
            $tempat_wisata  = isset($_POST['tempat_wisata']) ? implode(", ", $_POST['tempat_wisata']) : "";
            $genre_film     = isset($_POST['genre_film']) ? implode(", ", $_POST['genre_film']) : "";
            $result = $mm->update_data_mahasiswa($nim,$nama_depan,$nama_belakang,$kelas,$tanggal_lahir,$hobby,$tempat_wisata,$genre_film,$id);
            if ($result) {
                header('location: ../dashboard.php');
            } else {
                header('location: ../edit.php?id='.$id);
            }
            break;
        case 'hapus':
            $id = $_GET['id'];
            $result = $mm->hapus_data_mahasiswa($id);
            if ($result) {
                header('location: ../dashboard.php');
            } else {
                header('location: ../dashboard.php');
            }
            break;
        default:
            // code...
            break;
    }
}
?>
