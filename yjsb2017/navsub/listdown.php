<?php
function listdown($db,$tid,$name,$tableName,$ttid,$nameHead,$nameTable,$nameContent,$width,$page){
  $ncolumn = count( $nameTable );
  $andsky="<div id='mainTable'>
  <table align=center width=100%  border=1 cellpadding=2 cellspacing=0 bordercolor=#E2E1E1 bgcolor=#FDFCF9>
  <tr height=60><td colspan=".$ncolumn." border=1 style='background:lightblue; font-size:20px; padding:0px 0px 0px 15px;'>{$name[1]} / $nameHead</td></tr>
  <tr height=40>";
  for ( $i=0; $i<$ncolumn; $i++ ) {
    $andsky.="<td width=''><div align=center><strong>{$nameTable[$i]}</strong></div></td>";
  }
  $andsky.="</tr>";
  $cmd = "select * from {$tableName} where tid='$ttid' order by num desc limit $page[0],$page[1]";
  $query=$db->query("$cmd");
  $num=$db->num_rows($query);
  if($num<=0) $andsky.="本栏目下暂时无文章!";
  while($array=$db->fetch_array($query)){
    $id=$array[$nameContent[$ncolumn]];
    $andsky.="<tr height=30>
      <td><div align=left style='padding: 0px 15px 0px 15px;'><a href='sub.php?item=show&name={$name[0]}&tid=$tid&id=$id'>".$array[$nameContent[0]]."</a></div></td>";
    for ( $j=1; $j<$ncolumn; $j++ ) {
      if ( $j + 1 < $ncolumn ) {
        $tmp = $array[$nameContent[$j]];
      } elseif ( $j + 1 == $ncolumn ) {
        $tmp = date("Y-m-d",$array[$nameContent[$j]]);
      }
      $andsky.="<td width={$width[$j]}><div align=center>".$tmp."</div></td>";
    }
  }
  $andsky.="</tr></table></div>";
  return $andsky;
}
?>
