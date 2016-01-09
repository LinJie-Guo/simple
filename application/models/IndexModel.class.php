<?php
//测试
class IndexModel extends Model{
	public function index(){
	$sql="select * from $this->table";
	return $this->db->getAll($sql);
	}
}