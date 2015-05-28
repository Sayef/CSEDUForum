
<?php

    class Home extends Controller
    {
        /**
         * PAGE: index
         * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
         */


        public function index()
        {
            // load views
            require APP . 'arch/view//template/header.php';
            require APP . 'arch/view/home/index.php';
            require APP . 'arch/view/template/footer.php';
        }

        public function controlls()
        {


            if(isset($_POST['signin']))
            {
       
                        $ID = $_POST['ID'];
                        $pass = $_POST['pass'];

                        $dbConnection = $this->dbobj->initConnection();

                        require APP . 'model/signin-model.php';

                        if(checkValidity($this->dbobj, $dbConnection, $ID, $pass)==true)
                        {

                            header('location: ' . URL . "signin");
                            exit();

                        }
                        else
                        {
                            $message = $GLOBALS['signinfailuremessage'];
                            echo "<script type='text/javascript'>alert('$message');</script>";  // Displaying Selected lang
                        }

            }

        }

    }
?>


