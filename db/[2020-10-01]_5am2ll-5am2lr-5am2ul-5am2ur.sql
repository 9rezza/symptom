/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : symptom

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 01/10/2020 14:27:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for 5am2ll
-- ----------------------------
DROP TABLE IF EXISTS `5am2ll`;
CREATE TABLE `5am2ll`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11492 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am2lr
-- ----------------------------
DROP TABLE IF EXISTS `5am2lr`;
CREATE TABLE `5am2lr`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11492 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am2ul
-- ----------------------------
DROP TABLE IF EXISTS `5am2ul`;
CREATE TABLE `5am2ul`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11492 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am2ur
-- ----------------------------
DROP TABLE IF EXISTS `5am2ur`;
CREATE TABLE `5am2ur`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11492 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
