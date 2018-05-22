<?php
require_once('common.php');
class Spider extends Common
{
	
	
	
	var $tableName = "spiders";
	
	
	
	function Spider()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(Title,`ListPreg`,`ContentPreg`,`Count`,`EnterUrl`,`Category`)
				VALUES
				('$vars[Title]','$vars[ListPreg]','$vars[ContentPreg]',0,'$vars[EnterUrl]','$vars[Category]')";
		//die( $sql);
		if ($this->db->query($sql))
			return $this->db->insert_id;
		return false;
	}
	
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET 	
		`Title`='$vars[Title]',`ListPreg`='$vars[ListPreg]',`ContentPreg`='$vars[ContentPreg]',
		EnterUrl='$vars[EnterUrl]'
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
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str";
		if (1 < $page_size && 0 < $page)
			$sql .= ' LIMIT '.($page-1)*$page_size.','.$page_size;
		return $this->db->get_results($sql,ARRAY_A);		
	}
		
	function checkLog($url){
		$f = $this->db->query("REPLACE INTO spider_logs SET Code='".md5(trim($url))."'");
		if($f == 1)
			return true;
		else
			return false;
	}
	
	function removeLog($url){
		return $this->db->query("DELETE FROM spider_logs WHERE Code='".md5(trim($url))."'");
	}
	
	function updateCount($ID){
		return $this->db->query("UPDATE spiders SET `Count`=`Count`+1 WHERE ID=$ID");
	}
		
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE ID=$ID";
		$this->db->query($sql);
		return true;
	}
}
?>