<?php defined('SYSPATH') or die('No direct script access.');

class Model_Foursquare extends Model {

	const PATH = 'https://api.foursquare.com/';
	const V    = 20121021;
	
	private $v         = 'v2';
	private $client_id = 'QOZICTR05PYYYY2DOODVWREMRBGELCPCVNIZBIUPIU5EY5SR';
	private $secret    = 'WWCPQQC4YXOOE2BJYCL1U2QXWU2RFLGDUKXHMYRPQHLFQG4S';
	
	public function set_client_id($client_id)
	{
		$this->client_id = $client_id;
	}
	
	public function set_secret($secret)
	{
		$this->secret = $secret;
	}
	
	public function set_v($v)
	{
		$v = $this->v;
	}
	
	private function get_client_id()
	{
		return($this->client_id);
	}
	
	private function get_secret()
	{
		return($this->secret);
	}
	
	private function get_v()
	{
		return($this->v);
	}
	
	private function get_path()
	{
		return(self::PATH.$this->v);
	}
	
	public function search_venue($params)
	{
		// init
		$request = '';
		$response = FALSE;
		$limit  = 3;
		$query  = '';
		$intent = 'global';
		extract($params);
		
		// create api call
		$client_id = $this->get_client_id();
		$secret    = $this->get_secret();
		$path      = $this->get_path();
		$endpoint  = '/venues/search';
		$query     = '?query='.$query.'&intent='.$intent.'&limit='.$limit.'&client_id='.$client_id.'&client_secret='.$secret.'&v='.self::V;
		$url       = $path.$endpoint.$query;
		
		// send, check and return
		$request = Request::factory($url);
		$response = json_decode($request->execute());
		$check = $this->check($response);
		if ( ! $check) 
		{
			return(FALSE);
		}
		else
		{
			return($response->response->venues);
		}
	}
	
	public function check($response)
	{
		if ($response AND $response->meta->code !== 200)
		{
			Kohana::$log->add(Log::ERROR, 'Instagram search_location code: '.$response->meta->code.' Type: '.$response->meta->error_type.' Message: '.$response->meta->error_message);
			return(FALSE);
		}
		else
		{
			return(TRUE);
		}
	}
	
} // End
