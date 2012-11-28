<?php

class Twitter_Controller extends Base_Controller {

	public function action_index() {

		$users = User::getAll();

		$data = array(
				'users' => $users
			);

		return View::make('twitter.search', $data);
	}

	public function action_results() {
		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);

		$twitter = new Twitter();
		$twitter_search = $twitter->searchTweetsByUser($search_term);
 
		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search
		);

		return View::make('twitter.results', $data);
	}
	
	public function action_add() {
		return View::make('twitter.add');
	}

	public function action_search() {
	
		$username = Input::get('username');
		$real_name = Input::get('real_name');
		if ($username != null || $real_name != null){
			User::insert($username, $real_name);
		}

		$users = User::getAll();

		$data = array(
				'users' => $users
			);

		return View::make('twitter.search', $data);
	}

}

//877 7057625
//200020000002553203