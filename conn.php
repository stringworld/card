<?php
	include "config/dbconfig.php";
	header("content-type:text/html; charset=utf-8");

	$conn=mysql_connect($DBHOST,$DBUSER,$DBPASSWORD)or die("连接错误".mysql_error());
	// $conn=mysql_connect('localhost','root','zj123456') or die('链接错误'.mysql_error());
	mysql_select_db($DBNAME,$conn);
	mysql_query('set names utf8');
?>