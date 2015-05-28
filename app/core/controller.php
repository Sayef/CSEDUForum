<?php

	class Controller
	{

	    /**
	     * @var null dbobj
	     */
	    public $dbobj = null;

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
         
        }

	    

	}
?>