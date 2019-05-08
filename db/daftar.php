<?php

include("koneksi.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
        $username = $_POST['username'];
        $password = $_POST['password'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $level = $_POST['level'];
       

        // buat query

        $sql = "INSERT INTO `data_user`(`username`, `password`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `level`) 
        VALUES ('$username','$password','$nama','$alamat','$jenis_kelamin','$agama','admin')";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: ../login.php');
           // $response["error"] = false;
            $response["error_msg"] = "Regiter Sukses";
            echo json_encode($response);
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            // header('Location: ../pages/examples/404.html');
             $response["error"] = false;
            $response["error_msg"] = "Regiter gagal";
            echo json_encode($response);

        }
    }