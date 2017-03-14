<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
       $s = array(1,2,3,4,5,6);
       var_export($s);
       //wordwrap 
      // $txt = "Young ones, at school you prove yourselves courageous when you readily identify yourselves as Witnesses of Jehovah, even if doing so means being teased by classmates or others. You thereby show that you are proud to bear Jehovah’s name";
      // $res = wordwrap($txt,10,"<br/>\n", true);
      // echo ($res);
       $txt = "asuhd a a";
    echo strlen($txt);
    $novo = trim($txt);
    echo (trim($txt));
    echo (strlen($txt));
    $novo= rtrim($txt);
    echo (strlen($txt));
        ?>
</div>
</body>
</html>