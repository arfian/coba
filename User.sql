/*
Navicat MySQL Data Transfer
Source Host     : localhost:3306
Source Database : user
Target Host     : localhost:3306
Target Database : user
Date: 09/02/2013 13:34:57
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `No_telp` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
