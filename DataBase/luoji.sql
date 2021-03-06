/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-08-11 11:51:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mainimage` varchar(255) NOT NULL COMMENT '主图片',
  `mainimagealt` varchar(255) NOT NULL COMMENT 'ALT文字',
  `coverimage` varchar(255) NOT NULL COMMENT '封面图片',
  `maintitle` varchar(255) NOT NULL COMMENT '主标题',
  `subhead` varchar(255) NOT NULL COMMENT '副标题',
  `introduction` text NOT NULL COMMENT '简介',
  `author` int(11) unsigned NOT NULL COMMENT '作者',
  `categoryid` tinyint(4) unsigned NOT NULL COMMENT '所属分类',
  `collectnum` mediumint(9) unsigned NOT NULL COMMENT '收藏量',
  `readnum` mediumint(9) unsigned NOT NULL COMMENT '阅读量',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('23', '23.jpg', '数据表之间的关系', '23.jpg', '数据表之间的关系', '一对一关系、一对多关系、多对多关系', '<ul><li><span style=\"line-height: 1.8;\">一对多关系：这是最普通的一种关系。在这种关系中，A表中的一行可以匹配B表中的多行，但是B表中的一行只能匹配A表中的一行。只有当一个相关列是一个主键或具有唯一约束时，才能创建一对多关系。</span></li><li><span style=\"line-height: 1.8;\">多对多关系：A表中的一行可以匹配B表中的多行，反之亦然。要创建这种关系，需要定义第三个表，称为结合表，它的主键由A表和B表的外部键组成。</span></li><li><span style=\"line-height: 1.8;\">一对一关系：A表中的一行最多只能匹配于B表中的一行，反之亦然。如果相关列都是主键或都具有唯一约束，则可以创建一对一关系。这种关系并不常见，因为一般来说，按照这种方式相关的信息可以都在一个表中。</span></li></ul>', '12', '1', '3', '31', '2016-07-14 19:52:57');
INSERT INTO `article` VALUES ('24', '24.png', '深入理解sql的五种连接', '24.jpg', '深入理解sql的五种连接', '内连接、左外连接、右外连接、全连接、交叉连接', '<ol><li>内连接：只有两个表相匹配的行才能在结果集中出现</li><li>外连接：包括&nbsp;（1）左连接(左边的表不加限制)&nbsp;（2）右连接(右边的表不加限制)&nbsp;（3）全连接(左右两表都不加限制)</li><li>交叉连接：也叫做笛卡尔积</li></ol>', '12', '11', '3', '38', '2016-07-15 16:47:45');
INSERT INTO `article` VALUES ('25', '25.png', 'Mysql常用数据类型', '25.jpg', 'Mysql常用数据类型', '整数型、小数型、字符串型、时间日期型', '<p>SQL中将数据类型分了四大类：整数型、小数型、字符串型和时间日期型。</p><p><br></p>', '12', '10', '1', '17', '2016-07-15 16:49:42');

-- ----------------------------
-- Table structure for carouselfigure
-- ----------------------------
DROP TABLE IF EXISTS `carouselfigure`;
CREATE TABLE `carouselfigure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL COMMENT '图片',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `ordernum` tinyint(3) unsigned NOT NULL COMMENT '序号',
  `url` varchar(255) NOT NULL COMMENT 'URL',
  `show` enum('no','yes') NOT NULL DEFAULT 'yes' COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carouselfigure
-- ----------------------------
INSERT INTO `carouselfigure` VALUES ('1', '1.png', '诚信 . 专业 . 双赢', '1', 'http://www.baidu.com', 'yes');
INSERT INTO `carouselfigure` VALUES ('2', '2.png', '自主合作业务', '2', 'http://www.baidu.com', 'yes');
INSERT INTO `carouselfigure` VALUES ('3', '3.png', '开创TOE品牌未来的事业巅峰', '3', 'http://www.baidu.com', 'yes');
INSERT INTO `carouselfigure` VALUES ('4', '4.png', '从现代哲学思想出发，构筑品牌发展规划', '0', 'http://www.baidu.com', 'yes');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(10) NOT NULL COMMENT '名称',
  `index` tinyint(3) unsigned NOT NULL COMMENT '序号',
  `level` tinyint(3) unsigned NOT NULL COMMENT '级别',
  `parent` tinyint(3) unsigned NOT NULL COMMENT '父类别',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('0', '首页', '1', '1', '0');
