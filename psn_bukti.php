<?php 
    require('header.php');
    $id = $_GET['id_pesan'];
    $query = mysql_query("SELECT * FROM psn JOIN pswt JOIN kls ON psn.id_pesawat = pswt.id_pesawat AND pswt.id_kelas = kls.id_kelas WHERE psn.nama = '$id'");
    $row   = mysql_fetch_array($query); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-user"></i>
                    Data Pesanan
                </h2>
            </div>
            <div class="box-content">
                <form role="form" method="post" action="akhir.php?id=<?php echo $row['id_pesan']?>">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="nama" value="<?php echo $id;?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Identitas</label>
                        <input type="text" class="form-control" name="identitas" value="<?php echo $row['identitas'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" value="<?php echo $row['telepon'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Keberangkatan</label>
                        <input type="text" class="form-control" name="dari" value="<?php echo $row['dari'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="ke" value="<?php echo $row['ke'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="<?php echo $row['kelas'];?>" readonly>
                    </div>
                     <div class="form-group">
                        <input type="hidden" class="form-control" name="id_pesawat" value="<?php echo $row['id'];?>" required>
                    </div>
                    <input type="hidden" name ="id" value = "<?php echo $row['id'] ;?>" readonly>
                    </td>
                            <td class="center">
                                <a class="btn btn-info" href="akhir.php?id=<?php echo $row['id_pesan']?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Book
                                </a>
                            </td>

                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require('footer.php');
?>