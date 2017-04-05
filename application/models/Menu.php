<?php

define('REST_SERVER', 'http://backend.local');
define('REST_PORT', $_SERVER['SERVER_PORT']);

class Menu extends MY_Model {


	// constructor
	function __construct()
	{
		parent::__construct();

		$this->load->library(['curl', 'format', 'rest']); // load REST libraries
	}

	// return all the records
     function all()
     {
         $this->rest->initialize(array('server' => REST_SERVER));
         $this->rest->option(CURLOPT_PORT, REST_PORT);
         return $this->rest->get('/maintenance');
     }
}
