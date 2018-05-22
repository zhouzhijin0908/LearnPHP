<?php
require_once('common.php');
class Articles extends Common
{
	var $tableName = "articles";
	function Articles()
	{
		Common::Common();
	}
	//添加文章方法
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,Content,Click,Category,`Date`)
				VALUES
				('$vars[Title]','$vars[Content]',0,'$vars[Category]','".date('Y-m-d')."')";
		if ($this->db->query($sql))
			return $this->db->insert_id;
		return false;
	}
	//更新文章方法
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET
		`Title`='$vars[Title]',`Content`='$vars[Content]'
		WHERE ID=$vars[ID]";
		return $this->db->query($sql);
	}
	//获得指定id的文章内容
	function getVar($ID)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE ID=$ID",ARRAY_A);
	}
	//获得全部文章列表
	function getList($str = NULL,$page_size = 0,$page = 0)
	{
		$this->recordNum = $this->db->get_var("SELECT COUNT(ID) AS n FROM ".$this->tableName." WHERE 1 $str");
		if (1 > $this->recordNum)
			return NULL;
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str ";
		if (1 < $page_size && 0 < $page)
			$sql .= 'LIMIT '.($page-1)*$page_size.','.$page_size;
		return $this->db->get_results($sql,ARRAY_A);
	}
	//更新点击数
	function setClick($ID){
		$sql = "UPDATE ".$this->tableName." SET
		Click=Click+1
		WHERE ID=$ID";
		return $this->db->query($sql);
	}
	//删除指定的文章
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>