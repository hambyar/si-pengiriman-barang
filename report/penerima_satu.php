<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Pengiriman</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM penerima WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengiriman Barang PT.ABCD Kisaran </h2>
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>Data Seluruh Penerima</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nomor Perkara</td> <td><?= $data['no_resi'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Penerima</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat_penerima'] ?></td>
                                </tr>
								<tr>
                                    <td>No Hp</td> <td><?= $data['nomerhp'] ?> hari</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Menerima</td> <td><?= $data['tgl_menerima'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kode Pos</td> <td><?= $data['kode_pos'] ?></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>CEO J&T Kisaran <strong></u><br>
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
