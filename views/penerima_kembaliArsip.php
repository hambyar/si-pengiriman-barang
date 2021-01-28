<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penerima WHERE no_resi ='$nope'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tanggal Kembali Pinjaman pengiriman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor resi</label>
                            <div class="col-sm-9">
								<input type="text" name="no_resi" value="<?=$data['no_resi']?>" class="form-control" id="inputEmail3" placeholder="Nomor resi" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Nama Peminjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="peminjam" value="<?=$data['peminjam']?>" class="form-control" id="inputEmail3" placeholder="Nama Peminjam" readonly="true">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Tanggal Pinjam</label>
                            <div class="col-sm-9">
                                <input type="text" name="tglPinjam" value="<?=$data['tgl_pinjam']?>" class="form-control" id="inputEmail3" placeholder="Tanggal Pinjam" readonly="true">
                            </div>
                        </div> 
						
						<div class="form-group">
                            <label for="tglKembali" class="col-sm-3 control-label">Tanggal Kembali</label>
                            <div class="col-sm-3">
                                <input type="date" name="tglKembali" class="form-control" id="inputEmail3" placeholder="Tanggal Kembali">
                            </div>
                        </div> 
						
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Tanggal</button>
								<a href="?page=penerima&actions=tampil" class="btn btn-danger"><span class="fa fa-ban"></span> Batal</a>
                            </div>
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
	$tglPinjam =$_POST['tglPinjam'];
		$potTgl = substr($tglPinjam,8,2);
		$potBln = substr($tglPinjam,5,2);
		$potThn = substr($tglPinjam,0,4);
	$tglKembali=$_POST['tglKembali'];
		$potTglKem = substr($tglKembali,8,2);
		$potBlnKem = substr($tglKembali,5,2);
		$potThnKem = substr($tglKembali,0,4);
	$lamapinjam = (($potThnKem - $potThn)*360)+(($potBlnKem - $potBln)*30)+($potTglKem - $potTgl);
    //buat sql
    $sql="UPDATE penerima SET tgl_kembali='$tglKembali', lama_pinjam='$lamapinjam' WHERE no_resi='$nope'";
	$sqlArsip="UPDATE pengiriman SET status='Ada' WHERE no_resi='$nope'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pengiriman Error");
	$queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan pengiriman Error");
    if ($query){
        echo "<script>window.location.assign('?page=penerima&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>