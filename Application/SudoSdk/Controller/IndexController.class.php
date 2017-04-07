<?php
namespace SudoSdk\Controller;
use Think\Controller;
class IndexController extends CommonController {

	public function _initialize ()
    {
        parent::_initialize();              
        $this->building_mune = 1;
    }

    public function index(){
    	$this->list_mune = 1;
    	$model = D('VideoView');
        $where['status'] = 1;
    	$this->list = $model->where($where)->order('id DESC')->select();
        $this->display('index');
    }

    public function add () {
    	$this->video_add = 1;
    	if (I('get.id')) {
    		$where['id'] = I('get.id');
    		$this->info = M('video')->where($where)->find();
    	}
    	$this->SortList = M('sort')->select();
    	$this->display('add');
    }

    public function updateStatus ()
    {
        $this->updatestatus_mune = 1;
        $model = D('VideoView');
        $where['status'] = 0;
        $this->list = $model->where($where)->order('id DESC')->select();
        
        $this->display('updateStatus');
    }

    public function updateOk ()
    {
        if (IS_AJAX) {
            $where['id'] = I('post.id');
            if ($where['id']) {

                $data['status'] = 1;

                if (M('video')->where($where)->save($data)) {
                     $info['status'] = 1;
                     $info['msg'] = '确认成功';
                }else{
                    $info['status'] = 3;
                     $info['msg'] = '操作失败';
                }


            }else{
                $info['status'] = 2;
                $info['msg'] = '请选择！';
            }
            echo JSON($info);
        }
    }


    public function addHalt ()
    {
    	if (IS_POST) {
    		$data = I('post.');
    		if ($data['name'] && $data['link']) {

    			$log['name'] = $data['name'];
    			$log['link'] = $data['link'];
    			$log['sort'] = $data['sort'];
    			$log['addtime'] = time();

    			
    			if ($_FILES['image']['error'] == 0 && $_FILES['image']['size'] > 0) {
    				$log['image'] = $this->upload();
    			}

    			if ($data['id'] > 0) {
    				$log['id'] = $data['id'];
    				$result = M('video')->save($log);
    			}else{
    				$result = M('video')->add($log);
    			}

    			
    			if ($result) {
    				$this->success('OK',U('index'));
    			}else{
    				$this->error('Error');
    			}

    		}else{
    			$this->error('name and link is empty');
    		}
    	}
    }


    public function delete () {
    	if (IS_AJAX) {
    		$where['id'] = I('post.id');

    		if (M('video')->where($where)->delete()) {
    			$info['status'] = 1;
    			$info['info'] = 'OK';
    		}else{
    			$info['status'] = 2;
    			$info['info'] = 'Error';
    		}
    		echo JSON($info);
    	}
    }

    public function upload(){
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
	    $upload->savePath  =     ''; // 设置附件上传（子）目录
	    // 上传文件 
	    $info   =   $upload->upload();
	    if(!$info) {// 上传错误提示错误信息
	        return $this->error($upload->getError());
	    }else{// 上传成功
	        return $info['image']['savepath'].$info['image']['savename'];
	    }
	}

}