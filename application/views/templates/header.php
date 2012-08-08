<?php $this->load->helper('url'); ?>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/prolific.css'; ?>" />
</head>
<body>
		<div id="outer">
		<div id="wrapper">
			<div id="menu">
				<ul>
					<li class="first"><a href="#">Home</a></li>
					<li><a href="#">Game</a></li>
					<li><a href="#">Some</a></li>
					<li><a href="#">Other</a></li>
					<li><a href="#">Links</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">...</a></li>
					<li><a href="#">...</a></li>
					<li class="last"><a href="#">...</a></li>
				</ul>
				<br class="clearfix" />
			</div>
			<div id="header">
				<div id="logo">
					<h1><a href="#">Olympic RTS</a></h1>
				</div>
				<div id="search">
<head>
<title>Please type your Username and Password... </title>
<script language="JavaScript" type="text/JavaScript" src="login.js"></script>
</head>
<body bgcolor="#eeeeee">
<form>
<br>
<center>
Username: <input type="text" name="username" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf';">
<br>
Password: <input type="password" name="password" style="background:#bfbfbf;color:#212121;border-color:#212121;" onFocus="this.style.background = '#ffffff';" onBlur="this.style.background = '#bfbfbf';">
<br>
<input type="button" value="Login" onClick="Login(this.form);" style="background:#bfbfbf;color:#000000;border-color:#212121;" onMouseOver="this.style.color = '#404040';" onMouseOut="this.style.color = '#000000';" onFocusr="this.style.color = '#404040';" onBlur="this.style.color = '#000000';">
</center>
</form>
</body>				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="box">
						<h3>Sidebar Text</h3>
						<p>
							This can be found and edited in application/views/templates/header.php
						</p>
					</div>
					<div class="box">
						<h3>More Links</h3>
						<ul class="list">
							<li class="first"><a href="#">These</a></li>
							<li><a href="#">Can</a></li>
							<li><a href="#">Also</a></li>
							<li><a href="#">Be</a></li>
							<li class="last"><a href="#">Edited</a></li>
						</ul>
					</div>
				</div>