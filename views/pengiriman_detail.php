<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail pengiriman</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail pengiriman-->
                    <?php
                    $sql = "SELECT *FROM pengiriman WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Tujuan</td> <td><?= $data['tujuan'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis</td> <td><?= $data['jenis'] ?></td>
                        </tr>
                        <tr>
                            <td>Berat</td> <td><?= $data['berat'] ?></td>
                        </tr>
						<tr>
                            <td>Nama Barang</td> <td><?= $data['namabrg'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pengirim</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>No Resi</td> <td><?= $data['no_resi'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk</td> <td><?= $data['tgl_masuk'] ?></td>
                        </tr>
						<tr>
                            <td>Penerima Barang</td> <td><?= $data['penerima'] ?></td>
                        </tr>
						<tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pengiriman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data pengiriman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

