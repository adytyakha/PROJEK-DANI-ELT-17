<?php

include("../../db/koneksi.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir
        $seri = $_POST['seri'];
        $barang = $_POST['barang'];
        $jumlah = $_POST['jumlah'];
        $toko = $_POST['toko'];


        // buat query

        $sql = "INSERT INTO `data_order`(`seri`, `barang`, `jumlah`, `toko`) 
        VALUES ('$seri','$barang','$jumlah','$toko')";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: order.php');
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