		<head> 
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		    <link href= "<?php echo URL; ?>css/bootstrap.css" rel="stylesheet" >
			<style>
				body{
				
					//background-image: url(  "<?php echo URL; ?>img/background.png" );
					//background-repeat: no-repeat center center fixed; 
					//background-size: cover; 
				}
			</style>
			<title> <?php echo TITLE; ?> </title>
		</head>

		<body>

			
	
   		<div style = "position: absolute; left: 0px; width: 100%; background-color: rgba(100, 252, 252, 0.4);">
		<!-- <h1>সিএসইডিইউ ফোরাম </h1> 
		<h4>প্রশ্ন-ই হোক জ্ঞানার্জনের প্রথম হাতিয়ার </h4>  -->
		</div>
		
			<div style = "position: absolute; right: 0px; width: 140px; background-color: #b0e0e6;">
			<!-- Changing language and reload page-->
				<form action="#" method="post" style="align: right">
					<select name="lang">
						<option value="en">English</option>
						<option value="bn">Bangla</option>					
					</select>
					<input type="submit" name="changeLang" value="apply" style="allign: right"/>
				</form>
			</div>

			 
<?php
	//Language change action
	//if(isset($_POST['changeLang'])){
	//	$lang = $_POST['lang'];  // Storing Selected Value In Variable

	//	$message = " Language Changed to: " .$lang;  // Displaying Selected Value

	//	echo "<script type='text/javascript'>alert('$message');</script>";


		//require APP . 'controller/home.php';
		$app = new Home();
		$app->index();
	//	unset($_POST['changeLang']);
		
	//}
?>