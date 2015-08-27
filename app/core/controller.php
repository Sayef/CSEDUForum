<?php

	class Controller
	{

	    /**
	     * @var null dbobj
	     */
	    public $dbobj = null;

	    /**
	     * @var null  session data
	     */
	    public $session_data = null;

	    /**
	     * Whenever controller is created create a database connection using db-connector from libs/utility/db-connector.php in my case
	     */
	    function __construct()
	    {
	        	    
		 /**
         * @param object $dbobj is a database connection 
         */
         	require_once(APP . 'libs/utility/db-connector.php');
            $this->dbobj = DBConnector::initWithValue(DB_HOST,DB_USER,DB_PASS,DB_NAME);

           

           //start a session and keep the session data all through the session
           //language by default set English

			require_once(APP . 'libs/utility/session.php'); 

			$this->session_data = new Session("CSEDUForum", FALSE, 300, "home");
			if(!isset($_SESSION['lang'])){
				$data = array(
			                     
			                     'lang'       => "en"	
			                
			                 );
			    $this->session_data->addSession($data);
			}

			//for initial language load

            require_once(APP.'arch/lang/lang-setter.php');
            new LangSetter();


            //response to the change of language throughout the session
	        //Language change action
            if(isset($_POST['changeLang'])){

                $_SESSION['lang'] = $_POST['lang'];  // Storing Selected lang In session Variable

               // $message = " Language Changed to: " . $_SESSION['lang'];

               // echo "<script type='text/javascript'>alert('$message');</script>";  // Displaying Selected lang

                require_once(APP.'arch/lang/lang-setter.php');
            	new LangSetter();
                
                
            }   

            //Eror coding error handling
            if(!ini_get("display_errors")) {

        			$message = "Oopps!! Something went wrong!" ;
            		// Displaying error message when coding error message is not allowed to display

			   		echo "<script type='text/javascript'>alert('$message');</script>";  
			}

         
        }

	    

	}
?>