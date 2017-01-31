<?php 
    include ('config.php');
    include ('koneksi.php');
    ob_start();
    session_start();
    if(empty($_SESSION)){
        header ('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include('style.php');
        ?>
    </head>
    <body>
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-inner">
                <button type="button" class="navbar-toggle pull-left animated flip">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="beranda.php">
                    <span>Tiket Pesawat</span>
                </a>
                <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span class="hidden-sm hidden-xs">
                            <?php
                                echo $_SESSION['username'];
                            ?>
                        </span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ch-container">
            <div class="row">
                <div class="col-sm-2 col-lg-2">
                    <div class="sidebar-nav">
                        <div class="nav-canvas">
                            <div class="nav-sm nav nav-stacked"></div>
                                <?php 
                                    if($_SESSION['level'] == 'admin'){
                                ?>
                            <ul class="nav nav-pills nav-stacked main-menu">
                            <li class="nav-header">Main Menu</li>
                            <li>
                                <a class="ajax-link" href="user_list.php">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>User</span>
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link" href="pswt_list.php">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                    <span>Pesawat</span>
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link" href="kls_list.php">
                                    <i class="glyphicon glyphicon-edit"></i>
                                    <span>Kelas Tiket</span>
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link" href="psn_list.php">
                                    <i class="glyphicon glyphicon-book"></i>
                                    <span>Laporan Pemesanan</span>
                                </a>
                            </li>
                        </ul>
        				<?php 
                                }
                        ?>
                        <?php
                            if($_SESSION['level'] == 'user'){
                        ?>
                        <ul class="nav nav-pills nav-stacked main-menu">
                            <li class="nav-header">Main Menu</li>
                            <li>
                                <a class="ajax-link" href="user_edit2.php?id=<?php echo $_SESSION['id_user']?>">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>Profil</span>
                                </a>
                            </li>
                            <li>
                                <a class="ajax-link" href="pswt_list2.php">
                                    <i class="glyphicon glyphicon-th-list"></i>
                                    <span>Pesawat</span>
                                </a>
                            </li>
                        </ul>
                        <?php 
                            }
                        ?>
                        </div>
                    </div>
                </div>
            <div id="content" class="col-lg-10 col-sm-10">