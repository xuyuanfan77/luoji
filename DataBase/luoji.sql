/*
Navicat MySQL Data Transfer

Source Server         : luoji
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : luoji

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-07-06 23:12:09
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', '1', '数据库中的数据表关系', '一对一、一对多、多对多', '数据表之间有三种关系：1、一对一关系；2、一对多关系；3、多对多关系；\r\n\r\n一对多关系：这是最普通的一种关系。在这种关系中，A表中的一行可以匹配B表中的多行，但是B表中的一行只能匹配A表中的一行。只有当一个相关列是一个主键或具有唯一约束时，才能创建一对多关系。\r\n\r\n多对多关系：A表中的一行可以匹配B表中的多行，反之亦然。要创建这种关系，需要定义第三个表，称为结合表，它的主键由A表和B表的外部键组成。\r\n\r\n一对一关系：A 表中的一行最多只能匹配于 B 表中的一行，反之亦然。如果相关列都是主键或都具有唯一约束，则可以创建一对一关系。这种关系并不常见，因为一般来说，按照这种方式相关的信息可以都在一个表中。', '1', '1', '0', '0', '0', '12', '2016-05-29 00:06:43');
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
INSERT INTO `collect` VALUES ('1', '1', '2016-07-02 23:52:23');
INSERT INTO `collect` VALUES ('1', '2', '2016-07-02 23:46:47');
INSERT INTO `collect` VALUES ('1', '3', '2016-07-02 23:52:25');
INSERT INTO `collect` VALUES ('1', '4', '2016-07-02 20:23:15');
INSERT INTO `collect` VALUES ('1', '5', '2016-07-02 20:23:37');
INSERT INTO `collect` VALUES ('1', '6', '2016-07-02 20:23:47');
INSERT INTO `collect` VALUES ('1', '7', '2016-07-02 20:23:57');
INSERT INTO `collect` VALUES ('1', '8', '2016-07-02 20:24:05');
INSERT INTO `collect` VALUES ('1', '9', '2016-07-02 20:24:14');
INSERT INTO `collect` VALUES ('1', '10', '2016-07-02 20:24:22');
INSERT INTO `collect` VALUES ('1', '11', '2016-07-02 20:24:30');
INSERT INTO `collect` VALUES ('1', '12', '2016-07-02 20:24:36');
INSERT INTO `collect` VALUES ('1', '13', '2016-07-02 20:24:43');
INSERT INTO `collect` VALUES ('1', '14', '2016-07-02 20:24:50');
INSERT INTO `collect` VALUES ('1', '15', '2016-07-02 20:24:57');
INSERT INTO `collect` VALUES ('1', '16', '2016-07-02 20:25:04');
INSERT INTO `collect` VALUES ('1', '17', '2016-07-02 20:25:11');
INSERT INTO `collect` VALUES ('1', '18', '2016-07-02 20:25:19');
INSERT INTO `collect` VALUES ('1', '19', '2016-07-02 20:25:28');
INSERT INTO `collect` VALUES ('1', '20', '2016-07-02 20:25:35');
INSERT INTO `collect` VALUES ('1', '21', '2016-07-02 20:25:42');
INSERT INTO `collect` VALUES ('1', '22', '2016-07-02 23:52:05');
INSERT INTO `collect` VALUES ('2', '1', '2016-06-16 15:24:20');
INSERT INTO `collect` VALUES ('2', '3', '2016-06-16 15:24:27');

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
  `createtime` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='稿件表';

-- ----------------------------
-- Records of manuscript
-- ----------------------------
INSERT INTO `manuscript` VALUES ('1', '1', '1', '哈哈', '哈哈', '1', '1', '0', '0', '2016-06-16 16:27:21');

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
INSERT INTO `special` VALUES ('1', '华医网结构图1', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', '1.png', '5', '1', '0', '0', '2016-06-05 20:57:42');
INSERT INTO `special` VALUES ('2', '华医网结构图2', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', '2.png', '3', '2', '0', '0', '2016-06-05 20:58:59');
INSERT INTO `special` VALUES ('3', '华医网结构图3', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', '3.png', '2', '3', '0', '0', '2016-06-05 21:02:11');
INSERT INTO `special` VALUES ('4', '华医网结构图4', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', '4.png', '4', '4', '0', '0', '2016-06-05 21:02:08');
INSERT INTO `special` VALUES ('5', '华医网结构图5', '一图读懂华医网', '视图模型的定义并不需要先单独定义其中的模型类，系统会默认按照系统的规则进行数据表的定位。如果Blog模型并没有定义，那么系统会自动根据当前模型的表前缀和后缀来自动获取对应的数据表。也就是说，如果我们并没有定义Blog模型类，那么上面的定义后，系统在进行视图模型的操作的时候会根据Blog这个名称和当前的表前缀设置（假设为Think_ ）获取到对应的数据表可能是think_blog。', '5.png', '1', '5', '0', '0', '2016-06-05 21:02:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'xuyuanfan1', '65ba841e01d6db7733e90a5b7f9e6f80', '许远帆', '1.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-05-28 00:29:30');
INSERT INTO `user` VALUES ('2', 'xuyuanfan2', '74b87337454200d4d33f80c4663dc5e5', '许远帆', '2.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:23');
INSERT INTO `user` VALUES ('3', 'xuyuanfan3', 'd41d8cd98f00b204e9800998ecf8427e', '许远帆', '3.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:15');
INSERT INTO `user` VALUES ('4', 'xuyuanfan4', 'd41d8cd98f00b204e9800998ecf8427e', '许远帆', '4.png', '', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:17');
INSERT INTO `user` VALUES ('5', 'xuyuanfan5', 'd41d8cd98f00b204e9800998ecf8427e', '许远帆', '5.jpg', 'xuyuanfan77@outlook.com', '0', '产品助理', '广东医群科技信息有限公司', '2009年就读于汕头大学，于2013年进入4399担任游戏开发工程师，具备多年的游戏开发经验，擅长于WEB开发。', '2016-06-05 21:36:20');
INSERT INTO `user` VALUES ('6', 'xuyuanfan77', '74b87337454200d4d33f80c4663dc5e5', '许远帆', 'default.jpg', '', '0', '', '', '', '2016-06-22 23:22:00');
INSERT INTO `user` VALUES ('7', 'xuyuanfan6', '74b87337454200d4d33f80c4663dc5e5', '远航之帆', 'default.jpg', '', '0', '', '', '', '2016-06-24 23:40:23');
INSERT INTO `user` VALUES ('8', 'xuyuanfan7', '74b87337454200d4d33f80c4663dc5e5', '远航之帆', 'default.jpg', '', '0', '', '', '', '2016-06-24 23:44:43');
INSERT INTO `user` VALUES ('9', 'xuyuanfan8', '74b87337454200d4d33f80c4663dc5e5', '远航之帆', 'default.jpg', '', '0', '', '', '', '2016-06-24 23:46:06');
INSERT INTO `user` VALUES ('10', 'xuyuanfan9', '74b87337454200d4d33f80c4663dc5e5', '远航之帆', 'default.jpg', '', '0', '', '', '', '2016-06-24 23:50:26');
INSERT INTO `user` VALUES ('11', 'xuyuanfan10', '74b87337454200d4d33f80c4663dc5e5', '远航之帆', 'default.jpg', '', '0', '', '', '', '2016-06-25 00:17:35');
