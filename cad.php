<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   include('conexao.php');

   $nome = $_GET['nome']; 

   $pass = $_GET['senha'];

   $email = $_GET['email'];

   $telefone = $_GET['telefone'];

   $sqlinsert = "INSERT INTO usuario values (null ,'{$nome}','{$pass}','{$email}','{$telefone}', now())";

    if (mysqli_query ( $conn,$sqlinsert ) ) 
    {
        echo "Conexão bem sucedida cadastrado com sucesso";
    } else {
        echo "Conexão falhou";
    }
    mysqli_close($conn);
    ?>
</body>
</html>