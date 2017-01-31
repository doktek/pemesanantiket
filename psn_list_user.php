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
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor Identitas</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $id_user = $_SESSION['id_pesan'];
                            $no      = 1;
                            $query   = mysql_query("SELECT * FROM psn where id_pesan = $id_pesan");
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
                                    echo $row['nama'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['identitas'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['telepon'];
                                ?>
                            </td>
                            <td>
                                <?php 
                                    echo $row['alamat'];
                                ?>
                            </td>
                            <td class="center">
                                <a href="#" class="btn btn-primary">Pembayaran</a>
                                <a href="#" class="btn btn-info">Pembatalan</a>
                            </td>
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