/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-07-14 22:11:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mainimage` varchar(255) NOT NULL COMMENT '主图片',
  `coverimage` varchar(255) NOT NULL COMMENT '封面图片',
  `maintitle` varchar(255) NOT NULL COMMENT '主标题',
  `subhead` varchar(255) NOT NULL COMMENT '副标题',
  `introduction` text NOT NULL COMMENT '简介',
  `author` int(11) unsigned NOT NULL COMMENT '作者',
  `type1` tinyint(4) unsigned NOT NULL COMMENT '类型1',
  `type2` tinyint(4) unsigned NOT NULL COMMENT '类型2',
  `type3` tinyint(4) unsigned NOT NULL COMMENT '类型3',
  `collectnum` mediumint(9) unsigned NOT NULL COMMENT '收藏量',
  `readnum` mediumint(9) unsigned NOT NULL COMMENT '阅读量',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('23', '23.jpg', '23.jpg', '数据表之间的关系', '一对一关系、一对多关系、多对多关系', '</p></blockquote><p><ul><li><span style=\"line-height: 1.8;\">一对多关系：这是最普通的一种关系。在这种关系中，A表中的一行可以匹配B表中的多行，但是B表中的一行只能匹配A表中的一行。只有当一个相关列是一个主键或具有唯一约束时，才能创建一对多关系。</span></li><li><span style=\"line-height: 1.8;\">多对多关系：A表中的一行可以匹配B表中的多行，反之亦然。要创建这种关系，需要定义第三个表，称为结合表，它的主键由A表和B表的外部键组成。</span></li><li><span style=\"line-height: 1.8;\">一对一关系：A表中的一行最多只能匹配于B表中的一行，反之亦然。如果相关列都是主键或都具有唯一约束，则可以创建一对一关系。这种关系并不常见，因为一般来说，按照这种方式相关的信息可以都在一个表中。</span></li></ul></p>', '12', '1', '0', '0', '0', '0', '2016-07-14 19:52:57');

-- ----------------------------
-- Table structure for `collect`
-- ----------------------------
DROP TABLE IF EXISTS `collect`;
CREATE TABLE `collect` (
  `user_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `article_id` int(10) unsigned NOT NULL COMMENT '文章id',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`user_id`,`article_id`),
  KEY `col_mainimage` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收藏表';

-- ----------------------------
-- Records of collect
-- ----------------------------
INSERT INTO `collect` VALUES ('12', '23', '2016-07-14 20:08:51');

-- ----------------------------
-- Table structure for `include`
-- ----------------------------
DROP TABLE IF EXISTS `include`;
CREATE TABLE `include` (
  `special_id` int(10) unsigned NOT NULL COMMENT '专辑id',
  `article_id` int(10) unsigned NOT NULL COMMENT '文章id',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`special_id`,`article_id`),
  KEY `com_mainimage` (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收录表';

-- ----------------------------
-- Records of include
-- ----------------------------

-- ----------------------------
-- Table structure for `manuscript`
-- ----------------------------
DROP TABLE IF EXISTS `manuscript`;
CREATE TABLE `manuscript` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mainimage` varchar(255) NOT NULL COMMENT '主图片',
  `maintitle` varchar(255) NOT NULL COMMENT '主标题',
  `subhead` varchar(255) NOT NULL COMMENT '副标题',
  `introduction` text NOT NULL COMMENT '简介',
  `author` int(11) unsigned NOT NULL COMMENT '作者',
  `type1` tinyint(4) unsigned NOT NULL COMMENT '类型1',
  `type2` tinyint(4) unsigned NOT NULL COMMENT '类型2',
  `type3` tinyint(4) unsigned NOT NULL COMMENT '类型3',
  `status` tinyint(4) NOT NULL COMMENT '审核状态',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='稿件表';

-- ----------------------------
-- Records of manuscript
-- ----------------------------
INSERT INTO `manuscript` VALUES ('20', '20.jpg', '数据表之间的关系', '一对一关系、一对多关系、多对多关系', '<blockquote><p>数据表之间有三种关系：1、一对一关系；2、一对多关系；3、多对多关系；\r\n</p></blockquote><p><ul><li><span style=\"line-height: 1.8;\">一对多关系：这是最普通的一种关系。在这种关系中，A表中的一行可以匹配B表中的多行，但是B表中的一行只能匹配A表中的一行。只有当一个相关列是一个主键或具有唯一约束时，才能创建一对多关系。</span></li><li><span style=\"line-height: 1.8;\">多对多关系：A表中的一行可以匹配B表中的多行，反之亦然。要创建这种关系，需要定义第三个表，称为结合表，它的主键由A表和B表的外部键组成。</span></li><li><span style=\"line-height: 1.8;\">一对一关系：A表中的一行最多只能匹配于B表中的一行，反之亦然。如果相关列都是主键或都具有唯一约束，则可以创建一对一关系。这种关系并不常见，因为一般来说，按照这种方式相关的信息可以都在一个表中。</span></li></ul></p>', '12', '1', '0', '0', '1', '2016-07-14 19:40:45');

-- ----------------------------
-- Table structure for `special`
-- ----------------------------
DROP TABLE IF EXISTS `special`;
CREATE TABLE `special` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maintitle` varchar(255) NOT NULL COMMENT '主标题',
  `subhead` varchar(225) NOT NULL COMMENT '副标题',
  `introduction` text NOT NULL COMMENT '简介',
  `coverimage` varchar(225) NOT NULL COMMENT '封面图片',
  `readnum` mediumint(9) NOT NULL COMMENT '阅读量',
  `type1` tinyint(3) unsigned NOT NULL COMMENT '类型1',
  `type2` tinyint(3) unsigned NOT NULL COMMENT '类型2',
  `type3` tinyint(3) unsigned NOT NULL COMMENT '类型3',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`maintitle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='专辑表';

-- ----------------------------
-- Records of special
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `nickname` varchar(255) NOT NULL COMMENT '昵称',
  `headimage` varchar(255) NOT NULL COMMENT '头像',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `rank` tinyint(4) unsigned NOT NULL COMMENT '级别',
  `jobs` varchar(255) NOT NULL COMMENT '岗位',
  `company` varchar(255) NOT NULL COMMENT '单位',
  `introduction` text NOT NULL COMMENT '简介',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', 'xuyuanfan1', '4e829d20119f31638dd50f6db5bf514b', '许远帆', 'default.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技有限公司', '随心，只为梦想，无所畏惧……', '2016-07-14 16:07:20');
