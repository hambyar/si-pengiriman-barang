<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penerimaan Barang Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                         <h2>Sistem Informasi Pengiriman Barang PT.ABCD Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Penerima TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th>Nomor Perkara</th><th>Peminjam</th><th>Tanggal Pinjam </th><th>Tanggal Kembali</th><th>Lama Pinjam</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penerima WHERE substr(tgl_menerima,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_resi'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['tgl_menerima'] ?></td>
                                    <td><?= $data['nomerhp'] ?></td>
                                    <td><?= $data['kode_pos'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>CEO J&T Pusat<strong></u><br>
                                        NIP.102871291416712
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
