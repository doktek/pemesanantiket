<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('header.php');
        require_once('koneksi.php');
    }
?>
<DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include('style.php');
        ?>
    </head>
    <body>
        <form action="login_proses.php" method="post">
            <div class="row">
                <div class="col-md-12 center login-header">
                    <h2>Welcome to SIGAonline</h2>
                    <p> you can buy cheap ticket on my store please registrasi and enjoy the price </p>
                </div>
            </div>
            <div class="row">
                <div class="well col-md-5 center login-box">
                    <div class="alert alert-info">
                        Please login with your Username and Password.
                    </div>
                    <form class="form-horizontal" action="login_proses.php" method="post">
                        <fieldset>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"></span>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="clearfix"></div><br>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                                <p class="left col-md-6">
                                    <button type="submit" class="btn btn-primary" value="Login">Login</button>                
                                </p>
                                <p class="right col-md-6">
                                    <a href="registrasi.php" class="btn btn-warning">Registrasi</a>
                                </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </form>