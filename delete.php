<?php 

if(!empty($_GET['id']))
{
    include_once('conexao.php');
    $id=$_GET['id'];
    $sqlselect=  " SELECT * FROM usuario where id = $id";
    $result = mysqli_query($conn ,$sqlselect);
    if($result -> num_rows> 0){
        $sqldelete = " delete from usuario where id = $id";
        $resultdelete = mysqli_query($conn , $sqldelete); 
    } 

}
header('location:edit.php')
?>