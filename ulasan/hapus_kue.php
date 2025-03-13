<?php

include "config/koneksi.php";

$id_hapus = $_GET['id_hapus'];


$hapus = mysqli_query($koneksi, "DELETE FROM tbkue WHERE kodekue='$id_hapus'");

if ($hapus)
{
    echo "<script>alert('Data ulasan kue berhasil dihapus');
    window.location.href='data_kue.php';</script>";
}
else
{
    echo "<script>alert('Data ulasan kue gagal dihapus');
    window.location.href='data_kue.php';</script>";
}

?>