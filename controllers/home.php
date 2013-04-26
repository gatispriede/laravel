<?php

class Home extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	private $model = 'navigation';

	public function index()
	{
		//model::load('navigation');
		$data['navigation'] = Route::model('home@index','navigation@get_values');
		print_r($data['navigation']);
		return View::make('page', $data);
	}

}