<?php

	class Controller
	{
		/**
		* @var null Database Connection
		*/
		public $db = null;
		/**
		* @var null Model
		*/
		public $model = null;
		/**
		* Whenever controller is created, open a database connection too and load "the model".
		*/
		function __construct()
		{
				require_once('../../architecture/config/config.php');

				$dbobj = DBConnector::initWithValue('localhost','root','itsmylife','FORUM');
		
			$this->loadModel();
		}
	
		/**
		* Loads the "model".
		* @return object model
		*/
		public function loadModel()
		{
			require APP . '/model/model.php';
			// create new "model" (and pass the database connection)
			$this->model = new Model($this->db);
		}

	}
?>