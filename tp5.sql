/*
Navicat MySQL Data Transfer

Source Server         : tp5
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : tp5

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-03-04 19:12:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_admin
-- ----------------------------
DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '管理员名称',
  `password` char(32) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_admin
-- ----------------------------
INSERT INTO `tp_admin` VALUES ('2', 'admin', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `tp_admin` VALUES ('20', 'admin111', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `tp_admin` VALUES ('19', 'admin124', '123456');
INSERT INTO `tp_admin` VALUES ('18', 'admin123', '123456');

-- ----------------------------
-- Table structure for tp_article
-- ----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(60) NOT NULL COMMENT '文章标题',
  `author` varchar(30) NOT NULL COMMENT '文章作者',
  `desc` varchar(255) NOT NULL COMMENT '文章简介',
  `keywords` varchar(255) NOT NULL COMMENT '文章关键词',
  `content` text NOT NULL COMMENT '文章内容',
  `pic` varchar(100) NOT NULL COMMENT '缩略图',
  `click` int(10) NOT NULL DEFAULT '0' COMMENT '点击数',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:不推荐 1：推荐',
  `time` int(10) NOT NULL COMMENT '发布时间',
  `cateid` mediumint(9) NOT NULL COMMENT '所属栏目',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_article
-- ----------------------------
INSERT INTO `tp_article` VALUES ('1', '测试1', '2', '4', '测试,文章', '<p>5<br/></p>', '', '11', '1', '1475145866', '1');
INSERT INTO `tp_article` VALUES ('5', '测试文章3', '童年', '烧烤不管是男生还是女生都很热爱，而且是夏天冬天都适合的美食。如果你不想在外吃烤肉，那么你也可以在家自制哦。下面我们一起来看看在家如何自制烤肉吧。 ', '测试,文章', '<p>烧烤不管是男生还是女生都很热爱，而且是夏天冬天都适合的美食。如果你不想在外吃烤肉，那么你也可以在家自制哦。下面我们一起来看看在家如何自制烤肉吧。烧烤不管是男生还是女生都很热爱，而且是夏天冬天都适合的美食。如果你不想在外吃烤肉，那么你也可以在家自制哦。下面我们一起来看看在家如何自制烤肉吧。烧烤不管是男生还是女生都很热爱，而且是夏天冬天都适合的美食。如果你不想在外吃烤肉，那么你也可以在家自制哦。下面我们一起来看看在家如何自制烤肉吧。</p>', '/uploads/20161002\\753fd85d16974754dcf271d37d072d1e.png', '92', '1', '1475417556', '1');
INSERT INTO `tp_article` VALUES ('4', '测试文章2', '童攀', '描述', '童年,测试', '<p>222<br/></p>', '/uploads/20160930\\fd338f8a40bc432d5febf54b0be24049.jpg', '5', '0', '1475147467', '3');
INSERT INTO `tp_article` VALUES ('6', '测试文章4', '童攀', '公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！ ', '童攀,Tp5', '<p>公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！公司聚餐是非常普遍的公司活动，那么公司部门聚餐通知怎么写呢？以下是小编提供的一些范文，供大家参考哦！</p>', '/uploads/20161002\\9fc03900ff44f8c7679ae0edfd673d67.png', '11', '0', '1475417603', '1');
INSERT INTO `tp_article` VALUES ('7', '老爸过生日', 'Tp5', '父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ ', '老爸,生日', '<p>父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ <br/>父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ <br/>父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ <br/>父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ <br/>父亲过生日，肯定要送个爸爸平时用得着的东西，每次用的时候就能想到是你送的，那么老爸过生日送什么礼物好呢？ <br/></p>', '/uploads/20161002\\83c90d060801999ca5b497348f7771a9.png', '15', '0', '1475417731', '1');

-- ----------------------------
-- Table structure for tp_cate
-- ----------------------------
DROP TABLE IF EXISTS `tp_cate`;
CREATE TABLE `tp_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `catename` varchar(30) NOT NULL COMMENT '栏目名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_cate
-- ----------------------------
INSERT INTO `tp_cate` VALUES ('1', '美食');
INSERT INTO `tp_cate` VALUES ('2', '健身');
INSERT INTO `tp_cate` VALUES ('3', '养生');
INSERT INTO `tp_cate` VALUES ('4', '服装');
INSERT INTO `tp_cate` VALUES ('6', '生活');
INSERT INTO `tp_cate` VALUES ('7', '娱乐');
INSERT INTO `tp_cate` VALUES ('8', '婚嫁');
INSERT INTO `tp_cate` VALUES ('9', '美容');

-- ----------------------------
-- Table structure for tp_links
-- ----------------------------
DROP TABLE IF EXISTS `tp_links`;
CREATE TABLE `tp_links` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '链接id',
  `title` varchar(30) NOT NULL COMMENT '链接标题',
  `url` varchar(60) NOT NULL COMMENT '链接地址',
  `desc` varchar(255) NOT NULL COMMENT '链接说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_links
-- ----------------------------
INSERT INTO `tp_links` VALUES ('1', '百度', 'http://www.baidu.com', '');

-- ----------------------------
-- Table structure for tp_tags
-- ----------------------------
DROP TABLE IF EXISTS `tp_tags`;
CREATE TABLE `tp_tags` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'tag标签id',
  `tagname` varchar(30) NOT NULL COMMENT 'tag标签名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_tags
-- ----------------------------
INSERT INTO `tp_tags` VALUES ('1', '趣事');
INSERT INTO `tp_tags` VALUES ('2', '奇闻2');
INSERT INTO `tp_tags` VALUES ('4', '测试');

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `NickName` varchar(32) DEFAULT NULL COMMENT '昵称',
  `UserName` varchar(32) DEFAULT NULL COMMENT '用户名',
  `Password` varchar(32) DEFAULT NULL COMMENT '密码',
  `UserType` int(8) DEFAULT NULL COMMENT '用户类型 0：默认房东 1：租客',
  `Phone` varchar(20) DEFAULT NULL COMMENT '电话',
  `HeadPic` varchar(64) DEFAULT NULL,
  `Area` varchar(32) DEFAULT NULL COMMENT '地区',
  `OpenId` varchar(32) DEFAULT NULL,
  `RegTime` datetime DEFAULT NULL,
  `LastLoginTime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------

-- ----------------------------
-- Table structure for t_contract
-- ----------------------------
DROP TABLE IF EXISTS `t_contract`;
CREATE TABLE `t_contract` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '合约id',
  `UserName` varchar(32) DEFAULT NULL COMMENT '租客名字',
  `phone` int(8) DEFAULT NULL COMMENT '楼层号',
  `rental` decimal(8,2) DEFAULT NULL COMMENT '租金',
  `getRentalTime` int(8) DEFAULT NULL COMMENT '收租时间(月/每次)',
  `getFeeTime` int(8) DEFAULT NULL COMMENT '收费用时间(月/每次)',
  `remindBeforeDay` int(8) DEFAULT NULL COMMENT '提醒的天数',
  `deposit` varchar(32) DEFAULT NULL,
  `IdCardPic` datetime DEFAULT NULL COMMENT '身份证图片地址',
  `BeginTime` datetime DEFAULT NULL COMMENT '开始时间',
  `EndTime` datetime DEFAULT NULL COMMENT '结束时间',
  `Remark` varchar(255) DEFAULT NULL COMMENT '备注',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` int(8) DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` datetime DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_contract
-- ----------------------------

-- ----------------------------
-- Table structure for t_fee
-- ----------------------------
DROP TABLE IF EXISTS `t_fee`;
CREATE TABLE `t_fee` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '费用id',
  `Name` varchar(30) DEFAULT NULL COMMENT '费用名称',
  `Unit` varchar(10) DEFAULT NULL COMMENT '单位(如电：度)',
  `Price` decimal(8,2) DEFAULT NULL COMMENT '费用价格',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` datetime DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` int(8) DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_fee
-- ----------------------------

-- ----------------------------
-- Table structure for t_floor
-- ----------------------------
DROP TABLE IF EXISTS `t_floor`;
CREATE TABLE `t_floor` (
  `Id` int(8) NOT NULL AUTO_INCREMENT,
  `HouseId` int(8) DEFAULT NULL COMMENT '房子Id',
  `Floor` int(8) DEFAULT NULL,
  `RoomNum` int(8) DEFAULT NULL COMMENT '房间数',
  `CreateUserId` int(8) DEFAULT NULL,
  `CreateTime` datetime DEFAULT NULL,
  `UpdateUserId` int(8) DEFAULT NULL,
  `UpdateTime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_floor
-- ----------------------------

-- ----------------------------
-- Table structure for t_house
-- ----------------------------
DROP TABLE IF EXISTS `t_house`;
CREATE TABLE `t_house` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '房子id',
  `Name` varchar(32) DEFAULT NULL COMMENT '房子名字',
  `FloorNum` int(8) DEFAULT NULL COMMENT '楼层数',
  `AreaId` int(8) DEFAULT NULL COMMENT '地区ID',
  `Address` varchar(20) DEFAULT NULL COMMENT '电话',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` datetime DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` int(8) DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_house
-- ----------------------------

-- ----------------------------
-- Table structure for t_photorelate
-- ----------------------------
DROP TABLE IF EXISTS `t_photorelate`;
CREATE TABLE `t_photorelate` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `Title` varchar(80) DEFAULT NULL COMMENT '标题',
  `PicUrl` varchar(256) DEFAULT NULL COMMENT '图片地址',
  `PicType` varchar(256) DEFAULT NULL COMMENT '图片类型',
  `refId` varchar(256) DEFAULT NULL COMMENT '类型关联表的Id',
  `Status` int(8) DEFAULT '1' COMMENT '图片状态',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` datetime DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` int(8) DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_photorelate
-- ----------------------------

-- ----------------------------
-- Table structure for t_room
-- ----------------------------
DROP TABLE IF EXISTS `t_room`;
CREATE TABLE `t_room` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '房间id',
  `Name` varchar(32) DEFAULT NULL COMMENT '房间名字',
  `Floor` int(8) DEFAULT NULL COMMENT '楼层号',
  `RentType` int(8) DEFAULT NULL COMMENT '出租方式，0、整租，1、合租',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` datetime DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` int(8) DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_room
-- ----------------------------

-- ----------------------------
-- Table structure for t_roomfeerelate
-- ----------------------------
DROP TABLE IF EXISTS `t_roomfeerelate`;
CREATE TABLE `t_roomfeerelate` (
  `Id` int(8) NOT NULL AUTO_INCREMENT COMMENT '房间费用关系id',
  `roomId` int(8) NOT NULL COMMENT '房间表Id',
  `FeeId` int(8) DEFAULT NULL COMMENT '费用表Id',
  `CreateUserId` int(8) DEFAULT NULL COMMENT '创建人',
  `CreateTime` datetime DEFAULT NULL COMMENT '创建时间',
  `UpdateUserId` int(8) DEFAULT NULL COMMENT '修改人',
  `UpdateTime` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_roomfeerelate
-- ----------------------------
