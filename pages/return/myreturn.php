<?php

include("../../db/koneksi.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
        $no_seri = $_POST['no_seri'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $nama_toko = $_POST['nama_toko'];


        // buat query

        $sql = "INSERT INTO `data_retur`(`no_seri`, `nama_barang`, `jumlah`, `nama_toko`) 
        VALUES ('$no_seri','$nama_barang','$jumlah','$nama_toko')";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: return.php');
           // $response["error"] = false;
            $response["error_msg"] = "Regiter Sukses";
            echo json_encode($response);
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            // header('Location: ../pages/404.php');
             $response["error"] = false;
            $response["error_msg"] = "Regiter gagal";
            echo json_encode($response);

        }
    }