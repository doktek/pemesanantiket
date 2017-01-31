<?php 
    require('header.php'); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2>
                    <i class="glyphicon glyphicon-edit"></i>
                    Form
                </h2>
            </div>
            <div class="box-content">
                <form role="form" method="post" action="kls_insert.php">
                    <div class="form-group">
                        <label>Kelas Tiket</label>
                        <input type="text" class="form-control" name="kelas" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Tiket</label>
                        <input type="text" class="form-control" name="harga" required>
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