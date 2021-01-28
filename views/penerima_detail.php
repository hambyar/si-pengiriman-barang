<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail penerima Barang</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM penerima WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Resi</td> <td><?= $data['no_resi'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Penerima</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Menerima</td> <td><?= $data['tgl_menerima'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat Penerima</td> <td><?= $data['alamat_penerima'] ?></td>
                        </tr>
                        <tr>
                            <td>No Hp</td> <td><?= $data['nomerhp'] ?></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td> <td><?= $data['kode_pos'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['keterangan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=penerima&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data penerima </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

