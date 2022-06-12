<?php
include 'koneksi.php';

$id = $_GET['id_pembeli'];
$sql = "select * FROM tbl_pembeli where id_pembeli='$id'";
$tampil = $koneksi->query($sql)->fetch_assoc();
?>
<form method="POST">
    <input type="text" value="<?= $tampil['id_pembeli'] ?>" name="id_pembeli" placeholder="ID">
    <input type="text" value="<?= $tampil['nama_pembeli'] ?>" name="nama_pembeli" placeholder="NAMA_PEMBELI">
    <input type="text" value="<?= $tampil['nama_barang'] ?>" name="nama_barang" placeholder="NAMA_BARANG">
    <input type="text" value="<?= $tampil['jumlah_barang'] ?>" name="jumlah_barang" placeholder="JUMLAH_BARANG">
    <input type="text" value="<?= $tampil['harga'] ?>" name="harga" placeholder="HARGA">
    <input type="text" value="<?= $tampil['sub_total'] ?>" name="sub_total" placeholder="SUBTOTAL">
    <input type="submit" name="kirim">
</form>
<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga = $_POST['harga'];
    $sub_total = $_POST['sub_total'];
    $sql = "update tbl_pembeli set
				id_pembeli = '$id',
				nama_pembeli = '$nama_pembeli',
				nama_barang = '$nama_barang',
				jumlah_barang = '$jumlah_barang',
                harga = '$harga',
                sub_total = '$sub_total'
				where id_pembeli='$id_pembeli'
	";
    //exit($sql);
    $tambah = $koneksi->query($sql);
    echo '<script>window.location.href="index.php"</script>';
}
