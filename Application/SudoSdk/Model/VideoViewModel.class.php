<?php
namespace SudoSdk\Model;
use Think\Model\ViewModel;
class VideoViewModel extends ViewModel {
   public $viewFields = array(
     'video'=>array('id','name','image','link','hit','addtime','sort','service','_type'=>'left'),
     'sort'=>array('name'=>'sortname','_on'=>'video.sort=sort.id'),
     'service'=>array('link'=>'server','_on'=>'video.service=service.name'),
   );
 }