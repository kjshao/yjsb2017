<?
include_once '../conn.php'; 
if(empty($tid))
{
  echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
  exit();
}
//$tid?$listdown=listdown($tid):$listdown;
$listdown=listdown($tid);
?>
<?php

function listdown($tid){
  global $db,$page;
  $andsky="<table width=100%  border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td height=3></td>
  </tr>
</table>
  <table align=center width=100%  border=1 cellpadding=2 cellspacing=0 bordercolor=#E2E1E1 bgcolor=#FDFCF9>
  <tr>
    <td height=30><div align=center><strong>招生信息</strong></div></td>
    <td width=65 height=30><div align=center><strong>招生类别</strong></div></td>
  <td width=85 height=30><div align=center><strong>发布日期</strong></div></td>
  </tr>";
        if($page<=1){$page=0;}
    $query=$db->query("select * from andsky_down1 where tid='$tid' order by num desc limit $page,20");
      $num=$db->num_rows($query);
        if($num<=0)
        $andsky.="本栏目下暂时无文章,请管理员添加!!";
        
        while($array=$db->fetch_array($query)){
    $posttime=$array['posttime'];
    $title=$array['title'];
    $huan=$array['huan'];
    $fang=$array['fang'];
    $yan=$array['yan'];
    $id=$array['id'];
    $name=$array['name'];
    $time=date("Y-m-d",$posttime);
    $andsky.="<tr>
  <td><div align=left>&nbsp;<a href=bodyshow1.php?id=$id>{$title}</a></div></td>
  <td><div align=center>{$name}</div></td>
  <td><div align=center>{$time}</div></td>";
  }
  $andsky.="</table>";
  return $andsky;
}
?>
