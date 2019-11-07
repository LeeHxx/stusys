/*
 Navicat MySQL Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80013
 Source Host           : localhost:3306
 Source Schema         : stusys

 Target Server Type    : MySQL
 Target Server Version : 80013
 File Encoding         : 65001

 Date: 07/11/2019 23:52:35
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zh` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mm` varchar(25) DEFAULT NULL,
  `js` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login
-- ----------------------------
BEGIN;
INSERT INTO `login` VALUES (1, 'root', 'root', '0');
INSERT INTO `login` VALUES (2, '123', '123', NULL);
INSERT INTO `login` VALUES (4, '111', '111', '0');
INSERT INTO `login` VALUES (10, '354', '4532', '0');
INSERT INTO `login` VALUES (11, '', '', '1');
INSERT INTO `login` VALUES (13, '11111', '11', '1');
INSERT INTO `login` VALUES (15, '3456', '3456', '0');
INSERT INTO `login` VALUES (17, '23', '123', '0');
INSERT INTO `login` VALUES (21, '1', '1', '0');
COMMIT;

-- ----------------------------
-- Table structure for stu
-- ----------------------------
DROP TABLE IF EXISTS `stu`;
CREATE TABLE `stu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stuname` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `stusex` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuid` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuxy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuzy` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuclass` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stutel` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuaddress` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `stuyear` varchar(10) DEFAULT NULL,
  `jg` varchar(20) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of stu
-- ----------------------------
BEGIN;
INSERT INTO `stu` VALUES (1, '赵威', '男', '16150234', '信息工程学院', '信息管理与信息系统', '信管2班', '122123412334', '1', '2016', '苏州市', NULL);
INSERT INTO `stu` VALUES (2, '老板', '男', '16150221', '信息工程学院', '信息管理与信息系统', '信管2班', '12341234123', '山西', '2019', '苏州市', NULL);
INSERT INTO `stu` VALUES (3, 'boss', '女', '16150222', '会计与审计学院', '信息管理与信息系统', '信管2班', '111111111111', '南京', '2017', '无锡市', NULL);
INSERT INTO `stu` VALUES (18, '茹佳兆', '女', '16150221', '会计与审计学院', '信息管理与信息系统', '信管2班', '18812131213', '山西', '2019', '运城市', NULL);
INSERT INTO `stu` VALUES (20, '王磊', '男', '123', '信息工程学院', '', '信管1班', '12300000000', '南京市', '2019', '淮安市', NULL);
INSERT INTO `stu` VALUES (21, '李浩瑄', '男', '16150214', '信息工程学院', NULL, '信管2班', '15651006120', '不知道', '2017', '徐州市', '');
INSERT INTO `stu` VALUES (22, '童禹皓', '女', '16150222', '信息工程学院', NULL, '信管2班', '18912344321', '南京市', '2016', '淮安市', '');
INSERT INTO `stu` VALUES (23, '老王', '女', '12345', '信息工程学院', NULL, '信管2班', '12341234123', '家里', '2017', '无锡市', '');
INSERT INTO `stu` VALUES (24, '测试', '', '111', '金融与经济学院', NULL, '1班', '11122223333', '住址', '2016', '苏州市', '');
INSERT INTO `stu` VALUES (25, 'test', '男', '1234', '会计与审计学院', NULL, 'class.1', '12345676899', 'test', '2016', '南京市', '');
INSERT INTO `stu` VALUES (26, 'test1', '', '79797777', '信息工程学院', NULL, 'class.2', '0009087123', 'address', '2019', '淮安市', '');
INSERT INTO `stu` VALUES (27, 'release', '女', '1212', '信息工程学院', NULL, 'class.12', '12345123523', 'www.qwe', '2017', '无锡市', '');
INSERT INTO `stu` VALUES (28, 'Cat', '女', '345', '信息工程学院', NULL, '信管', '11111111111', 'cathome', '2019', '徐州市', '');
INSERT INTO `stu` VALUES (29, '000', '男', '00000', '会计与审计学院', NULL, '信管0班', '00000000000', '000000', '2016', '宿迁市', '');
INSERT INTO `stu` VALUES (30, 'qe', '女', '3214', '金融与经济学院', NULL, '', '', '', '2015', '常州市', '');
INSERT INTO `stu` VALUES (31, 'erqw', '女', '4312', '金融与经济学院', NULL, '', '', '', '2015', '宿迁市', '');
INSERT INTO `stu` VALUES (32, 'twerq', '女', '625', '金融与经济学院', NULL, '', '', '', '2015', '淮安市', '');
INSERT INTO `stu` VALUES (33, '2345', '女', '14514', '金融与经济学院', NULL, '', '', '', '2015', '泰州市', '');
INSERT INTO `stu` VALUES (34, 'wertyw', '男', '1355', '会计与审计学院', NULL, '', '', '', '2016', '苏州市', '');
INSERT INTO `stu` VALUES (35, 'qwer', '男', '3142', '会计与审计学院', NULL, '', '', '', '2015', '常州市', '');
INSERT INTO `stu` VALUES (36, '321', '男', '1323', '金融与经济学院', NULL, NULL, NULL, NULL, '2015', '南京市', ' ');
INSERT INTO `stu` VALUES (37, '1231', '男', '21222', '金融与经济学院', NULL, NULL, NULL, NULL, '2015', '南京市', NULL);
INSERT INTO `stu` VALUES (38, 'qwer', '男', '2121', '金融与经济学院', NULL, NULL, NULL, NULL, '2015', '南京市', NULL);
INSERT INTO `stu` VALUES (39, 'rqwer', '男', '111', '金融与经济学院', NULL, NULL, NULL, NULL, '2015', '南京市', NULL);
INSERT INTO `stu` VALUES (40, 'ewqe', '男', '222', '金融与经济学院', NULL, NULL, NULL, NULL, '2016', '南京市', NULL);
INSERT INTO `stu` VALUES (41, 'q', '女', '333', '金融与经济学院', NULL, NULL, NULL, NULL, '2016', '南京市', NULL);
INSERT INTO `stu` VALUES (42, 'za', '女', '232', '金融与经济学院', NULL, NULL, NULL, NULL, '2016', '徐州市', NULL);
INSERT INTO `stu` VALUES (43, 'rr', '女', '3233', '金融与经济学院', NULL, NULL, NULL, NULL, '2017', '徐州市', NULL);
INSERT INTO `stu` VALUES (44, 'yy', '女', '434', '金融与经济学院', NULL, NULL, NULL, NULL, '2017', '徐州市', NULL);
INSERT INTO `stu` VALUES (45, 'oo', '女', '321', '金融与经济学院', NULL, NULL, NULL, NULL, '2017', '徐州市', NULL);
INSERT INTO `stu` VALUES (46, 'bb', '女', '54', '金融与经济学院', NULL, NULL, NULL, NULL, '2018', '苏州市', NULL);
INSERT INTO `stu` VALUES (47, 'dd', '女', '6433', '金融与经济学院', NULL, NULL, NULL, NULL, '2018', '苏州市', NULL);
INSERT INTO `stu` VALUES (48, 'bbb', '女', '34', '金融与经济学院', NULL, NULL, NULL, NULL, '2018', '苏州市', NULL);
INSERT INTO `stu` VALUES (49, 'nn', '女', '342', '金融与经济学院', NULL, NULL, NULL, NULL, '2018', '淮安市', NULL);
INSERT INTO `stu` VALUES (50, 'mm', '女', '5134', '金融与经济学院', NULL, NULL, NULL, NULL, '2018', '淮安市', NULL);
INSERT INTO `stu` VALUES (51, 'rte', '男', '123', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '宿迁市', NULL);
INSERT INTO `stu` VALUES (52, 'hgf', '男', '23', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '宿迁市', NULL);
INSERT INTO `stu` VALUES (53, 'hhh', '男', '3123', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '宿迁市', NULL);
INSERT INTO `stu` VALUES (54, 'hh', '男', '333', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '无锡市', NULL);
INSERT INTO `stu` VALUES (55, '1111', '男', '33', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '无锡市', NULL);
INSERT INTO `stu` VALUES (56, 'qwe', '男', '3123', '信息工程学院', NULL, NULL, NULL, NULL, '2018', '无锡市', NULL);
INSERT INTO `stu` VALUES (57, 'qq', '男', '423', '信息工程学院', NULL, NULL, NULL, NULL, '2017', '苏州市', NULL);
INSERT INTO `stu` VALUES (58, 'ww', '男', '22', '信息工程学院', NULL, NULL, NULL, NULL, '2017', '运城市', NULL);
INSERT INTO `stu` VALUES (59, 'www', '男', '222', '信息工程学院', NULL, NULL, NULL, NULL, '2017', '泰州市', NULL);
INSERT INTO `stu` VALUES (60, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '运城市', NULL);
COMMIT;

-- ----------------------------
-- Table structure for xbxxb
-- ----------------------------
DROP TABLE IF EXISTS `xbxxb`;
CREATE TABLE `xbxxb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xbid` int(10) DEFAULT NULL,
  `xb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xbxxb
-- ----------------------------
BEGIN;
INSERT INTO `xbxxb` VALUES (1, 111, '计算机系');
INSERT INTO `xbxxb` VALUES (2, 111, '111');
INSERT INTO `xbxxb` VALUES (4, 123, '123');
INSERT INTO `xbxxb` VALUES (5, 1111, '1111');
INSERT INTO `xbxxb` VALUES (6, 123333, '1111');
COMMIT;

-- ----------------------------
-- Table structure for xyxxb
-- ----------------------------
DROP TABLE IF EXISTS `xyxxb`;
CREATE TABLE `xyxxb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xyid` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xyxxb
-- ----------------------------
BEGIN;
INSERT INTO `xyxxb` VALUES (1, '111', '信息科学与工程学院');
INSERT INTO `xyxxb` VALUES (2, '222', '贸易与金融学院');
INSERT INTO `xyxxb` VALUES (4, '123', '123');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
