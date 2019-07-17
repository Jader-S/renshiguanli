/*
* @Author: Jader
* @Date:   2018-01-13 13:38:04
* @Last Modified by:   Jader
* @Last Modified time: 2018-10-16 19:23:30
*/
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `allusers`
-- ----------------------------
DROP TABLE IF EXISTS `allusers`;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `qx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of allusers
-- ----------------------------
INSERT INTO `allusers` VALUES ('1', 'admin', 'admin', '超级管理员', '2018-01-13 13:46:56');

-- ----------------------------
-- Table structure for `bumenxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `bumenxinxi`;
CREATE TABLE `bumenxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bumenbianhao` varchar(50) DEFAULT NULL,
  `bumenmingcheng` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of bumenxinxi
-- ----------------------------
INSERT INTO `bumenxinxi` VALUES ('2', '001', '总经办', '2018-01-13 13:46:56');
INSERT INTO `bumenxinxi` VALUES ('3', '002', '行政部', '2018-01-13 13:47:56');
INSERT INTO `bumenxinxi` VALUES ('4', '003', '财务部', '2018-01-13 13:48:56');
INSERT INTO `bumenxinxi` VALUES ('5', '004', '生产部', '2018-01-13 13:49:56');

-- ----------------------------
-- Table structure for `diaodongxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `diaodongxinxi`;
CREATE TABLE `diaodongxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yuangongbianhao` varchar(50) DEFAULT NULL,
  `yuangongxingming` varchar(50) DEFAULT NULL,
  `bumenmingcheng` varchar(50) DEFAULT NULL,
  `danrenzhiwu` varchar(50) DEFAULT NULL,
  `yuanjibengongzi` varchar(50) DEFAULT NULL,
  `diaodongzhiwei` varchar(50) DEFAULT NULL,
  `diaodongbumen` varchar(50) DEFAULT NULL,
  `diaodongriqi` varchar(50) DEFAULT NULL,
  `xianjibengongzi` varchar(50) DEFAULT NULL,
  `diaodongyuanyin` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of diaodongxinxi
-- ----------------------------
INSERT INTO `diaodongxinxi` VALUES ('6', '001', '徐义', '总经办', '总经理助理', '3500', '生产副部长', '生产部', '2018-1-30', '4500', '生产部需要有人直接跟总经理对接', '2018-01-13 13:52:38');

-- ----------------------------
-- Table structure for `gongzixinxi`
-- ----------------------------
DROP TABLE IF EXISTS `gongzixinxi`;
CREATE TABLE `gongzixinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yuangongbianhao` varchar(50) DEFAULT NULL,
  `yuangongxingming` varchar(50) DEFAULT NULL,
  `bumenmingcheng` varchar(50) DEFAULT NULL,
  `danrenzhiwu` varchar(50) DEFAULT NULL,
  `nianfen` varchar(50) DEFAULT NULL,
  `yuefen` varchar(50) DEFAULT NULL,
  `jibengongzi` varchar(50) DEFAULT NULL,
  `quanqinjiangli` varchar(50) DEFAULT NULL,
  `kaohejiangli` varchar(50) DEFAULT NULL,
  `jiabangongzi` varchar(50) DEFAULT NULL,
  `jintiebuzhu` varchar(50) DEFAULT NULL,
  `chengfajine` varchar(50) DEFAULT NULL,
  `gerensuodeshui` varchar(50) DEFAULT NULL,
  `wuxianyijin` varchar(50) DEFAULT NULL,
  `yingfagongzi` varchar(50) DEFAULT NULL,
  `shifagongzi` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of gongzixinxi
-- ----------------------------
INSERT INTO `gongzixinxi` VALUES ('2', '001', '徐义', '生产部', '生产副部长', '2018', '1', '3500', '300', '500', '300', '300', '300', '420', '400', '4200', '3780', 'ffafad', '2018-1-30 14:21:04');
INSERT INTO `gongzixinxi` VALUES ('3', '002', '刘晓琴', '行政部', '文员', '2018', '1', '2000', '200', '0', '0', '200', '100', '200', '300', '2000', '1800', 'fgga', '2018-1-30 14:22:29');
INSERT INTO `gongzixinxi` VALUES ('4', '003', '陈冬冬', '总经办', '总经理助理', '2018', '1', '3500', '200', '300', '200', '200', '50', '405', '300', '4050', '3645', 'fdafda', '2018-1-30 14:56:26');
INSERT INTO `gongzixinxi` VALUES ('5', '004', '许思玲', '财务部', '出纳', '2018', '2', '2600', '200', '0', '200', '100', '100', '270', '300', '2700', '2430', 'fgsgfsg', '2018-1-23 00:32:21');

-- ----------------------------
-- Table structure for `kaohepinggu`
-- ----------------------------
DROP TABLE IF EXISTS `kaohepinggu`;
CREATE TABLE `kaohepinggu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yuangongbianhao` varchar(50) DEFAULT NULL,
  `yuangongxingming` varchar(50) DEFAULT NULL,
  `bumenmingcheng` varchar(50) DEFAULT NULL,
  `danrenzhiwu` varchar(50) DEFAULT NULL,
  `nianfen` varchar(50) DEFAULT NULL,
  `yuefen` varchar(50) DEFAULT NULL,
  `kaohejieguo` varchar(50) DEFAULT NULL,
  `kaohejiangli` varchar(50) DEFAULT NULL,
  `kaohebumen` varchar(50) DEFAULT NULL,
  `kaoheren` varchar(50) DEFAULT NULL,
  `kaoheneirong` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of kaohepinggu
-- ----------------------------
INSERT INTO `kaohepinggu` VALUES ('2', '001', '徐义', '生产部', '生产副部长', '2018', '1', '优', '500', '总经办', '李主管', '工作能力，同事关系等', '2018-1-29 18:46:55');
INSERT INTO `kaohepinggu` VALUES ('3', '002', '刘晓琴', '行政部', '文员', '2018', '1', '一般', '0', '行政部', '陈主管', '工作积极性等', '2018-1-29 18:47:43');
INSERT INTO `kaohepinggu` VALUES ('5', '003', '陈冬冬', '总经办', '总经理助理', '2018', '1', '良', '300', '总经办', '林总', '工作能力等', '2018-1-30 14:51:56');

-- ----------------------------
-- Table structure for `kaoqinxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `kaoqinxinxi`;
CREATE TABLE `kaoqinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yuangongbianhao` varchar(50) DEFAULT NULL,
  `yuangongxingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `suoshubumen` varchar(50) DEFAULT NULL,
  `danrenzhiwu` varchar(50) DEFAULT NULL,
  `nianfen` varchar(50) DEFAULT NULL,
  `yuefen` varchar(50) DEFAULT NULL,
  `daoqintianshu` varchar(50) DEFAULT NULL,
  `chidaotianshu` varchar(50) DEFAULT NULL,
  `kuangdaotianshu` varchar(50) DEFAULT NULL,
  `qingjiatianshu` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of kaoqinxinxi
-- ----------------------------
INSERT INTO `kaoqinxinxi` VALUES ('5', '001', '徐义', '男', '生产部', '生产副部长', '2018', '1', '25', '2', '0', '0', 'dfafad', '2018-1-30 11:46:49');
INSERT INTO `kaoqinxinxi` VALUES ('6', '002', '刘晓琴', '女', '行政部', '文员', '2018', '1', '24', '0', '0', '1', 'fadfad', '2018-1-30 11:47:02');
INSERT INTO `kaoqinxinxi` VALUES ('7', '003', '陈冬冬', '女', '总经办', '总经理助理', '2018', '1', '25', '0', '0', '0', 'sfafad', '2018-1-30 14:28:50');
INSERT INTO `kaoqinxinxi` VALUES ('9', '004', '许思玲', '女', '财务部', '出纳', '2018', '1', '25', '1', '0', '0', 'gsgag', '2018-1-30 14:50:55');

-- ----------------------------
-- Table structure for `yuangongxinxi`
-- ----------------------------
DROP TABLE IF EXISTS `yuangongxinxi`;
CREATE TABLE `yuangongxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yuangongbianhao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `yuangongxingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `bumenmingcheng` varchar(50) DEFAULT NULL,
  `danrenzhiwu` varchar(50) DEFAULT NULL,
  `minzu` varchar(50) DEFAULT NULL,
  `chushengriqi` varchar(50) DEFAULT NULL,
  `shenfenzhenghao` varchar(300) DEFAULT NULL,
  `jiguan` varchar(50) DEFAULT NULL,
  `wenhuachengdu` varchar(50) DEFAULT NULL,
  `zhengzhimianmao` varchar(50) DEFAULT NULL,
  `hunyinqingkuang` varchar(50) DEFAULT NULL,
  `biyeyuanxiao` varchar(300) DEFAULT NULL,
  `zhuanye` varchar(50) DEFAULT NULL,
  `biyeshijian` varchar(50) DEFAULT NULL,
  `shoujihao` varchar(50) DEFAULT NULL,
  `jibengongzi` varchar(50) DEFAULT NULL,
  `xianzhuzhi` varchar(300) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of yuangongxinxi
-- ----------------------------
INSERT INTO `yuangongxinxi` VALUES ('2', '001', '001', '徐义', '男', '生产部', '生产副部长', '汉', '1973-10-29', '5419151616316161651', '北京', '本科', '党员', '已婚', '北京工商管理学院', '经济学', '1995-07-01', '13509165625', '4500', '北京王福井', 'uploadfile/1477737252gwt2.jpg', 'fadfgdas', '2018-1-29 18:34:19');
INSERT INTO `yuangongxinxi` VALUES ('3', '002', '002', '刘晓琴', '女', '行政部', '文员', '苗族', '1993-10-29', '354849196164649461665', '上海', '大专', '群众', '未婚', '上海同济大学', '行政管理', '2016-07-01', '13854646461', '2000', '上海东方明珠', 'uploadfile/14777376890fes.jpg', 'sgsgsf', '2018-1-29 18:41:36');
INSERT INTO `yuangongxinxi` VALUES ('4', '003', '003', '陈冬冬', '女', '总经办', '总经理助理', '满', '1988-10-29', '51649646161616615', '浙江', '本科', '党员', '已婚', '浙江理工大学', '工商管理', '2010-07-01', '13849419652', '3500', '浙江杭州西城路', 'uploadfile/14777382277s1j.jpg', 'afaf', '2018-1-29 18:50:31');
INSERT INTO `yuangongxinxi` VALUES ('6', '004', '004', '许思玲', '女', '财务部', '出纳', '汉族', '1987-10-20', '330856194849115615', '广东', '本科', '党员', '未婚', '广东财经大学', '会计', '2009-07-01', '13846646166', '2600', '广东朝阳路100号', 'uploadfile/1477810218lqqj.jpg', 'fafda', '2018-1-30 14:50:20');