INSERT INTO `category` VALUES ('1', '基础', '2', '1', '0');
INSERT INTO `category` VALUES ('2', '应用', '3', '1', '0');
INSERT INTO `category` VALUES ('3', '业务', '4', '1', '0');
INSERT INTO `category` VALUES ('4', '动态', '5', '1', '0');
INSERT INTO `category` VALUES ('5', '数据结构', '1', '2', '1');
INSERT INTO `category` VALUES ('6', '设计模式', '2', '2', '1');
INSERT INTO `category` VALUES ('7', '算法', '3', '2', '1');
INSERT INTO `category` VALUES ('8', '数据库', '4', '2', '1');
INSERT INTO `category` VALUES ('9', '操作系统', '5', '2', '1');
INSERT INTO `category` VALUES ('10', 'WEB开发', '1', '2', '2');
INSERT INTO `category` VALUES ('11', '游戏开发', '2', '2', '2');
INSERT INTO `category` VALUES ('12', 'APP开发', '3', '2', '2');
INSERT INTO `category` VALUES ('13', '软件开发', '4', '2', '2');
INSERT INTO `category` VALUES ('14', '产品设计', '1', '2', '3');
INSERT INTO `category` VALUES ('15', '运营推广', '2', '2', '3');
INSERT INTO `category` VALUES ('16', '企业管理', '3', '2', '3');

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
INSERT INTO `collect` VALUES ('12', '23', '2016-07-21 14:13:22');
INSERT INTO `collect` VALUES ('12', '24', '2016-07-21 14:13:23');
INSERT INTO `collect` VALUES ('13', '23', '2016-07-20 09:10:27');
INSERT INTO `collect` VALUES ('13', '24', '2016-07-20 09:11:13');
INSERT INTO `collect` VALUES ('13', '25', '2016-07-20 09:10:29');

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
INSERT INTO `include` VALUES ('1', '23', '2016-07-15 17:07:31');
INSERT INTO `include` VALUES ('1', '24', '2016-07-15 17:07:38');
INSERT INTO `include` VALUES ('1', '25', '2016-07-15 17:07:45');
INSERT INTO `include` VALUES ('2', '23', '2016-07-15 23:31:34');
INSERT INTO `include` VALUES ('2', '24', '2016-07-15 23:31:42');
INSERT INTO `include` VALUES ('3', '25', '2016-07-15 23:31:51');
INSERT INTO `include` VALUES ('4', '24', '2016-07-15 23:32:02');
INSERT INTO `include` VALUES ('4', '25', '2016-07-15 23:32:11');
INSERT INTO `include` VALUES ('5', '23', '2016-07-15 23:32:21');
INSERT INTO `include` VALUES ('5', '25', '2016-07-15 23:32:28');

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
  `categoryid` tinyint(4) unsigned NOT NULL COMMENT '所属分类',
  `status` tinyint(4) NOT NULL COMMENT '审核状态',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COMMENT='稿件表';

-- ----------------------------
-- Records of manuscript
-- ----------------------------
INSERT INTO `manuscript` VALUES ('20', '20.jpg', '数据表之间的关系', '一对一关系、一对多关系、多对多关系', '<blockquote><p>数据表之间有三种关系：1、一对一关系；2、一对多关系；3、多对多关系；\r\n</p></blockquote><p><ul><li><span style=\"line-height: 1.8;\">一对多关系：这是最普通的一种关系。在这种关系中，A表中的一行可以匹配B表中的多行，但是B表中的一行只能匹配A表中的一行。只有当一个相关列是一个主键或具有唯一约束时，才能创建一对多关系。</span></li><li><span style=\"line-height: 1.8;\">多对多关系：A表中的一行可以匹配B表中的多行，反之亦然。要创建这种关系，需要定义第三个表，称为结合表，它的主键由A表和B表的外部键组成。</span></li><li><span style=\"line-height: 1.8;\">一对一关系：A表中的一行最多只能匹配于B表中的一行，反之亦然。如果相关列都是主键或都具有唯一约束，则可以创建一对一关系。这种关系并不常见，因为一般来说，按照这种方式相关的信息可以都在一个表中。</span></li></ul></p>', '12', '1', '1', '2016-07-14 19:40:45');

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
  `categoryid` tinyint(4) unsigned NOT NULL COMMENT '所属分类',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`maintitle`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='专辑表';

-- ----------------------------
-- Records of special
-- ----------------------------
INSERT INTO `special` VALUES ('1', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '1.jpg', '0', '1', '2016-07-15 16:59:02');
INSERT INTO `special` VALUES ('2', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '2.jpg', '0', '1', '2016-07-15 23:29:37');
INSERT INTO `special` VALUES ('3', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '3.jpg', '0', '1', '2016-07-15 23:30:11');
INSERT INTO `special` VALUES ('4', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '4.jpg', '0', '1', '2016-07-15 23:30:19');
INSERT INTO `special` VALUES ('5', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '5.jpg', '0', '1', '2016-07-15 23:31:13');
INSERT INTO `special` VALUES ('6', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '5.jpg', '0', '1', '2016-07-19 18:08:29');
INSERT INTO `special` VALUES ('7', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '4.jpg', '0', '1', '2016-07-19 18:08:59');
INSERT INTO `special` VALUES ('8', '数据的世界', '数据库基础知识', '在信息化社会，充分有效地管理和利用各类信息资源，是进行科学研究和决策管理的前提条件。数据库技术是管理信息系统、办公自动化系统、决策支持系统等各类信息系统的核心部分，是进行科学研究和决策管理的重要技术手段。', '3.jpg', '0', '1', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('12', 'xuyuanfan1', '4e829d20119f31638dd50f6db5bf514b', '许远帆', '12.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技有限公司', '随心，只为梦想，无所畏惧……', '2016-07-14 16:07:20');
INSERT INTO `user` VALUES ('13', 'xuyuanfan2', '4e829d20119f31638dd50f6db5bf514b', '远航之帆', '13.jpg', '770534229@qq.com', '0', '产品助理', '广东医群科技有限公司', '随心，只为梦想，无所畏惧……', '2016-07-15 17:13:01');
