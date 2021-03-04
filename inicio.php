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
    <link rel="stylesheet" href="css/inicio.css">

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
                        <h6 style="color: #ffffff;">Olá, <?php echo $_SESSION['nome'];?></h6>
                    </div>
                    <a class="nav-link active flexivel" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="material-icons icon">home</i> Inicio
                    </a>

                    <a class="nav-link flexivel" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="material-icons icon">edit</i> Editar Perfil
                    </a>

                    <a class="nav-link flexivel" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="material-icons icon">dvr</i> Visualizar Perfil
                    </a>

                    <a class="nav-link flexivel" href="sair.php" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="material-icons icon">exit_to_app</i> Sair
                    </a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">INICIO<br>
                        
                        
                        <?php
                            if (isset($_SESSION['msgUP'])) {
                                echo $_SESSION['msgUP'];
                                unset($_SESSION['msgUP']);
                            }
                        ?>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                        <!-- FORMULARIO -->
                        <h3>Formulario</h3>
                        <!-- DADOS PESSOAIS -->
                        <h6>DADOS PESSOAIS</h6>
                        <hr>
                        <form method="POST" action="backEnd/inicioProcess.php">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputNome">Nome Completo</label>
                                    <input type="text" name="nomeCompleto" class="form-control" id="inputNome" placeholder="Fulano de Tal">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="telesapiens@telesapiens.com.br">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputTell">Telefone</label>
                                    <input type="tel" name="telefone" class="form-control" id="inputTell" placeholder="(DDD) 9XXXX-XXXX">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="inputRg">RG</label>
                                    <input type="text" name="rg" class="form-control" id="inputRg" placeholder="">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCpf">CPF</label>
                                    <input type="text" name="cpf" class="form-control" id="inputCpf" placeholder="">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputCtps">CTPS</label>
                                    <input type="text" name="ctps" class="form-control" id="inputCtps" placeholder="">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="inputNasc">Data Nascimento</label>
                                    <input type="date" name="nasc" class="form-control" id="inputNasc" placeholder="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputNasc">Data Admissão</label>
                                    <input type="date" name="admissao" class="form-control" id="inputNasc" placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Setor">Setor</label>
                                    <select class="form-control" name="setor" id="Setor">
                                        <option>DE</option>
                                        <option>DG</option>
                                        <option>TI</option>
                                        <option>ADM</option>
                                        <option>FINANCEIRO</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="Cargo">Cargo</label>
                                    <select class="form-control" name="cargo" id="Cargo">
                                        <option>Assistente de Programação</option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                        <option></option>
                                    </select>
                                </div>
                            </div>


                            <h6>LOGRADOURO</h6>
                            <hr>
                            <!-- LOGRADOURO -->
                            <div class="form-group">
                                <label for="inputAddress">Endereço</label>
                                <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua dos Lírios, nº 0">
                            </div>

                            <div class="form-group">
                                <label for="inputAddress2">Complemento</label>
                                <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc.">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" id="inputCity">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputEstado">Estado</label>
                                    <select id="inputEstado" name="estado" class="form-control">
                                        <option selected>Escolher...</option>
                                        <option value="AC"> AC </option>
                                        <option value="AL"> AL </option>
                                        <option value="AP"> AP </option>
                                        <option value="AM"> AM </option>
                                        <option value="BA"> BA </option>
                                        <option value="CE"> CE </option>
                                        <option value="DF"> DF </option>
                                        <option value="ES"> ES </option>
                                        <option value="GO"> GO </option>
                                        <option value="MA"> MA </option>
                                        <option value="MT"> MT </option>
                                        <option value="MS"> MS </option>
                                        <option value="MG"> MG </option>
                                        <option value="PA"> PA </option>
                                        <option value="PB"> PB </option>
                                        <option value="PR"> PR </option>
                                        <option value="PE"> PE </option>
                                        <option value="PI"> PI </option>
                                        <option value="RJ"> RJ </option>
                                        <option value="RN"> RN </option>
                                        <option value="RS"> RS </option>
                                        <option value="RO"> RO </option>
                                        <option value="RR"> RR </option>
                                        <option value="SC"> SC </option>
                                        <option value="SP"> SP </option>
                                        <option value="SE"> SE </option>
                                        <option value="TO"> TO </option>
                                    </select>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="inputCEP">CEP</label>
                                    <input type="text" name="cep" class="form-control" id="inputCEP">
                                </div>
                            </div>
                            <br>

                            <h6>FORMAÇÃO ACADÊMICA</h6>
                            <hr>
                            <!-- FORMAÇÃO ACADÊMICA -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputFormacao">Instituição</label>
                                    <input type="text" name="instituicao" class="form-control" id="inputFormacao" placeholder="Faculdade Tal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCurso">Curso</label>
                                    <input type="text" name="curso" class="form-control" id="inputCurso" placeholder="Administração">
                                </div>
                            </div>

                            <div class="form-row">
                                <label for="inputNivel">Nivel</label>
                                <div class="form-group col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio1" value="Médio">
                                        <label class="form-check-label" for="inlineRadio1">Médio</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio2" value="Técnico">
                                        <label class="form-check-label" for="inlineRadio2">Técnico</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio3" value="Superior">
                                        <label class="form-check-label" for="inlineRadio3">Superior</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio4" value="Pós">
                                        <label class="form-check-label" for="inlineRadio4">Pós</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio5" value="Mestrado">
                                        <label class="form-check-label" for="inlineRadio5">Mestrado</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="nivel" id="inlineRadio6" value="Doutorado">
                                        <label class="form-check-label" for="inlineRadio6">Doutorado</label>
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <label for="inputSituacao">Situação</label>
                                <div class="form-group col-12">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="situacao" id="situacao1" value="Em Andamento">
                                        <label class="form-check-label" for="situacao1">Em Andamento</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="situacao" id="situacao2" value="Concluído">
                                        <label class="form-check-label" for="situacao2">Concluído</label>
                                    </div>
                                </div>
                            </div>
                            <BR>

                            <h6>CURSOS COMPLEMENTARES</h6>
                            <hr>
                            <!-- CURSOS COMPLEMENTARES -->
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="exampleFormControlTextarea1">Cursos Complementares</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="cursosComplementares" rows="3" placeholder="Ex: Inglês, Programação Web, Libras..."></textarea>
                                </div>
                            </div>
                            <br>

                            <h6>HABILIDADES</h6>
                            <hr>
                            <!-- HABILIDADES -->
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="exampleFormControlTextarea1">Habilidades</label>
                                    <textarea class="form-control" name="habilidades" id="exampleFormControlTextarea1" name="habilidades" rows="3" placeholder=""></textarea>
                                </div>
                            </div>
                            <br>



                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo que meus dados estão corretos
                                    </label>
                                </div>
                            </div>
                            <input type="submit" name="edit" class="btn btn-primary" value="Salvar">
                        </form>




                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
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