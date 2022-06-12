<form method="POST">
    <input type="text" name="id_pembeli" placeholder="id_pembeli"> <br>
    <input type="text" name="nama_pembeli" placeholder="nama_pembeli"> <br>
    <input type="text" name="nama_barang" placeholder="nama_barang"> <br>
    <input type="text" name="jumlah_barang" placeholder="jumlah_barang"> <br>
    <input type="text" name="harga" placeholder="harga"> <br>
    <input type="text" name="sub_total" placeholder="sub_total"> <br>
    <input type="submit" name="KIRIM">
</form>
<?php
include 'koneksi.php';
if (isset($_POST['KIRIM'])) {
    $id_pembeli = $_POST['id_pembeli'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $harga = $_POST['harga'];
    $sub_total = $_POST['sub_total'];



    $sql = "INSERT INTO tbl_pembeli (id_pembeli,nama_pembeli,nama_barang,jumlah_barang,harga,sub_total)
          VALUES('$id_pembeli','$nama_pembeli','$nama_barang','$jumlah_barang','$harga','$sub_total');";
    $tambah = $koneksi->query($sql);
    echo "<script>window.location.href='index.php'</script>";
}

?>