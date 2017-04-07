<?php
namespace Mobile\Controller;
use Think\Controller;

class IndexController extends Controller {

	static private $model;

	public function _initialize()
	{
		self::$model = D('SudoSdk/Video');
	}


	public function index(){
        $this->home = 1;
        $this->display('index');
    }

   public function videoList ()
   {
        $this->videolist = 1;
        $this->display('videoList');
   }

   public function login ()
   {
      $this->display('login');
   }

   public function reg ()
   {
      $this->display('reg');
   } 

   public function video ()
   {
       $this->videolist = 1;
       $this->display('video');
   }
   /**
    * [newTopList 轮播图推荐]
    * @return [type] [description]
    */
   public function newTopList ()
   {
   		$model = self::$model;
   		
        $where = 'status = 1';
        $order = 'hit DESC';
        $limit = '0,6';
        $ret = $model->getList($where,$order,$limit);
        echo JSON($ret);
   }
   /**
    * [newList 首页最新]
    * @return [type] [description]
    */
   public function newList ()
   {

        $where = 'status = 1';
        $order = 'id DESC';
        $limit = '0,10';
        $ret = self::$model->getList($where,$order,$limit);

        echo JSON($ret);
   }


   /**
    * [videoListApi 视频列表]
    * @return [type] [description]
    */
   public function videoListApi ()
   {

    $where = 'status = 1';
    $order = 'id DESC';
    $page = 0;
    $nextpage = 20;
    if (I('get.page') > 1) {
        $page = $nextpage * (I('get.page') - 1);
    }
    $limit = $page.','.$nextpage;
    $ret = self::$model->getList($where,$order,$limit);
    echo JSON($ret);

   }

   public function getOne ()
   {
        if (IS_AJAX) {

                $data['id'] = I('post.id');
                if ($data['id'] > 0) {
                    $model = D('SudoSdk/VideoView');
                    $ret = $model->where($data)->find();
                    if ($ret) {
                        $info['status'] =  1;
                        $info['msg'] = $ret;
                        self::$model->updateHit($data);
                    }else{
                        $info['status'] =  2;
                        $info['msg'] = '没有该影片！';
                    }
                    echo JSON($info);die;
                }else{
                    $info['status'] =  3;
                    $info['msg'] = 'id不能为空！';
                    echo JSON($info);
                }
        }

   }


}