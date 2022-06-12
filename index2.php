<?php
session_start();
//kalau belum login arahkan ke login.php sekalian dikasih pesan
if ($_SESSION['userweb'] != 'login') {
    echo '<script>alert("Anda belum login, silahkan login");</script>';
    header("location:login.php");
}
include 'koneksi.php';
$tampil = $koneksi->query("select * from `tbl_pembeli`");
?>





<html>

<head>
    <title>Data Tabel Pembeli</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>

    <div class="container">
        <h2>Export Data Pembeli</h2>
        <hr>
        <h6>Pilih Jenis Export Data :</h6>

        <div class="data-tables datatable-dark">

            <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
            <table class="table-bordered" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAMA PEMBELI</th>
                        <th>NAMA BARANG</th>
                        <th>JUMLAH BARANG</th>
                        <th>HARGA</th>
                        <th>SUBTOTAL</th>


                    </tr>

                </thead>
                <?php foreach ($tampil as $row) { ?>
                    <tr>
                        <td><?= $row['id_pembeli'] ?></td>
                        <td><?= $row['nama_pembeli'] ?></td>
                        <td><?= $row['nama_barang'] ?></td>
                        <td><?= $row['jumlah_barang'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><?= $row['sub_total'] ?></td>

                    </tr>
                <?php } ?>
            </table>

        </div>


        <script>
            $(document).ready(function() {
                $('#mauexport').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

        <br>

</body>

</html>