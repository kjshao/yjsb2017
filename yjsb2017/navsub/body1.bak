<?
include 'global.php'; 
if(empty($tid))
{
	echo "<script language='javascript'>window.alert('不好意思找不到您要找的页面,是不是您走错门了呀~!');self.location='index.php';</script>";
	exit();
}
$tid?$listdown=listdown($tid):$listdown;
$andskyname=$db->get_one("select * from andsky_down1 where tid='$tid'");
$name=$andskyname['name'];
if(!$page)$page=1;
$table=" where tid='$tid' ";
$pageid=$tid;
$showpage=showpage($table,$pageid);
include 'head.htm';
?>
<body leftmargin="0" topmargin="0">
<TABLE cellSpacing=0 cellPadding=0 width=792 align=center border=0>
  <TBODY>
    <TR>
      <TD width=7 background=img/bgbody1.gif></TD>
      <TD vAlign=top width=778>
        <div align="center"><TABLE width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <TBODY>
    <TR>
      <TD vAlign=top width="26%" bgcolor="#7DBBF4"><div align="center">
          <TABLE cellSpacing=0 cellPadding=0 border=0>
            <TBODY>
              <TR>
                <TD vAlign=top bgColor=#ebeae5></TD>
              </TR>
            </TBODY>
          </TABLE>
        </div>
          <div align="center"></div>
          <TABLE width="90%" border=0 align=center cellPadding=0 cellSpacing=0>
            <TBODY>
              <TR>
                <TD height=10></TD>
              </TR>
              <TR>
                <TD><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                  <tr>
                    <td><div align="center">
                        <TABLE width="92%" border=0 align="center" cellPadding=0 cellSpacing=0 style="MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px">
                          <TBODY>
                            <TR>
                              <TD width=6><IMG height=5 src="img/search01.gif" width=6></TD>
                              <TD background=img/search03.gif><IMG height=5 src="img/search03.gif" width=1></TD>
                              <TD width=6><IMG height=5 src="img/search05.gif" width=6></TD>
                            </TR>
                            <TR>
                              <TD background=img/search09.gif><IMG height=1 src="img/search09.gif" width=6></TD>
                              <TD background=img/searchmb.gif>
                                <TABLE width="100%" height="60" border=0 cellPadding=0 cellSpacing=0>
                                  <form action=search.php method=post>
                                    <TBODY>
                                      <TR>
                                        <TD colspan="3"><div align="center"></div>
                                            <div align="center">
                                              <select name="keyf" style="font-family: Verdana ; FONT-SIZE: 12px; COLOR: #434343; HEIGHT: 18px; WIDTH: 50px">
                                                <option value="title">标题</option>
                                                <option value="concent">内容</option>
                                              </select>
                  &nbsp;&nbsp;
                                              <select name="keya" style="font-family: Verdana ; FONT-SIZE: 12px; COLOR: #434343; HEIGHT: 18px; WIDTH: 72px">
                                                <option value="artic2">信息发布</option>
                                                <option value="artic">重要通知</option>
                                                <option value="down">规章制度</option>
                                                <option value="down0">大厦管理</option>
                                                <option value="down1">招生信息</option>
                                                <option value="down2">教学管理</option>
                                                <option value="down3">学位管理</option>
                                                <option value="down3">就业指导</option>
                                              </select>
                                          </div></TD>
                                      </TR>
                                      <TR>
                                        <TD width="35"><div align="center"><strong>Key</strong></div></TD>
                                        <TD width="89"><INPUT maxLength=50 size=12 name="key" type="text" class="search"></TD>
                                        <TD width="29">
                                          <div align="left">
                                            <INPUT name="submit" type=submit style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BACKGROUND: url(img/searchgo.gif); BORDER-BOTTOM-WIDTH: 0px; WIDTH: 20px; CURSOR: hand; HEIGHT: 20px; BORDER-RIGHT-WIDTH: 0px" value=" ">
                                        </div></TD>
                                      </TR>
                                                  </FORM>
                              </TABLE></TD>
                              <TD background=img/search10.gif><IMG height=1 src="img/search10.gif" width=6></TD>
                            </TR>
                            <TR>
                              <TD><IMG height=5 src="img/search13.gif" width=6></TD>
                              <TD background=img/search14.gif><IMG height=5 src="img/search14.gif" width=1></TD>
                              <TD><IMG height=5 src="img/search15.gif" width=6></TD>
                            </TR>
                                        </TABLE>
                    </div></td>
                  </tr>
                </table></TD>
              </TR>
              <TR>
                <TD height=7><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="15"></td>
                    </tr>
                  </table>
                </TD>
              </TR>
            </TBODY>
        </TABLE></TD>
      <TD width="74%" vAlign=top bgcolor="#FFFFFF">
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="5"></td>
                      </tr>
                      <tr>
                        <td><table width="100%" height="30" border="0" align="center" cellpadding="5" cellspacing="0">
                          <tr bgcolor="#e0e0e0">
                            <td width="563" height="15" scope="row"><div align="left">
                                <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                  <TBODY>
                                    <TR>
                                      <TD width="14%"><IMG height=23 src="img/title08.gif" width=100></TD>
                                      <TD width="86%" align=right bgColor=#F0F0F0><a href="javascript:history.back()"><img src="img/back0.gif" width="90" height="15" border="0"></a></TD>
                                    </TR>
                                  </TBODY>
                                </TABLE>
                            </div></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table width="98%"  border="0" align="center" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="2"></td>
                            </tr>
                          </table>
                            <table width="100%"  border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td><?php
								//列出本栏目下的文章
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
    <td><div align=left>&nbsp;<img src=img/dot11.gif> <A HREF=bodyshow1.php?id=$id>{$title}</A></div></td>
	<td><div align=center>{$name}</div></td>
	<td><div align=center>{$time}</div></td>";
	}
	$andsky.="</table>";
	return $andsky;
}
print $listdown ?></td>
                              </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td height="5"></td>
                      </tr>
                      <tr>
                        <td><table width="100%" height="30" border="0" align="center" cellpadding="5" cellspacing="0">
                          <tr bgcolor="#e0e0e0">
                            <td width="563" height="15" scope="row">
                              <div align="left">
							  <?php 
							  //-------------------分页-----------------------------------//
function showpage($table,$pageid){
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
               &nbsp;&nbsp;◇<a href='?tid=$pageid&page=0'>首页</a> ◇<a href='?tid=$pageid&page=$uppage'>上一页</a> ◇<a href='?tid=$pageid&page=$nextpage'>下一页</a> ◇<a href='?tid=$pageid&page=$mopage'>尾页</a>";
    return $showpage;
}
print $showpage ?></div></td></tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td height="2"></td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                  </table></td>
                </tr>
            </table></td>
          </tr>
      </table></TD>
    </TR>
  </TBODY>
</TABLE>
        </div></TD>
      <TD width=7 background=img/bgbody2.gif></TD>
    </TR>
  </TBODY>
</TABLE>
</body>
<?php include_once "foot.htm"; ?>