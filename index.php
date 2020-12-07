
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agenda escolar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="app/recursos/images/favicon.png">
    <link href="app/recursos/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">
    <link href="app/recursos/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.php"> <h4>Agenda escolar</h4></a>
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="config/sesion/login.php">
                                    <div class="form-group">
                                        <input type="text" name="user" class="form-control" placeholder="Email o usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Ingresar</button>
                                </form>
                                <p class="mt-5 login-form__footer">¿No tienes una cuenta? <a href="page-register.html" class="text-primary">Registrate </a>ahora</p>
                                
                                <button class="btn btn-danger btn sweet-auto">Sweet Auto Close</button>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="app/recursos/plugins/common/common.min.js"></script>
    <script src="app/recursos/js/custom.min.js"></script>
    <script src="app/recursos/js/settings.js"></script>
    <script src="app/recursos/js/gleek.js"></script>
    <script src="app/recursos/js/styleSwitcher.js"></script>

    
    <script src="app/recursos/plugins/sweetalert/js/sweetalert.min.js"></script>
    <script src="app/recursos/plugins/sweetalert/js/sweetalert.init.js"></script>
    
</body>
</html>





