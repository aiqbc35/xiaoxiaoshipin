<?php
namespace Mobile\Controller;
use Think\Controller;

class UserController extends Controller {

	static private $model;

	public function _initialize()
	{
		self::$model = D('SudoSdk/User');
	}

	public function index ()
	{
		$this->useract = 1;
		$this->display('index');
	}

	public function add ()
	{
		if (IS_AJAX) {
			$data = I('post.');
			$info = self::$model->add($data);
			if ($info['status'] == 1) {
				$info['url'] = U('User/index');
			}
			return $this->ajaxReturn($info);
		}
	}

}