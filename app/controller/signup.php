<?php


    class Signup extends Controller
    {
        /**
         * PAGE: index
         * This method handles what happens when you move to http://yourproject/dashboard/index (which is the default page btw)
         */
        /* Declaring Model for homeModel*/
    

        public function index()
        {
            // load views
            require APP . 'arch/view/template/header.php';
            require APP . 'arch/view/signup/index.php';
            require APP . 'arch/view/template/footer.php';
        }

        public function controlls()
        {

                if(isset($_POST['submit_signup']))
				{
					$ID = $_POST['ID'];
					$pass = $_POST['pass']; 
					$hashpass = password_hash($pass, PASSWORD_DEFAULT);
					$name = $_POST['name'];
					$email = $_POST['email'];
					$DOB = $_POST['DOB'];
					$DOS = $_POST['DOS'];
					$profession = $_POST['profession'];	
					$pro_pic = $_POST['pro_pic'];

					
					require APP . 'model/signup-model.php';
					

			        if(!isEmailAlreadyExist($this->dbobj, $email)  && !isUserAlreadyExist($this->dbobj, $ID))
			        {
			
							if(signupUser($this->dbobj, $ID, $hashpass, $name, $email, $DOB, $DOS, $profession, $pro_pic)){
				        		
				        		$message = $GLOBALS['signupsuccess'] . " " . URL;
				           		echo "<script type='text/javascript'>alert('$message');</script>"; 
				           		header('location: ' . URL . "home");
				           
				           	}
				           	else {
				           		 $message = $GLOBALS['signuperror'];
				           		 echo "<script type='text/javascript'>alert('$message');</script>";
				           	}
				    }

			  
			        else
			        {
			            $message = $GLOBALS['signuperror'];
			            echo "<script type='text/javascript'>alert('$message');</script>";
			             
			        }
			        unset($_POST['submit_signup']);				

			        
			    }

    	}
	}
?>

