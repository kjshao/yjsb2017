<?php
include_once("global.php");
include_once(__ROOT__."/config.php");

class andskysql {
  var $querynum = 0;
  //function dbstuff() { global $fp; $fp = fopen("./tempdata/dblog.txt", "w"); }

  function connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect = 0) {
    if($pconnect) {
      if(!@mysql_pconnect($dbhost, $dbuser, $dbpw)) {
        $this->halt('Can not connect to MySQL server');
      }
    } else {
      if(!@mysql_connect($dbhost, $dbuser, $dbpw)) {
        $this->halt('Can not connect to MySQL server');
      }
    }
  }

  function select_db($dbname) {
    
    //设置数据的字符集utf-8 
    mysql_query("set names 'utf8' ");
    mysql_query("set character_set_client=utf8");
    mysql_query("set character_set_results=utf8");
    
    return mysql_select_db($dbname);
  }

  function fetch_array($query, $result_type = MYSQL_ASSOC) {
    $query = mysql_fetch_array($query, $result_type);
    return $query;
  }

  function query($sql, $silence = 0) {
    //echo "|$sql|<br>"; //debug
    //@fwrite($GLOBALS[fp], $sql."\n"); //debug
    $query = mysql_query($sql);
        //echo 'query:'.$query.'<br>';
      if(!$query && !$silence)
        {
           $this->halt('MySQL Query Error', $sql);
    }
        $this->querynum++;
    return $query;
  }

  function unbuffered_query($sql, $silence = 0) {
    $func_unbuffered_query = @function_exists('mysql_unbuffered_query') ? 'mysql_unbuffered_query' : 'mysql_query';
    $query = $func_unbuffered_query($sql);
    if(!$query && !$silence) {
      $this->halt('MySQL Query Error', $sql);
    }
    $this->querynum++;
    return $query;
  }
  function get_one($sql){
        $SQL=$sql;
    if(function_exists('mysql_unbuffered_query')){
      $query = mysql_unbuffered_query($SQL);
    }else{
      $query = mysql_query($SQL);
    }
    $this->querynum++;
    if (!$query)  $this->halt('Query Error: ' . $SQL);
    
    $rs =& mysql_fetch_array($query, MYSQL_ASSOC);
    mysql_free_result($query);
    return $rs;
  }

  function affected_rows() {
    return mysql_affected_rows();
  }

  function error() {
    return mysql_error();
  }

  function errno() {
    return mysql_errno();
  }

  function result($query, $row) {
    $query = @mysql_result($query, $row);
    return $query;
  }

  function num_rows($query) {
    $query = mysql_num_rows($query);
    return $query;
  }

  function num_fields($query) {
    return mysql_num_fields($query);
  }

  function free_result($query) {
    return mysql_free_result($query);
  }

  function insert_id() {
    $id = mysql_insert_id();
    return $id;
  }

  function fetch_row($query) {
    $query = mysql_fetch_row($query);
    return $query;
  }

  function close() {
    return mysql_close();
  }
  function halt($message = '', $sql = '') {
            echo $message."您上传的数据中含有非法字符，数据库拒绝写入！请您仔细检查后重新上传！";
               }

}
/***********************************************************/
// ========= 连接数据库 =======================================================
$db = new andskysql;
$db->connect($dbhost, $dbuser, $dbpw, $pconnect);
$db->select_db($dbname);
unset($dbhost, $dbuser, $dbpw, $dbname, $pconnect);
