<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("资料中心","课程安排","规章制度");
    $tableName = array("andsky_down2","andsky_down2","andsky_down");
    $ttid = array(1,2,22);
    $dp = array(20,20,30);
    $nameTable = array(array("标题","教学类别","发布日期"),array("标题","教学类别","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,80,100),array(0,80,100),array(0,100));
  }
?>
