<html>
<head>
    <title>文件下载</title>
</head>

<body>
<div class="bodytitle">
    <div class="bodytitleleft"></div>
    <div class="bodytitletxt">文件下载列表</div>
</div>
</body>
<table>
    <tbody>
        <tr>
            <td><strong>请选择需要下载的文件</strong></td>
        </tr>
    </tbody>
</table>

<table>
    <tbody>
    <tr align="center">
        <td>
            <table>
                <tbody>
                <tr>
                    <td><strong>下载说明：</strong></td><br>
                    1、选择需要下载的文件后在‘操作选项’中选择‘文件下载’选项；
                </tr>
                </tbody>
            </table>
            <table>
                <tbody>
                <tr align="middle">
                    <td width="8%" bgcolor="#dcf4bd"><strong>ID</strong></td>
                    <TD width="17%" bgColor=#dcf4bd><STRONG>文件名</STRONG></TD>
                    <TD width="11%" bgColor=#dcf4bd><strong>文件尺寸</strong></TD>
                    <TD width="18%" bgColor=#dcf4bd><strong>文件类型</strong></TD>
                    <TD width="18%" bgColor=#dcf4bd><strong>上传时间</strong></TD>
                    <TD width="28%" bgColor=#dcf4bd><STRONG>操作选项</STRONG></TD>
                </tr>
                <?php
                $conn = mysql_connect("104.194.90.89:3306", "root", "root") or die('Could not connect: ' . mysql_error());
                $db = mysql_select_db('download');
                if (!$db){
                    die("can not use download:".mysql_error());
                }else{
                    $sql = "select * from f_detail";
                    $result = mysql_query($sql);
                    $err = mysql_error();
                    if ($err){
                        echo "发生错误，请联系管理员";
                    }

                    while ($row = mysql_fetch_array($result, MYSQL_NUM)){
                        ?>
                        <tr align="middle" bgcolor="#ffffff">
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?></td>
                            <td><?php echo $row[5] ?></td>
                            <td><a href="download.php?id=<?php echo $row[0]?>>">文件下载</a>|<font color="#cccccc">扩展功能1</font> |<font color="#cccccc">扩展功能2</font>
                            </td>
                        </tr>

                        <?php
                    }
                    mysql_free_result($result);
                }

                ?>
                </tbody>
            </table>
            </TABLE>
        </td>
    </tr>
    </tbody>
</table>
</html>