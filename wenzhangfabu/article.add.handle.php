<?php
	include "connect.php";
	$title=$_POST["title"];
	$author=$_POST["author"];
	$description=$_POST["description"];
	$content=$_POST["content"];
	$dateline=time();
	$insertsql = "insert into article (title,author,description,content,dateline) values('$title','$author','$description','$content',$dateline)";
	if ($mysqli->query($insertsql)) {
		echo "<h2>发布文章成功</h2>;
	}else{
		echo "<h2>发布文章失败</h2>".$mysqli->error;
	}
?>