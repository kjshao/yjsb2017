<?php
include_once '../conn.php'; 
?>
<div class="row" style="background:rgb(125,187,244); margin:0px 0px 20px 0px; padding:0px;">
  <nav class="col-xs-3 sidebar" style="background:rgb(125,187,244); padding:0px;">
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo __SERVER__?>/navsub/sub.php?item=zhaosheng&tid=1"><strong>博士招生</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo __SERVER__?>/navsub/sub.php?item=zhaosheng&tid=2"><strong>硕士招生</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="http://www.gsc.dicp.ac.cn/bodylist8.php?tid=1" target=_blank><strong>DICP 高校奖学金</strong></a></li>
    </ul>
  </nav>
  <div class="col-xs-9" style="background:#fff;">
    <?php
    if(empty($tid))
    {
      echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
    }
    $tid?$listdown=listdown($item,$tid):$listdown;
    print $listdown;

    $query=$db->query("select * from andsky_down1 where tid='$tid'");
    $total=$db->num_rows($query);
    $totalpage=ceil($total/20);
    echo "<p id='total' style='display:none'> $total </p>";
    echo "<p id='totalpage' style='display:none'> $totalpage </p>";
    ?>
    <!-- paging -->
    <center>
      <div id="page-selection"></div>
      <div id="page-info"></div>
    </center>
    <!-- paging -->
  </div>
</div>

<?php
function listdown($item,$tid){
  global $db;
  $andsky="
  <div id='mainTable'>
  <table align=center width=100%  border=1 cellpadding=2 cellspacing=0 bordercolor=#E2E1E1 bgcolor=#FDFCF9>
  <tr height=60>
    <td colspan=3 border=1 style='background:lightblue; font-size:20px; padding:0px 0px 0px 15px;'>".$item."</td>
  </tr>
  <tr height=40>
    <td><div align=center><strong>招生信息</strong></div></td>
    <td width=75><div align=center><strong>招生类别</strong></div></td>
  <td width=95><div align=center><strong>发布日期</strong></div></td>
  </tr>";
  $query=$db->query("select * from andsky_down1 where tid='$tid' order by num desc limit 0,20");
  $num=$db->num_rows($query);
  if($num<=0) $andsky.="本栏目下暂时无文章!";
        
  while($array=$db->fetch_array($query)){
    $posttime=$array['posttime'];
    $title=$array['title'];
    $huan=$array['huan'];
    $fang=$array['fang'];
    $yan=$array['yan'];
    $id=$array['id'];
    $name=$array['name'];
    $time=date("Y-m-d",$posttime);
    $andsky.="
      <tr height=30>
      <td><div align=left style='padding: 0px 15px 0px 15px;'>&nbsp;<a href=bodyshow1.php?id=$id>{$title}</a></div></td>
      <td><div align=center>{$name}</div></td>
      <td><div align=center>{$time}</div></td>
      </tr>";
  }
  $andsky.="</table></div>";
  return $andsky;
}
?>
