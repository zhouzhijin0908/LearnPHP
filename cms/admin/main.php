<?php
include ('../init.inc.php')
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=gbk">
</head>
<link href="admin.css" rel="stylesheet" type="text/css" />

<base target="mainFrame">
<div class="m"></div>

<div class="t">
    <table align=center cellspacing=0 cellpadding=0>
        <tr class=head><td colspan="2">
                系统信息</td></tr>
        <tr class=line>
            <td>程序路径：</td>
            <td><?php echo ROOT_PATH?></td>
        </tr>
        <tr class=line>
            <td width="20%">PHP版本：</td>
            <td><?php echo PHP_VERSION?></td>
        </tr>

        <tr class=line>
            <td>MySQL版本：</td>
            <td>
                <?php
                $row = $db->get_row("SELECT VERSION() AS dbversion",ARRAY_A);
                echo $row['dbversion'];
                ?>
            </td>
        </tr>
        <tr class=line>
            <td>Web服务器：</td>
            <td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td>
        </tr>
        <tr class=line>
            <td>远程文件获取：</td>
            <td>
                <?php
                echo ini_get('allow_url_fopen') ? '<span style="color:green">Supported</span>' : '<span style="color:red">Not supported</span>';
                ?>
            </td>
        </tr>
        <tr class=line>
            <td>最大上传限制：</td>
            <td><?php echo ini_get('file_uploads') ? ini_get('upload_max_filesize') : '<span style="color:red">Disabled</span>';?></td>
        </tr>
        <tr class=line>
            <td>服务器时间：</td>
            <td><?php echo date('Y-m-d H:i:s')?></td>
        </tr>
        <?php
        $rows = $db->get_results("SHOW TABLE STATUS",ARRAY_A);
        foreach ($rows as $row) {
            $o_size = $o_size + $row['Data_length'] + $row['Index_length'];
        }

        $o_size		= number_format($o_size/(1024*1024),2);
        ?>
        <tr class=line>
            <td>数据库占用：</td>
            <td><?php echo $o_size?> M</td>
        </tr>
        <tr class=line>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</div>
<?php include("version.php")?>
</html>
