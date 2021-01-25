<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Jumlah Surat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM jumlahsurat WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                        <td width="200">Entri</td> <td><?= $data['entri'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Surat Masuk</td> <td><?= $data['j_srtmasuk'] ?></td>
                        </tr>
						<tr>
                            <td>Jumlah Surat Keluar</td> <td><?= $data['j_srtkeluar'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=j_surat&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Jumlah Surat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

