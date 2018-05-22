<?php
require_once('common.php');
class Hr extends Common
{
	
	
	
	var $tableName = "hr";
	
	
	
	function Hr()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,Content,`Date`,EndDate,Click)
				VALUES
				('$vars[Title]','$vars[Content]','$vars[Date]','$vars[EndDate]',0)";
		$this->db->query($sql);
		$thisID = $this->db->insert_id;
		return $thisID;
	}
	
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET Title='$vars[Title]',Content='$vars[Content]',
				`Date`='$vars[Date]',EndDate='$vars[EndDate]'
				WHERE ID=$vars[ID]";
		return $this->db->query($sql);
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
	
	function setClick($ID){
		return $this->db->query("UPDATE ".$this->tableName." SET `Click`=Click+1 WHERE ID=$ID");
	}
	
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>