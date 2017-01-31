<?php 
    require('header.php'); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-user"></i>
                    Data User
                </h2>
            </div>
            <div class="box-content"></div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no    = 1;
                            $query = mysql_query("SELECT * FROM user");
                            WHILE($row = mysql_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $row['username'];?></td>
                            <td><?php echo $row['password'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['level'];?></td>
                            <td class="center">
                                <a class="btn btn-info" href="user_edit1.php?id=<?php echo $row['id_user']?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="user_delete.php?id=<?php echo $row['id_user']?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php 
                            $no++;
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php 
    require('footer.php');
?>