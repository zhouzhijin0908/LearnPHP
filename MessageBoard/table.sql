
#访客留言表
create table if not exists info (
   id int(11) not null auto_increment ,
   name varchar(16) not null ,
   content text not null ,
   content_time varchar(14) not null ,
   primary key (id)
);

delete from info;

INSERT INTO info VALUES (5, '张三', '祝福大家节日快乐：）', '2010-02-18 15:');
INSERT INTO info VALUES (6, '李四', '给大家拜年了', '2010-02-19 15:');
INSERT INTO info VALUES (7, '王五', '送去新年的祝福给大家', '1266571304');
INSERT INTO info VALUES (13, 'user', '', '1304426422');
INSERT INTO info VALUES (9, '发生的', '份数大幅的', '1266572080');


#管理员回复留言表
create table if not exists reply (
   id int(11) not null auto_increment,
   info_id varchar(11) not null,
   reply text not null,
   reply_time varchar(14),
   primary key (id)
);

INSERT INTO `reply` VALUES (3, '5', '谢谢热心参与', '2010-02-17 19:');
INSERT INTO `reply` VALUES (4, '6', '感谢', '2010-02-18 19:');
INSERT INTO `reply` VALUES (6, '9 ', '必须飞飞', '1266572999');


select c1.*, c2.reply_time, c2.reply from info c1 LEFT JOIN reply c2 ON c1.id = c2.info_id ORDER  BY c1.id DESC;