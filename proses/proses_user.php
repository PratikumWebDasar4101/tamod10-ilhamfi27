<?php
require_once '../models/User_model.php';
$um = new User_model();
session_start();
if(isset($_GET['proses'])){
    switch ($_GET['proses']) {
        case 'registrasi':
        	$username = isset($_POST['username']) ? $_POST['username'] : "";
        	$password = isset($_POST['password']) ? $_POST['password'] : "";
        	$password_confirm = isset($_POST['password']) ? $_POST['password'] : "";
        	if ($password == $password_confirm) {
                $result = $um->user_registration($username, $password);
        		if ($result) {
        			header('location: ../index.php');
        		} else {
        			header('location: ../registrasi.php');
        		}
        	}
            break;
        case 'login':
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['password']) ? md5($_POST['password']) : "";
            $result = $um->user_login_check($username, $password);
            $jumlah_data = mysqli_num_rows($result);
            $d = mysqli_fetch_array($result);
            if ($jumlah_data > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $d['id'];
                header('location: ../dashboard.php');
            } else {
                header('location: ../index.php');
            }
            break;
        case 'update_profile':
            $id = isset($_POST['id']) ? $_POST['id'] : "";
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $nama_depan = isset($_POST['nama_depan']) ? $_POST['nama_depan'] : "";
            $nama_belakang = isset($_POST['nama_belakang']) ? $_POST['nama_belakang'] : "";
            $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "";
            $tanggal_lahir = isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : "";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $konfirmasi_password = isset($_POST['konfirmasi_password']) ? $_POST['konfirmasi_password'] : "";
            $password_lama = isset($_POST['password_lama']) ? $_POST['password_lama'] : "";

            $result = null;
            if($password != "" && $password == $konfirmasi_password){
                $d = mysqli_fetch_array($um->detail_user($id));
                if ($d['password'] == md5($password_lama)) {
                    $result = $um->update_profile_user($username,$nama_depan,$nama_belakang,$jenis_kelamin,$tanggal_lahir,$email,md5($password),$id);
                }
            } else{
                $result = $um->update_profile_user($username,$nama_depan,$nama_belakang,$jenis_kelamin,$tanggal_lahir,$email,null,$id);
            }
            if ($result) {
                header('location: ../profile.php');
            } else {
                header('location: ../profile.php');
            }

            break;
        default:
            // code...
            break;
    }
}
?>
