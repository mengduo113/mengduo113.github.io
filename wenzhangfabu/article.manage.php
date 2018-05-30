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
					<li><a href="article.add.php">文章添加页</a></li>
					<li><a href="article.manage.php">文章管理页</a></li>
					<li><a href="article.list.php">文章列表页</a></li>
					<li><a href="#">文章搜索页</a></li>
				</ul>
			</div>
		</div>
		<div id="main">
			<div id="title">文章管理</div>
			
				<div id="list3">
					
						<table  border="0" width="100%"  >

			<tr>
				<td bgcolor="#ffffff">编号</td>
				<td>标题</td>
				<td>操作</td>
			</tr>
	<?php
		if(!empty($data)){
			foreach ($data as  $value) {
				
	?>
			<tr>
				<td><?php echo $value['id']?></td>
				<td><?php echo $value['title']?></td>
				<td>
					<a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a>
					<a href="article.modify.php?id=<?php echo $value['id']?>">修改</a>
				</td>
			</tr>
	<?php
		}
	}
	?>
		</table>						
					
				</div>
				
			
		</div>
	</div>
</body>
</html>