<?php
  define ('__ROOT__', dirname(__FILE__));
  $tmp = explode("/yjsb2017", __ROOT__); // /var/www/html/aa/bb/..
  $tmp1 = $tmp[0];
  $tmp = explode($_SERVER['DOCUMENT_ROOT'],$tmp1); // /aa/bb/..
  $tmp2 = $tmp[1];
  define ('__SERVER__', $tmp2."/yjsb2017");
?>
