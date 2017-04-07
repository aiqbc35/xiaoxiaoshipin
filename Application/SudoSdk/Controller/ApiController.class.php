<?php
namespace SudoSdk\Controller;
use Think\Controller;
class ApiController extends Controller {

	public function emailAdd ($data)
	{
		if ($data['email']) {

				if ($this->isEmail($data['email']) == false) {
					$info['status'] = 3;
					$info['msg'] = '请输入正确的邮箱！';
					return $info;
				}
				$ret = M('email')->where($data)->find();

				if ($ret) {
					$info['status'] = 4;
					$info['msg'] = '您的邮箱已订阅,请勿重复操作！';

					return $info;
				}

				if (M('email')->add($data)) {
					$info['status'] = 1;
					$info['msg'] = '感谢您的订阅,当本站网址发生变更时，我们会第一时间通过邮件通知您！';
				}else{
					$info['status'] = 5;
					$info['msg'] = '操作失败,请刷新重试！';
				}

			}else{
				$info['status'] = 2;
				$info['msg'] = '请输入邮箱！';
			}
			return $info;
	}


	private function isEmail ($email)
	{	
		$email = $email;
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";

		if ($email) {

			if (preg_match( $pattern, $email )) {
				return true;
			}else{
				return false;
			}

		}else{
			return false;
		}
	}

}