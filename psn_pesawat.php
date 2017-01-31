<?php
    require('header.php');
    $id = $_GET['id'];
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                <i class="glyphicon glyphicon-edit"></i>
                Form Pemesanan
                </h2>
            </div>
            <div class="box-content">
                <form role="form" method="post" action="psn_proses.php">
                    <input type="hidden" class="form-control" name="id_pesan" required>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Identitas</label>
                        <input type="text" class="form-control" name="identitas" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" class="form-control" name="telepon" required>
                    </div>
                     <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_pesawat" value = "<?php echo $id ;?>" required>
                    </div>
                    <input label="Cetak Pemesanan" type="submit" class="btn btn-default">
                 </form>
            </div>
        </div>
    </div>
    </div>
<?php 
    require('footer.php');
?>