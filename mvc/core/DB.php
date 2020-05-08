<?php

	class DB{

	    public $con;

	    public function __construct(){
	    	global $servername;
	    	global $username;
	    	global $password;
	    	global $dbname;
	        $this->con = mysqli_connect($servername, $username, $password);
	        mysqli_select_db($this->con, $dbname);
	        mysqli_query($this->con, "SET NAMES 'utf8'");
	    }
	    // public function connect(){
	    // 	global $servername;
	    // 	global $username;
	    // 	global $password;
	    // 	global $dbname;
	    // 	$this->con = mysqli_connect($this->servername, $this->username, $this->password);
	    //     mysqli_select_db($this->con, $this->dbname);
	    //     mysqli_query($this->con, "SET NAMES 'utf8'");
	    // }
	    // public function disconnect(){
	    // 	$this->con = null;
	    // }

	}

?>