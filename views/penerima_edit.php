<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM penerima WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data penerima Pengiriman Barang</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor Resi</label>
                             <div class="col-sm-9">
								<input type="text" name="no_resi" value="<?=$data['no_resi']?>"class="form-control" id="inputEmail3" placeholder="Nomor Resi" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Penerima</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama penerima">
                            </div>
                        </div>
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
                        <div class="form-group">
                            <label for="alamat_penerima" class="col-sm-3 control-label">Alamat</label>
                             <div class="col-sm-9">
                                <input type="text" name="alamat_penerima" value="<?=$data['alamat_penerima']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomerhp" class="col-sm-3 control-label">Nomor Hp</label>
                             <div class="col-sm-9">
                                <input type="text" name="nomerhp" value="<?=$data['nomerhp']?>"class="form-control" id="inputEmail3" placeholder="Nomor hp" >
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal menerima</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2040;$i>1980;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tanggal" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>

                        </div>
                        <div class="form-group">
                            <label for="kode_pos" class="col-sm-3 control-label">Kode Pos</label>
                             <div class="col-sm-9">
                                <input type="text" name="kode_pos" value="<?=$data['kode_pos']?>"class="form-control" id="inputEmail3" placeholder="kode pos" >
                            </div>
                        </div>
                        <!--end tanggal--> 
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        
						
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penerima&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pinjaman
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
    $sql="UPDATE penerima SET no_resi='$no_resi', nama='$nama',alamat_penerima='$alamat_penerima',nomerhp='$nomerhp',tgl_menerima='$tgl_menerima',kode_pos='$kode_pos',
	keterangan='$ket' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=penerima&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



