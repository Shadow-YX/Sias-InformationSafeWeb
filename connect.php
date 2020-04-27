<?php
$host ='127.0.0.1';
$dbuser='root';
$pwd='123456';
$dbname='php99';

$db = new mysqli ($host,$dbuser,$pwd,$dbname);

if($db->connect_error<>0){
		die('数据库链接失败');
}

$db->query("SET NAMES UTF8");

?>
		