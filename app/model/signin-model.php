<?php
	

	function checkValidity($dbobj,  $ID, $pass)
	{

		$sql = "SELECT password FROM user_profile where id = '$ID';";

		$result = $dbobj->selectData($sql);
		if($result){

			while($row = $result->fetch_assoc())
			{
				if (password_verify($pass, $row["password"])) 
					return true;
				else return false;
			}
		}

	}


?>