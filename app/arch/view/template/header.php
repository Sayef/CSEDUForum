

		<head> 
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		    <link href= "<?php echo URL; ?>css/bootstrap.css" rel="stylesheet" >
<!--
			<style> 
				body{
			
					background-image: url(  "<?php echo URL; ?>img/background.jpg" );
					background-repeat: no-repeat center center fixed; 
					background-size: cover; 
				}
			</style> 
-->
			<title> <?php echo $GLOBALS['sitename']; ?> </title> 
		</head>

		<body>

			
	
   		<div style = "position: absolute; top: 0px; left: 0px; width: 100%; background-color: rgba(252, 252, 252, 0.4);">
			<!--<h1> <?php echo $GLOBALS['sitename']; ?> </h1> 
			<h4> <?php echo $GLOBALS['sitetagline']; ?> </h4> -->

		</div>
		
		
		<div style = "position: absolute; right: 0px; width: 140px; background-color: rgba(252, 252, 252, 0.4);">
		<!-- Changing language and reload page-->
			<form action="" method="post" style="align: right">
				<select name="lang">
					<option value="en" <?php if ($GLOBALS['lang'] == "en" ) echo 'selected'; ?> >English</option>
					<option value="bn" <?php if ($GLOBALS['lang'] == "bn" ) echo 'selected'; ?> >Bangla</option>					
				</select>
				<input type="submit" name="changeLang" value="apply" style="allign: right"/>
			</form>
		</div>

			 
