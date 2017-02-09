<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("jx1","jx2","jx3");
    $tableName = array("andsky_down2","andsky_down2","andsky_down");
    $ttid = array(1,2,22);
    $dp = array(20,20,30);
    $nameTable = array(array("x1","x2","x3"),array("y1","y2","y3"),array("z1","z2"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,80,100),array(0,80,100),array(0,100));
  }
?>
