<?php
function var_process($type,$name,$default_value="")
{
    global $_POST, $_GET, $_COOKIE, $_SESSION;

    if($type=="post")
    {
        $temp=isset($_POST[$name])?$_POST[$name]:$default_value ;
    }
    elseif($type=="get")
    {
        $temp=isset($_GET[$name])?$_GET[$name]:$default_value ;
    }
    elseif($type=="cookie")
    {
        $temp=isset($_COOKIE[$name])?$_COOKIE[$name]:$default_value ;
    }
    elseif($type=="session")
    {
        $temp=isset($_SESSION[$name])?$_SESSION[$name]:$default_value ;
    }
    else
    {
        $temp=$default_value;
    }

    $temp=str_replace("'","\'",$temp);

    return $temp ;
}

//说明:   取分页页码函数 根据$currpage 偏移值计算，返回文章页码数组
//参数：$sum_article 总条目数  $currpage 当前页  $itemnum 单页条目数
function divpage_toadmin($sum_article, $currpage, $itemnum )
{
    if( $itemnum >= $sum_article )
    {$max_page = 1;}
    else
    {
        $max_page = floor( $sum_article / $itemnum );
        if( 0 < ( $sum_article % $itemnum ) ) {$max_page++;}
    }

    if( 1 > $currpage ) {$currpage = 1;}
    if( $currpage > $max_page ) {$currpage = $max_page;}

    $rec_start = ( $currpage - 1 ) * $itemnum;

    if( $currpage < $max_page ) $nextpage = $currpage + 1;
    else $nextpage = $max_page;

    if( $currpage > 1 ) $prepage = $currpage - 1;
    else $prepage = $currpage;

    $result_arr[ "currpage" ] = $currpage;	//当前页
    $result_arr[ "firstpage" ] = 1;					//第一页
    $result_arr[ "nextpage" ] = $nextpage;	//下一页
    $result_arr[ "prepage" ] = $prepage;		//上一页
    $result_arr[ "max_page" ] = $max_page;	//最后一页
    $result_arr[ "rec_start" ] = $rec_start;//offset 偏移值

    return $result_arr;
}
//检查计算对应uid账号中记录数
//account_detail表
function total_check ($uid,$mysql)
{
    $sql = "select id from account_detail where uid='".$uid."' and `transtype`=1";
    $result = mysql_query($sql, $mysql);
    if($row = mysql_fetch_array($result))
    {
        $nums = mysql_num_rows( $result );
    }else{
        $nums='没有记录';
    }
    return $nums;
}


//检查uid是否存在 如果不存在就新建
//return -1 	:uid不合法
//return true :成功
//return creat:创建
function check_uid($uid,$mysql)
{
    if(is_numeric($uid))
    {
        $sql = "select * from user_account where uid='".$uid."'";
        $result = mysql_query($sql, $mysql);
        if($row = mysql_fetch_array($result))
        {
            $so='true';
        }else{
            $sql="INSERT INTO `user_account` ( `id` , `uid` , `increase` , `decrease` , `createtime` , `lastupdate` ) ";
            $sql.="VALUES (";
            $sql.="'', '".$uid."', '0', '0',now(), now()";
            $sql.=");";
            $result = mysql_query($sql, $mysql);
            $so='create';
        }
        return $so;
    }else{
        return "-1";
    }
}

//根据用户uid插入用户的当次的交易记录
//$record 为具体参数的数组,如果插入成功返回true如果失败返回false
function Transaction_record($record,$mysql)
{
    $sql="INSERT INTO `account_detail` ( `id` , `uid` , `createtime` , `transtype` , `score` , `desctext` ) ";
    $sql.="VALUES (";
    $sql.="'','".$record['uid']."',now(),'".$record['transtype']."','".$record['score']."', '".$record['desctext']."'";
    $sql.=");";
    //echo $sql;
    $result = mysql_query($sql, $mysql);
    if ($result)
    {
        $op='true';
    }else{
        $op='false';
    }
    return $op;
}


