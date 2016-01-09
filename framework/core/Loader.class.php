<?php
//加载类库和辅助函数
class Loader{
	//加载类库
	public function library($libname){
		require LIB_PATH."{$libname}.class.php";
	}
	//加载辅助函数
	public function helper($helper){
		require HELP_PATH."{$helper}_helper.php";
	}
}