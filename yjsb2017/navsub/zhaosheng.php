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
        <a class="nav-link active" href="http://www.gsc.dicp.ac.cn/bodylist8.php?tid=1" target=_blank><strong>DICP 高校奖学金</strong></a>
      </li>
    </ul>
  </nav>
  <div class="col-xs-9" style="background:#fff;">
    <?php
    if(empty($tid))
    {
      echo "<h2 style='padding:20px;'>您所访问的页面不存在！</h2>";
    }
    $tid?$listdown=listdown($tid):$listdown;
    print $listdown;
    $andskyname=$db->get_one("select * from andsky_down1 where tid='$tid'");
    $name=$andskyname['name'];
    if(!$page)$page=1;
    $table=" where tid='$tid' ";
    $pageid=$tid;
    $showpage=showpage($table,$pageid,$item);
    print $showpage;

    $query=$db->query("select * from andsky_down1 $table");
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
function listdown($tid){
  global $db,$page;
  if ( $tid == 1 ) {
    $item = "博士招生";
  } else if ( $tid == 2 ) {
    $item = "硕士招生";
  }
  $andsky="
  <table align=center width=100%  border=1 cellpadding=2 cellspacing=0 bordercolor=#E2E1E1 bgcolor=#FDFCF9>
  <tr height=60>
    <td colspan=3 border=1 style='background:lightblue; font-size:20px; padding:0px 0px 0px 15px;'>".$item."</td>
  </tr>
  <tr height=40>
    <td><div align=center><strong>招生信息</strong></div></td>
    <td width=75><div align=center><strong>招生类别</strong></div></td>
  <td width=95><div align=center><strong>发布日期</strong></div></td>
  </tr>";
  if($page<=1){$page=0;}
  $query=$db->query("select * from andsky_down1 where tid='$tid' order by num desc limit $page,20");
  $num=$db->num_rows($query);
  if($num<=0) $andsky.="本栏目下暂时无文章,请管理员添加!!";
        
  while($array=$db->fetch_array($query)){
    $posttime=$array['posttime'];
    $title=$array['title'];
    $huan=$array['huan'];
    $fang=$array['fang'];
    $yan=$array['yan'];
    $id=$array['id'];
    $name=$array['name'];
    $time=date("Y-m-d",$posttime);
    $andsky.="<tr height=30>
      <td><div align=left style='padding: 0px 15px 0px 15px;'>&nbsp;<a href=bodyshow1.php?id=$id>{$title}</a></div></td>
      <td><div align=center>{$name}</div></td>
      <td><div align=center>{$time}</div></td>";
  }
  $andsky.="</table>";
  return $andsky;
}
function showpage($table,$pageid,$item){
  global $page,$db;
  $query=$db->query("select * from andsky_down1 $table");
  $total=$db->num_rows($query);
  $totalpage=ceil($total/20);
  $mopage=ceil(($totalpage*20)-20);
  $uppage=$page-20;
  if($page<=1){$page=0;}
  $nextpage=$page+20;
  if($nextpage>$total)$nextpage=$page;
  if($uppage<20)$uppage=0;
  if($page<=1){$pagenum=1;}else{
  $pagenum=ceil($page/20)+1;
  }
  $showpage="&nbsp;&nbsp;共有<b><font color='#F15408'>$total</font></b>条记录，共<b><font color='#F15408'>$totalpage</font></b>页，当前为第<b><font color='#F15408'>$pagenum</font></b>页 
  &nbsp;&nbsp;◇<a href='?item=$item&tid=$pageid&page=0'>首页</a> ◇<a href='?item=$item&tid=$pageid&page=$uppage'>上一页</a> ◇<a href='?item=$item&tid=$pageid&page=$nextpage'>下一页</a> ◇<a href='?item=$item&tid=$pageid&page=$mopage'>尾页</a>";
  return $showpage;
}
?>
