<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM surat WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Surat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="no_surat" class="col-sm-3 control-label">No.Surat</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_surat" value="<?=$data['no_surat']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Surat" required>
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal Masuk/Keluar</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk/Keluar" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hal" class="col-sm-3 control-label">Hal</label>
                            <div class="col-sm-9">
                                <input type="text" name="hal" value="<?=$data['hal']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Prihal" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lampiran" class="col-sm-3 control-label">Lampiran</label>
                            <div class="col-sm-9">
                                <input type="text" name="lampiran" value="<?=$data['lampiran']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Lampiran" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerima" class="col-sm-3 control-label">Kepada</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepada" value="<?=$data['kepada']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Kepada" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['ket']?>" class="form-control" id="inputPassword3" placeholder="Inputkan Keterangan" required>
                            </div>
                        </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=smsk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_surat =$_POST['no_surat'];
    $tanggal  =$_POST['tanggal'];
    $hal      =$_POST['hal'];
    $lampiran =$_POST['lampiran'];
    $kepada   =$_POST['kepada'];
    $ket      =$_POST['ket'];
    //buat sql
    $sql="UPDATE surat SET no_surat ='$no_surat', tanggal='$tanggal',hal='$hal',lampiran='$lampiran',kepada='$kepada',ket='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Surat Error");
    if ($query){
        echo "<script>window.location.assign('?page=smsk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



