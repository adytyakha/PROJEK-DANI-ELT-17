<?php

include("../../db/koneksi.php");

if( isset($_GET['no_seri']) ){

    // ambil id dari query string
    $no_seri = $_GET['no_seri'];

    // buat query hapus
    $sql = "DELETE FROM data_barang where no_seri=$no_seri";
    $query = mysqli_query($link, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header("location: databarang.php");     
        // $response["error"] = false;
        //     $response["error_msg"] = "Delete Sukses";
        //     echo json_encode($response);
    } else {
        $response["error"] = false;
            $response["error_msg"] = "Delete Gagal";
            echo json_encode($response);
    }
}

// }
// else if( isset($_GET['id_berita']) ){

//     // ambil id dari query string
//     $id = $_GET['id_berita'];

//     // buat query hapus
//     $sql = "DELETE FROM SIM_BERITA where id_berita=$id";
//     $query = mysqli_query($db, $sql);

//     // apakah query hapus berhasil?
//     if( $query ){
//         header('Location: ../pages/tables/data-berita.php');
//     } else {
//         die("gagal menghapus berita...");
//     }

// }
// else if( isset($_GET['id_event']) ){

//     // ambil id dari query string
//     $id = $_GET['id_event'];

//     // buat query hapus
//     $sql = "DELETE FROM SIM_TAMBAH_EVENT where id_event=$id";
//     $query = mysqli_query($db, $sql);

//     // apakah query hapus berhasil?
//     if( $query ){
//         header('Location: ../pages/tables/data-event.php');
//     } else {
//         die("gagal menghapus berita...");
//     }

// }


else {
        header('Location: ../pages/examples/akses-ditolak.php');

    die("akses dilarang...");
}

?>