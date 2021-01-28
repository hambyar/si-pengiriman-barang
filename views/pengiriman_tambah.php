<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Pengiriman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label for="tujuan" class="col-sm-3 control-label">Tujuan</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="tujuan" class="form-control" id="inputEmail3" placeholder="Inputkan Tujuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Pengiriman</label>
                               <div class="col-sm-2 col-xs-9">
                                <select name="jenis" class="form-control">
                                    <option value="pengiriman Express">Express</option>
                                    <option value="pengiriman Reguler">Reguler</option>
                                    <option value="pengiriman Cod">COD</option>
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="berat" class="col-sm-3 control-label">Berat</label>
                            <div class="col-sm-9">
                                <input type="text" name="berat" class="form-control" id="inputEmail3" placeholder="Berat Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="namabrg" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namabrg" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Barang" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pengantar</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pengantarnya" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor Resi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_resi"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Resi" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputPassword3" placeholder="Inputkan harga " required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima </label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" class="form-control" id="inputPassword3" placeholder="Inputkan " required>
                            </div>
                        </div>


                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" class="form-control">
									<option value="Di Kirim">Di Kirim</option>
									<option value="Di Cancel">Di Cancel</option>
									<option value="Di Proses">Di Proses</option>
								</select>
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span>Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengiriman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengiriman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $tujuan=$_POST['tujuan'];
	$jenis=$_POST['jenis'];
	$berat=$_POST['berat'];
	$namabrg=$_POST['namabrg'];
  $nama=$_POST['nama'];
	$no_resi=$_POST['no_resi'];
  $tglmasuk=$_POST['tgl_masuk'];
  $penerima=$_POST['penerima'];
  $harga=$_POST['harga'];
  $status=$_POST['status'];
	$ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO pengiriman VALUES ('','$tujuan','$jenis','$berat','$namabrg','$nama','$no_resi','$tglmasuk','$penerima','$harga','$status','$ket')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pengiriman Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengiriman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
