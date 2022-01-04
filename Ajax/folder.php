<?php
header('Access-Control-Allow-Origin: *');

// Definindo Servidor, Nome de UsuÃ¡rio, Senha e Banco de Dados
$servername = "localhost";
$username = 'id18054134_admin';
$password = 'cQKT&8fCdU6^>[(Z';
$database = 'id18054134_geoboard';


// Criando a ConexÃ£o
$connection = new mysqli($servername, $username, $password, $database);
