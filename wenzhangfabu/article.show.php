<?php
	include "connect.php";
	$id=$_GET["id"];
	$sql="select * from article where id=$id";
	$result=$mysqli->query($sql);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div id="box">
		<div id="left">
			<div id="logo">
				<img src="images/logo.jpg" width="55" height="55">
			</div>
			<div id="menu">
				<ul>
					<li><a href="article.add.handle">文章添加页</a></li>
					<li><a href="article.manage.php">文章管理页</a></li>
					<li><a href="article.list.php">文章列表页</a></li>
					<li><a href="#">文章搜索页</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<div id="title">文章详情</div>
			<div class="main-list">
				<div class="main-list-title">
					<?php echo $row['title']?>
				</div>
				<div class="main-list-author">
					<?php echo $row['author']?>
				</div>
				<div class="main-list-content">
					<?php echo $row['content']?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>