//确认用户付费成功了之后将 account_detail中的status设置为1（表示充值成功）0为失败
//备注：需要加入订单号来确认唯一数据，之后再修改充值状态
function Update_status_record($cid,$mysql)
{
    $sql="SELECT * FROM `account_detail` WHERE id='".$cid."' LIMIT 1 ;";
    $result = mysql_query($sql, $mysql);
    $row = mysql_fetch_array($result);

    if($row['status']=='0')
    {
        //暂取用户插入的时间最新的数据
        $sql="UPDATE `account_detail` SET `status` = 1 WHERE `id` = '".$cid."' LIMIT 1 ;";
        $result = mysql_query($sql, $mysql);
        if ($result)
        {
            $op='true';
        }else{
            $op='false';
        }

    }else{
        $op='1';
    }
    return $op;
}

//说明：对uid账号做统一的count加1的操作
//用户做充值动作后将user_account更新count的值数值加一
//记录某个用户一共充值的次数(包含未成功的)用来和account_detail 的记录条数匹配来确认数据是否异常
//$record 为具体参数的数组,如果插入成功返回true如果失败返回false
//功能：仅仅增加记录交易次数，不对帐户做充值动作！
function count_user_num($uid,$mysql)
{
    $sql="UPDATE `user_account` SET `count`= `count`+1 WHERE `uid` = '".$uid."' LIMIT 1 ;";
    $result = mysql_query($sql, $mysql);
    if ($result)
    {
        $op='true';
    }else{
        $op='false';
    }
    return $op;
}


//根据用户uid查询用户的剩余货币
function Surplus($uid,$mysql)
{
    $sql ="SELECT uid, `increase` - `decrease` AS num ";
    $sql.="FROM `user_account` ";
    $sql.="WHERE `uid` =".$uid." LIMIT 0 , 1 ";
    //echo $sql;
    $result = mysql_query($sql, $mysql);
    $row = mysql_fetch_array($result);
    //print_r ($row['num']);
    return $row['num'];
}
//功能：给指定用户uid充值
//说明add为充入的具体数量

function Charge_num($uid,$add,$mysql)
{
    $sql="UPDATE `user_account` SET `increase` = `increase`+".$add." ,`lastupdate`=now()  WHERE `uid` = '".$uid."' LIMIT 1 ;";
    $result = mysql_query($sql, $mysql);
    if($result){
        return	true;
    }else{
        return false;
    }
}

//根据cid获得历史交易（充值）的相关信息
//   $cid		:account_detail的id
//  $type		:平台类型1 云网2快钱3支付宝0其他
//$order_id	:订单id
function pay_detail ($cid,$mysql)
{
    $sql="SELECT a.id,a.order_id,b.status,b.createtime,b.score,a.type  FROM  `order` a,account_detail b WHERE a.cid=".$cid." and a.cid=b.id  LIMIT 1 ;";
    //echo $sql;
    $result = mysql_query($sql, $mysql);
    $List = mysql_fetch_array( $result );
    if ($result)
    {
        $op=$List;
    }else{
        $op='false';
    }
    return $op;
}



//充值后给对应增加对应平台的类型和订单号
//   $cid		:account_detail的id
//  $type		:平台类型1 云网2快钱3支付宝0其他
//$order_id	:订单id

function Charge_order($cid,$type,$order_id,$mysql){
    $sql="INSERT INTO `order` ( `id` , `cid` , `type` , `order_id` )  ";
    $sql.="VALUES ( ";
    $sql.="'', '".$cid."', '".$type."', '".$order_id."' ";
    $sql.=");";
    $result = mysql_query($sql, $mysql);
}
//接口扣减对应uid得货币数量(消费金额)
//说明：默认相信uid是合法的
//结合check_uid检查uid的有效性
function decrease_num($uid,$cdd,$mysql){
    //if(ereg("^[0-9\_]*$",$cdd))
    if(ereg("^[+]?[0-9]*\.?[0-9]+$",$cdd)){
        $sql="UPDATE `user_account` SET `decrease` = `decrease`+".$cdd." ,`lastupdate`=now()  WHERE `uid` = '".$uid."' LIMIT 1 ;";
        $result = mysql_query($sql, $mysql);
        if($result){
            $op='true';
        }else{
            $op='false';
        }
        return $op;
    }
}


