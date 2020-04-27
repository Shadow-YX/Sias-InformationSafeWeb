/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : php99

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-13 09:31:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT '',
  `user` varchar(255) DEFAULT '',
  `intime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('41', '我是谁', '李栋', '1560274979');
INSERT INTO `msg` VALUES ('42', '我在哪', 'lucy', '1560275131');
INSERT INTO `msg` VALUES ('43', 'aaa', 'das', '1560321066');
INSERT INTO `msg` VALUES ('44', 'zz', 'zzhao', '1560326539');
INSERT INTO `msg` VALUES ('45', '制造商A#￥……5>&^', '郑州', '1560326553');

-- ----------------------------
-- Table structure for `register`
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES ('1', 'zhang123', '123456', '2315@qq.com', '13288887777');
INSERT INTO `register` VALUES ('2', 'admin', '123456', '123@qq.com', '12345678910');
INSERT INTO `register` VALUES ('3', 'hao', '12345', '123@163.com', '18569956187');
INSERT INTO `register` VALUES ('4', 'admin123', '123456', '11@qq.com', '18569956195');
INSERT INTO `register` VALUES ('5', 'admin5', '123456', '123@qq.com', '18569956195');
INSERT INTO `register` VALUES ('6', 'ss', 'ss', 'ss', 'a');
INSERT INTO `register` VALUES ('7', '1123', '123', '111', '12354');
INSERT INTO `register` VALUES ('8', 'admin111', '123456', '11@qq.com', '13538569544');
