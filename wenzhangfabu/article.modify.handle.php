<?php
	include "connect.php";
	$id=$_POST['id'];
	$title=$_POST['title'];
	$author=$_POST['author'];
	$description=$_POST['description'];
	$content=$_POST['content'];
	$dataline=time();
	$updatesql="update article set title='$title',author='$author',description='$description',content='$content',dateline=$dataline where id =$id";
	if($mysqli->query($updatesql)){
		echo "修改文章成功";
	}else{
		echo "失败".$mysqli->error;
	}
?>