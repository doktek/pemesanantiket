<?php 
    require('header.php');
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a class="ajax-link" href="user_list.php">User</a>
        </li>
        <li>Tambah User</li>
    </ul>
</div>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-edit"></i>
                    Form Tambah User
                </h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="user_insert.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        </select>
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