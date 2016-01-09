<?php
class BaseController extends Controller{
	//构造方法，在构造方法中调用checkLogin
	public function __construct(){
		parent::__construct();
		$this->Smarty();
	}
	//初始化Smarty配置
	public function Smarty(){
		// 实例化对象
		$this->loader->library('Smarty\\smarty');
		$this->smarty=new Smarty;
		//设置缓存路径
		$this->smarty->cache_dir=APP_PATH.'cache'.DS.PLATFORM;
		//初始化配置
		$this->smarty->setTemplateDir(CUR_VIEW_PATH);
		$this->smarty->setCompileDir(CUR_VIEWC_PATH);
	}
}