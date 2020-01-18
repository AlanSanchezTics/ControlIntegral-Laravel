<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>Control Integral - Inicio</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <style>
        #forms {
            display: block;
            width: 100%;
        }

        .form-registrer {
            background-color: #e3e3e3;
            position: fixed;
            left: 0;
            background-color: #e3e3e3;
            width: 100vw;
            height: 100vh;
            top: 0;
            z-index: 9999;
            transition: all .3S;
            margin-top: 100vh;
        }

        .form-registrer.active {
            margin-top: 0vh;
        }

        #dismiss-form {
            width: 24px;
            height: 24px;
            position: absolute;
            font-size: 24px;
            /* top right corner of the sidebar */
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="material-icons prefix text-white" title="cerrar menu">close</i>
            </div>
            <div class="sidebar-header d-flex" style="background-image: url({{asset('images/bg-sidebar.jpg')}});">
                <img src="{{asset('images/avatar-female.png')}}" alt="avatar" class="avatar mb-auto mt-auto">
                <div class="user-info">
                    <p class="h5 name">Alexis Romero</p>
                    <div class="btn-group d-flex">
                        <p class="role">Administrativo</p>
                        <i class="material-icons ml-auto" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true" style="cursor: pointer">keyboard_arrow_down</i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="material-icons"
                                    style="float: left; margin-right: 7px;">person</i>Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="material-icons"
                                    style="float: left; margin-right: 7px;">input</i>Salir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="list-menu">
                <ul class="list-unstyled components">
                    <p>Menu de control</p>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="fa fa-users mr-3" aria-hidden="true"></i>Colaboradores
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Control Escolar</a>
                            </li>
                            <li>
                                <a href="#">Directivos</a>
                            </li>
                            <li>
                                <a href="#">Docentes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Alumnos</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Escolar</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Avisos</a>
                    </li>
                    <li>
                        <a href="#">Financiero</a>
                    </li>
                    <li>
                        <a href="#">Reportes</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Dark Overlay element -->
        <div class="overlay"></div>
    </div>
    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg" style="background-color: #012c64;">
            <i class="material-icons text-white py-2 px-2" id="sidebarCollapse">menu</i>
            <span class="navbar-brand">Control Integral del Alumno </span>
            <img src="{{asset('images/logo.png')}}" alt="Logo" class="" width="32">
        </nav>
        <div class="container-fluid">
            <button class="btn btn-primary ml-auto mr-auto" id="show-form">Mostrar formulario</button>
        </div>
    </div>
    <div id="forms">
        <div class="form-registrer">
            <div id="dismiss-form">
                <i class="material-icons prefix text-white" title="cerrar formulario">close</i>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
        $(document).ready(function () {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                // fade in the overlay
                $('.overlay').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            $('#dismiss, .overlay').on('click', function () {
                // hide sidebar
                $('#sidebar').toggleClass('active');
                // hide overlay
                $('.overlay').toggleClass('active');
            });
            $("#show-form").on('click', function () {
                $(".form-registrer").toggleClass('active');
            });
            $("#dismiss-form").on('click', function () {
                $(".form-registrer").toggleClass('active');
            });
        });
    </script>
</body>

</html>
