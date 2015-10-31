
/*用户表*/
CREATE TABLE `user`(
`user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`user_name` varchar(32) NOT NULL,
`user_password` varchar(64) NOT NULL,
`user_nikename` varchar(32) DEFAULT NULL,
`user_tel` varchar(32) NOT NULL,
`user_status` tinyint(1) NOT NULL,
`login_ip` varchar(20) NOT NULL,
PRIMARY KEY (`user_id`)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*权限表，角色和节点的中间表，里面记录了什么角色拥有什么权限*/
CREATE TABLE IF NOT EXISTS `access` (
  `role_id` smallint(6) unsigned NOT NULL,/*记录角色id*/
  `node_id` smallint(6) unsigned NOT NULL,/*记录节点id*/
  `level` tinyint(1) NOT NULL,/*记录权限等级，分为3级，分别是应用，控制器，方法*/
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*节点列表，即网站涉及到的各种权限*/
CREATE TABLE IF NOT EXISTS `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,/*节点的第一名称，一般使用英文*/
  `title` varchar(50) DEFAULT NULL,/*节点的第二名称，一般使用中文*/
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

/*网站角色列表*/
CREATE TABLE IF NOT EXISTS `role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,/*网站角色的第一名称，一般用英文*/
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,/*网站角色的状态，可以是开启的，也可以是关闭的*/
  `remark` varchar(255) DEFAULT NULL,/*网站角色的第二名称，一般用中文*/
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

/*网站角色和用户联系的中间表，一个角色可以有多个用户，一个用户也可以有多个角色*/
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,/*网站角色的id*/
  `user_id` char(32) DEFAULT NULL,/*用户的id*/
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*类别表，文章的类别，比如校会概况，动态新闻什么的*/
CREATE TABLE `cate`(
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` char(15) NOT NULL,
`nikename` char(15) NOT NULL ,
`pid` int(10) unsigned not null default 0,/*记录父级类别的id，最高级别pid为0*/
`sort` smallint(6) not null default 100,
PRIMARY KEY (`id`),
KEY `pid` (`pid`)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

/*属性表*/
CREATE TABLE `attr`(
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`name` char(10) NOT NULL default '',/*文章的属性名称，比如精华，置顶什么的*/
`color` char(10) NOT NULL default '',/*名称的指定颜色*/
PRIMARY KEY (`id`)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

/*文章存储表*/
CREATE TABLE `article`(
`id` int unsigned not null auto_increment,
`title` varchar(30) not null default '',/*文章名称*/
`content` text,/*文章内容*/
`time` int(10) unsigned not null default 0,/*发表时间*/
`auther` varchar(30) not null default '',/*文章作者*/
`cid` int unsigned not null,/*该文章属于哪一类*/
`del` tinyint(1) unsigned not null default 0,/*放入回收站*/
`likeit` int(10) not null default 0,
PRIMARY KEY (`id`),
KEY `cid`(`cid`)
)ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;


CREATE TABLE IF NOT EXISTS `article_attr` (
  `article_id` int(10) unsigned not null,
  `attr_id` int(10) unsigned not null,
  KEY `article_id`(`article_id`),
  KEY `attr_id`(`attr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*在线报名信息表*/
CREATE TABLE IF NOT EXISTS `sign_up`(
`sign_id` int(10) unsigned not null AUTO_INCREMENT,
`sign_name` varchar(32) NOT NULL default '',
`sign_num` int(20) unsigned not NULL default 0,
`sign_school` VARCHAR (32) not NULL default '',
`sign_college` VARCHAR (64) NOT NULL default '',
`sign_class` VARCHAR (64) NOT NULL default '',
`sign_tel` VARCHAR (20) NOT NULL default '',
`sign_time` int(10) unsigned not NULL DEFAULT 0,
`sign_introduce` CHAR (250) NOT NULL DEFAULT '',
`sign_status` CHAR (30) not null DEFAULT '',
`sign_cid` int(10) unsigned not null DEFAULT 0,
PRIMARY KEY (`sign_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*文件下载表*/
CREATE TABLE IF NOT EXISTS `file`(
`file_id` int(10) unsigned not null AUTO_INCREMENT,
`file_savepath` varchar(60) NOT NULL DEFAULT '',/*上传文件的保存路径*/
`file_name` varchar(60) NOT NULL default '',/*上传文件的原始名称*/
`file_savename` varchar(60) NOT NULL default '',/*上传文件的保存名称*/
`file_size` int(10) unsigned not null,/*上传文件的大小*/
`file_type` varchar(10) NOT NULL default '',/*上传文件的MIME类型*/
`file_extension` varchar(10) NOT NULL default '',/*上传文件的后缀类型*/
`file_hash` varchar(20) NOT NULL default '',/*上传文件的哈希验证字符串*/
PRIMARY KEY (`file_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;













