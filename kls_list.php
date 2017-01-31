<?php
    require('header.php');
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-user"></i>
                    Data Tabel
                </h2>
            </div>
            <div class="box-content">
            <p>
                <a href="kls_tambah.php" class="btn btn-primary">Tambah Tiket</a>
            </p>
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas Tiket</th>
                            <th>Harga Tiket</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no     = 1;
                            $query  = mysql_query("SELECT * FROM kls");
                            WHILE($row = mysql_fetch_array($query)){
                        ?>
                        <tr>
                            <td>
                                <?php
                                    echo $no;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['kelas'];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row['harga'];
                                ?>
                            </td>
                            <?php 
                                if($_SESSION['level'] == 'admin'){
                            ?>
                            <td class="center">
                                <a class="btn btn-info" href="kls_edit.php?id=<?php echo $row['id_kelas']?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="kls_delete.php?id=<?php echo $row['id_kelas']?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
                            </td>
                            <?php
                                }
                            ?>
                        </tr>         
                        <?php 
                            $no++;}
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