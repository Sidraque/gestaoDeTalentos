<?php include("conexaoBD.php");
session_start();




$nomeCompleto = $_POST['nomeCompleto'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$ctps = $_POST['ctps'];
$nasc = $_POST['nasc'];
$admissao = $_POST['admissao'];
$setor = $_POST['setor'];
$cargo = $_POST['cargo'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$instituicao = $_POST['instituicao'];
$curso = $_POST['curso'];
$nivel = $_POST['nivel'];
$situacao = $_POST['situacao'];
$cursosComplementares = $_POST['cursosComplementares'];
$habilidades = $_POS['habilidades'];


if (isset($_POST['edit'])) {
    $sql = "UPDATE usuario SET nomeCompleto='$nomeCompleto', email='$email', telefone='$telefone', rg='$rg', cpf='$cpf', ctps='$ctps', nasc='$nasc', admissao='$admissao', setor='$setor', cargo='$cargo', endereco='$endereco', complemento='$complemento', cidade='$cidade', estado='$estado', cep='$cep', instituicao='$instituicao', curso='$curso', nivel='$nivel', situacao='$situacao', cursosComplementares='$cursosComplementares', habilidades='$habilidades'  WHERE idUsuario=1";
    if (mysqli_query($mysqli, $sql)) {
        $_SESSION['msgUP'] = "ATUALIZADO COM SUCESSO!";
        header("Location: ../inicio.php");
    } else {
        echo "ERROR: $sql. " . mysqli_error($mysqli);
    }
}


