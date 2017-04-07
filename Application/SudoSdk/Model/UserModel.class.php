<?php
namespace SudoSdk\Model;
use Think\Model;
class UserModel extends Model{


	public function add ($data)
	{
		if ($data['username'] && $data['password']) {

			if ($this->emailCheck($data['username']) == false) {
				$info['status'] = 3;
				$info['msg'] = '不是合法的邮箱';
				return $info;
			}

			if (M('user')->where(array('username'=>$data['username']))->find()) {
				$info['status'] = 4;
				$info['msg'] = '用户名已被注册';
				renturn $info;
			}


			$data['password'] = md5($data['password']);
			$data['addtime'] = time();
			if (M('user')->add($data)) {
				$info['status'] = 1;
				$info['msg'] = '注册成功！';
			}else{
				$info['status'] = 5;
				$info['msg'] = '注册失败，请确认信息是否正确！';
			}

		}else{
			$info['status'] = 2;
			$info['msg'] = '邮箱及密码不能为空';
		}
		return $info;
	}

	/**
	 * [emailCheck 邮箱验证]
	 * @param  [type] $email [description]
	 * @return [type]        [description]
	 */
	private function emailCheck ($email)
	{
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
		if (preg_match($pattern, $email)) {
			return true;
		}else{
			return false;
		}
	}


	}