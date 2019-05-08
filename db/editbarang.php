<?php

include("koneksi.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {

if($_POST){
        // ambil data dari formulir
    $no_seri= $_POST['no_seri'];
        $nama_barang = $_POST['nama_barang'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];
     
       

        // buat query

        $sql = "UPDATE `data_barang` SET `no_seri`=`$no_seri`,`nama_barang`=`$nama_barang`,`harga_beli`=`$harga_beli`,`harga_jual`=`$harga_jual`,`stok`=`$stok` WHERE no_seri=$no_seri";
        $query = mysqli_query($link, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: ../pages/barang/tambahbarang.php');
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