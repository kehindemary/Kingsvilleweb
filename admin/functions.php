<?php
error_reporting(E_ALL);


//change this username and password aferwards

$server=mysqli_connect("localhost", "root", "mysql");
$db=mysqli_select_db($server, "eleddvmu_kvweb");

$date=date("Y-m-d");
global $server;
global $db;
global $date;

function naira($amount){
	$naira="&#8358;".number_format("$amount", 2);
	return $naira;
}

function random($length, $charset='0123456789'){
    $str = '';
    $count = strlen($charset);
    while ($length--) {
        $str .= $charset[mt_rand(0, $count-1)];
    }
    return $str;
}

function cleanInput($input) {
    $search = array(
      '@<script[^>]*?>.*?</script>@si',   // Strip out javascript
      '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
      '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
      '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
    );
  
      $output = preg_replace($search, '', $input);
      return $output;
}

function member($username){
	global $server;

	$sql=mysqli_query($server, "select * from users where username='$username' or email='$username'");
	$row=mysqli_fetch_assoc($sql);

	return $row;
}

function sanitize($input){
    global $server;
    $output="";
    if (is_array($input)){
        foreach($input as $var=>$val){
            $output[$var] = sanitize($val);
        }
    }else{
        if(get_magic_quotes_gpc()){
            $input = stripslashes($input);
        }
        $input  = cleanInput($input);
        $output = mysqli_real_escape_string($server, $input);
    }
    return $output;
}
  
function redirect($page){
    echo "<script type=text/javascript>window.location.replace('$page')</script>";
}
  
function alert($msg){
    echo "<script type=text/javascript>alert('$msg')</script>";
}

function countUsers(){
    global $server;
    
    $sql=mysqli_query($server, "select count(id)  as count from users");
	$row=mysqli_fetch_assoc($sql);

	return $row['count'];
}

function countGallery(){
    global $server;
    
    $sql=mysqli_query($server, "select count(id)  as count from gallery");
	$row=mysqli_fetch_assoc($sql);

	return $row['count'];
}

function countNews(){
    global $server;
    
    $sql=mysqli_query($server, "select count(id)  as count from news");
	$row=mysqli_fetch_assoc($sql);

	return $row['count'];
}

function countAdvert(){
    global $server;
    
    $sql=mysqli_query($server, "select count(id)  as count from adverts");
	$row=mysqli_fetch_assoc($sql);

	return $row['count'];
}

function RandomString($length, $charset='123456789'){
    $str = '';
    $count = strlen($charset);
    while ($length--) {
        $str .= $charset[mt_rand(0, $count-1)];
    }
    return $str;
}

function getEvents($id=null){
    global $server; $date = date("Y-m-d");

    if($id != NULL){
        $data = mysqli_query($server, "select * from news WHERE type = 'event' ORDER BY id DESC LIMIT $id");
    }else{
        $data = mysqli_query($server, "select * from news WHERE type = 'event' order by id DESC");
    }

    return $data;
}

function month($id){
    if($id =='01'){
        return "JAN" ;
    }elseif($id =='02'){
        return "FEB" ;
    }elseif($id =='03'){
        return "MAR" ;
    }elseif($id =='04'){
        return "APR" ;
    }elseif($id =='05'){
        return "MAY" ;
    }elseif($id =='06'){
        return "JUN" ;
    }elseif($id =='07'){
        return "JUL" ;
    }elseif($id =='08'){
        return "AUG" ;
    }elseif($id =='09'){
        return "SEP" ;
    }elseif($id =='10'){
        return "OCT" ;
    }elseif($id =='11'){
        return "NOV" ;
    }elseif($id =='12'){
        return "DEC" ;
    }
}

function getGallery(){
    global $server;
    $data = mysqli_query($server, "select * from gallery order by id DESC");
    return $data;
}

function getBanner(){
    global $server;
    $data = mysqli_query($server, "select * from banners order by id DESC");
    return $data;
}

function getCMS(){
    global $server;
    $data = mysqli_query($server, "select * from cms where id='1'");
    $row = mysqli_fetch_assoc($data);

	return $row;
}

function getAdvert($id=NULL){
    global $server;
    
    if($id != NULL){
        $data = mysqli_query($server, "select * from adverts order by id DESC LIMIT $id");
    }else{
        $data = mysqli_query($server, "select * from adverts order by id DESC");
    }
    return $data;
}

function getNews($id=NULL){
    global $server; $date = date("Y-m-d");
    
    if($id != NULL){
        $data = mysqli_query($server, "select * from news WHERE type = 'news' order by id DESC LIMIT $id");
    }else{
        $data = mysqli_query($server, "select * from news WHERE type = 'news' order by id DESC");
    }
    return $data;
}

function getMaps(){
    global $server;
    
    $data = mysqli_query($server, "select * from maps order by id DESC");
    return $data;
}

function getVideos(){
    global $server;
    
    $data = mysqli_query($server, "select * from video order by id DESC");
    return $data;
}

function getTeams(){
    global $server;
    
    $data = mysqli_query($server, "select * from teams");
    return $data;
}

function getLibrary(){
    global $server;
    
    $data = mysqli_query($server, "select * from library order by id DESC");
    return $data;
}

?>