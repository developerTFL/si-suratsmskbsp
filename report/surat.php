<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Surat</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM surat WHERE no_surat='" . $_GET ['no_surat'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pencatatan Surat Masuk dan Surat Keluar PT. BSP Bunut Rubber Factory </h2>
                        <h4>Jalan H. Ahmad Bakrie Bunut, Kec. Kota Kisaran Barat<br>Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA ARSIP</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>No.Surat</td> <td><?= $data['no_surat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td> <td><?= $data['tanggal'] ?></td>
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
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Unknown Developer<strong></u><br>
                                        NIP.
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>