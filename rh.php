<?php
    // session_start();
    include('verifica_login.php');
    // print_r($_SESSION);exit;
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
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <!-- link css puro -->
  <link rel="stylesheet" href="css/main.css">
  <!-- link inicio css -->
  <link rel="stylesheet" href="css/rh.css">

</head>

<body>

  <!-- loading -->
  <div id="loading-spiner">
    <div class="spin-wrap">
      <div class="spin"></div>
    </div>
  </div>
  <!-- fim de loading -->

  <div id="main-container">

    <div class="row nav-lateral">
      <div class="col-sm-12 col-md-3 col-lg-3" style="background-image: linear-gradient(#5304FE, #9665FF);">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <div class="row logo">
            <img src="img/LOGO-TS.png" class="img-fluid" alt="Responsive image">
          </div>
          <div class="row">
            <h5>Gestão de Talentos</h5>
          </div>
          <div class="row">
            <h5>Olá, <?php echo $_SESSION['nome'];?></h5>
          </div>

          <a class="nav-link active flexivel" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
            aria-controls="v-pills-home" aria-selected="true">
            <i class="material-icons icon">home</i>
            Inicio
          </a>

          <a class="nav-link flexivel" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
            aria-controls="v-pills-profile" aria-selected="false">
            <i class="material-icons icon">search</i>
            Consultar Talentos
          </a>

          <a class="nav-link flexivel" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
            aria-controls="v-pills-messages" aria-selected="false">
            <i class="material-icons icon">dvr</i>
            Visualizar Perfil
          </a>

          <a class="nav-link flexivel" href="sair.php" role="tab" aria-controls="v-pills-settings"
            aria-selected="false">
            <i class="material-icons icon">exit_to_app</i>
            Sair
          </a>
          
        </div>
      </div>

      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            INICIO
          
            
          
          
          
          </div>

          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

            <h3>Consultar Talentos</h3>
            <form>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Selecione o Setor</label>
                <select  class="form-control" id="exampleFormControlSelect1">
                  <option>TODOS SETORES</option>
                  <option>DE</option>
                  <option>DG</option>
                  <option>TI</option>
                  <option>ADM</option>
                  <option>Fincaceiro</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Digite um Talento</label>
                <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Designer">
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Digite uma Habilidade</label>
                <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Designer">
              </div>

              <input type="submit" class="btn btn-primary" value="Buscar">
            </form>




          </div>

          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">


          </div>

          <!-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab">...</div> -->
        </div>
      </div>
    </div>


  </div>


  <!--Import jQuery before materialize.js-->
  <script type=" text/javascript " src="https://code.jquery.com/jquery-3.2.1.min.js "></script>
  <script type="text/javascript " src="js/materialize.min.js "></script>
  <script type="text/javascript " src="js/main.js "></script>
  <!-- script bootstrap -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>