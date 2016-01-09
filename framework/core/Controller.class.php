<?php
class Controller{
	protected $loader;
	public function __construct(){
		$this->loader=new Loader();
	}
	//跳转方法
	public function jump($url,$messagg,$wait=3){
		if ($wait==0) {
			header("Location:$url");
		}else{
			header("refresh:$wait;url=$url");
			echo $messagg;
		}
		exit;
	}
}