<?php
session_start();
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestão de Talentos</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- link CDN bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <!-- link materialize -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!-- CSS LOGIN -->
    <link rel="stylesheet" href="css/register.css">
    <!-- link css puro -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body>

    <!-- loading -->
    <div id="loading-spiner">
        <div class="spin-wrap">
            <div class="spin"></div>
        </div>
    </div>
    <!-- fim de loading -->

    <!-- Esse style na TAG precisa ser modificado posteriomente no arquivo bootstrap -->
    <div class="container-fluid" style="padding: 0; margin: 0;">
        <div class="row h-100 no-gutters" style="padding: 0; margin: 0;">
            <div class="col-sm-12 col-md-12 col-lg-7" id="banner-login">
                <img src="img/banner-login.jpg" class="img-fluid" id="banner-login" alt="Responsive image">
            </div>

            <div class="col" align="center">
                <img src="img/team.png" alt="..." class="rounded-circle photo-login">
                <h3 id="titulo">CADASTRE-SE</h3>
                <h6 id="subtitulo">RÁPIDO E FÁCIL!</h6>
                <br>
                <div class="row">
                    <form class="col s12 m12 l12" method="POST" action="backEnd/registerProcess.php" align="center">
                        <div class="container center">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="text" name="nomeCompleto" required id="input" placeholder="Nome Completo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="text" name="email" required id="input" placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="password" name="senha" required id="input" placeholder="Senha">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="password" name="senhaVerificacao" required id="input" placeholder="Confirme Senha">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoUser" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio1">Usuário</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipoUser" id="inlineRadio2" value="2">
                                <label class="form-check-label" for="inlineRadio2">Administrador(a)</label>
                            </div>
                        </div>

                        <?php
                        if (isset($_SESSION['msgSenha'])) {
                            echo $_SESSION['msgSenha'];
                            unset($_SESSION['msgSenha']);
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['msgTipoUser'])) {
                            echo $_SESSION['msgTipoUser'];
                            unset($_SESSION['msgTipoUser']);
                        }
                        ?>



                        <div class="container center">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <input type="submit" class="btn" id="input-button" value="Cadastrar" name="cadastrar">
                                </div>

                                <div class="col s12 m6 l6">
                                    <input type="button" onclick="location.href='index.php'" class="btn" id="input-button" value="Cancelar" name="cancelar">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>


            </div>
        </div>
    </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script type=" text/javascript " src="https://code.jquery.com/jquery-3.2.1.min.js "></script>
    <script type="text/javascript " src="js/materialize.min.js "></script>
    <script type="text/javascript " src="js/main.js "></script>
    <!-- script bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>