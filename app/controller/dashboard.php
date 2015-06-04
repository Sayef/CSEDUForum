
<?php

    class Dashboard extends Controller
    {
        /**
         * PAGE: index
         * This method handles what happens when you move to http://yourproject/dashboard/index (which is the default page btw)
         */
        /* Declaring Model for homeModel*/
    

        public function index()
        {
            // load views if signed in
            if(isset($_SESSION['userid'])){
                require APP . 'arch/view//template/header.php';
                require APP . 'arch/view//template/navbar.php';
                require APP . 'arch/view/dashboard/index.php';
                require APP . 'arch/view/template/footer.php';
            }
            else{
                header('location: ' . URL);
                exit();
            }
        }

        public function controlls()
        {
            if(isset($_SESSION['userid'])){
                 require APP . 'controller/navbar.php';
             }
        }
       


    }
?>


