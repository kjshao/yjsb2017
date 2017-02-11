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
<!--
TD {
	FONT-SIZE: 14px; COLOR: #1f1f1f; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"
}
A:link {
	FONT-SIZE: 14px; COLOR: #E54101; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: none
}
A:visited {
	FONT-SIZE: 14px; COLOR: #E54101; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: none
}
A:hover {
	FONT-SIZE: 14px; COLOR: #1161a1; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: underline
}

.text {
	FONT-SIZE: 14px; COLOR: #292929; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"
}
A.text:link {
	FONT-SIZE: 14px; COLOR: #292929; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: none
}
A.text:visited {
	FONT-SIZE: 14px; COLOR: #292929; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: none
}
A.text:hover {
	FONT-SIZE: 14px; COLOR: #c69e00; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: underline
}
A.text:active {
	FONT-SIZE: 14px; COLOR: #c69e00; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"; TEXT-DECORATION: underline
}

.title3 {	FONT-WEIGHT: bold; FONT-SIZE: 25px; COLOR: #1161a1; LINE-HEIGHT: 30px; FONT-FAMILY: "Arial", "Helvetica", "sans-serif"
}
.title21 {	FONT-SIZE: 12px; COLOR: #07599B; LINE-HEIGHT: 25px; FONT-FAMILY: "Verdana", "Helvetica", "sans-serif"
}
-->
</style>
<TABLE cellSpacing=0 cellPadding=0 width=792 align=center border=0>
  <TBODY>
    <TR>
      <TD width=7 background=img/bgbody1.gif></TD>
      <TD vAlign=top width=778>
        <div align="center">
          <TABLE width="778" border="0" align="center" cellpadding="0" cellspacing="0">
    <TBODY>
      <TR>
        <TD vAlign=top bgcolor="#FFFFFF">
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td><table width="98%"  border="0" align="center" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="2"></td>
                      </tr>
                    </table>
                      <TABLE width="100%" border=0 align=center cellPadding=0 cellSpacing=2>
                        <TBODY>
                          <TR>
                            <TD><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td height="5"></td>
                                </tr>
                              </table>
                                <TABLE height=36 cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
                                  <TBODY>
                                    <TR bgColor=#d4d8de>
                                      <TD height="38" vAlign=middle bgColor=#ABD3F8 scope=row><DIV align=center><span class="title3"><?php print $title ?></span></DIV></TD>
                                    </TR>
                                  </TBODY>
                              </TABLE></TD>
                          </TR>
                          <TR>
                            <TD height=25 valign="bottom"><div align="center">
                                <table width="100%"  border="0" cellpadding="6">
                                  <tr>
                                    <td width="120" height="40">&nbsp;</td>
                                    <td width="508"><div align="center"><span class="title21">发布时间：<?php print $time ?>&nbsp;&nbsp;&nbsp;&nbsp;供稿部门：<?php print $dax ?></span></div></td>
                                    <td width="120"><div align="right"><a href="javascript:history.back()"><img src="img/back0.gif" width="90" height="15" border="0"></a></div></td>
                                  </tr>
                                </table>
                            </div></TD>
                          </TR>
                          <TR>
                            <TD height=14><TABLE cellSpacing=0 cellPadding=0 width="95%" align=center border=0>
                                <TBODY>
                                  <TR>
                                    <TD><DIV align=left><span class="text"><?php print $concent ?></span></DIV></TD>
                                  </TR>
                                </TBODY>
                            </TABLE></TD>
                          </TR>
                          <TR>
                            <TD height=10></TD>
                          </TR>
                          <TR>
                            <TD height=30><DIV align=center>
                                <table width="100%" height="30" border="0" align="center" cellpadding="5" cellspacing="0">
                                  <tr bgcolor="#e0e0e0">
                                    <td width="563" height="15" bgcolor="#ABD3F8" scope="row"><div align="left"></div></td>
                                  </tr>
                                </table>
                            </DIV></TD>
                          </TR>
                          <TR>
                            <TD height=2></TD>
                          </TR>
                        </TBODY>
                      </TABLE></td>
                </tr>
                <tr>
                  <td><table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="2"></td>
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
