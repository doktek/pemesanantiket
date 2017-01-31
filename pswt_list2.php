<?php 
    require('header.php'); 
?>
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2>
                    <i class="glyphicon glyphicon-user"></i>
                    Data Pesawat
                </h2>
            </div>
            <div class="box-content">
            </div> 
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Keberangkatan</th>
                            <th>Tujuan</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = mysql_query("SELECT pswt.id_pesawat, pswt.dari, pswt.ke, pswt.tanggal, kls.kelas from pswt INNER JOIN kls ON pswt.id_kelas = kls.id_kelas");
                            $no    = 1;
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
                                    echo $row['kelas'];
                                ?>
                            </td>
                            <td>   
                                <?php 
                                    echo $row['tanggal'];
                                ?>
                            </td>
                            <td class="center">
                                <a class="btn btn-info" href="psn_pesawat.php?id=<?php echo $row['id_pesawat']?>">
                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                    Pesan
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