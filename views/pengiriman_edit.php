<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengiriman WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pengiriman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="tujuan" class="col-sm-3 control-label">Tujuan</label>
                            <div class="col-sm-2 col-xs-9">
                                <input type="text" name="tujuan" value="<?=$data['tujuan']?>"class="form-control" id="inputEmail3" placeholder="tujuan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis" class="col-sm-3 control-label">Jenis Pengiriman</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="jenis" class="form-control">
                                    <option value="pengiriman Express">Express</option>
                                    <option value="pengiriman Reguler">Reguler</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berat" class="col-sm-3 control-label">Berat</label>
                            <div class="col-sm-9">
                                <input type="text" name="berat" value="<?=$data['berat']?>"class="form-control" id="inputEmail3" placeholder="Nomor Tingkat/Laci">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="namabrg" class="col-sm-3 control-label">Nama Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="namabrg" value="<?=$data['namabrg']?>"class="form-control" id="inputEmail3" placeholder="Nomor Boks">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pengirim</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="no_resi" class="col-sm-3 control-label">Nomor Resi</label>
                            <div class="col-sm-9">
                                <input type="text" name="no_resi" value="<?=$data['no_resi']?>"class="form-control" id="inputEmail3" placeholder="Nomor Perkara" >
                            </div>
                        </div>
                        <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" class="form-control">
                                    <?php for($i=2017;$i>1980;$i--) {?>
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
                        <!--end tanggal lahir-->           

                
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Penerima Barang</label>
                            <div class="col-sm-9">
                                <input type="text" name="penerima" value="<?=$data['penerima']?>" class="form-control" id="inputPassword3" placeholder="Penerima Barang">
                            </div>
                        </div>
                        <!--Status-->
                        
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
                                <select name="status" class="form-control">
                                    <option value="Di Kirim">Di Kirim</option>
                                    <option value="Di Proses">Di Proses</option>
                                    <option value="Di Cancel">Di Cancel</option>
                                </select>
                            </div>
                        </div>
                        <!--Akhir Status-->
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pengiriman</button>
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
    $tujuan=$_POST['tujuan'];
    $jenis=$_POST['jenis'];
    $berat=$_POST['berat'];
    $namabrg=$_POST['namabrg'];
    $nama=$_POST['nama'];
    $no_resi=$_POST['no_resi'];
    $tglmasuk=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $pengantar=$_POST['pemberi'];
    $penerima=$_POST['penerima'];
    $status=$_POST['status'];
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE pengiriman SET tujuan='$tujuan',jenis='$jenis',berat='$berat',namabrg='$namabrg',nama='$nama',
    no_resi='$no_resi',tgl_masuk='$tglmasuk',penerima='$penerima',status='$status',keterangan='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengiriman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



