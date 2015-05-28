<?php



class DBConnector
{

	private $servername;
	private $username;
	private $password;
	private $dbname;


	public function __construct()
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

	public function initConnection()
	{
		return new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}


	private function executeQuery($conn, $sql)
	{

	
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

	public function insertData($conn, $sql)
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

	public function deleteData($conn, $sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($conn, $sql);
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

	public function selectData($conn, $sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($conn, $sql);

			return $result;
		}
		else
		{
			die('Wrong Select Query: $sql');
			return "Error";
		}
	}

	public function updateData($conn, $sql)
	{
		if($sql)
		{
			$result = $this->executeQuery($conn, $sql);
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
