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
    <link rel="stylesheet" href="css/login.css">
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
                <h3 id="titulo">USER LOGIN</h3>
                <h6 id="subtitulo">BEM-VINDO!</h6>
                <br>
                <div class="row">
                    <form class="col s12 m12 l12" align="center" method="POST" action="valida.php">

                        <div class="container center">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="text" required id="input" name="email" placeholder="Usuario / Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="password" required id="input" name="senha" placeholder="Senha">
                                </div>
                            </div>
                        </div>

                        <p class="eqc"><a href="">Esqueci a senha</a></p>

                        <p class="text-center text-danger">
                            <?php
                                if(isset($_SESSION['loginErro'])){
                                    echo $_SESSION['loginErro'];
                                    unset($_SESSION['loginErro']);
                                }
                            ?>
                        </p>

                        <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>

                        <div class="container center">
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <button type="submit" class="btn" id="input-button">LOGIN</button>
                                </div>

                                <div class="col s12 m6 l6">
                                    <input type="button" onclick="location.href='register.php'" class="btn" id="input-button" value="CADASTRE-SE">
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <!-- MENSAGEM DE ERRO -->
                           

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