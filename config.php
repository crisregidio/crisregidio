<?php

//Nome do banco de dados
define('DB_NAME', 'WEBSSM');

//Usuário do banco de dados
define('DB_USER', 'root');

//Senha do Banco de dados
define('DB_PASSWORD', '');

//Nome do Host
define('DB_HOST', 'localhost');

// Caminho para a pasta do sistema
if ( !defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

// Caminho no Servidor
if ( !defined('BASEURL'))
  define('BASEURL', '/projeto/');

// Caminho do arquivo de banco de dados
if ( !defined('DBAPI'))
  define('DBAPI', ABSPATH . 'inc/database.php');

?>
