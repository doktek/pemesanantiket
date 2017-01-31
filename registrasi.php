<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('header.php');
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
        <form action="registrasi_proses.php" method="post">
            <div class="row">
                <div class="col-md-12 center login-header">
                    <h2>Registrasi User</h2>
                </div>
            </div>
            <div class="row">
                <div class="well col-md-5 center login-box">
                    <form class="form-horizontal" action="registrasi_proses.php" method="POST">
                        <fieldset>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"></span>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                                <input type="hidden" name="level" class="form-control" value="user">
                            </div>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"></span>
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                            <p class="center col-md-5">
                                <button type="submit" class="btn btn-primary" value="Register">Registrasi</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </form>