<?php
require_once('folder.php');

//Query de seleÃ§Ã£o
$query = mysqli_query($connection, "SELECT score FROM jogador ORDER BY score DESC LIMIT 10");

//Seleciona dados de cada linha
while($rows=mysqli_fetch_array($query)){

  echo $rows['nome'] . "|" . $rows['score'] . "|";

}

mysqli_close($connection);
?>