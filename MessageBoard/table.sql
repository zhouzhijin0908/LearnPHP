
#访客留言表
create table if not exists info (
   id int(11) not null auto_increment ,
   name varchar(16) not null ,
   content text not null ,
   content_time varchar(14) not null ,
   primary key (id)
);

#管理员回复留言表
create table if not exists reply (
   id int(11) not null auto_increment,
   info_id varchar(11) not null,
   reply text not null,
   reply_time varchar(14),
   primary key (id)
);