<?php
require_once('common.php');
class Links extends Common
{
	
	
	
	var $tableName = "links";
	
	
	
	function Links()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,Url)
				VALUES
				('$vars[Title]','$vars[Url]')";
		$this->db->query($sql);
		$thisID = $this->db->insert_id;
		return $thisID;
	}
	
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET Title='$vars[Title]' WHERE ID=$vars[ID]";
		return $this->db->query($sql);
	}

	function getVar($ID)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE ID=$ID",ARRAY_A);
	}

	
	function getList($str = '')
	{
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str";
		//die($sql);
		return $this->db->get_results($sql,ARRAY_A);
	}
	
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
	
	function setPic($ID,$Pic)
	{
		return $this->db->query("UPDATE ".$this->tableName." SET Image='$Pic' WHERE ID=$ID");
	}
}
?>