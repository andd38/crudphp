<?php
include_once('conexao.php');

if (isset($_POST['inserir'])) {
    $codigo = $_POST['id'];
    $nome = $_POST['nome'];
    $passe = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $emaill = $_POST['email'];

    $query =  "update usuario set nome='$nome', senha='$passe' , telefone='$telefone' , email='$emaill' where id='$codigo';";
      
    $conexao = mysqli_query($conn, $query);
}

header('location: Selectphp.php');



?>