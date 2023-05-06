<?php 
 include_once('conexao.php');
 if(!empty($_GET['search']))
 {
     $data = $_GET['search'];
    $exec = "SELECT * FROM usuario WHERE id LIKE '%$data%' or nome LIKE '%$data%'";
 }
 else
 {
     $exec = "SELECT * FROM usuario ";
 }
 $result =  mysqli_query($conn, $exec);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    
    <div class="m-5">

    <table class=" table table-striped table-sm">
        <h1>Cadastro de Usuarios</h1>
        <div class="pesquisa">
            <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar" name="pesquisar">
            <button onclick="searchData()" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.   5 0 0 1 11 0z">
                </svg>


            </button>
        </div>
        <tr class="table-info">
            <th>Código</th>
            <th>Nome</th>
            <th>Senha</th>
            <th>Email</th>
            <th>telefone</th>
            <th>Data cadastro</th>
            <th>Açoes</th>

        </tr>
        </div>
        <?php 
        while($registros = mysqli_fetch_assoc($result)){
           echo "<tr class = 'table-dark'>";
           echo "<td>"  .$registros['id']."</td>";
           echo "<td>"  .$registros['nome']."</td>";
           echo "<td>"  .$registros['senha']."</td>";
           echo "<td>"  .$registros['email']."</td>";
           echo "<td>"  .$registros['telefone']."</td>";
           echo "<td>"  .$registros['data_cadastro']."</td>";
           echo "<td>  
           
           <a class = 'btn btn-primary btn-sm' href='edit.php?id=$registros[id]'>

           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'  fill='currentColor' class ='bi bi-pencil-square' viewBox='0 0 16 16'>
           <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
           <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
           </svg>  </a>
         
           
           <a class = 'btn btn-danger btn-sm' href='delete.php?id=$registros[id]'>

           <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
           <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
         </svg>

           </svg></a></td>";
           echo "</tr>";
        }
        ?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script>
  var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") 
    {
        searchData();
    }
});

function searchData()
{
    window.location = 'Selectphp.php?search='+search.value;
}
    </script>
  </body>

</html>