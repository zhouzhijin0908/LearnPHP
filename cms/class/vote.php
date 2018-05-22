<?php
require_once('common.php');
class Soft extends Common
{



	var $tableName = "votes";



	function Vote()
	{
		Common::Common();
	}

	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Category,Channel,PK,Message,user_id,`Date`)
				VALUES
				('$vars[Category]','$vars[Channel]','$vars[PK]','$vars[Message]','$vars[user_id]','".date('Y-m-d')."')";
		//die( $sql);
		$this->db->query($sql);
		//$this->debug();
		//die();
		$thisID = $this->db->insert_id;
		return $thisID;
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