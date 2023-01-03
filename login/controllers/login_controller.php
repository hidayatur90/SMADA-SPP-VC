<?php 
 
include 'db/db_config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['nama_user'])) {
    header("Location: keuangan/main.php");
}
 
if (isset($_POST['submit'])) {
    $nama_user = $_POST['nama_user'];
    $kata_sandi = $_POST['kata_sandi'];
 
    $sql = "SELECT * FROM pengguna WHERE nama_user='$nama_user' AND kata_sandi='$kata_sandi'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama_user'] = $row['nama_user'];
        $_SESSION['nama_asli'] = $row['nama_asli'];
        $_SESSION['role'] = $row['role'];
        echo session_id();
        if($row['role'] == "admin" || $row['role'] == "petugas"){
            header("Location: keuangan/views/main.php");
        } else if ($row['role'] == "kepsek") {
            header("Location: kepsek/tinjau.php");
        } else if ($row['role'] == "waka") {
            header("Location: waka/dash_waka.php");
        } else if ($row['role'] == "bendahara") {
            header("Location: bendahara/dash_bendahara.php");
        }
    } else {
        echo "<script>alert('Username atau Password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
