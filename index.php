<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="SysWeb">
    <meta name="autor" content="Daniel Bordón">

    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugin/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login-box">
        <div style="color:#3c8dbc" class="login-logo">
            <img style="margin-top: -15px" src="assets/img/favicon.ico" alt="SysWeb" height="50">
            <b>SysWeb</b>
        </div>

        <?php
        if (empty($_GET['alert'])) {
            echo "";
        } elseif ($_GET['alert'] == 1) {
            echo "<div class='alert alert-danger alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-times-circle'></i> Error al iniciar sesión</h4>
        Usuario o contraseña incorrecta, vuelva a ingresar sus datos.
    </div>";
        } elseif ($_GET['alert'] == 2) {
            echo "<div class='alert alert-success alert-dismissable'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-times-circle'></i> Salida Exitosa!</h4>
        Has cerrado tu sesión correctamente.
    </div>";
        }
        ?>
        <div class="login-box-body">
            <p class="login-box-msg"><i class="fa fa-user icon-title"></i> Por favor inicie sesión</p>
            <br>
            <form action="login-check.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Usuario" autocomplete="off" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" autocomplete="off" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>