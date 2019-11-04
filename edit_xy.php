<?php
session_start();
header("Content-type:text/html; charset=utf-8");
require_once('conn.php');

$id = $_POST['id'];
$zh = $_POST['zh'];
$mm = $_POST['mm'];
//将查询语句赋给变量$sql
$sql="update xyxxb set xyid='$zh',xy='$mm' WHERE id='$id'";
//执行sql语

//mysqli_query($conn,$sql) or die('添加数据出错：'.mysql_error());
$result=mysqli_query($conn,$sql);

if($result){

    echo "yes";
	exit;
}else{	
	echo "no";
	die('Could not connect:' .mysqli_error());
	exit;
	}




//关闭数据库连接
mysqli_close($conn);

?>