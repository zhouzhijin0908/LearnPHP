<?php
require_once('common.php');
class Resumes extends Common
{
	
	
	
	var $tableName = "resumes";
	
	
	
	function Resumes()
	{
		Common::Common();
	}
	
	function add($vars)
	{
		$sql = "INSERT INTO
				".$this->tableName."
				(HrID,UserID,Content,Skills,Contact,`Date`)
				VALUES
				('$vars[HrID]','$vars[Content]','$vars[UserID]','$vars[Skills]','$vars[Contact]','".date('Y-m-d')."')";
		if ($this->db->query($sql))
			return $this->db->insert_id;
		return false;
	}
	
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET 	
		`Content`='$vars[Content]',`Skills`='$vars[Skills]',`Contact`='$vars[Contact]'
		WHERE ID=$vars[ID]";
		return $this->db->query($sql);
	}
	
	function getVar($ID)
	{
		return $this->db->get_row("SELECT a.*,b.Title AS HrName FROM ".$this->tableName." a,hr b 
									WHERE a.HrID=b.ID AND a.ID=$ID",ARRAY_A);
	}
	
	function getList($str = NULL,$page_size = 0,$page = 0)
	{
		$this->recordNum = $this->db->get_var("SELECT COUNT(ID) AS n FROM ".$this->tableName." WHERE 1 $str");
		if (1 > $this->recordNum)
			return NULL;
		$sql = "SELECT a.*,b.Title AS HrName FROM ".$this->tableName." a,hr b WHERE a.HrID=b.ID $str ";
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