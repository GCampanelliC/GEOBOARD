<?php
require_once('folder.php');

$id_player = $_GET['id'];

$query = mysqli_query($connection, "SELECT * FROM jogador WHERE id = '{$id_player}' AND score = 0 ORDER BY DATE DESC LIMIT 1 ");  


  while($rows=mysqli_fetch_array($query)){

    echo $rows['regiaoid'];
  
  }
  if(!$query){

      echo 'There was a problem saving your account. Please try again later.';
      die("QUERY FAILED" . mysqli_error($connection));

  }

mysqli_close($connection);
?>