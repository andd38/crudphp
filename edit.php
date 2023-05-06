
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(24,214,220), rgb(17,54,71));
        }
        .box{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 40%;
        }
        fieldset{
            border:3px solid rgb(24, 214, 205);
        }
        legend{
            border:1px solid darkturquoise;
            padding:10px;
            text-align: center;
            background-color: darkturquoise;
            border-radius: 8px;
            color:white;
        }
        .inputBox{
            position: relative;
            color:white;
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid white;
            outline: none;
            color:white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .5s;
        }
        .labelInput
        {
            top: -20px;
            font-size: 12px;
            color:aqua;
        }
        .inputUser:focus ~.labelInput,
        .inputUser:valid ~.inputBox{
            top: -20px;
            font-size: 12px;
            color: aqua;
        }
        #submit{}

#data_cadastro{
    border:none;
    padding:8px;
    border-radius: 10px;
    outline: none;  
}
.daty{
    color:white;
    margin-right: 10px;
}
#update{
    background-image: linear-gradient(to right, rgb(24,214,220), rgb(17,54,71));
    border:none;
    color:white;
    cursor:pointer;
    padding:15px;
    border-radius: 10px;
    font-size:15px;
    width:100%;
}

#update:hover{
    background-image: linear-gradient(to right, rgb(114, 224, 228), rgb(81, 170, 211));
}

    </style>
</head>
<body>

<?php

if (!empty($_GET['id'])){
    include_once ('conexao.php');
    $id = $_GET['id'];
    $sqlselect = "select * from usuario where id= $id";
    $result = mysqli_query($conn, $sqlselect);
}


    if($result -> num_rows >0){
      while($registros = mysqli_fetch_assoc($result)){
        $nome = $registros['nome'];
        $senha = $registros['senha'];
        $email = $registros['email'];
        $telefone = $registros['telefone'];
      }   
    }     else{
  header('location:Selectphp.php');
}

?>



  <a href="Selectphp.php"> Voltar a lista</a>

  <div class="box_search">
<input type="search" class="form-control w-25" placeholder="Pesquisar" id = "pesquisar">
<button class="btn btn-primary">        
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
       <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
       </svg>


  </div>
    <div class="box">
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend> <b> Update de Clientes</b></legend>
                <br><br>

                <div class="inputBox">
                    <input type="hidden" name="id" id="id" class="inputUser" value="<?php echo $id ?>" required>
                    <label for="nome" class="labelInput">Código</label>
                </div>
                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser"  value="<?php echo $nome ?>"  required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser"   value="<?php echo $senha ?>" required>
                    <label for="name" class="labelInput">senha</label>
                </div>                
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" class="inputUser"  value="<?php echo $email ?>" required>
                    <label for="email"class="labelInput" >email</label>
                </div>  
                <div class="inputBox">
                    <input type="tel" name="telefone" class="inputUser"  value="<?php echo $telefone ?>" required>
                    <label for="tel"class="labelInput" >Telefone</label>
                </div>             
                <br><br>
                <input type="submit" Value="Atualizar" name="inserir" id ="update">

            </fieldset>
        </form>
    </div>
</body>
</html>