<?php
  include_once '../conn.php'; 
  $item = $_GET['name'];
  $id = $_GET['id'];
  include_once(__ROOT__.'/navsub/var.php');
  $table = $tableName[$tidx];
  $db->query("update {$table} set hot=hot+1 where id='$id'");
  @extract($db->get_one("select * from {$table} where id='$id'"));
  $time = date("Y-m-d", $posttime);
?>
<style type="text/css">
a:link{ color:orange;text-decoration:none;}
a:visited{color:#1A86E0;text-decoration:none;}
a:hover{color:#F00;text-decoration:none;cursor:hand;}
a:active{color:#3C537D;text-decoration:none;}
img {width: 840px;}
</style>
<div style='padding:30px 100px 50px 100px'>
<table width=100% align=center border=0>
<tbody>
  <tr>
    <td style='padding:20px 50px 20px 50px; font-weight:bold' valign=middle bgcolor=#abd3f8 scope=row><div align=center><span style='font-size:26px; color:blue'><?php print $title ?></span></div></td>
  </tr>
  <tr>
    <td style='padding:20px'><div align="center"><span style='font-size:16px; color:#db7303'>发布时间：<?php print $time ?>&nbsp;&nbsp;&nbsp;&nbsp;供稿部门：<?php print $dax ?></span></div></td>
  </tr>
  <tr>
    <td style='padding:20px 80px 0px 80px'><div align=justify style='width:840px'><span id='content' style='font-size:15px; line-height:30px;'><?php print $concent ?></span></div></td>
  </tr>
</tbody>
</table>
</div>
<script>
$(document).ready(function($) {
  $('#content').find('img').each(function(){
    var a = $(this).attr('src');
    if ( a.indexOf("gsc.dicp.ac.cn") < 0 ) {
      a = 'http://www.gsc.dicp.ac.cn/' + a;
      $(this).attr('src',a);
    }
  });
});
</script>
