<?php
  $txt = isset($_GET["t"])? $_POST["t"]:"Generico";
  $tam = isset($_GET["tam"])? $_POST["tam"]:"Generico";
  $cor = isset($_GET["cor"])? $_POST["cor"]:"Generico";

  echo $txt;
?>