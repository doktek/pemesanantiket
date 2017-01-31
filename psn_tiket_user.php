<?php 
    require('header.php');
    $id     = $_GET['id'];
    $query  = mysql_query("SELECT * FROM tbl_tiket WHERE id_tiket = $id");
    $row    = mysql_fetch_array($query);
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
                <form role="form" method="POST" action="pemesanan_insert.php">
                    <div class="form-group">
                        <label> Nama Tiket : 
                            <?php 
                                echo $row['nama_tiket'];
                            ?>
                        </label><br/>
                        <label> Jenis Tiket : 
                            <?php 
                                echo $row['jenis_tiket'];
                            ?>
                        </label><br/>
                        <label> Nama Tempat : 
                            <?php 
                                echo $row['nama_tempat'];
                            ?>
                        </label><br/>
                        <label> Harga Tiket : 
                            <?php 
                                echo $row['harga_tiket'];
                            ?>
                        </label><br/>
                        <input type="hidden" class="form-control" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                        <input type="hidden" class="form-control" name="nama_pemesan" value="<?php echo $_SESSION['username']; ?>">
                        <input type="hidden" class="form-control" name="nama_tiket" value="<?php echo $row['nama_tiket'];?>">
                        <input type="hidden" class="form-control" name="harga_tiket" value="<?php echo $row['harga_tiket'];?>">
                        <input type="hidden" class="form-control" name="no_tagihan" value="<?php echo(mt_rand(1,10000000));?>">
                    </div> 
                    <div class="form-group">
                        <label> Pilihan Tempat Duduk </label><br/>
                        <select class="form-control" name="kursi" value="Pilih Tempat Duduk" data-rel="chosen">
                        <?php
                            $kursi  = mysql_query("SELECT * FROM tbl_kursi");
                            WHILE($row = mysql_fetch_array($kursi)){ 
                        ?>
                        <option value="<?php echo $row['kursi'];?>"><?php echo $row['kursi'];?></option>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Pesan Tiket">
                 </form>
            </div>
        </div>
    </div>
</div>
<?php 
    require('footer.php');
?>