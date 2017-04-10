/*
Navicat MySQL Data Transfer

Source Server         : myj
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-04-10 19:31:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blogcode_test
-- ----------------------------
DROP TABLE IF EXISTS `blogcode_test`;
CREATE TABLE `blogcode_test` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of blogcode_test
-- ----------------------------
INSERT INTO `blogcode_test` VALUES ('1', 'a1', '1234');

-- ----------------------------
-- Table structure for blogcode_user
-- ----------------------------
DROP TABLE IF EXISTS `blogcode_user`;
CREATE TABLE `blogcode_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `num` int(11) NOT NULL DEFAULT '0',
  `updatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of blogcode_user
-- ----------------------------
INSERT INTO `blogcode_user` VALUES ('1', 'admin', 'md5(md5(\'123\',true))', '0000-00-00 00:00:00', '', '0', '0000-00-00 00:00:00');
