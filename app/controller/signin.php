<?php

 class Signin extends Controller
 {

 	public function getMessage($message)
 	{ 
	
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}

	public function index()
    {

    }

    public function controlls()
    {
        
        header('location: ' . "dashboard");
        exit();
		

    }
}


	
?>