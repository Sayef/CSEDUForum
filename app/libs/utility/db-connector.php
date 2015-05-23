<?php



class DBConnector
{

	private $servername;
	private $username;
	private $password;
	private $dbname;
	private $conn;


	public function __cosntruct()
	{
		$this->servername 	= 'localhost';
		$this->username 	= 'root';
		$this->password 	= '';
		$this->dbname 		= 'mysql';
	}

	public static function initWithValue($server, $user, $pass, $db)
	{
		$newobj = new self();

		$newobj->servername = $server;
		$newobj->username 	= $user;
		$newobj->password 	= $pass;
		$newobj->dbname 	= $db;

		return $newobj;
	}


	private function executeQuery($sql)
	{

		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		
		
		if (!mysqli_set_charset($conn, "utf8")) {
		printf("Error loading character set utf8: %s\n", mysqli_error($conn));
		} else {
		$success = mysqli_character_set_name($conn);
		}

		   

		$result = null;

		if ($conn->connect_error)
		{
		    die("Connection failed: " . $conn->connect_error);
		}
		//$result = $conn->query("set character_set_results='utf8';");
		$result = $conn->query($sql);

		$conn->close();

		return $result;
	}

	public function insertData($sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($sql);
			if ($result)
			{
				return  "Success";
			}
			else
			{
			    	return  "Error";
			}
		}
		else
		{
			die('Error');
		}
	}

	public function deleteData($sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($sql);
			if ($result)
			{
				echo "Data deleted successfully\n";
			}
			else
			{
			   	return "Error";
			}
		}
		else
		{
			die('Wrong Delete Query: $sql');
			return "Error";

		}
	}

	public function selectData($sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($sql);

			return $result;
		}
		else
		{
			die('Wrong Select Query: $sql');
			return "Error";
		}
	}

	public function updateData($sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($sql);
			if ($result)
			{
				echo "Success";
			}
			else
			{
			    echo "Error";
			}
		}
		else
		{
			die('Wrong Update Query: $sql');
			return "Error";
		}
	}


}


?>
