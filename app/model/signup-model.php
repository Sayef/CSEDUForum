<?php
	

	function isUserAlreadyExist($dbobj, $ID)
	{
		


		$result = null;

		$sql = "SELECT id FROM user_profile where id = '$ID';";
		

		$result = $dbobj->selectData($sql);
		
		
		if($result) 			
			return false;		
		else
			return true;
		
	}

	function isEmailAlreadyExist($dbobj,  $email)
	{


		$result = null;

		$sql = "SELECT email FROM user_profile where email = '$email';";
		

		$result = $dbobj->selectData($sql);
		
		if($result) 
			return false;
		else 
			return true;		
		
	}

	//UE means unescaped

	function signupUser($dbobj, $ID, $pass, $name, $email, $DOB, $DOS, $profession, $pro_pic)
	{

        $sql = "INSERT INTO user_profile (id, password, name, email, date_of_birth, signup_date, Profession, profile_pic) VALUES ('$ID','$pass','$name', '$email','$DOB', '$DOS', '$profession', '$pro_pic');";
        
						
		return $dbobj->insertData($sql);

					
	}




?>