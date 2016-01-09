<?php
//转义用户输入的数据
function deepslashes($data){
	//data有三种形式，单一变量，一维数组以及多维数组，要分开处理
	//如果为空，则返回空
	if (empty($data)){
		return $data;
	}
	return is_array($data) ? array_map("deepslashes", $data) : addslashes($data);
}

//转义输出的实体
function deepspecialchars($data){
	if(empty($data)){
		return $data;
	}

	return is_array($data) ? array_map("deepspecialchars", $data) : htmlspecialchars($data);
}