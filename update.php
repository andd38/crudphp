<?php 
   if (!empty($_GET['id'])) {
    include_once('conexao.php');
    $codigo = $_GET['id'];
    $sql = "select * from usuario where id=$codigo";
    $conectar = mysqli_query($conn, $sql);
}


if ($conectar->num_rows > 0) {
    while ($registros = mysqli_fetch_assoc($conectar)) {
        $nome = $registros['nome'];
        $passe = $registros['senha'];
        $telefone = $registros['telefone'];
        $emaill = $registros['email'];
    }
} else {
    header('location:Select.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="Selectphp.php" method="post">
        <hr>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <label for="">Nome</label>
            <input type="text" name="nome" value="<?php echo $nome ?>">
            <label for="">senha</label>
            <input type="text" name="senha" value="<?php echo $codigo ?>"  >
            <label for="">telefone</label>
            <input type="text" name="telefone" value="<?php echo $telefone ?>">
            <label for="">email</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <br><br>
            <input type="submit" name="inserir" value="atualizar">
           

        
    </form>
</body>
</html>