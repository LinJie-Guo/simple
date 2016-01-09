<?php
//框架启动类
class Farmework{
	//run方法
	public static function run(){
		self::init();
		self::autoload();
		self::dispatch();
	}
	//定义路径常量
	private static function init(){
		define('DS', DIRECTORY_SEPARATOR); //兼容斜杠
		define('ROOT', getcwd()); //绝对路径
		//网站根目录
		define('APP_PATH', './application'.DS);
		define('FARMEWORK_PATH', './framework'.DS);
		define('PUBLIC_PATH', './public'.DS);
		//MVC操作路径
		define('CONTROLLER_PATH', APP_PATH.'controllers'.DS);
		define('MODEL_PATH', APP_PATH.'models'.DS);
		define('VIEWS_PATH', APP_PATH.'views'.DS);
		define('CONFIG_PATH', APP_PATH.'config'.DS);
		define('VIEWCS_PATH', APP_PATH.'views_c'.DS);// 编译后的模板路径

		//基础框架操作路径
		define('CORE_PATH', FARMEWORK_PATH.'core'.DS);
		define('DB_PATH', FARMEWORK_PATH.'database'.DS);
		define('LIB_PATH', FARMEWORK_PATH.'libraries'.DS);
		define('HELP_PATH', FARMEWORK_PATH.'helpers'.DS);
		//确认平台，控制器和方法，index.php?p=index&c=index&a=index
		define('PLATFORM', isset($_GET['p'])?$_GET['p']:'home');
		define('CONTROLLER', isset($_REQUEST['c'])?$_REQUEST['c']:'index');
		define('ACTION', isset($_REQUEST['a'])?$_REQUEST['a']:'index');
		//定义控制器和视图目录
		define('CUR_CONTROLLER_PATH', CONTROLLER_PATH.PLATFORM.DS);
		define('CUR_VIEW_PATH', VIEWS_PATH.PLATFORM.DS);
		define('CUR_VIEWC_PATH', VIEWCS_PATH.PLATFORM.DS);
		//图片路径
		define('UPLOAD_PATH',PUBLIC_PATH.'uploads'.DS);

		//载入框架核心类
		require CORE_PATH."Loader.class.php";
		require CORE_PATH."Controller.class.php";
		require CORE_PATH."Model.class.php";
		require DB_PATH."Mysql.class.php";
		require CORE_PATH."Factory.class.php";

		$GLOBALS['config']=require CONFIG_PATH.'config.php';

		//开始session
		@session_start();
	}
	//路由分发
	private static function dispatch(){
		//实例化对象，并调用方法，对象名和方法名都是变量
		$controller_name=CONTROLLER.'Controller';
		$action_namt=ACTION.'Action';

		$controller=new $controller_name(); //实例化对象
		$controller->$action_namt();
	}
	//将load注册为自动加载
	private static function autoload(){
		spl_autoload_register(array(__CLASS__,'load'));
	}
	//自动载入方法
	private static function load($classname){
		//此处我们只需对控制器和模型进行自动加载
		if (substr($classname,-10)=='Controller') {
			require CUR_CONTROLLER_PATH.$classname.'.class.php';
			// echo APP_PATH;
		}elseif(substr($classname, -5)=='Model'){
			require_once MODEL_PATH.$classname.'.class.php';
		}else{

		}
	}
}