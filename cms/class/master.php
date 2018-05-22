<?php
require_once('common.php');
class Master extends Common
{
	var $tableName = "master";
	function Master()
	{
		Common::Common();
	}
	//增加一个管理员帐户
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(UserName,`Password`)
				VALUES
				('$vars[UserName]','$vars[Password]')";
				//die($sql);
		if ($this->db->query($sql))
			return true;
		return false;
	}
	//更新管理员的信息(用户名、密码)
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET UserName='$vars[UserName]',`Password`='$vars[Password]' WHERE ID=$vars[ID]";
		return $this->db->query($sql);
	}
	//获得指定id的管理员信息
	function getVar($ID)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE ID=$ID",ARRAY_A);
	}
	//根据用户名获得用户id
	function getID($Title)
	{
		return $this->db->get_var("SELECT * FROM ".$this->tableName." WHERE `UserName`='$Title'");
	}
	//获得全部的管理员列表
	function getList($str)
	{
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str ORDER BY OID DESC";
		return $this->db->get_results($sql,ARRAY_A);
	}
	//删除指定的管理员
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>