<?php
class Common
{
	var $db;
	var $recordNum;
	function Common()
	{
		global $db;
		if (!isset($db))
			return false;
		$this->db = $db;
	}
	
	function debug()
	{
		$this->db->debug();
	}
}
?>