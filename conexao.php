<?php 
$banco = 'db_banco';
$usuario = 'root';
$senha = 'senac'; 
$hostname = 'localhost';

$conn = mysqli_connect($hostname, $usuario , $senha , $banco);

if (!$conn ){
    echo 'Não foi possivel conectar ao banco mysql';
    exit;
}
else {
echo 'Parabens a conexao foi bem sucedida';

}


?>