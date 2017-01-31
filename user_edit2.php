<?php
    require('header.php');
    $id    = $_GET['id'];
    $query = mysql_query("SELECT * FROM user WHERE id_user = $id");
    $row   = mysql_fetch_array($query);
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-edit"></i>
                    Form
                </h2>
            </div>
            <div class="box-content">
                <form role="form" method="post" action="user_update2.php">
                    <div class="form-group">
                        <label>Id</label>
                        <input type="text" class="form-control" name="id_user" value="<?php echo $row['id_user'];?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $row['password'];?>" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
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