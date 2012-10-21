<?php defined('SYSPATH') or die('No direct script access.');

class Model_Instagram extends Model {
	
	const PATH = 'https://api.instagram.com/';
	
	private $v         = 'v1';
	private $client_id = '95f94e473c5f4151b4dc8c6d0fbe49d7';
	private $secret    = '2f9bcc10c14e4fc08574c925025396df';
	
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
	
	// give a latitude (lat) and longitude (lng), returns an Instagram location id. returns bool FALSE if none found
	public function search_location($params)
	{
		// init
		$request       = '';
		$response      = FALSE;
		$return        = 'first_result';
		$lat           = 0;
		$lng           = 0;
		$foursquare_id = 0;
		$distance      = 4000; //in meters
		extract($params);
		
		// create api call
		$client_id = $this->get_client_id();
		$path      = $this->get_path();
		$endpoint  = '/locations/search';
		if ($foursquare_id) 
		{
			$query = '?foursquare_v2_id='.$foursquare_id.'&distance='.$distance.'&client_id='.$client_id;
		}
		else
		{
			$query = '?lat='.$lat.'&lng='.$lng.'&distance='.$distance.'&client_id='.$client_id;
		}
		$url = $path.$endpoint.$query;
		
		// call, check and return
		$request  = Request::factory($url);
		$response = json_decode($request->execute());
		$check    = $this->check($response);
		if ( ! $check) 
		{
			return(FALSE);
		}
		else
		{
			if ($return === 'first_result' and isset($response->data['0'])) 
			{
				return($response->data['0']);
			}
			else
			{
				return($response->data);
			}
		}
	}
	
	public function get_location_media($params)
	{
		// init
		$request       = '';
		$response      = FALSE;
		$location_id   = 0;
		$min_timestamp = 0;
		$max_timestamp = 0;
		$min_id        = NULL;
		$max_id        = NULL;
		extract($params);
		
		// create api call
		$client_id = $this->get_client_id();
		$path      = $this->get_path();
		$endpoint  = '/locations/'.$location_id.'/media/recent';
		$query     = '?min_timestamp='.$min_timestamp.'&max_timestamp='.$max_timestamp.'&min_id='.$min_id.'&max_id='.$max_id.'&client_id='.$client_id;
		$url       = $path.$endpoint.$query;
		
		// call, check and return
		$request  = Request::factory($url);
		$response = json_decode($request->execute());
		$check    = $this->check($response);
		if ( ! $check) 
		{
			return(FALSE);
		}
		else
		{
			return($response->data);
		}
	}
	
	// error check for response call. Returns FALSE on error and TRUE on success.
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