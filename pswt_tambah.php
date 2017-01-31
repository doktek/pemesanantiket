<?php 
    require('header.php'); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">            
            <div class="box-content">
                <form role="form" method="post" action="pswt_insert.php">
                    <div class="form-group">
                        <label>Keberangkatan</label>
                        <input type="text" class="form-control" name="dari" required>
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="ke" required>
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
                        <label>Tanggal Keberangkatan</label>
                        <input type="date" class="form-control" name="tanggal" required>
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