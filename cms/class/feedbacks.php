<?php
require_once('common.php');
class Feedbacks extends Common
{
	
	
	
	var $tableName = "feedbacks";
	
	
	
	function Feedbacks()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Name,Sex,Tel,Job,Email,`Date`,`Type`,Feedback)
				VALUES
				('$vars[Name]','$vars[Sex]','$vars[Tel]','$vars[Job]','$vars[Email]','".date('Y-m-d')."','$vars[Type]','$vars[Feedback]')";
		//die($sql);
		if ($this->db->query($sql))
			return $this->db->insert_id;
		return false;
	}
	
	function getVar($ID)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE ID=$ID",ARRAY_A);
	}
	
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
	
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>