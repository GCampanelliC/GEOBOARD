<?php
require_once('folder.php');

//Query de seleÃ§Ã£o

$query = mysqli_query($connection, "SELECT COUNT(*) AS id FROM `quest1`");

//Seleciona a quantidade de questoes salvas no banco de dados
//echo $query['qtd_questoes'];

while($rows=mysqli_fetch_array($query)){

  echo $rows['id'];

}


mysqli_close($connection);
?>