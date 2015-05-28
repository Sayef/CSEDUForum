
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
            // load views
            require APP . 'arch/view//template/header.php';
            require APP . 'arch/view//template/navbar.php';
            require APP . 'arch/view/dashboard/index.php';
            require APP . 'arch/view/template/footer.php';
        }

        public function controlls()
        {

                
        }
       


    }
?>