//指定用户uid进行具体消费记录的查询
//month为查询月份
//offset为偏移值
//nums为每页记录数
//结果以数组形式返回$List
function Inquiry($uid,$month,$offset,$nums,$mysql)
{
    $sql="SELECT * ";
    $sql.="	FROM `account_detail` ";
    $sql.=" WHERE `uid` =".$uid." ";
    $sql.=" order by `createtime` desc  ";
    $sql.="LIMIT ".$offset." ,".$nums." ";
    //echo $sql;
    $result = mysql_query($sql, $mysql);
    $num = mysql_num_rows( $result );//记录总数
    for( $i=0 ; $i< $num; $i++ )
    {
        $List[$i] = mysql_fetch_array( $result );
        /************解释字符含义**********/
        if($List[$i]['transtype']=='1')
        {
            $List[$i]['transtype']='充值';
        }
        if($List[$i]['transtype']=='0')
        {
            $List[$i]['transtype']='消费';
        }
        if($List[$i]['status']=='0')
        {
            $List[$i]['status']='失败';
        }
        if($List[$i]['status']=='1')
        {
            $List[$i]['status']='成功';
        }
        /************解释字符含义**********/
    }
    return $List;
}

//指定用户uid进行具体消费记录的查询
//month为查询月份
//offset为偏移值
//nums为每页记录数
//结果以数组形式返回$List
function Value_Inquiry($uid,$month,$offset,$nums,$mysql)
{
    $sql="SELECT * ";
    $sql.="	FROM `account_detail` ";
    $sql.=" WHERE `uid` =".$uid." and `transtype`=1";
    $sql.=" order by `createtime` desc  ";
    $sql.="LIMIT ".$offset." ,".$nums." ";
    //echo $sql;
    $result = mysql_query($sql, $mysql);
    $num = mysql_num_rows( $result );//记录总数
    for( $i=0 ; $i< $num; $i++ )
    {
        $List[$i] = mysql_fetch_array( $result );
        /************解释字符含义**********/
        if($List[$i]['transtype']=='1')
        {
            $List[$i]['transtype']='充值';
        }
        if($List[$i]['transtype']=='0')
        {
            $List[$i]['transtype']='消费';
        }
        if($List[$i]['status']=='0')
        {
            $List[$i]['status']='失败';
        }
        if($List[$i]['status']=='1')
        {
            $List[$i]['status']='成功';
        }
        /************解释字符含义**********/
    }
    return $List;
}
function createhashkey($len=6)
{
    $chararray = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x",
        "y","z","0","1","2","3","4","5","6","7","8","9");
    //srand();

    $hashkey = "";
    for ($i=0; $i< $len; $i++)
    {
        $number = rand(0,32);
        $hashkey .= $chararray[$number];
    }

    return $hashkey;
}

function mkdir_r($dirName, $prefix, $rights=0777)
{
    $dirs = explode('/', $dirName);
    $dir='';
    foreach ($dirs as $part)
    {
        if ($part != '')
        {
            $dir.=$part.'/';
            if (!is_dir($prefix.'/'.$dir) && strlen($dir)>0) mkdir($prefix.'/'.$dir, $rights);
        }
    }

}
// login.php
function process_login_error( $eno )
{
    switch( $eno )
    {
        case -2:
            login_error("用户名或密码空");
            break;
        case -3:
            login_error("用户名不合法");
            break;
        case -4:
            login_error("密码不合法");
            break;
        case -5:
            login_error("密码错误");
            break;
        case -6:
            login_error("无效用户");
            break;
        default:
            login_error("服务器错误，请稍后尝试");
            break;
    }
}
?>