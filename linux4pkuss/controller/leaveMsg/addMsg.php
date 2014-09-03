<?php
	ob_start();
	header("content-type:text/html;charset=utf-8");
	$addTime = time();
	$content = $_POST["content"];
	echo $addTime;
	echo $content;