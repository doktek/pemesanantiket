<?php 
    require('header.php'); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-user"></i>
                    Data Pesanan
                </h2>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pemesan</th>
                            <th>Nomor Identitas</th>
                            <th>Nomor Telepon</th>
                            <th>Alamat</th>
                            <th>Keberangkatan</th>
                            <th>Tujuan</th>
                            <th>Tanggal</th>
                            <th>Kelas</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query  =  mysql_query("SELECT * from psn JOIN pswt JOIN kls ON psn.id_pesawat = pswt.id_pesawat AND pswt.id_kelas = kls.id_kelas");
                            $no = 1;
                            while($row = mysql_fetch_array($query)){
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
                            <td>   
                                <?php 
                                    echo $row['dari'];
                                ?>
                            </td>
                            <td>   
                                <?php 
                                    echo $row['ke'];
                                ?>
                            </td>
                            <td>   
                                <?php 
                                    echo $row['tanggal'];
                                ?>
                            </td>
                            <td>   
                                <?php 
                                    echo $row['kelas'];
                                ?>
                            </td>
                            <td class="center">
                                <a class="btn btn-danger" href="psn_delete.php?id=<?php echo $row['id_pesan']?>">
                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                    Delete
                                </a>
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