<?php
	include "connect.php";
	$id=$_GET["id"];
	$deletesql="delete from article where id=$id";
	if ($mysqli->query($deletesql)) {
		echo "删除文章成功";
	}else{
		echo "删除文章失败".$mysqli->error;
	}
?>