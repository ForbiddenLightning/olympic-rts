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
					<form action="" method="post">
						<div>
							<input class="form-text" name="search" size="32" maxlength="64" />	
						</div>
					</form>
				</div>
<div id="search">
<form action="" method="post">
<div>
<input class="form-text" name="search" size="32" maxlength="64" />	
</div>
</form>
</div>

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
						<h3>YRS and other links</h3>
						<ul class="list">
							<li class="first"><a href="#">These</a></li>
							<li><a href="http://www.youngrewiredstate.org/"></a>YRS Site</li>
							<li><a href="#"></a></li>
							<li><a href="#">Be</a></li>
							<li class="last"><a href="#">Edited</a></li>
						</ul>
					</div>
				</div>