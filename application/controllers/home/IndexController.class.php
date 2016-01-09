<?php
//首页控制器
class IndexController extends BaseController{
	//首页展示
	public function IndexAction(){
		$indexModel=Factory::M('Index','admin');
		//开启缓存
		$this->smarty->caching=1;

		$this->smarty->assign('indexs',$indexModel->index());
		$this->smarty->assign('test','test');
		//加载模板
		$this->smarty->disPlay('index.html');
	}
}