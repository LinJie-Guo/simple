<?php
	/**
	* 项目中的工厂类
	*/
	class Factory{
		public static function M($model_name,$model_table=''){
		static $model_list=array();
		//拼凑完整的model名
		$model_class_name=$model_name.'Model';
		//判断当前的model是否实例化
			if (!isset($model_list[$model_name])) {

				$model_list[$model_name]=new $model_class_name($model_table);
			}
			return $model_list[$model_name];
		}
	}