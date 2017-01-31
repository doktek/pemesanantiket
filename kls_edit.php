<?php
    require('header.php');
    $id     = $_GET['id'];
    $query  = mysql_query("SELECT * FROM kls WHERE id_kelas = $id");
    $row    = mysql_fetch_array($query);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">           
            <div class="box-content">
                <form role="form" method="post" action="kls_update.php">
                     <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" name="id_kelas" value="<?php echo $row['id_kelas'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Kelas Tiket</label>
                        <input type="text" class="form-control" name="kelas" value="<?php echo $row['kelas'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Tiket</label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $row['harga'];?>" required>
                    </div>
                    <input type="submit" class="btn btn-default">
                 </form>
            </div>
        </div>
    </div>
</div>
<?php
    require('footer.php');
?>