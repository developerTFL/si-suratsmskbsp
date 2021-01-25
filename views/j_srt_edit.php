<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM jumlahsurat WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Jumlah Surat</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="entri" class="col-sm-3 control-label">Entri</label>
                            <div class="col-sm-3">
                                <input type="text" name="entri" value="<?=$data['entri']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Entri" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_masuk" class="col-sm-3 control-label">Tanggal</label>
                            <div class="col-sm-3">
                                <input type="date" name="tanggal" value="<?=$data['tanggal']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Masuk/Keluar" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="peminjam" class="col-sm-3 control-label">Jumlah Surat Masuk</label>
                            <div class="col-sm-9">
                                <input type="text" name="j_srtmasuk" value="<?=$data['j_srtmasuk']?>" class="form-control" id="inputEmail3" placeholder="Input Jumlah Surat Masuk">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tglPinjam" class="col-sm-3 control-label">Jumlah Surat Keluar</label>
                            <div class="col-sm-9">
                                <input type="text" name="j_srtkeluar" value="<?=$data['j_srtkeluar']?>" class="form-control" id="inputEmail3" placeholder="Input Jumlah Surat Keluar">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jumlah Surat</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=j_surat&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Jumlah Surat
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $entri =$_POST['entri'];
    $tanggal =$_POST['tanggal'];
    $j_srtmasuk=$_POST['j_srtmasuk'];
    $j_srtkeluar=$_POST['j_srtkeluar'];
    //buat sql
    $sql="UPDATE jumlahsurat SET entri ='$entri', tanggal='$tanggal', j_srtmasuk='$j_srtmasuk', j_srtkeluar='$j_srtkeluar' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Error");
    if ($query){
        echo "<script>window.location.assign('?page=j_surat&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



