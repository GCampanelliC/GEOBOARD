
<?php

require_once('folder.php');

if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha']) && isset($_GET['score'])){

     //Lightly sanitize the GET's to prevent SQL injections and possible XSS attacks
     $nome = $_GET['nome'];
     $email = $_GET['email'];
     $senha = $_GET['senha'];
     $score = $_GET['score'];

     $query = mysqli_query($connection, "INSERT INTO jogador(id, nome, email, senha, score) VALUES(null, '{$nome}', '{$email}', '{$senha}' '{$score}')");

     if(!$query){

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