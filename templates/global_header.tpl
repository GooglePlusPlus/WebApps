<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<titLe>GooglePlusPlus - {$title}</titLe>
		{if $debug}
			<link rel="stylesheet" href="/res/bootstrap/css/bootstrap.css">
			<link rel="stylesheet" href="/res/bootstrap/css/bootstrap-responsive.css">
			<script type="text/javascript" src="/res/js/LazyLoad-min.js"></script>

		{else}
        	<link rel="stylesheet" href="/res/bootstrap/css/bootstrap.min.css" type="text/css">
        	<link rel="stylesheet" href="/res/bootstrap/css/bootstrap-responsive.min.css" type="text/css">
        	<script type="text/javascript" src="/res/js/LazyLoad.js"></script>
		{/if}
		{if $page=='login'}
			<link rel="stylesheet" href="/res/css/login.css">
		{/if}
	</head>
	<body>