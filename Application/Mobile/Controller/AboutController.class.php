<?php
namespace Mobile\Controller;
use Think\Controller;
class AboutController extends Controller{

	public function index ()
	{
		$this->about = 1;
		$this->display('index');
	}

	public function sendEmail()
	{
		if (IS_AJAX){
			$data['email'] = I('post.email');
			if ($data['email']) {

				$model = A('SudoSdk/Api');
				$ret = $model->emailAdd($data);
				echo JSON($ret);

			}else{
				$info['status'] = 3;
				$info['msg'] = '邮箱不能为空！';
				echo JSON($info);
			}
		}
	}
}