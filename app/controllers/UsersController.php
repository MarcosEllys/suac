<?php

class UsersController extends BaseController{

	public function index()
	{

		$query = User::paginate(5);

		$vars = array('users' => $query);

		$this->layout->content = View::make('users.index',$vars);

	}
}