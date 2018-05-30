<?php 
	include "connect.php";
	$id=$_GET["id"];
	$result=$mysqli->query("select * from article where id=$id");
	$data=$result->fetch_assoc();
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
					<li><a href="#">文章添加页</a></li>
					<li><a href="#">文章管理页</a></li>
					<li><a href="#">文章列表页</a></li>
					<li><a href="#">文章搜索页</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<div id="title">文章修改</div>
			<form action="article.modify.handle.php" method="post">
				<input type="hidden" name="id" value="<?php echo $data["id"]?>">
				<div id="list3">
					<dl>
						<dt>标题：</dt>
						<dd>
							<input type="text" name="title" class="input01" value="<?php echo $data["title"]?>">
						</dd>
						<dt>作者：</dt>
						<dd>
							<input type="text" name="author" class="input01" id="b_author" value="<?php echo $data["author"]?>">
						</dd>
						<dt>简介：</dt>
						<dd>
							<textarea name="description" cols="30" rows="3" class="input01" id="b_description" value="<?php echo $data["description"]?>"></textarea>
						</dd>
						<dt>内容：</dt>
						<dd>
							<textarea name="content" cols="30" rows="3" class="input01" id="b_content" value="<?php echo $data["content"]?>"></textarea>
						</dd>
					</dl>
				</div>
				<div id="list4">
					<input type="image" name="imageField" id="imageField" src="images/btn.png">
				</div>
			</form>
		</div>
	</div>
</body>
</html>