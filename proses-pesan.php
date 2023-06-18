<?php

include("config.php");

// cek apakah tombol kirim sudah diklik atau blum?
if(isset($_POST['kirim'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['pekerjaan'];
    $pesan = $_POST['pesan'];

    // buat query
    $sql = "INSERT INTO pesan (nama, no_telp, pekerjaan, pesan, balasan) VALUE ('$nama', '$no_telp', '$alamat', '$pesan', '')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>