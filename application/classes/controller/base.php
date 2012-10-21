<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {

	public function action_index()
	{
		$q              = 'eiffle tower';
		$foursquare_ids = array();
		$foursquare_id  = ''; //foursquare uses strings for ids
		$images         = new stdClass;
		
		// get foursquare location id
		$f = new Model_Foursquare();
		$foursquare_ids = $f->search_venue(array('query' => $q, 'limit' => 1));
		$foursquare_id = $foursquare_ids['0']->id;
		
		// get images associated with foursquare location
		$i = new Model_Instagram();
		$result = $i->search_location(array('foursquare_id' => $foursquare_id, 'return' => 'first_result'));
		if ($result) 
		{
			$images = $i->get_location_media(array('location_id' => $result->id));
		}
		
		$view = new View('home');
		$view->images = $images;
		$this->response->body($view);
	}

} // End