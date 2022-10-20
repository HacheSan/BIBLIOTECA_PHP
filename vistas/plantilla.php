<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BibliotecaHCS</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css" />
    <!-- SCRIPTS    -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Boostrap v 4.6 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- adminlte 3.0.1 -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>



<body class="hold-transition layout-top-nav">

    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
            <a href="/" class="navbar-brand">
                <!-- <img src="vistas/dist/images/logo.png" alt="logo posgrado" class="brand-image img-circle elevation-3" width="50" style="opacity: 0.8" /> -->
                <span class="brand-text font-weight-light">BIBLIOTECA HCS</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Autor</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Libros</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Stock</a>
                    </li>
                    <li class="nav-item">
                        <a href="perfil.html" class="nav-link">Perfil</a>
                    </li>


                    <li class="nav-item">
                        <!-- <a href="vistas/modulos/admin.php" class="nav-link">Usuarios</a> -->
                    </li>
                </ul>

            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item dropdown"></li>

                <a href="login.html" class="btn btn-outline-primary btn-sm">
                    Iniciar sesión
                </a>
                <a href="registro.html" class="btn btn-primary btn-sm ml-1">Regístrate</a>


                <div class="image">
                    <img src="vistas/dist/images/user.png" class="img-circle" width="30" alt="Imagen de usuario">
                </div>
                Hermogenes Chino
                <a href="salir" class="btn btn-outline-danger ml-1 btn-sm">
                    salir
                </a>


            </ul>
        </div>
    </nav>



    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Inicio <small></small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item">Preguntas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="active tab-pane" id="activity ">

                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="vistas/dist/images/user.png" alt="Imagen de usuario">
                                                <span class="username">
                                                    <a href="respuesta.html">titulo</a>
                                                    <p>Nombre Usuario</p>
                                                </span>
                                                <span class="description">Compartido públicamente - 15/09/2022</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto dolorum totam molestias necessitatibus cupiditate tempora, labore mollitia id deserunt inventore placeat saepe. Vel ipsum consequuntur esse ratione accusantium molestiae.
                                            </p>

                                        </div>

                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="vistas/dist/images/user.png" alt="Imagen de usuario">
                                                <span class="username">
                                                    <a href="#">titulo</a>
                                                    <p>Nombre Usuario</p>
                                                </span>
                                                <span class="description">Compartido públicamente - 15/09/2022</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto dolorum totam molestias necessitatibus cupiditate tempora, labore mollitia id deserunt inventore placeat saepe. Vel ipsum consequuntur esse ratione accusantium molestiae.
                                            </p>

                                        </div>

                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="vistas/dist/images/user.png" alt="Imagen de usuario">
                                                <span class="username">
                                                    <a href="#">titulo</a>
                                                    <p>Nombre Usuario</p>
                                                </span>
                                                <span class="description">Compartido públicamente - 15/09/2022</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto dolorum totam molestias necessitatibus cupiditate tempora, labore mollitia id deserunt inventore placeat saepe. Vel ipsum consequuntur esse ratione accusantium molestiae.
                                            </p>

                                        </div>




                                    </div>

                                </div>
                                <!-- /.tab-content -->
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-4">

                        <div class="card">
                            <div class="card-body">

                                <a class="btn btn-primary btn-block" href="pregunta.html">
                                    Preguntar
                                </a>


                                <a class="btn btn-primary btn-block" href="login.html">
                                    Regístrese o inicie sesión para preguntar
                                </a>

                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
            </div>
        </div>
    </div>


    <footer class="main-footer">
        <strong>Copyright &copy; 2022
            <a href="#">biblioteca HCS</a>.</strong>
        Todos los derechos reservados.
    </footer>


</body>

</html>