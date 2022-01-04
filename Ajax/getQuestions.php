<?php
require_once('folder.php');

//Query de seleÃ§Ã£o
if(isset($_GET['regiao']){
  $regiao = $_GET['regiao'];

  $query = mysqli_query($connection, "SELECT * FROM quest1 where regiao = '{$regiao}'");
}


//Seleciona dados de cada linha
while($rows=mysqli_fetch_array($query)){

  echo $rows['question'] . ";" . $rows['resp1'] . ";" . $rows['resp2'] . ";" . $rows['resp3'] . ";" . $rows['resp4'] . ";" . $rows['corretaresp'] . ";" . $rows['dica'] . ";"  . $rows['regiao'] . ";" . $rows['id'] . "|";

}

mysqli_close($connection);
?>