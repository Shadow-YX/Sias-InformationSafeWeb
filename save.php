<?php

include('input.php');
include('connect.php');

$content=$_POST['content'];
$user=$_POST['user'];


$input = new Input();

	
$is =$input->post($content);
if($is==false){
	die("留言内容不正确");
}

$is = $input->post($user);
if($is==false){
	die("留言人数据不正确");
}
echo $content,$user;

$time=time();
$sql="INSERT INTO msg (content,user,intime) values('{$content}','{$user}','{$time}')";
$is=$db->query($sql);
header("location: index.php");
?>