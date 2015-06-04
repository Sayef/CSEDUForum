<?php 


class Session{

	/****************************************
	 * Private variable for creating session
	 ****************************************/	

	private $my_sess;
	
	/****************************************
	 * Private variable for session max time
	 ****************************************/
	private $_maxtime;
	
	/****************************************
	 * Private variable for the current time
	 ****************************************/
	private $_current;

	
	
	public function  __construct( $sess_name, $_timeout, $max, $login_page){
		
		
		if(session_name()!==$sess_name){

				// Name the session
				session_name( $sess_name );
				// Start the session
				session_start();
		}
		// Pass session variables to my_sess attribute
		// Session is passed by reference, in order
		// to edit global session variable directly
		$this->my_sess = &$_SESSION;
		
		// Verify if timeout is enabled or not
		if( $_timeout ){
			// Run inactivity logic 
			$this->verifyInactivity( $max, $login_page );
		}
	}
	
	public function addSession($data = array()){		
		
		if(is_array($data) && count($data) > 0){
			// If an array was passed,
			//  then grab all associative names
			//  and their respective values
			//  and place them in session variable
			foreach($data as $key => $value){
				$this->my_sess[$key] = $value;
			}
		}		 
	}
	

	
	public function getSessionID(){
		// Return the session id
		return session_id();
	}
	
	public function editSession($name, $value){
		// Edit an existing session variable
		// Will create one if it does not exists
		$this->my_sess[$name] = $value;
	}
	
	public function checkSession($name){
		// Verify if a session variable already exists
		return isset($this->my_sess[$name]);
	}
	
	public function getValue($name){
		// First verify if exists
		if($this->checkSession($name)){
			// if such session exists
			// then return the value
			return $this->my_sess[$name];
		}
		// otherwise return false
		return false;
	}

	public function endSession() { 
		// Unset all of the session variables. 
		session_unset(); 
		// If it's desired to kill the session, also delete the session cookie. 
		// Note: This will destroy the session, and not just the session data! 
		if (ini_get("session.use_cookies")) 
		{ 
			$params = session_get_cookie_params(); 
			setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"] );
		} 
		// Finally, destroy the session. 
		// Emtpy out the sessions array
		// then destroy the whole session
		$this->my_sess = array();
		session_destroy();

	}



	/*****************************************
	 * Logic to verify user inactivity
	******************************************/
	
	private function verifyInactivity( $max, $login ){
		
		if( ! $this->checkSession( 'Activity_Time' ) ){
			// Add Activity time session variable
			$this->addSession( array( 'Activity_Time' => time() ) );
		}
		// Set Max time in seconds
		// 300  =  5   minutes
		// 600  =  10  minutes
		// 1200 =  20  minutes
		$this->_maxtime = $max;
		
		// Set the current time
		$this->_current = time();
		
		// Set session Life
		$session_life = $this->_current - $this->get_value( 'Activity_Time' );
		
		// Verify that session has not expired
		// If expired, send to login page
		if( $session_life > $this->_maxtime ){
			// Get the page just visited
			$ref = urlencode( $_SERVER['PHP_SELF'] );
			// Destroy the session
			$this->destroy_sess();
			// Redirect the user to login page
			header( 'Location: '.$login.'r='.$ref );
			exit;
		}
		else{
			// If session has not expired, re-assign value to activity time
			$this->edit_sess( 'Activity_Time', time() );
		}
		
	}
}
/* End of file Simple_sessions.php */
?>
