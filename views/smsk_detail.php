<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Surat</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM surat WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nomor Surat</td> <td><?= $data['no_surat'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Masuk/Keluar</td> <td><?= $data['tanggal'] ?></td>
                        </tr>
						<tr>
                            <td>Hal</td> <td><?= $data['hal'] ?></td>
                        </tr>
						<tr>
                            <td>Lampiran</td> <td><?= $data['lampiran'] ?></td>
                        </tr>
						<tr>
                            <td>Kepada</td> <td><?= $data['kepada'] ?></td>
                        </tr>
						<tr>
                            <td>Keterangan</td> <td><?= $data['ket'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=smsk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Surat </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

