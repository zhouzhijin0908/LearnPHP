<?php
require_once('common.php');
class Prices extends Common
{
	
	
	
	var $tableName = "prices";
	
	
	
	function Prices()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,`Now`,`Level`,`Max`,`Min`,`Date`)
				VALUES
				('$vars[Title]','$vars[Now]','$vars[Level]','$vars[Max]','$vars[Min]','$vars[Date]')";
		//die( $sql);
		if ($this->db->query($sql))
			return $this->db->insert_id;
		return false;
	}
	
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET 	
		`Title`='$vars[Title]',`Now`='$vars[Now]',`Level`='$vars[Level]',`Max`='$vars[Max]',
		`Min`='$vars[Min]',`Date`='$vars[Date]'
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
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str ORDER BY `Date` DESC ";
		if (1 < $page_size && 0 < $page)
			$sql .= 'LIMIT '.($page-1)*$page_size.','.$page_size;
		return $this->db->get_results($sql,ARRAY_A);		
	}
	
	function getListIndex(){
		$row = $this->db->get_row("SELECT `Date` AS N FROM ".$this->tableName." GROUP BY `Date` ORDER BY `Date` DESC LIMIT 1",ARRAY_A);
		return $this->getList(" AND `Date` = '$row[N]'");
	}
	
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>