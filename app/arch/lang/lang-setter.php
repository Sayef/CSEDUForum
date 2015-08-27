<?php
Class LangSetter{


	public function __construct(){

			//language from the session
			$lang = $_SESSION['lang'];


			//Read the path list to iterate through those paths to get the variable names 
			$file = APP . 'arch/lang/varlist_path.xml'; 
			$branch = simplexml_load_file($file);

			// for every path
			foreach ($branch->children() as $child){

				$path = (string)$child;

				//we find the file where variable names and their corresponding values are kept
				$file = APP . 'arch/lang/' . $lang . $path;
				$var_branch = simplexml_load_file($file);

				//for every page
				foreach ($var_branch->children() as $var_child) {

					//we find the variable name by getname function 
					$variable = (string)$var_child->getname();

					//now set your variable values according to their language
					$_SESSION[$variable] = (string)$var_child;

				}

		}
	}
}


?>

