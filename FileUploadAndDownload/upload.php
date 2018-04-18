<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2018/4/18
 * Time: 17:13
 */
date_default_timezone_set("PRC");
header("content-Type: text/html; charset=gb2312");
$uptypes=array('image/jpg',  //上传文件类型列表
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'application/x-shockwave-flash',
    'image/x-png',
    'application/msword',
    'audio/x-ms-wma',
    'audio/mp3',
    'application/vnd.rn-realmedia',
    'application/x-zip-compressed',
    'application/octet-stream');
$max_file_size = 2* 1024 *1000;
$path_parts = pathinfo($_SERVER['PHP_SELF']);
$destination_folder = "up/";//上传文件路径
$imgpreview = 1;
$imgpreviewsize = 1/2;

//print_r($HTTP_POST_FILES['userfile']);
$file = &$_FILES['userfile'];

if ($file['size'] > $max_file_size){
    echo "<font color='red'>文件太大</font>";
    exit();
}

echo $file['type'];
if (!in_array($file['type'], $uptypes)){
    echo "<font color='red'>不支持的文件类型</font>";
    exit();
}

if (!file_exists($destination_folder)){
    mkdir($destination_folder);
}

$filename = $file["tmp_name"];
$image_size = getimagesize($filename);
$pinfo = pathinfo($file['name']);
$ftype = $pinfo['extension'];
$destinaton = $destination_folder.time().".".$ftype;
$fname = time().".".$ftype;


echo $destinaton;
if (file_exists($destinaton) && $overwrite != true){
    echo "<font color='red'>文件已经存在了！</font>";
    exit();
}

if (!move_uploaded_file($filename, $destinaton)){
    echo "<font color='red'>移动文件出错了</font>";
    exit();
}else{
    $conn = mysql_connect("104.194.90.89:3306", "root", "root") or die('Could not connect: ' . mysql_error());
    $db = mysql_select_db('download');
    if (!$db){
        die("can not use download:".mysql_error());
    }else{
        $sql = "INSERT INTO `download`.`f_detail` (`id` ,`filename` ,`des` ,`fsize` ,`ftype` ,`utime` )VALUES (NULL ,'".$fname."' , '', '".$file["size"]."', '".$file["type"]."',NOW());";
        $result = mysql_query($sql);
        if (!$result){
            mysql_free_result($result);
            mysql_close($db);
            echo '数据记录插入失败 ';
            exit;
        }

    }

    $pinfo=pathinfo($destinaton);
    $fname=$pinfo['basename'];
    echo "<table><tr><td>上传文件地址：http://".$_SERVER['SERVER_NAME'].$path_parts["dirname"]."/".$destination_folder.$fname."</td></tr></table>";
    echo " 宽度:".$image_size[0];
    echo " 长度:".$image_size[1];
    if($watermark==1)
    {
        $iinfo=getimagesize($destinaton,$iinfo);
        $nimage=imagecreatetruecolor($image_size[0],$image_size[1]);
        $white=imagecolorallocate($nimage,255,255,255);
        $black=imagecolorallocate($nimage,0,0,0);
        $red=imagecolorallocate($nimage,255,0,0);
        imagefill($nimage,0,0,$white);
        switch ($iinfo[2])
        {
            case 1:
                $simage =imagecreatefromgif($destinaton);
                break;
            case 2:
                $simage =imagecreatefromjpeg($destinaton);
                break;
            case 3:
                $simage =imagecreatefrompng($destinaton);
                break;
            case 6:
                $simage =imagecreatefromwbmp($destinaton);
                break;
            default:
                die("<font color='red'>不能上传此类型文件！</a>");
                exit;
        }

        imagecopy($nimage,$simage,0,0,0,0,$image_size[0],$image_size[1]);
        imagefilledrectangle($nimage,1,$image_size[1]-15,80,$image_size[1],$white);


        switch ($iinfo[2])
        {
            case 1:
                //imagegif($nimage, $destination);
                imagejpeg($nimage, $destinaton);
                break;
            case 2:
                imagejpeg($nimage, $destinaton);
                break;
            case 3:
                imagepng($nimage, $destinaton);
                break;
            case 6:
                imagewbmp($nimage, $destinaton);
                //imagejpeg($nimage, $destination);
                break;
        }

//覆盖原上传文件
        imagedestroy($nimage);
        imagedestroy($simage);
    }

    if($imgpreview==1)
    {
        echo "<br>图片预览:<br>";
        echo "<a href=\"".$destinaton."\" target='_blank'><img src=\"".$destinaton."\" width=".($image_size[0]*$imgpreviewsize)." height=".($image_size[1]*$imgpreviewsize);
        echo " alt=\"图片预览:\r文件名:".$fname."\r上传时间:".date('m/d/Y h:i')."\" border='0'></a>";
    }
}



























