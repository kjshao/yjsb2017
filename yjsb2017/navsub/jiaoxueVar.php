<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $nameHead = array("资料中心","课程安排","规章制度");
  }
  $nameContent = array("title","name","posttime","id");
  $nameTable = array("招生信息","招生类别","发布日期");
  $width = array("0","80","100");
  $tableName = array("andsky_down2","andsky_down2","andsky_down");
  $dp = 20;
?>
