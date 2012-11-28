<?php

class User {

	public static function insert ($username, $real_name) {
		DB::table('users')->insert(array(
				'username' => $username,
				'real_name' => $real_name
			));
	}

	public static function getAll (){
		$users = DB::table('users')->get(
			array(
				'username',
				'real_name'
				)
			);

		return $users;
	}

}