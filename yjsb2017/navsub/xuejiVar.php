<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("信息发布","规章制度");
    $tableName = array("andsky_artic2","andsky_down");
    $ttid = array(30,22);
    $dp = array(20,20);
    $nameTable = array(array("标题","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,100),array(0,100));
  }
?>
