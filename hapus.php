<?php
include 'koneksi.php';
$id = $_GET['id_pembeli'];
$sql = "delete from tbl_pembeli where id_pembeli='$id'";

$hapus = $koneksi->query($sql);
echo "<script>window.location.href='index.php'</script>";
