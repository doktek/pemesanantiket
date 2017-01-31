<?php
    require('header.php');
    $id    = $_GET['id'];
    $query = mysql_query("SELECT * FROM pswt WHERE id_pesawat = $id");
    $row   = mysql_fetch_array($query);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">         
            <div class="box-content">
                <form role="form" method="post" action="pswt_update.php">
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" name="id_pesawat" value="<?php echo $row['id_pesawat'];?>" readonly>
                    </div>
                     <div class="form-group">
                        <label>Keberangkatan</label>
                        <input type="text" class="form-control" name="dari" value="<?php echo $row['dari'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="ke" value="<?php echo $row['ke'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="id_kelas" value=0 selected>
                        <?php
                            $query = mysql_query("SELECT * FROM kls ORDER BY kelas");
                            WHILE($row = mysql_fetch_array($query)){ 
                        echo "<option value=$row[id_kelas]>$row[kelas]</option>";
                            } 
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Berangkat</label>
                        <input type="date" class="form-control" name="tanggal" value="<?php echo $row['tanggal'];?>" required>
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