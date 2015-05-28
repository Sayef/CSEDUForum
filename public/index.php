<!DOCTYPE HTML>
<html>


<?php

	session_start();
	/**
	*  
	*
	* 
	* @author Sayef
	* 
	*/
	// set a constant that holds the project's folder path, like "/var/www/".
	// DIRECTORY_SEPARATOR adds a slash to the end of the path
	define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
	//Set css, img, js files loaction
	define('CSS', ROOT . 'public/css/');
	define('JS', ROOT . 'public/js/');
	define('IMG', ROOT . 'public/img/');


	// set a constant that holds the project's "application" folder, like "/var/www/app".
	define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);

	//Global Variable For Language
	$GLOBALS['lang'] = "en";

	// load language file kept in app/arch/lang

	require_once(APP.'arch/lang/lang-setter.php');
	new LangSetter();
	//Language change action
	if(isset($_POST['changeLang'])){

		$GLOBALS['lang'] = $_POST['lang'];  // Storing Selected lang In global Variable

		$message = " Language Changed to: " . $GLOBALS['lang'] ;

		echo "<script type='text/javascript'>alert('$message');</script>";  // Displaying Selected lang
		
		require_once(APP.'arch/lang/lang-setter.php');
		new LangSetter();
		
	}	




	// load application config (error reporting etc.)
	require APP . 'arch/config/config.php';
	// load application class
	
	require APP . 'core/controller.php';
	require APP . 'core/view.php';



	new Controller();

	$app = new View($lang);






	
?>


</html>