<!DOCTYPE HTML>
<html>

	<head> 
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		    <link href= "<?php echo URL; ?>css/bootstrap.css" rel="stylesheet" >



			<style> 
				body{
			
					background-image: url(  "<?php echo URL; ?>img/background.jpg" );
					background-repeat: no-repeat center center fixed; 
					background-size: cover; 
				}
			</style> 

			<title> <?php echo $GLOBALS['sitename']; ?> </title> 

			<!-- initiating for editor -->
			<script src= " <?php echo URL;?>js/tinymce/tinymce.min.js"></script>
		    <script>
		        tinymce.init({selector:'textarea'});
		    </script>

</head>


<body> 

		<a style = "text-decoration:none"; href="<?php echo URL;?>" >  

	   		<div style = "position: absolute; top: 0px; left: 0px; width: 100%; height: 55px; background-color: rgba(252, 252, 252, 0.4);">
				<h1 style = "margin: 0.1em 0.5em; line-height: 100%; font-size: 1.875em;"> <small style = "color: red"> <?php echo $GLOBALS['sitename']; ?> </small> </h1> 
				<h4 style = "margin: 0em 0.5em; line-height: 100%; font-size: 1.115em;"> <small> <?php echo $GLOBALS['sitetagline']; ?> </small> </h4>
			</div>

		</a>
		
		
		<div style = "position: absolute; right: 0px; width: 150px; height:50px background-color: rgba(252, 252, 252, 0.4);">
		<!-- Changing language and reload page-->
			<form action="" method="post" style="align: right">
				<select name="lang">
					<option value="en" <?php if ($_SESSION['lang'] == "en" ) echo 'selected'; ?> >English</option>
					<option value="bn" <?php if ($_SESSION['lang'] == "bn" ) echo 'selected'; ?> >Bangla</option>					
				</select>
				<input type="submit" name="changeLang" value="apply" style="allign: right"/>
			</form>
		</div>

			 
