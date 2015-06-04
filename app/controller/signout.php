<?php

 class Signout extends Controller
 {


	public function index()
    {

    }

    public function controlls()
    {
        
        $this->session_data->endSession();
        header('location: ' . URL);
        exit();

    }
}


	
?>