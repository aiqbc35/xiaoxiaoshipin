<?php
namespace Mobile\Controller;
use Think\Controller;

class UserController extends Controller {

	static private $model;

	public function _initialize()
	{
		self::$model = D('SudoSdk/User');
	}

	public function add ()
	{
		
	}

}