<?php

header('Access-Control-Allow-Origin: *');

// Definindo Servidor, Nome de UsuÃ¡rio, Senha e Banco de Dados
$servername = "localhost";
$username = 'id18054134_admin';
$password = 'cQKT&8fCdU6^>[(Z';
$database = 'id18054134_geoboard';


// Criando a ConexÃ£o
$connection = new mysqli($servername, $username, $password, $database);


//Query de seleÃ§Ã£o
if(isset($_GET['email'])){
    $email = $_GET['email'];

    $query = mysqli_query($connection, "SELECT * FROM jogador WHERE email = '{$email}'");
    while($rows=mysqli_fetch_array($query)){
    
      echo $rows['nome'] . ";" . $rows['email'] . ";" . $rows['senha'] . ";" . $rows['score'] . ";" . $rows['id'];
    
    }

   /*
    $totalogin = mysql_num_rows($rows)

    if($totalogin ==1){
      $linhasLogin = mysql_fetch_object($rows)
      $ID = $linhasLogin ->id;
      echo $ID;
    }else{
      echo 0;
    }
    */
    
    mysqli_close($connection);
}

//Seleciona dados de cada linha

?>