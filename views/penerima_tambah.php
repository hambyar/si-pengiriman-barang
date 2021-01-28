<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Penerima Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor Resi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_resi"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Resi" required>
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="alamat ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomerhp" class="col-sm-3 control-label">Nomer Hp</label>
                            <div class="col-sm-9">
                                <input type="text" name="nomerhp" class="form-control" id="inputEmail3" placeholder="nomerhp ">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="tgl_menerima" class="col-sm-3 control-label">Tanggal Menerima</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_menerima" class="form-control" id="inputEmail3" placeholder="Tanggal Menerima">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kode_pos" class="col-sm-3 control-label">Kode Pos</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_pos" class="form-control" id="inputEmail3" placeholder="kode_pos ">
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan penerima</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengiriman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data pengiriman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $no_resi=$_POST['no_resi'];
    $nama=$_POST['nama'];
    $alamat_penerima=$_POST['alamat_penerima'];
    $nomerhp=$_POST['nomerhp'];
    $tgl_menerima=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
    $kode_pos=$_POST['kode_pos'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="INSERT INTO penerima VALUES ('$no_resi','$nama','$alamat_penerima','$nomerhp','$tgl_menerima','$kode_pos','$ket','')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan penerima Error");
    if ($query){
        echo "<script>window.location.assign('?page=penerima&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
