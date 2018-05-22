<?php
require_once('common.php');
class Soft extends Common
{



	var $tableName = "soft";



	function Soft()
	{
		Common::Common();
	}

	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,Content,`Date`,Downloads)
				VALUES
				('$vars[Title]','$vars[Content]','".date('Y-m-d')."',0)";
		//die( $sql);
		$this->db->query($sql);
		//$this->debug();
		//die();
		$thisID = $this->db->insert_id;
		return $thisID;
	}

	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET Title='$vars[Title]',Content='$vars[Content]'
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

	function setFile($ID,$Url){
		return $this->db->query("UPDATE ".$this->tableName." SET `File`='$Url' WHERE ID=$ID");
	}

	function setDown($ID){
		return $this->db->query("UPDATE ".$this->tableName." SET `Downloads`=Downloads+1 WHERE ID=$ID");
	}

	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>