/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-14 18:22:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for album
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `albumid` int(11) NOT NULL AUTO_INCREMENT,
  `maintitle` varchar(20) NOT NULL,
  `minortitle` varchar(50) NOT NULL,
  `coverimage` varchar(50) NOT NULL,
  `type1` int(4) NOT NULL,
  `type2` int(4) NOT NULL,
  `type3` int(4) NOT NULL,
  `createtime` datetime(6) NOT NULL,
  PRIMARY KEY (`albumid`),
  KEY `username` (`maintitle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album
-- ----------------------------
INSERT INTO `album` VALUES ('1', '华医网结构', '一图读懂华医网', 'resource/coverimage/1.png', '1', '0', '0', '2016-06-05 20:57:42.000000');
INSERT INTO `album` VALUES ('2', '华医网结构图', '一图读懂华医网', 'resource/coverimage/2.png', '2', '0', '0', '2016-06-05 20:58:59.000000');
INSERT INTO `album` VALUES ('3', '华医网结构图', '一图读懂华医网', 'resource/coverimage/3.png', '3', '0', '0', '2016-06-05 21:02:11.000000');
INSERT INTO `album` VALUES ('4', '华医网结构图', '一图读懂华医网', 'resource/coverimage/4.png', '4', '0', '0', '2016-06-05 21:02:08.000000');
INSERT INTO `album` VALUES ('5', '华医网结构图', '一图读懂华医网', 'resource/coverimage/5.png', '5', '0', '0', '2016-06-05 21:02:03.000000');

-- ----------------------------
-- Table structure for collect
-- ----------------------------
DROP TABLE IF EXISTS `collect`;
CREATE TABLE `collect` (
  `username` varchar(20) NOT NULL,
  `mainimage` varchar(50) NOT NULL,
  `createtime` datetime(6) NOT NULL,
  PRIMARY KEY (`username`,`mainimage`),
  KEY `col_mainimage` (`mainimage`),
  CONSTRAINT `col_mainimage` FOREIGN KEY (`mainimage`) REFERENCES `image` (`mainimage`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `col_username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of collect
-- ----------------------------

-- ----------------------------
-- Table structure for combination
-- ----------------------------
DROP TABLE IF EXISTS `combination`;
CREATE TABLE `combination` (
  `albumid` int(11) NOT NULL,
  `mainimage` varchar(50) NOT NULL,
  `createtime` datetime(6) NOT NULL,
  PRIMARY KEY (`albumid`,`mainimage`),
  KEY `com_mainimage` (`mainimage`),
  CONSTRAINT `com_albumid` FOREIGN KEY (`albumid`) REFERENCES `album` (`albumid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `com_mainimage` FOREIGN KEY (`mainimage`) REFERENCES `image` (`mainimage`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of combination
-- ----------------------------
INSERT INTO `combination` VALUES ('1', '1', '2016-06-14 16:47:22.000000');
INSERT INTO `combination` VALUES ('1', '2', '2016-06-14 16:50:38.000000');
INSERT INTO `combination` VALUES ('1', '3', '2016-06-14 16:51:37.000000');
INSERT INTO `combination` VALUES ('1', '4', '2016-06-14 16:51:47.000000');
INSERT INTO `combination` VALUES ('1', '5', '2016-06-14 16:51:56.000000');
INSERT INTO `combination` VALUES ('2', '6', '2016-06-14 16:52:07.000000');
INSERT INTO `combination` VALUES ('2', '7', '2016-06-14 16:52:22.000000');
INSERT INTO `combination` VALUES ('2', '8', '2016-06-14 16:52:30.000000');
INSERT INTO `combination` VALUES ('3', '9', '2016-06-14 16:52:41.000000');
INSERT INTO `combination` VALUES ('4', '10', '2016-06-14 16:52:49.000000');
INSERT INTO `combination` VALUES ('4', '11', '2016-06-14 16:52:57.000000');
INSERT INTO `combination` VALUES ('4', '12', '2016-06-14 16:53:08.000000');
INSERT INTO `combination` VALUES ('4', '13', '2016-06-14 16:53:17.000000');
INSERT INTO `combination` VALUES ('5', '14', '2016-06-14 16:53:28.000000');
INSERT INTO `combination` VALUES ('5', '15', '2016-06-14 16:53:42.000000');
INSERT INTO `combination` VALUES ('5', '16', '2016-06-14 16:54:13.000000');
INSERT INTO `combination` VALUES ('5', '17', '2016-06-14 16:54:20.000000');
INSERT INTO `combination` VALUES ('5', '18', '2016-06-14 16:54:29.000000');

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `mainimage` varchar(50) NOT NULL,
  `minorimage` varchar(50) NOT NULL,
  `maintitle` text NOT NULL,
  `minortitle` text NOT NULL,
  `author` varchar(20) NOT NULL,
  `type1` int(4) NOT NULL,
  `type2` int(4) NOT NULL,
  `type3` int(4) NOT NULL,
  `state` tinyint(1) NOT NULL COMMENT '发布状态',
  `read` int(6) NOT NULL COMMENT '阅读数量',
  `introduct` text NOT NULL,
  `publictime` datetime(6) NOT NULL,
  `createtime` datetime(6) NOT NULL,
  PRIMARY KEY (`mainimage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES ('1', '1', '当流量获取不再简单，京东愈发重视大数据个性化推荐1', '我是副标题1', 'xuyuanfan1', '1', '0', '0', '1', '12', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:43.000000');
INSERT INTO `image` VALUES ('10', '10', '当流量获取不再简单，京东愈发重视大数据个性化推荐10', '我是副标题10', 'xuyuanfan2', '3', '0', '0', '1', '234', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('11', '11', '当流量获取不再简单，京东愈发重视大数据个性化推荐11', '我是副标题11', 'xuyuanfan3', '3', '0', '0', '1', '34', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('12', '12', '当流量获取不再简单，京东愈发重视大数据个性化推荐12', '我是副标题12', 'xuyuanfan4', '1', '0', '0', '1', '3', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('13', '13', '当流量获取不再简单，京东愈发重视大数据个性化推荐13', '我是副标题13', 'xuyuanfan5', '3', '0', '0', '1', '34', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('14', '14', '当流量获取不再简单，京东愈发重视大数据个性化推荐14', '我是副标题14', 'xuyuanfan1', '2', '0', '0', '1', '23', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('15', '15', '当流量获取不再简单，京东愈发重视大数据个性化推荐15', '我是副标题15', 'xuyuanfan2', '1', '0', '0', '1', '445', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('16', '16', '当流量获取不再简单，京东愈发重视大数据个性化推荐16', '我是副标题16', 'xuyuanfan3', '1', '0', '0', '1', '2542', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('17', '17', '当流量获取不再简单，京东愈发重视大数据个性化推荐17', '我是副标题17', 'xuyuanfan4', '2', '0', '0', '1', '23', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('18', '18', '当流量获取不再简单，京东愈发重视大数据个性化推荐18', '我是副标题18', 'xuyuanfan5', '3', '0', '0', '1', '24', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('19', '19', '当流量获取不再简单，京东愈发重视大数据个性化推荐19', '我是副标题19', 'xuyuanfan1', '1', '0', '0', '1', '463', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('2', '2', '当流量获取不再简单，京东愈发重视大数据个性化推荐2', '我是副标题2', 'xuyuanfan2', '3', '0', '0', '0', '232', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:43.000000');
INSERT INTO `image` VALUES ('20', '20', '当流量获取不再简单，京东愈发重视大数据个性化推荐20', '我是副标题20', 'xuyuanfan3', '1', '0', '0', '1', '356', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('21', '21', '当流量获取不再简单，京东愈发重视大数据个性化推荐21', '我是副标题21', 'xuyuanfan4', '3', '0', '0', '1', '342', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('22', '22', '当流量获取不再简单，京东愈发重视大数据个性化推荐22', '我是副标题22', 'xuyuanfan5', '3', '0', '0', '1', '245', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:45.000000');
INSERT INTO `image` VALUES ('3', '3', '当流量获取不再简单，京东愈发重视大数据个性化推荐3', '我是副标题3', 'xuyuanfan1', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:43.000000');
INSERT INTO `image` VALUES ('4', '4', '当流量获取不再简单，京东愈发重视大数据个性化推荐4', '我是副标题4', 'xuyuanfan2', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('5', '5', '当流量获取不再简单，京东愈发重视大数据个性化推荐5', '我是副标题5', 'xuyuanfan3', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('6', '6', '当流量获取不再简单，京东愈发重视大数据个性化推荐6', '我是副标题6', 'xuyuanfan4', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('7', '7', '当流量获取不再简单，京东愈发重视大数据个性化推荐7', '我是副标题7', 'xuyuanfan5', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('8', '8', '当流量获取不再简单，京东愈发重视大数据个性化推荐8', '我是副标题8', 'xuyuanfan1', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');
INSERT INTO `image` VALUES ('9', '9', '当流量获取不再简单，京东愈发重视大数据个性化推荐9', '我是副标题9', 'xuyuanfan2', '3', '0', '0', '1', '0', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '0000-00-00 00:00:00.000000', '2016-05-29 00:06:44.000000');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `nickname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `isexperts` tinyint(1) NOT NULL,
  `jobs` text NOT NULL,
  `company` text NOT NULL,
  `introduct` text NOT NULL,
  `createtime` datetime(6) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('xuyuanfan1', '1.jpg', '许远帆', '123456', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-05-28 00:29:30.000000');
INSERT INTO `user` VALUES ('xuyuanfan2', '2.jpg', '许远帆', '123456', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:23.000000');
INSERT INTO `user` VALUES ('xuyuanfan3', '3.jpg', '许远帆', '123456', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:15.000000');
INSERT INTO `user` VALUES ('xuyuanfan4', '4.jpg', '许远帆', '123456', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:17.000000');
INSERT INTO `user` VALUES ('xuyuanfan5', '5.jpg', '许远帆', '123456', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:20.000000');
