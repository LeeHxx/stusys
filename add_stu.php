<?php
session_start();
header("Content-type:text/html; charset=utf-8");
require_once('conn.php');

$stuid = $_POST['stuid'];
$stuname = $_POST['stuname'];
$stusex = $_POST['stusex'];
$stuxy = $_POST['stuxy'];
$stuzy = $_POST['stuzy'];
$stuclass = $_POST['stuclass'];
$stutel = $_POST['stutel'];
$stuaddress = $_POST['stuaddress'];
//将查询语句赋给变量$sql

$sql="insert into stu(stuid,stuname,stusex,stuxy,stuzy,stuclass,stutel,stuaddress) values ('$stuid','$stuname','$stusex','$stuxy','$stuzy','$stuclass','$stutel','$stuaddress')";


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