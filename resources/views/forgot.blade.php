<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    <title>Restablecer la contraseña de CIAIG - CIAIG</title>
    <link rel="stylesheet" href="{{asset('css/auth/app.css')}}">
</head>

<body>
    <div class="container" id="forgot">
        <div class="row">
            <div class="col-sm-3 col-1">&nbsp;</div>
            <div class="col-sm-6 col-10" style="margin-top: 50px;">
                <div class="text-center" style="margin-bottom: 10px;">
                    <a href="./"><img src="{{asset('images/logo.png')}}" alt="Logo" width="50"></a>
                </div>
                <div class="form-box">
                    <div class="form-box-intern text-center">
                        <img src="{{asset('images/lock.png')}}" alt="forgot-password" width="100">
                        <p class="h3">Restablecer su Contraseña</p>
                        <hr>
                        <div class="alert alert-success" role="alert" v-show="send">
                            Se ha enviado un correo electrónico de restablecimiento de contraseña. La entrega puede
                            demorar hasta 60 minutos. Léalo para más instrucciones.</div>
                        <form v-show="!send">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" style="padding: 15px;"
                                            placeholder="Ingrese su dirección de correo electrónico">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary forgot-button"
                                        data-loading-text="Espere..." v-on:click.prevent="resetPass">Restablecer
                                        Contraseña</button>
                                </div>
                            </div>
                        </form>
                        <div class="forgot-password">
                            <a href="./">Volver al panel de inicio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-1">&nbsp;</div>
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
