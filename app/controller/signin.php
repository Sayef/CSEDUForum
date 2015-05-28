<?php

 class Signin extends Controller
 {

 	public function getMessage($message)
 	{ 
	
		echo "<script type='text/javascript'>alert('$message');</script>";
	
	}

	public function index()
    {
        // load views
        //require APP . 'arch/view//template/header.php';
        //require APP . 'arch/view/......?????/index.php';
        //require APP . 'arch/view/template/footer.php';

        header('location: ' . "dashboard");
        exit();
    }

    public function controlls()
    {

		

    }
}


	
?>