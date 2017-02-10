<?php
  if(empty($tid)) {
    echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  } elseif ( $tid >= 1 ) {
    $tidx = $tid - 1;
    $nameHead = array("出国留学","招聘信息","就业政策","培训指导");
    $tableName = array("andsky_down4","andsky_down4","andsky_down4","andsky_down4");
    $ttid = array(21,22,23,24);
    $dp = array(20,20,20,20);
    $nameTable = array(array("标题","发布日期"),array("标题","发布日期"),array("标题","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"),array("title","posttime","id"),array("title","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,100),array(0,100),array(0,100),array(0,100));
  }
?>
