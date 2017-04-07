<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

	static private $model;

	public function _initialize()
	{
		self::$model = D('SudoSdk/Video');
	}

	public function index ()
	{
  		$this->display('index');       
	}

	public function getList ()
    {
        	$model = self::$model;
            $where = 'status = 1';
            $order = 'id DESC';
            $limit = '0,24';
            $ret = $model->getList($where,$order,$limit);
            $Page       = new \Think\Page($ret['total'],24);
            $this->show       = $Page->show2();  
        $this->display('list');
    }

    public function video ()
    {
       $this->display('video');
    }

	public function getTop ()
    {
        if (is_AJAX) {
        	$model = self::$model;

            $where = 'status = 1';
            $order = 'hit DESC';
            $limit = '0,6';
            $ret = $model->getList($where,$order,$limit);

            echo JSON($ret);
        }
    }
    public function getNewList ()
    {
        if (is_AJAX) {
            $model = self::$model;
            $where = 'status = 1';
            $order = 'id DESC';
            $limit = '0,24';
            $ret = $model->getList($where,$order,$limit);
            echo JSON($ret);
        }
    }  

    public function getMovieList ()
    {
        if (is_AJAX) {
            $model = self::$model;
            $where = 'status = 1';
            $order = 'id DESC';
            $page = 24;
            $nextpage = 24;
            if (I('get.page') > 1) {
                $page = ($nextpage * (I('get.page') - 1)) + $page;
            }
            $limit = $page.','.$nextpage;
            $ret = $model->getList($where,$order,$limit);
            echo JSON($ret);
        }
    }
    public function getone () 
    {
        if (is_AJAX) {
            $where['id'] = I('post.id');
            if ($where['id'] > 0) {
              $model = D('SudoSdk/VideoView');             
              $ret = $model->where($where)->find();
              if ($ret) {
                    $info['status'] = 1;
                    $info['msg'] = $ret;
                    self::$model->updateHit($where);
              }else{
                    $info['status'] = 3;
                    $info['msg'] = '没有该影片！';
              }
              echo JSON($info);die;
            }else{
                $info['status'] = 2;
                $info['msg'] = '没有该影片！';
                echo JSON($info);die;
            }
        }
    } 

}