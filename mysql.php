<?php
$host ='127.0.0.1';
$dbuser='root';
$pwd='123456';
$dbname='php99';

$db = new mysqli ($host,$dbuser,$pwd,$dbname);

if($db->connect_error<>0){
		die('数据库链接失败');
		echo $db->connect_error;
}
$sql="select * from msg order by id DESC";

$mysqli_result=$db->query($sql);

$db->query("SET NAMES UTF8");

//var_dump($mysqli_result->fetch_array());

if ($mysqli_result === false){
	echo "sql语句错误";
	exit;
}

$row=$mysqli_result->fetch_array(MYSQLI_ASSOC);

//echo $row['id'];
//echo $row['content'];
$rows=[];

while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
	$rows[]=$row;
}	
    var_dump($rows);
?>