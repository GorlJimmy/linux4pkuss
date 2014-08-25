create database linux4pkuss;

use linux4pkuss;

drop table if exists user_tb;
create table user_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	username varchar(50) not null,
	realname varchar(50) ,
	password varchar(64) not null,
	birthday datetime,
	gender varchar(10) not null,
	identification varchar(20),
	email varchar(40) not null,
	imgurl varchar(20),
	registerTime datetime not null,
	#auth_id int not null default 0,
	role_id int not null default 0,
	status_id int default 1
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists school_tb;
create table school_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	name varchar(120),
	studentid varchar(20) not null,
	major varchar(50),
	collage varchar(120) not null,
	enterdate date not null,
	user_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists address_tb;
create table address_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	area int not null,
	street varchar(100) not null,
	postcode varchar(20),
	type int default 1,
	user_id varchar(64) not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists province_tb;
create table province_tb(
	id int not null primary key auto_increment,
	num varchar(64) not null,
	province_code varchar(10) not null,
	name varchar(65)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists city_tb;
create table city_tb(
    id int not null primary key auto_increment,
    num varchar(64) not null,
    province_code varchar(10) not null,
    city_code varchar(10) not null,
    name varchar(65)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


drop table if exists area_tb;
create table area_tb(
    id int not null primary key auto_increment,
    num varchar(64) not null,
    province_code varchar(10) not null,
    city_code varchar(10) not null,
    area_code varchar(10) not null,
    name varchar(65)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


drop table if exists phone_tb;
create table phone_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	tel varchar(18) not null,
	type int default 1,
	user_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists article_tb;
create table article_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	title varchar(64) not null,
	createdate date not null,
	content varchar(80000),
	isshare int not null default 1,
	istop int not null default 0,
	hitnum int not null default 0,
	user_id int not null default 0,
	tag_id int,
	theme_id int not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists theme_tb;
create table theme_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	name varchar(64) not null,
	createdate datetime not null,
	description text(5000),
	path varchar(100),
	ishomepage int default 1,
	isshown int default 1,
	user_id int not null,
	parent_id int not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists attachment_tb;
create table attachment_tb(
	id int primary key not null auto_increment,
	num varchar(64) not null,
	createdate datetime,
	name varchar(100),
	path varchar(64),
	isshare int not null default 0,
	istop int not null default 0,
	description text(500),
	downloadcount int not null default 0,
	user_id int not null,
	theme_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists comment_tb;
create table comment_tb(
	id int not null primary key auto_increment,
	num varchar(64) not null,
	createdate datetime not null,
	content text(140) not null,
	article_id int not null,
	user_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists params_tb;
create table params_tb(
	id int not null primary key auto_increment,
	num varchar(64) not null,
	name varchar(64) not null,
	value varchar(120) not null,
	createdate datetime not null,
	user_id int not null,
	description varchar(120),
	_backup varchar(64)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


drop table if exists log_tb;
create table log_tb(
	id int not null primary key auto_increment,
	num varchar(64) not null,
	logTime datetime not null,
	user_id int not null default 0,
	operation varchar(64)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;



drop table if exists role_tb;
create table role_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
	createtime datetime not null,
	name varchar(64) not null,
	status int not null default 0,
	user_id int not null,
	_backup varchar(64)

)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists auth_tb;
create table auth_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
    createtime datetime not null,
    name varchar(64) not null,
	user_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


drop table if exists role_auth_tb;
create table role_auth_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
    createtime datetime not null,
    role_id int not null,
	auth_id int not null
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists user_auth_tb;
create table user_auth_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
    createtime datetime not null,
    user_id int not null,
    auth_id int not null

)ENGINE=MyISAM DEFAULT CHARSET=utf8;

drop table if exists status_tb;
create table status_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
    createtime datetime not null,
    name varchar(64) not null

)ENGINE=MyISAM DEFAULT CHARSET=utf8;



drop table if exists settings_tb;
create table settings_tb(
	id int  not null primary key auto_increment,
    num varchar(64) not null,
    createtime datetime not null,
    user_id int not null,
    name varchar(64) not null

)ENGINE=MyISAM DEFAULT CHARSET=utf8;

