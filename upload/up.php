<?php
require_once('functions.php');

$cliente = $POST['cliente'];

if(isset($_POST["submit"])) {
  $caminho = 'uploads/' . $_FILES["fileToUpload"]["name"];
  add($cliente, $caminho);
  include('upload.php');
}

 ?>
