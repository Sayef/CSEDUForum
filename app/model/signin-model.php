<?php
	

	function checkValidity($dbobj, $dbConnection, $unEscapedID, $unEscapedpass)
	{

		$ID = mysqli_escape_string($dbConnection, $unEscapedID);
        $pass = mysqli_escape_string($dbConnection, $unEscapedpass);


		$sql = "SELECT password, name FROM user_profile where id = '$ID';";

		$result = $dbobj->selectData($dbConnection, $sql);
		

			while($row = $result->fetch_assoc())
			{
				if (password_verify($pass, $row["password"])) 
					return true;
				else return false;
			}
					
	}


?>