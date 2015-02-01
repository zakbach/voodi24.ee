<?php

class ThreewayController extends Controller {
	
	public static function index() {

		return View::make('index', array(
			'header' => View::make('header'),
			'footer' => View::make('footer')
		));

	}

	public static function add() {

		if(Input::all()) {

			$sex = Input::get('sex');
			$looking_for = Input::get('looking_for');
			$location = Input::get('location');
			$content = Input::get('content');

			$post_id = DB::table('posts')->insertGetId(array(
				'sex' => $sex,
				'looking_for' => $looking_for,
				'location' => $location,
				'content' => $content,
				'status' => 'active', // remove this later,
				'time' => time()
			));

			#return Redirect::to('/activate/'.$post_id); // use this later

			$msg = 'Kuulutus on edukalt lisatud.';

		} else {

			$msg = false;

		}

		return View::make('add', array(
			'header' => View::make('header'),
			'msg' => $msg
		));

	}

	public function getResults() {

		if(Input::all()) {

			$sex = Input::get('sex');
			$looking_for = Input::get('looking_for');
			$location = Input::get('location');

			if($location === 'all') {

				$results = DB::table('posts')->where('sex', $looking_for)->where('looking_for', $sex)->get();

			} else {

				$results = DB::table('posts')->where('location', $location)->where('sex', $looking_for)->where('looking_for', $sex)->get();

			}

			return View::make('search-results', array(
				'header' => View::make('header'),
				'results' => $results
			));

		}

	}

}
