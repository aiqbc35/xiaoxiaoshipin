<?php
namespace SudoSdk\Controller;
use Think\Controller;

class LoginController extends Controller
{


	public function index ()
	{
		$this->display('index');
	}

	public function getLogin ()
	{
		if (IS_AJAX) {

			$data = I('post.');
			if (empty($data['username'])|| $data['passwd'] == '') {
				$info['status'] = 2;
				$info['info'] = '用户名、密码不能为空！';
				echo JSON($info);die;
			}

			$where['username'] = $data['username'];
			$where['passwd'] = md5($data['passwd']);

			$reslut = M('admin')->where($where)->find();

			if (empty($reslut)) {
				$info['status'] = 3;
				$info['info'] = '用户名密码不正确！';
				echo JSON($info);die;
			}

			if ($reslut['status']) {
				$info['status'] = 4;
				$info['info'] = '该用户已被冻结使用！';
				echo JSON($info);die;
			}

			$log['logintime'] = time();
			$log['loginip'] = get_client_ip();
			$log['id'] = $reslut['id'];
			M('admin')->save($log);

			$_SESSION['uid'] = $reslut['id'];
			$_SESSION['username'] = $reslut['username'];

				$info['status'] = 1;
				$info['info'] = U("Index/index");
				echo JSON($info);die;			

		}else{
			$info['status'] = 5;
			$info['info'] = '请勿非法操作！';
			echo JSON($info);die;
		}
	}


	public function logout ()
	{
		$_SESSION['uid'] = '';
		unset($_SESSION['uid']);
		unset($_SESSION['username']);
		session_destroy();
		$this->redirect('Login/index');die;
	}


}