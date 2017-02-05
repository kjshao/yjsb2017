<?php
include_once("global.php");
include_once(__ROOT__."/sql.php");
$andsky_version="1.0";
$by_andsky="ANDSKY.COM";
$andsky=$db->get_one("select * from andsky_web");
if(!$andsky['web_open'])exit($andsky['close_why']);  //网站开放
$frip=getenv("REMOTE_ADDR");

unset($GLOBALS,$_ENV,$HTTP_ENV_VARS,$_REQUEST,$HTTP_POST_VARS,$HTTP_GET_VARS,$HTTP_POST_FILES,$HTTP_COOKIE_VARS);
if(!ini_get('register_globals')){	
@extract($_POST,EXTR_SKIP);	
@extract($_GET,EXTR_SKIP);	
@extract($_COOKIE,EXTR_SKIP);	
@extract($_FILES,EXTR_SKIP);
}
foreach($_POST as $_key=>$_value){	
$_POST[$_key]=str_replace('$','&ensp;$',$_POST[$_key]);	
$$_key=$_POST[$_key];
}
foreach($_GET as $_key=>$_value){	
$_GET[$_key]=str_replace('$','&ensp;$',$_GET[$_key]);	
$$_key=$_GET[$_key];}//系统设置

$menu=menu();                          //文章栏目
function menu(){	
         global $db;	
        	
       $query=$db->query("select * from andsky_arttid order by num desc");	
       while($array=$db->fetch_array($query)){		
       $name=$array['name'];		
       $id=$array['id'];		
       $andsky.="<A HREF=list.php?tid=$id class='top'> $name</A>";
	   }	       	
       return $andsky;
}

$linkmenu=linkmenu();                          //链接栏目
function linkmenu(){	
         global $db;	
        	
       $query=$db->query("select * from andsky_liktid order by num desc");	
       while($array=$db->fetch_array($query)){		
       $name=$array['name'];		
       $id=$array['id'];
       $alink=$array['alink'];		
       $andsky.="<A HREF=$alink target='_balnk' class='top'> $name</A>";
	   }	       	
       return $andsky;
}

$index_good=indexgood();//最新新闻
$index_hot=indexhot();
$index_unew=indexunew();
function indexgood(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_artic where good='1' order by num desc limit 0,6");
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
        $show.="
        <tr>
        <td><img src=img/agood.gif> <A HREF=show.php?id=$id title='发布时间:{$time} 作者:{$author}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}
function indexhot(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_artic where hot>10 order by posttime desc limit 0,12");
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
        $show.="
        <tr>
        <td><img src=img/agood.gif> <A HREF=show.php?id=$id title='发布时间:{$time}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}
function indexunew(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_artic where posttime!=num order by num desc limit 0,4");
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
        $show.="
        <tr>
        <td><img src=img/unew.gif> <A HREF=show.php?id=$id title='发布时间:{$time} 作者:{$author}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}

$downmenu=downmenu();       //下载栏目

function downmenu(){	
         global $db;	
        	
       $query=$db->query("select * from andsky_dotid order by num desc");	
       while($array=$db->fetch_array($query)){		
       $name=$array['name'];		
       $id=$array['id'];		
       $show.="<A HREF=down.php?tid=$id class='top'> $name</A>";
	   }	       	
       return $show;
}

$index_dgood=indexdgood();//最新新闻
$index_dhot=indexdhot();
$index_dunew=indexdunew();
function indexdgood(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_down where good='1' order by num desc limit 0,8");
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
        $show.="
        <tr>
        <td><img src=img/agood.gif> <A HREF=doshow.php?id=$id title='发布时间:{$time} 作者:{$author}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}
function indexdhot(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_down where hot order by hot desc limit 0,12");
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
        $show.="
        <tr>
        <td><img src=img/agood.gif> <A HREF=doshow.php?id=$id title='发布时间:{$time} 作者:{$author}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}
function indexdunew(){
	global $db;
    $show="<table width='100%'>";
	$query=$db->query("select * from andsky_down where posttime!=num order by num desc limit 0,8");
	$dnum=$db->num_rows($query);
	while($array=$db->fetch_array($query)){
		$posttime=$array['posttime'];
		$title=$array['title'];
		$id=$array['id'];
		$author=$array['author'];
        $time=date("Y-m-d",$posttime);
		$show.="
        <tr>
        <td><img src=img/unew.gif> <A HREF=doshow.php?id=$id title='发布时间:{$time} 作者:{$author}'>{$title}</A></td>
        </tr>
        ";
	}
	$show.="</table>";
	return $show;
}

$picnews_pic=picnews_pic();
function picnews_pic(){
	global $db;
	$query=$db->query("select * from andsky_artic where song<>'' order by num desc limit 0,10");
	while($array=$db->fetch_array($query)){
		$pic=$array['song'];
		$title=$array['title'];
		$id=$array['id'];
		$name=$array['name'];
                $posttime=$array['posttime'];
                $time=date("Y-m-d",$posttime);
		$size=@getimagesize($pic);
		if($size[0]>363||$size[1]>132) $size=" width=125 height=112 ";
		$show[]="<a href=show.php?id=$id><img src='$pic' $size border=0 alt='发布时间:{$time}'></a><br><br><a href=show.php?id=$id title=$title>$title</a>";
	}
	return $show;
}
?>
