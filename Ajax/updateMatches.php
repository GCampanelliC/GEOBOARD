<?php
require_once('folder.php');

 if(isset($_GET['id']) && isset($_GET['score']) && isset($_GET['regiaoid'])){
      //Lightly sanitize the GET's to prevent SQL injections and possible XSS attacks
     $id_player = $_GET['id_player'];
     $score = $_GET['score'];
     $id_match = $_GET['regiaoid'];

     $query = mysqli_query($connection, "UPDATE jogador SET score = '{$score}' WHERE (regiaoid = '{$regiaoid}')");
     if(!$query){
          echo($query);
          echo 'There was a problem saving your account. Please try again later.';
    		die("QUERY FAILED" . mysqli_error($connection));
    	}else{
          echo 'Congrats!';
     }

 }else{
     echo 'Your name or score wasnt passed in the request. Make sure you add ?name=NAME_HERE&score=1337 to the tags.';
  }

mysqli_close($connection);
?>