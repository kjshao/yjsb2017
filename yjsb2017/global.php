<?php
  define ('__ROOT__', dirname(__FILE__));
  $tmp1 = explode("/yjsb2017", __ROOT__)[0]; // /var/www/html/aa/bb/..
  $tmp2 = explode($_SERVER['DOCUMENT_ROOT'],$tmp1)[1]; // /aa/bb/..
  define ('__SERVER__', $tmp2."/yjsb2017");
?>
