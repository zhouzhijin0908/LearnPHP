<?php
require_once('common.php');
class Site extends Common
{
	
	
	
	var $tableName = "sites";
	
	
	
	function Site()
	{
		Common::Common();
	}
	
	function getVar($Title)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE Title='$Title' LIMIT 1",ARRAY_A);
	}
	
	function setVar($vars){
		return $this->db->query("REPLACE INTO {$this->tableName} SET Content='$vars[Content]',Title='$vars[Title]'");
	}
	
}
?>