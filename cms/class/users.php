<?php
require_once('common.php');
class Users extends Common
{
	var $tableName = "users";
	var $activity = 1;
	function Users()
	{
		Common::Common();
	}
	//增加一个新注册用户
	function add($vars)
	{
		$row = $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE username='$vars[username]'",ARRAY_A);
		if($row['username']){
			return false;
		}		
		$sql = "INSERT INTO
				".$this->tableName."
				(username,user_regdate,user_password,user_email,user_qq,user_website,user_viewemail,activity)
				VALUES
				('$vars[username]','".date('Y-m-d H:i:s')."','".md5($vars['user_password'])."','$vars[user_email]',
				'$vars[user_qq]','$vars[user_website]',
				'$vars[user_viewemail]',{$this->activity})";
		$this->db->query($sql);
		$thisID = $this->db->insert_id;
		return $thisID;
	}
	//更新已注册用户信息
	function update($vars)
	{
		$sql = "UPDATE ".$this->tableName." SET
				`user_email`='$vars[user_email]',`user_qq`='$vars[user_qq]',
				`user_website`='$vars[user_website]',`user_viewemail`='$vars[user_viewemail]'
				WHERE user_id=$vars[user_id]";
		return $this->db->query($sql);
	}
	//获得指定user_id对应的信息
	function getVar($ID)
	{
		return $this->db->get_row("SELECT * FROM ".$this->tableName." WHERE user_id=$ID",ARRAY_A);
	}
	//获得用户信息列表
	function getList($str = NULL,$page_size = 0,$page = 0)
	{
		$this->recordNum = $this->db->get_var("SELECT COUNT(*) AS n FROM ".$this->tableName." WHERE 1 $str");
		if (1 > $this->recordNum)
			return NULL;
		$sql = "SELECT * FROM ".$this->tableName." WHERE 1 $str ";
		if (1 < $page_size && 0 < $page)
			$sql .= 'LIMIT '.($page-1)*$page_size.','.$page_size;
		//die($sql);
		return $this->db->get_results($sql,ARRAY_A);		
	}
	//删除指定用户的信息
	function del($ID)
	{
		$sql = "DELETE FROM ".$this->tableName." WHERE user_id=$ID";
		$this->db->query($sql);
		return true;
	}
	//更新指定用户的账户状态
	function update_status($user_id,$activity)
	{
		$this->db->query("update {$this->tableName} set activity={$activity} where user_id={$user_id}");
	}
	//重置注册用户密码
	function set_password($user_id,$password){
		$this->db->query("update {$this->tableName} set user_password='".md5($password)."' where user_id={$user_id}");
	}
}
?>