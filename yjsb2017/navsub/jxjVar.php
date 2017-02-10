<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("获奖名单");
    $tableName = array("andsky_down3");
    $ttid = array(3);
    $dp = array(20);
    $nameTable = array(array("标题","类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"));
    $width = array(array(0,80,100));
  }
?>
