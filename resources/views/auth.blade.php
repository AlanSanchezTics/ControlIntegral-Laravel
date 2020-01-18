<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>Control Integral - Inicio</title>
    <link rel="stylesheet" href="{{asset('css/auth/app.css')}}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="navbar-brand">
                        CIAIG®
                    </span>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="material-icons prefix">menu</i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li :class="{'active': userType=='Docentes'}"><a href="#"
                                v-on:click.prevent="userType='Docentes'">Docentes</a></li>
                        <li :class="{'active': userType=='Directivos'}"><a href="#"
                                v-on:click.prevent="userType='Directivos'">Dirección</a></li>
                        <li :class="{'active': userType=='Control Escolar'}"><a href="#"
                                v-on:click.prevent="userType='Control Escolar'">Control Escolar</a></li>
                        <li :class="{'active': userType=='Administrativos'}"><a href="#"
                                v-on:click.prevent="userType='Administrativos'">Administrativos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="{{asset('images/logo.png')}}" alt="Logo" width="100">
                            <p class="h3 name-logo">Colegio Indira Gandhi</p>
                            <p class="slogan">"Un buen principio para un futuro brillante"</p>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="h4">Nuestra misión</p>
                            <p>Brindamos una educación de calidad, desarrollando las competencias en los estudiantes que
                                integren su aprendizaje en la vida cotidiana fortalecido con los valores, el dominio del
                                idioma
                                ingles y el manejo de la tecnologia.</p>
                        </div>
                        <div class="col-sm-12 text-center">
                            <p class="h4">Nuestra visión</p>
                            <p>Ser una institución educativa bilingüe que ofrezca servicios de excelencia que permita a
                                sus
                                alumnos desarrollarse en forma autónoma, seguros de si mismos, creativos y
                                participativos,
                                capaces de interactuar exitosamente en el medio en que se desenvuelven.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1">
                    &nbsp;
                </div>
                <div class="col-sm-5">
                    <div class="login-box">
                        <div class="login-check-progress" v-show="IsLoading">
                            <div class="preloader-wrapper active">
                                <div class="spinner-layer spinner-blue-only">
                                    <div class="circle-clipper left">
                                        <div class="circle"></div>
                                    </div>
                                    <div class="gap-patch">
                                        <div class="circle"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="login-box-intern text-center">
                            <p class="namespace">Control Integral del Alumno</p>
                            <p class="user-type">Plataforma @{{userType}}</p>
                            <form method="POST">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="alert alert-danger" role="alert" v-show="hasError">El correo
                                            electrónico o la contraseña
                                            que ingresó no son
                                            correctos,
                                            intente nuevamente.</div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group" :class="{'has-error' : hasError}">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="material-icons prefix"
                                                        style="font-size: 2rem !important;">account_circle</i>
                                                </div>
                                                <input type="text" class="form-control"
                                                    placeholder="Teléfono o correo electrónico">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group" :class="{'has-error' : hasError}">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="material-icons prefix"
                                                        style="font-size: 2rem !important;">lock</i>
                                                </div>
                                                <input type="password" class="form-control" placeholder="Contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-primary" v-on:click.prevent="logIn">Iniciar
                                            sesión</button>
                                    </div>
                                    <div class="col-sm-12 forgot-password">
                                        <a href="{{asset('forgot')}}">¿Olvidaste tu contraseña?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h5>&nbsp;</h5>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container text-center">
                Copyright © CIAIG 2020 Todos los derechos reservados
            </div>
        </div>
    </footer>
    <script src="{{asset('js/auth/app.js')}}"></script>
</body>

</html>
