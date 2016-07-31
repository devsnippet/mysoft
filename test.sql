/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2016-02-19 17:48:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for system_action
-- ----------------------------
DROP TABLE IF EXISTS `system_action`;
CREATE TABLE `system_action` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '权限ID',
  `name` varchar(20) NOT NULL COMMENT '权限名称',
  `tag` varchar(20) DEFAULT NULL COMMENT '权限标识',
  `explain` varchar(200) NOT NULL COMMENT '说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_action
-- ----------------------------

-- ----------------------------
-- Table structure for system_role
-- ----------------------------
DROP TABLE IF EXISTS `system_role`;
CREATE TABLE `system_role` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '角色ID',
  `name` varchar(20) NOT NULL COMMENT '角色名称',
  `explain` varchar(200) DEFAULT NULL COMMENT '角色说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_role
-- ----------------------------

-- ----------------------------
-- Table structure for system_user
-- ----------------------------
DROP TABLE IF EXISTS `system_user`;
CREATE TABLE `system_user` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `account` varchar(15) DEFAULT NULL COMMENT '账号',
  `password` char(32) NOT NULL COMMENT '密码',
  `name` varchar(4) DEFAULT NULL COMMENT '姓名',
  `date_add` datetime DEFAULT NULL COMMENT '添加日期',
  `date_activity` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `role_id` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_user
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` mediumint(7) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(6) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户姓名',
  `account` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '用户账号',
  `password` char(32) NOT NULL COMMENT '密码',
  `mobile` char(11) DEFAULT NULL COMMENT '手机号',
  `email` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for user_info
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `user_id` mediumint(7) NOT NULL COMMENT '用户ID',
  `sex` char(1) CHARACTER SET utf8 DEFAULT NULL COMMENT '用户性别',
  `company_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL COMMENT '公司名称',
  `company_address` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '公司地址'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_info
-- ----------------------------
