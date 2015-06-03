<!DOCTYPE HTML>
<html>

	<head> 
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		    <link href= "<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet" type='text/css'>
		    <link href= "<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
		    <link href= "<?php echo URL; ?>public/css/cseduforum.css" rel="stylesheet" type='text/css'>
		    <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		    <link href='http://fonts.googleapis.com/css?family=Russo+One&subset=latin,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
		    <style>
				html, body {
					height: 100%;
				}
				#container {
					min-height: 100%;
					margin-bottom: -330px;
					position: relative;
				}
				#footer {
					position: fixed;
					bottom: 0px;
					text-align: center; 
					width: 100%; 
					height: 5%; 
					background-color: black;"
				}
				.clearfooter {
					height: 330px;
					clear: both;
				}
			    .tagline{
					top:100px; 
					left:200px; 
					width:800px; 
					height:51px; 
					color:white; 
					position:absolute; 
					text-align:center; 
					background-color:black;
				}
				.signupform{
					top:200px; 
					left:100px; 
					width:800px; 
					height:100%; 
					color:white; 
					position: absolute; 
				}
				label {
				    width:150px;
				}
			</style>-



			<style> 
				body{
			
					background-image: url(  "<?php echo URL; ?>img/background.jpg" );
					background-repeat: no-repeat center center fixed; 
					background-size: cover; 
				}
			</style> 


			<title> <?php echo $GLOBALS['sitename']; ?> </title> 

			<!--script for navigation menu bar-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

			<!-- initiating for editor -->
			<script src= " <?php echo URL;?>js/tinymce/tinymce.min.js"></script>
		    <script>
		        tinymce.init({selector:'textarea'});
		    </script>

</head>


<body> 

	<div id="container">

					<a style = "text-decoration:none;"; href="<?php echo URL;?>" >  

				   		<div style = "position: fixed; top: 0px; left: 0px; width: 100%; height: 55px;  background-color: #000d1a;">
							<h1 style = "font-family: 'Russo One', sans-serif; margin: 0.5em 1.5em; line-height: 100%; font-size: 1.875em;"> <small style = "color: white"> <?php echo $GLOBALS['sitename']; ?> </small> </h1> 
						</div>

					</a>
					
					
					<div style = "position: fixed; right: 0px; width: 150px; height:25px; background-color: #000d1a;">
					<!-- Changing language and reload page-->
						<form action="" method="post" style="align: right">
							<select name="lang">
								<option value="en" <?php if ($_SESSION['lang'] == "en" ) echo 'selected'; ?> >English</option>
								<option value="bn" <?php if ($_SESSION['lang'] == "bn" ) echo 'selected'; ?> >Bangla</option>					
							</select>
							<input type="submit" name="changeLang" value="apply" style="allign: right"/>
						</form>
					</div>

					 
