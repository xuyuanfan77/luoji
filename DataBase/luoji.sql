/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-07-14 16:24:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for collect
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

-- ----------------------------
-- Table structure for include
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
-- Table structure for manuscript
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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='稿件表';

-- ----------------------------
-- Records of manuscript
-- ----------------------------

-- ----------------------------
-- Table structure for special
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
-- Table structure for user
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
INSERT INTO `user` VALUES ('12', 'xuyuanfan1', '4e829d20119f31638dd50f6db5bf514b', '许远帆', 'default.jpg', '', '0', '', '', '', '2016-07-14 16:07:20');
