<?php
	include "connect.php";
	$sql="select * from article order by dateline desc";
	$result=$mysqli->query($sql);
	while ($row=$result->fetch_assoc()) {
		$data[]=$row;
	}
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
			<div id="title">文章列表</div>
						<?php
					foreach ($data as  $value) {
		
				?>
			<div class="post">
				<h5>
				<?php echo $value['title']?>
				</h5>
				<h6>
				作者：<?php echo $value['author']?>
				</h6>
				<div>
					<?php echo $value['description']?>
				</div>
				<div>
					<a href="article.show.php?id=<?php echo $value['id']?>">查看详细</a>
				</div>
				<hr />
			</div>
				<?php
				}
				?>
			<div>
			</div>
		</div>
</body>
</html>
