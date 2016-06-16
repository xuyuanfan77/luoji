/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-16 20:08:25
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
INSERT INTO `article` VALUES ('1', '1', '1', '当流量获取不再简单，京东愈发重视大数据个性化推荐1', '我是副标题1', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '1', '1', '0', '0', '0', '12', '2016-05-29 00:06:43');
INSERT INTO `article` VALUES ('2', '2', '2', '当流量获取不再简单，京东愈发重视大数据个性化推荐10', '我是副标题2', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '2', '3', '0', '0', '0', '234', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('3', '3', '3', '当流量获取不再简单，京东愈发重视大数据个性化推荐11', '我是副标题3', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '3', '3', '0', '0', '0', '34', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('4', '4', '4', '当流量获取不再简单，京东愈发重视大数据个性化推荐12', '我是副标题4', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '4', '1', '0', '0', '0', '3', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('5', '5', '5', '当流量获取不再简单，京东愈发重视大数据个性化推荐13', '我是副标题5', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '5', '3', '0', '0', '0', '34', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('6', '6', '6', '当流量获取不再简单，京东愈发重视大数据个性化推荐14', '我是副标题6', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '1', '2', '0', '0', '0', '23', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('7', '7', '7', '当流量获取不再简单，京东愈发重视大数据个性化推荐15', '我是副标题7', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '3', '1', '0', '0', '0', '445', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('8', '8', '8', '当流量获取不再简单，京东愈发重视大数据个性化推荐16', '我是副标题8', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '2', '1', '0', '0', '0', '2542', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('9', '9', '9', '当流量获取不再简单，京东愈发重视大数据个性化推荐17', '我是副标题9', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '4', '2', '0', '0', '0', '23', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('10', '10', '10', '当流量获取不再简单，京东愈发重视大数据个性化推荐18', '我是副标题10', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '5', '3', '0', '0', '0', '24', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('11', '11', '11', '当流量获取不再简单，京东愈发重视大数据个性化推荐19', '我是副标题11', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '1', '1', '0', '0', '0', '463', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('12', '12', '12', '当流量获取不再简单，京东愈发重视大数据个性化推荐2', '我是副标题12', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '2', '3', '0', '0', '0', '232', '2016-05-29 00:06:43');
INSERT INTO `article` VALUES ('13', '13', '13', '当流量获取不再简单，京东愈发重视大数据个性化推荐20', '我是副标题13', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '3', '1', '0', '0', '0', '356', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('14', '14', '14', '当流量获取不再简单，京东愈发重视大数据个性化推荐21', '我是副标题14', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '4', '3', '0', '0', '0', '342', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('15', '15', '15', '当流量获取不再简单，京东愈发重视大数据个性化推荐22', '我是副标题15', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '5', '3', '0', '0', '0', '245', '2016-05-29 00:06:45');
INSERT INTO `article` VALUES ('16', '16', '16', '当流量获取不再简单，京东愈发重视大数据个性化推荐3', '我是副标题16', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '1', '3', '0', '0', '0', '234', '2016-05-29 00:06:43');
INSERT INTO `article` VALUES ('17', '17', '17', '当流量获取不再简单，京东愈发重视大数据个性化推荐4', '我是副标题17', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '2', '3', '0', '0', '0', '2351', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('18', '18', '18', '当流量获取不再简单，京东愈发重视大数据个性化推荐5', '我是副标题18', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '3', '3', '0', '0', '0', '23', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('19', '19', '19', '当流量获取不再简单，京东愈发重视大数据个性化推荐6', '我是副标题19', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '4', '3', '0', '0', '0', '456', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('20', '20', '20', '当流量获取不再简单，京东愈发重视大数据个性化推荐7', '我是副标题20', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '5', '3', '0', '0', '0', '367', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('21', '21', '21', '当流量获取不再简单，京东愈发重视大数据个性化推荐8', '我是副标题21', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '1', '3', '0', '0', '0', '742', '2016-05-29 00:06:44');
INSERT INTO `article` VALUES ('22', '22', '22', '当流量获取不再简单，京东愈发重视大数据个性化推荐9', '我是副标题22', 'UberBIKE能够让这些骑行者呼叫一辆配有自行车挂放架的汽车，连人带自行车一块拉。果然是入乡随俗。', '2', '3', '0', '0', '0', '454', '2016-05-29 00:06:44');

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
INSERT INTO `collect` VALUES ('1', '1', '2016-06-16 15:23:56');
INSERT INTO `collect` VALUES ('1', '2', '2016-06-16 15:24:05');
INSERT INTO `collect` VALUES ('1', '3', '2016-06-16 15:24:13');
INSERT INTO `collect` VALUES ('2', '1', '2016-06-16 15:24:20');
INSERT INTO `collect` VALUES ('2', '3', '2016-06-16 15:24:27');

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
INSERT INTO `include` VALUES ('1', '1', '2016-06-14 16:47:22');
INSERT INTO `include` VALUES ('1', '2', '2016-06-14 16:50:38');
INSERT INTO `include` VALUES ('1', '3', '2016-06-14 16:51:37');
INSERT INTO `include` VALUES ('1', '4', '2016-06-14 16:51:47');
INSERT INTO `include` VALUES ('1', '5', '2016-06-14 16:51:56');
INSERT INTO `include` VALUES ('2', '6', '2016-06-14 16:52:07');
INSERT INTO `include` VALUES ('2', '7', '2016-06-14 16:52:22');
INSERT INTO `include` VALUES ('2', '8', '2016-06-14 16:52:30');
INSERT INTO `include` VALUES ('3', '9', '2016-06-14 16:52:41');
INSERT INTO `include` VALUES ('4', '10', '2016-06-14 16:52:49');
INSERT INTO `include` VALUES ('4', '11', '2016-06-14 16:52:57');
INSERT INTO `include` VALUES ('4', '12', '2016-06-14 16:53:08');
INSERT INTO `include` VALUES ('4', '13', '2016-06-14 16:53:17');
INSERT INTO `include` VALUES ('5', '14', '2016-06-14 16:53:28');
INSERT INTO `include` VALUES ('5', '15', '2016-06-14 16:53:42');
INSERT INTO `include` VALUES ('5', '16', '2016-06-14 16:54:13');
INSERT INTO `include` VALUES ('5', '17', '2016-06-14 16:54:20');
INSERT INTO `include` VALUES ('5', '18', '2016-06-14 16:54:29');

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
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='稿件表';

-- ----------------------------
-- Records of manuscript
-- ----------------------------
INSERT INTO `manuscript` VALUES ('1', '1', '1', '哈哈', '哈哈', '1', '1', '0', '0', '2016-06-16 16:27:21');

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
INSERT INTO `special` VALUES ('1', '华医网结构图', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', 'resource/coverimage/1.png', '1', '0', '0', '2016-06-05 20:57:42');
INSERT INTO `special` VALUES ('2', '华医网结构图', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', 'resource/coverimage/2.png', '2', '0', '0', '2016-06-05 20:58:59');
INSERT INTO `special` VALUES ('3', '华医网结构图', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', 'resource/coverimage/3.png', '3', '0', '0', '2016-06-05 21:02:11');
INSERT INTO `special` VALUES ('4', '华医网结构图', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', 'resource/coverimage/4.png', '4', '0', '0', '2016-06-05 21:02:08');
INSERT INTO `special` VALUES ('5', '华医网结构图', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', 'resource/coverimage/5.png', '5', '0', '0', '2016-06-05 21:02:03');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  `nickname` varchar(255) NOT NULL COMMENT '昵称',
  `headimage` varchar(255) NOT NULL COMMENT '头像',
  `rank` tinyint(4) unsigned NOT NULL COMMENT '级别',
  `jobs` varchar(255) NOT NULL COMMENT '岗位',
  `company` varchar(255) NOT NULL COMMENT '单位',
  `introduction` text NOT NULL COMMENT '简介',
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'xuyuanfan1', '123456', '许远帆', '1.jpg', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-05-28 00:29:30');
INSERT INTO `user` VALUES ('2', 'xuyuanfan2', '123456', '许远帆', '2.jpg', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:23');
INSERT INTO `user` VALUES ('3', 'xuyuanfan3', '123456', '许远帆', '3.jpg', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:15');
INSERT INTO `user` VALUES ('4', 'xuyuanfan4', '123456', '许远帆', '4.jpg', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:17');
INSERT INTO `user` VALUES ('5', 'xuyuanfan5', '123456', '许远帆', '5.jpg', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:20');
