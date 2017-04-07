<?php
namespace SudoSdk\Model;
use Think\Model;
class VideoModel extends Model{

	public function getList ($where='',$order = '',$limit = '')
	{
		$model = M('video');
		
		$result = $model->where($where)->order($order)->limit($limit)->select();
		$total = $model->where($where)->count();
		$data['list'] = $result;
		$data['total'] = $total;
		return $data;
	}

	public function updateHit ($data)
	{
		if (!empty($data)) {
			M('video')->where($data)->setInc('hit');
		}
	}

}