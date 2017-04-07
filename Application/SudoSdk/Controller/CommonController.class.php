<?php
namespace SudoSdk\Controller;
use Think\Controller;
class CommonController extends Controller {

	static protected $userid = null;

	public function _initialize ()
	{
		if (!isset($_SESSION['uid']) || $_SESSION['uid'] == '') {
			$this->redirect('Login/index');die;
		}else{			
			self::$userid = $_SESSION['uid'];
		}

	}

}