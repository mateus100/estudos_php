<?php
  require 'facebook.php';
  $fb = new facebook();
  $post = $fb->creatmodel();
  $post->setAuthor("joão");
  print_r($post);
?> 
