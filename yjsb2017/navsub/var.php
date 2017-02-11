<?php
if(empty($tid)) {
  echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
} elseif ( $tid >= 1 ) {

if ( $item == 'zhaosheng' ) {
    $name = array("zhaosheng","招生");
    $tidx = $tid - 1;
    $nameHead = array("博士招生","硕士招生");
    $tableName = array("andsky_down1","andsky_down1");
    $ttid = array(1,2);
    $dp = array(20,20);
    $nameTable = array(array("招生信息","招生类别","发布日期"),array("招生信息","招生类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"));
    $width = array(array(0,80,100),array(0,80,100));
    $nameLink = array(array("http://www.gsc.dicp.ac.cn/bodylist8.php?tid=1"),array("DICP 高校奖学金"));
} elseif ( $item == 'jiaoxue' ) {
    $name = array("jiaoxue","教学");
    $tidx = $tid - 1;
    $nameHead = array("资料中心","课程安排","规章制度");
    $tableName = array("andsky_down2","andsky_down2","andsky_down");
    $ttid = array(1,2,22);
    $dp = array(20,20,30);
    $nameTable = array(array("标题","教学类别","发布日期"),array("标题","教学类别","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,80,100),array(0,80,100),array(0,100));
} elseif ( $item == 'xueji' ) {
    $name = array("xueji","学籍");
    $tidx = $tid - 1;
    $nameHead = array("信息发布","规章制度");
    $tableName = array("andsky_artic2","andsky_down");
    $ttid = array(30,22);
    $dp = array(20,20);
    $nameTable = array(array("标题","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,100),array(0,100));
    $nameLink = array(array("http://www.gsc.dicp.ac.cn/web04.php#03"),array("表格下载"));
} elseif ( $item == 'xuewei' ) {
    $name = array("xuewei","学位");
    $tidx = $tid - 1;
    $nameHead = array("工作程序","学位授予","规章制度");
    $tableName = array("andsky_down3","andsky_down3","andsky_down");
    $ttid = array(1,2,22);
    $dp = array(20,20,20);
    $nameTable = array(array("标题","类别","发布日期"),array("标题","类别","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,80,100),array(0,100,100),array(0,100));
    $nameLink = array(array("#","http://www.gsc.dicp.ac.cn/web04.php#04"),array("同等学力","表格下载"));
} elseif ( $item == 'jiuye' ) {
    $name = array("jiuye","就业");
    $tidx = $tid - 1;
    $nameHead = array("出国留学","招聘信息","就业政策","培训指导");
    $tableName = array("andsky_down4","andsky_down4","andsky_down4","andsky_down4");
    $ttid = array(21,22,23,24);
    $dp = array(20,20,20,20);
    $nameTable = array(array("标题","发布日期"),array("标题","发布日期"),array("标题","发布日期"),array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"),array("title","posttime","id"),array("title","posttime","id"),array("title","posttime","id"));
    $width = array(array(0,100),array(0,100),array(0,100),array(0,100));
} elseif ( $item == 'liuxue' ) {
    $name = array("liuxue","留学招生");
    $tidx = $tid - 1;
    $nameHead = array("<span class='liuxuesize'>留学生招生（Enrollment）</span>","港澳台招生");
    $tableName = array("andsky_down5","andsky_down5");
    $ttid = array(1,2);
    $dp = array(20,20);
    $nameTable = array(array("招生信息","类别","发布日期"),array("招生信息","类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"),array("title","name","posttime","id"));
    $width = array(array(0,100,100),array(0,100,100));
    $nameLink = array(array("#"),array("<span class='liuxuesize'>Professors Introduction</span>"));
} elseif ( $item == 'jxj' ) {
    $name = array("jxj","奖学金");
    $tidx = $tid - 1;
    $nameHead = array("获奖名单");
    $tableName = array("andsky_down3");
    $ttid = array(3);
    $dp = array(20);
    $nameTable = array(array("标题","类别","发布日期"));
    $nameContent = array(array("title","name","posttime","id"));
    $width = array(array(0,80,100));
    $nameLink = array(array("http://www.gsc.dicp.ac.cn/jxj"),array("奖学金申请"));
} elseif ( $item == 'dasha' ) {
    $name = array("dasha","大厦管理");
    $tidx = $tid - 1;
    $nameHead = array("大厦管理");
    $tableName = array("andsky_down0");
    $ttid = array(22);
    $dp = array(20);
    $nameTable = array(array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"));
    $width = array(array(0,100));
} elseif ( $item == 'zhidu' ) {
    $name = array("zhidu","制度表格");
    $tidx = $tid - 1;
    $nameHead = array("规章制度");
    $tableName = array("andsky_down");
    $ttid = array(22);
    $dp = array(20);
    $nameTable = array(array("标题","发布日期"));
    $nameContent = array(array("title","posttime","id"));
    $width = array(array(0,100));
    $nameLink = array(array("http://www.gsc.dicp.ac.cn/web04.php#01"),array("表格下载"));
} else {
  echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
}

}
?>
