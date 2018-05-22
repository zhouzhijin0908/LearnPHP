<?php
require_once('common.php');
class Service extends Common
{
	
	
	
	var $tableName = "service";
	
	
	
	function Service()
	{
		Common::Common();
	}
	
	function update($vars)
	{
		$sql = "REPLACE INTO
				".$this->tableName."
				(ID,addr,email,tel,fax)
				VALUES
				(1,'$vars[addr]','$vars[email]','$vars[tel]','$vars[fax]')";
		return $this->db->query($sql);
	}
	

	function get()
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." LIMIT 1",ARRAY_A);
	}
}
?>