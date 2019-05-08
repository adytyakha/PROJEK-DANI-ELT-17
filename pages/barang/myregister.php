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
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];


        // buat query

        $sql = "INSERT INTO `data_barang`(`no_seri`, `nama_barang`, `harga_beli`, `harga_jual`, `stok`) 
        VALUES ('$no_seri','$nama_barang','$harga_beli','$harga_jual', '$stok')";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: tambahbarang.php');
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