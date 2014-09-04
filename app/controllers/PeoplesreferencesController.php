<?php

class PeoplesreferencesController extends BaseController{

	protected $layout = '/layout/master';

	public function index()
	{
		$this->layout->content =  'Hello in hell';
	}
}