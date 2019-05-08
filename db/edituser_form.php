<?php

include("koneksi.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {

if($_POST){
        // ambil data dari formulir
    $id= $_POST['id'];
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $level = $_POST['level'];
       

        // buat query

        $sql = "UPDATE `data_user` SET `username`='$username',`nama`='$nama',`alamat`='$alamat',`jenis_kelamin`='$jenis_kelamin',`agama`='$agama' WHERE id=$id";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: ../pages/data/edituser.php');
            // $response["error"] = false;
            // $response["error_msg"] = "Update Sukses";
            // echo json_encode($response);
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            // header('Location: ../pages/examples/404.html');
             $response["error"] = false;
            $response["error_msg"] = "Update gagal";
            echo json_encode($response);

        }
    }