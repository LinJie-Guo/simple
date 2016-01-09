<?php

/**
* 文件上传类，实现单文件上传
*/
class Upload{
	protected $_img_max;
	protected $_img_path;
	protected $_img_dir;
	protected $_img__prefix;
	protected $_img_postfix;

	//初始化文件信息
	public function __construct(){
		$this->_img_max=2000000; //图片最大2M
		$this->_img_path='./'; //图片子目录位置
		$this->_img_dir=date('YmdH');//确定子目录名
		$this->_img__prefix='shop_'; //图片前缀
		$this->_img_postfix=array('.gif','.jpg','.png','.bmp');
	}
	public function __set($p,$v){
		$this->$p=$v;
	}
	private $_error;//上传的错误信息
	public function getError() {
		return $this->_error;
	}
	public function uploadFile($file){
		if ($file['error']!==0) {
			$this->_error = '文件上传错误！';
			return false;
		}
		//判断图片大小
		if ($this->_img_max<$file['size']) {
			$this->_error = '文件大小不得超过:'.$this->_img_max.'k';
			return false;
		}
		// 验证文件格式
		if (!in_array(strrchr($file['name'],'.'), $this->_img_postfix)) {
			$this->_error = '文件格式不正确';
			return false;
		}
		//判断是否创建子目录
		// echo $this->_img_path.$this->_img_dir;die;
		if (!is_dir($this->_img_path.$this->_img_dir)) {
			mkdir($this->_img_path.$this->_img_dir);
		}
		// 移动文件
		$uploaded_file='/'.uniqid($this->_img__prefix,true).strrchr($file['name'],'.');
		// echo $uploaded_file;die;
		if ($img_file=move_uploaded_file($file['tmp_name'],$this->_img_path.$this->_img_dir.$uploaded_file)) {
			// echo '文件上传成功'.'<br/>';
			return $this->_img_dir.$uploaded_file;
		} else {
			$this->_error = '移动失败';
			return false;
		}
	}
}