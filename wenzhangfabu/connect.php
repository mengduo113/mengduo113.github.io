<?php
	include "config.php";
	$mysqli = new mysqli(host,username,password);
	$mysqli->select_db("art");
	$mysqli->query("set names 'utf8'");
?>