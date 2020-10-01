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

 Date: 01/10/2020 14:29:12
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for 5am1ll
-- ----------------------------
DROP TABLE IF EXISTS `5am1ll`;
CREATE TABLE `5am1ll`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am1ll
-- ----------------------------
INSERT INTO `5am1ll` VALUES (1, '2020-10-01 14:28:59', 70.00001, 90.00000, 1.20000, 7.00000);
INSERT INTO `5am1ll` VALUES (2, '2020-10-01 14:29:04', 71.16667, 90.00000, 1.16667, 7.00000);
INSERT INTO `5am1ll` VALUES (3, '2020-10-01 14:29:10', 70.33334, 90.00000, 2.14286, 7.00000);

-- ----------------------------
-- Table structure for 5am1lr
-- ----------------------------
DROP TABLE IF EXISTS `5am1lr`;
CREATE TABLE `5am1lr`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am1lr
-- ----------------------------
INSERT INTO `5am1lr` VALUES (1, '2020-10-01 14:28:59', 70.16667, 90.00000, 2.14286, 7.00000);
INSERT INTO `5am1lr` VALUES (2, '2020-10-01 14:29:04', 72.12500, 90.00000, 2.33334, 7.00000);
INSERT INTO `5am1lr` VALUES (3, '2020-10-01 14:29:10', 71.20000, 90.00000, 3.00000, 7.00000);

-- ----------------------------
-- Table structure for 5am1ul
-- ----------------------------
DROP TABLE IF EXISTS `5am1ul`;
CREATE TABLE `5am1ul`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am1ul
-- ----------------------------
INSERT INTO `5am1ul` VALUES (1, '2020-10-01 14:28:59', 72.50000, 90.00000, 3.00000, 7.00000);
INSERT INTO `5am1ul` VALUES (2, '2020-10-01 14:29:04', 70.14286, 90.00000, 3.00000, 7.00000);
INSERT INTO `5am1ul` VALUES (3, '2020-10-01 14:29:10', 71.00000, 90.00000, 3.00000, 7.00000);

-- ----------------------------
-- Table structure for 5am1ur
-- ----------------------------
DROP TABLE IF EXISTS `5am1ur`;
CREATE TABLE `5am1ur`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am1ur
-- ----------------------------
INSERT INTO `5am1ur` VALUES (1, '2020-10-01 14:28:59', 93.00000, 90.00000, 2.20000, 7.00000);
INSERT INTO `5am1ur` VALUES (2, '2020-10-01 14:29:04', 92.25000, 90.00000, 3.00000, 7.00000);
INSERT INTO `5am1ur` VALUES (3, '2020-10-01 14:29:10', 91.33334, 90.00000, 1.00000, 7.00000);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am2ll
-- ----------------------------
INSERT INTO `5am2ll` VALUES (1, '2020-10-01 14:28:59', 73.00000, 90.00000, 2.25000, 7.00000);
INSERT INTO `5am2ll` VALUES (2, '2020-10-01 14:29:04', 71.00000, 90.00000, 3.00000, 7.00000);
INSERT INTO `5am2ll` VALUES (3, '2020-10-01 14:29:10', 73.00000, 90.00000, 3.00000, 7.00000);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am2lr
-- ----------------------------
INSERT INTO `5am2lr` VALUES (1, '2020-10-01 14:28:59', 71.16667, 90.00000, 3.00000, 7.00000);
INSERT INTO `5am2lr` VALUES (2, '2020-10-01 14:29:04', 72.12500, 90.00000, 2.50000, 7.00000);
INSERT INTO `5am2lr` VALUES (3, '2020-10-01 14:29:10', 73.00000, 90.00000, 3.00000, 7.00000);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am2ul
-- ----------------------------
INSERT INTO `5am2ul` VALUES (1, '2020-10-01 14:28:59', 73.00001, 90.00000, 2.00000, 7.00000);
INSERT INTO `5am2ul` VALUES (2, '2020-10-01 14:29:04', 71.12501, 90.00000, 1.00000, 7.00000);
INSERT INTO `5am2ul` VALUES (3, '2020-10-01 14:29:10', 73.00001, 90.00000, 3.00000, 7.00000);

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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of 5am2ur
-- ----------------------------
INSERT INTO `5am2ur` VALUES (1, '2020-10-01 14:28:59', 73.00000, 90.00000, 1.50000, 7.00000);
INSERT INTO `5am2ur` VALUES (2, '2020-10-01 14:29:04', 72.00000, 90.00000, 2.50000, 7.00000);
INSERT INTO `5am2ur` VALUES (3, '2020-10-01 14:29:10', 73.00000, 90.00000, 2.00000, 7.00000);

-- ----------------------------
-- Table structure for alarm
-- ----------------------------
DROP TABLE IF EXISTS `alarm`;
CREATE TABLE `alarm`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `note` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `action` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `line.id` int(11) NULL DEFAULT NULL,
  `machine.id` int(11) NULL DEFAULT NULL,
  `part.id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `code`) USING BTREE,
  UNIQUE INDEX `unique`(`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 292 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of alarm
-- ----------------------------
INSERT INTO `alarm` VALUES (1, 'EL0A001', 'Keterangan alarm 1', 'Action 1', 1, 1, 1);
INSERT INTO `alarm` VALUES (2, 'EL0A002', 'Keterangan alarm 2', 'Action 2', 1, 2, 6);
INSERT INTO `alarm` VALUES (3, 'EL0A003', 'Keterangan alarm 3', 'Action 3', 1, 3, 13);
INSERT INTO `alarm` VALUES (4, 'EL0A004', 'Ini definisi erornya 4', '', 1, 3, 12);
INSERT INTO `alarm` VALUES (235, 'CW5000_0', 'MAIN OPERATION PANEL EMERGENCY STOP BUTTON', 'Action 1', 1, 2, 2);
INSERT INTO `alarm` VALUES (236, 'CW5000_1', 'CENTERING ROBOT TEACH DOOR EMERGENCY STOP BUTTON', '', 1, 3, 10);
INSERT INTO `alarm` VALUES (237, 'CW5000_2', 'RIGHT DESTACK ST. ENTRANCE EMERGENCY STOP BUTTON', '', 1, 4, 14);
INSERT INTO `alarm` VALUES (238, 'CW5000_3', 'LEFT DESTACK ST. ENTRANCE EMERGENCY STOP BUTTON', '', 1, 2, 8);
INSERT INTO `alarm` VALUES (239, 'CW5000_4', 'SF ROBOT TP EMERGENCY STOP BUTON', '', 1, 1, 1);
INSERT INTO `alarm` VALUES (240, 'CW5000_5', 'CENTERING ROBOT EMERGENCY STOP BUTTON', '', 1, 2, 7);
INSERT INTO `alarm` VALUES (241, 'CW5000_6', 'SF UPSTREAM SAFETY FENCE EMERGENCY STOP BUTTON', '', 1, 2, 5);
INSERT INTO `alarm` VALUES (242, 'CW5000_7', 'SF ROBOT TEACH DOOR EMERGENCY STOP BUTTON', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (243, 'CW5000_8', 'WASHER SAFETY FENCE EMERGENCY STOP BUTTON', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (244, 'CW5000_9', 'RIGHT C/S OPERATION PANEL EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (245, 'CW5000_10', 'LEFT C/S  OPERATION PANEL EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (246, 'CW5000_11', 'SCRAP BASKET AREA EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (247, 'CW5001_6', 'EMERGENCY STOP (FROM ACP)', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (248, 'CW5002_11', 'EL0A2B SF ROBOT EMERGENCY STOP READBACK FAULT', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (249, 'CW5002_13', 'EL0A2D CENTERING ROBOT EMERGENCY STOP READBACK FAULT', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (250, 'CW5003_13', 'EL0A3D EMERGENCY STOP READBACK FAULT (TO ACP)', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (251, 'CW5043_2', '1P EMERGENCY STOP RELAY FAULT                    EL0AB2', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (252, 'CW5043_12', '1P EMERGENCY STOP BUTTON (MOP)                   EL0ABC', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (253, 'CW5043_13', '1P EMERGENCY STOP BUTTON (MBP)                   EL0ABD', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (254, 'CW5061_15', '1P CUSHION EMERGENCY STOP (CHECK SERVO PANEL)    EL0BDF', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (255, 'CW5075_2', '2P EMERGENCY STOP RELAY FAULT                    EL0AB2', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (256, 'CW5075_12', '2P EMERGENCY STOP BUTTON (MOP)                   EL0ABC', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (257, 'CW5075_13', '2P EMERGENCY STOP BUTTON (MBP)                   EL0ABD', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (258, 'CW5107_2', '3P EMERGENCY STOP RELAY FAULT                    EL0AB2', '', 1, 4, 14);
INSERT INTO `alarm` VALUES (259, 'CW5107_12', '3P EMERGENCY STOP BUTTON (MOP)                   EL0ABC', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (260, 'CW5107_13', '3P EMERGENCY STOP BUTTON (MBP)                   EL0ABD', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (261, 'CW5139_2', '4P EMERGENCY STOP RELAY FAULT                    EL0AB2', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (262, 'CW5139_12', '4P EMERGENCY STOP BUTTON (MOP)                   EL0ABC', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (263, 'CW5139_13', '4P EMERGENCY STOP BUTTON (MBP)                   EL0ABD', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (264, 'CW5161_0', 'EL0110 1R EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (265, 'CW5177_0', 'EL0210 2R EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (266, 'CW5193_0', 'EL0310 3R EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (267, 'CW5209_0', 'EL0410 4R EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (268, 'CW5225_0', 'EL0510 5R EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (269, 'CW5225_1', 'EL0511 5R OPERATION PANEL EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (270, 'CW5225_2', 'EL0512 6R OPEN ST.EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (271, 'CW5225_3', 'EL0513 5R TEACH FENCE EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (272, 'CW5225_4', 'EL0514 5R SAFETY FENCE EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (273, 'CW5240_0', 'EL0A00 MP MAIN OPERATION PANEL EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (274, 'CW5240_1', 'EL0A01 SAFETY FENCE EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (275, 'CW5240_2', 'EL0A02 LEFT HDA SAFETY FENCE EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (276, 'CW5240_3', 'EL0A03 RIGHT HDA SAFETY FENCE EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (277, 'CW5240_4', 'EL0A04 LEFT CONVEYOR LEFT OPERATION PANEL EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (278, 'CW5240_5', 'EL0A05 LEFT CONVEYOR RIGHT OPERATION PANEL EMERGENCY STOP', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (279, 'CW5240_6', 'EL0A06 RIGHT CONVEYOR LEFT OPERATION PANEL EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (280, 'CW5240_7', 'EL0A07 RIGHT CONVEYOR RIGHT OPERATION PANEL EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (281, 'CW5240_8', 'EL0A08 #6L ROBOT TEACH PENDANT EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (282, 'CW5240_9', 'EL0A09 #6R ROBOT TEACH PENDANT EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (283, 'CW5240_10', 'EL0A0A IDLE TABLE ROBOT TEACH PENDANT EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (284, 'CW5240_11', 'EL0A0B EQUIPMENT EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (285, 'CW5242_0', 'EL0A20 LOP EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (286, 'CW5242_1', 'EL0A21 HANDLING ROBOT PROCESS EMERGENCY STOP ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (287, 'CW5253_3', 'EL0AD3 HANDLING ROBOT PROCESS EMERGENCY STOP RELAY FAULT ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (288, 'CW5253_8', 'EL0AD8 #6L ROBOT EMERGENCY STOP RELAY FAULT ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (289, 'CW5253_11', 'EL0ADB #6R ROBOT EMERGENCY STOP RELAY FAULT ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (290, 'CW5253_14', 'EL0ADE IDLE TABLE ROBOT EMERGENCY STOP RELAY FAULT ', '', 1, NULL, NULL);
INSERT INTO `alarm` VALUES (291, 'CW5281_0', 'LOP EL0A90 EMERGENCY STOP BUTTON', '', 1, NULL, NULL);

-- ----------------------------
-- Table structure for dies
-- ----------------------------
DROP TABLE IF EXISTS `dies`;
CREATE TABLE `dies`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vibration_warning` float(27, 5) NULL DEFAULT NULL,
  `vibration_alarm` float(27, 5) NULL DEFAULT NULL,
  `temperature_warning` float(27, 5) NULL DEFAULT NULL,
  `temperature_alarm` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `code`) USING BTREE,
  UNIQUE INDEX `code`(`code`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dies
-- ----------------------------
INSERT INTO `dies` VALUES (1, '99', 6.00000, 7.00000, 80.00000, 90.00000);
INSERT INTO `dies` VALUES (2, '98', 6.00000, 7.00000, 80.00000, 90.00000);

-- ----------------------------
-- Table structure for history_alarm
-- ----------------------------
DROP TABLE IF EXISTS `history_alarm`;
CREATE TABLE `history_alarm`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `alarm.code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `end_timestamp` datetime(0) NULL DEFAULT NULL,
  `node` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 150 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of history_alarm
-- ----------------------------
INSERT INTO `history_alarm` VALUES (1, '2020-09-30 13:23:31', 'EL0A001', '2020-09-30 13:28:31', NULL);
INSERT INTO `history_alarm` VALUES (2, '2020-09-30 13:33:31', 'EL0A001', '2020-09-30 13:38:31', NULL);
INSERT INTO `history_alarm` VALUES (3, '2020-09-30 13:43:31', 'EL0A001', '2020-09-30 13:48:31', NULL);
INSERT INTO `history_alarm` VALUES (4, '2020-09-30 13:53:31', 'EL0A001', '2020-09-30 13:58:31', NULL);
INSERT INTO `history_alarm` VALUES (5, '2020-09-30 14:03:31', 'EL0A001', '2020-09-30 14:08:31', NULL);
INSERT INTO `history_alarm` VALUES (6, '2020-09-30 14:13:31', 'EL0A001', '2020-09-30 14:18:31', NULL);
INSERT INTO `history_alarm` VALUES (7, '2020-09-30 14:23:31', 'EL0A001', '2020-09-30 14:28:31', NULL);
INSERT INTO `history_alarm` VALUES (8, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (9, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (10, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (11, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (12, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (13, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (14, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (15, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (16, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (17, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (18, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (19, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (20, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (21, '2020-09-30 15:17:59', 'EL0A001', '2020-09-30 15:22:59', NULL);
INSERT INTO `history_alarm` VALUES (22, '2020-09-30 15:27:59', 'EL0A001', '2020-09-30 15:32:59', NULL);
INSERT INTO `history_alarm` VALUES (23, '2020-09-30 15:37:59', 'EL0A001', '2020-09-30 15:42:59', NULL);
INSERT INTO `history_alarm` VALUES (24, '2020-09-30 15:47:59', 'EL0A001', '2020-09-30 15:52:59', NULL);
INSERT INTO `history_alarm` VALUES (25, '2020-09-30 15:57:59', 'EL0A001', '2020-09-30 16:02:59', NULL);
INSERT INTO `history_alarm` VALUES (26, '2020-09-30 16:07:59', 'EL0A001', '2020-09-30 16:12:59', NULL);
INSERT INTO `history_alarm` VALUES (27, '2020-09-30 16:17:59', 'EL0A001', '2020-09-30 16:22:59', NULL);
INSERT INTO `history_alarm` VALUES (28, '2020-09-30 16:27:59', 'EL0A001', '2020-09-30 16:32:59', NULL);
INSERT INTO `history_alarm` VALUES (29, '2020-09-30 16:37:59', 'EL0A001', '2020-09-30 16:42:59', NULL);
INSERT INTO `history_alarm` VALUES (30, '2020-09-30 16:47:59', 'EL0A001', '2020-09-30 16:52:59', NULL);
INSERT INTO `history_alarm` VALUES (31, '2020-09-30 16:57:59', 'EL0A001', '2020-09-30 19:10:23', NULL);
INSERT INTO `history_alarm` VALUES (32, '2020-09-30 19:15:23', 'EL0A001', '2020-09-30 19:20:23', NULL);
INSERT INTO `history_alarm` VALUES (33, '2020-09-30 19:25:23', 'EL0A001', '2020-09-30 19:30:23', NULL);
INSERT INTO `history_alarm` VALUES (34, '2020-09-30 19:35:23', 'EL0A001', '2020-09-30 19:40:23', NULL);
INSERT INTO `history_alarm` VALUES (35, '2020-09-30 19:45:23', 'EL0A001', '2020-09-30 19:50:23', NULL);
INSERT INTO `history_alarm` VALUES (36, '2020-09-30 19:55:23', 'EL0A001', '2020-09-30 20:00:23', NULL);
INSERT INTO `history_alarm` VALUES (37, '2020-09-30 20:05:23', 'EL0A001', '2020-09-30 20:10:23', NULL);
INSERT INTO `history_alarm` VALUES (38, '2020-09-30 20:15:23', 'EL0A001', '2020-09-30 20:20:23', NULL);
INSERT INTO `history_alarm` VALUES (39, '2020-09-30 20:25:23', 'EL0A001', '2020-09-30 20:30:23', NULL);
INSERT INTO `history_alarm` VALUES (40, '2020-09-30 20:35:23', 'EL0A001', '2020-09-30 20:40:23', NULL);
INSERT INTO `history_alarm` VALUES (41, '2020-09-30 20:45:23', 'EL0A001', '2020-09-30 20:50:23', NULL);
INSERT INTO `history_alarm` VALUES (42, '2020-09-30 20:55:23', 'EL0A001', '2020-09-30 21:00:23', NULL);
INSERT INTO `history_alarm` VALUES (43, '2020-09-30 21:05:23', 'EL0A001', '2020-09-30 21:10:23', NULL);
INSERT INTO `history_alarm` VALUES (44, '2020-09-30 21:15:23', 'EL0A001', '2020-09-30 21:20:23', NULL);
INSERT INTO `history_alarm` VALUES (45, '2020-09-30 21:25:23', 'EL0A001', '2020-09-30 21:30:23', NULL);
INSERT INTO `history_alarm` VALUES (46, '2020-09-30 21:35:23', 'EL0A001', '2020-09-30 21:40:23', NULL);
INSERT INTO `history_alarm` VALUES (47, '2020-09-30 21:45:23', 'EL0A001', '2020-09-30 21:50:23', NULL);
INSERT INTO `history_alarm` VALUES (48, '2020-09-30 21:55:23', 'EL0A001', '2020-09-30 22:00:23', NULL);
INSERT INTO `history_alarm` VALUES (49, '2020-09-30 22:05:23', 'EL0A001', '2020-09-30 22:10:23', NULL);
INSERT INTO `history_alarm` VALUES (50, '2020-09-30 22:15:23', 'EL0A001', '2020-09-30 22:20:23', NULL);
INSERT INTO `history_alarm` VALUES (51, '2020-09-30 22:25:23', 'EL0A001', '2020-09-30 22:30:23', NULL);
INSERT INTO `history_alarm` VALUES (52, '2020-09-30 22:35:23', 'EL0A001', '2020-09-30 22:40:23', NULL);
INSERT INTO `history_alarm` VALUES (53, '2020-09-30 22:45:23', 'EL0A001', '2020-09-30 22:50:23', NULL);
INSERT INTO `history_alarm` VALUES (54, '2020-09-30 22:55:23', 'EL0A001', '2020-09-30 23:00:23', NULL);
INSERT INTO `history_alarm` VALUES (55, '2020-09-30 23:05:23', 'EL0A001', '2020-09-30 23:10:23', NULL);
INSERT INTO `history_alarm` VALUES (56, '2020-09-30 23:15:23', 'EL0A001', '2020-09-30 23:20:23', NULL);
INSERT INTO `history_alarm` VALUES (57, '2020-09-30 23:25:23', 'EL0A001', '2020-09-30 23:30:23', NULL);
INSERT INTO `history_alarm` VALUES (58, '2020-09-30 23:35:23', 'EL0A001', '2020-09-30 23:40:23', NULL);
INSERT INTO `history_alarm` VALUES (59, '2020-09-30 23:45:23', 'EL0A001', '2020-09-30 23:50:23', NULL);
INSERT INTO `history_alarm` VALUES (60, '2020-09-30 23:55:23', 'EL0A001', '2020-10-01 00:00:23', NULL);
INSERT INTO `history_alarm` VALUES (61, '2020-10-01 00:05:23', 'EL0A001', '2020-10-01 00:10:23', NULL);
INSERT INTO `history_alarm` VALUES (62, '2020-10-01 00:15:23', 'EL0A001', '2020-10-01 00:20:23', NULL);
INSERT INTO `history_alarm` VALUES (63, '2020-10-01 00:25:23', 'EL0A001', '2020-10-01 00:30:23', NULL);
INSERT INTO `history_alarm` VALUES (64, '2020-10-01 00:35:23', 'EL0A001', '2020-10-01 00:40:23', NULL);
INSERT INTO `history_alarm` VALUES (65, '2020-10-01 00:45:23', 'EL0A001', '2020-10-01 00:50:23', NULL);
INSERT INTO `history_alarm` VALUES (66, '2020-10-01 00:55:23', 'EL0A001', '2020-10-01 01:00:23', NULL);
INSERT INTO `history_alarm` VALUES (67, '2020-10-01 01:05:23', 'EL0A001', '2020-10-01 01:10:23', NULL);
INSERT INTO `history_alarm` VALUES (68, '2020-10-01 01:15:23', 'EL0A001', '2020-10-01 01:20:23', NULL);
INSERT INTO `history_alarm` VALUES (69, '2020-10-01 01:25:23', 'EL0A001', '2020-10-01 01:30:23', NULL);
INSERT INTO `history_alarm` VALUES (70, '2020-10-01 01:35:23', 'EL0A001', '2020-10-01 01:40:23', NULL);
INSERT INTO `history_alarm` VALUES (71, '2020-10-01 01:45:23', 'EL0A001', '2020-10-01 01:50:23', NULL);
INSERT INTO `history_alarm` VALUES (72, '2020-10-01 01:55:23', 'EL0A001', '2020-10-01 02:00:23', NULL);
INSERT INTO `history_alarm` VALUES (73, '2020-10-01 02:05:23', 'EL0A001', '2020-10-01 02:10:23', NULL);
INSERT INTO `history_alarm` VALUES (74, '2020-10-01 02:15:23', 'EL0A001', '2020-10-01 02:20:23', NULL);
INSERT INTO `history_alarm` VALUES (75, '2020-10-01 02:25:23', 'EL0A001', '2020-10-01 02:30:23', NULL);
INSERT INTO `history_alarm` VALUES (76, '2020-10-01 02:35:23', 'EL0A001', '2020-10-01 02:40:23', NULL);
INSERT INTO `history_alarm` VALUES (77, '2020-10-01 02:36:56', 'EL0A003', NULL, NULL);
INSERT INTO `history_alarm` VALUES (78, '2020-10-01 02:37:04', 'EL0A004', NULL, NULL);
INSERT INTO `history_alarm` VALUES (79, '2020-10-01 02:45:23', 'EL0A001', '2020-10-01 02:50:23', NULL);
INSERT INTO `history_alarm` VALUES (80, '2020-10-01 02:55:23', 'EL0A001', '2020-10-01 03:00:23', NULL);
INSERT INTO `history_alarm` VALUES (81, '2020-10-01 03:05:23', 'EL0A001', '2020-10-01 03:10:23', NULL);
INSERT INTO `history_alarm` VALUES (82, '2020-10-01 03:15:23', 'EL0A001', '2020-10-01 03:20:23', NULL);
INSERT INTO `history_alarm` VALUES (83, '2020-10-01 03:25:23', 'EL0A001', '2020-10-01 03:30:23', NULL);
INSERT INTO `history_alarm` VALUES (84, '2020-10-01 03:35:23', 'EL0A001', '2020-10-01 03:40:23', NULL);
INSERT INTO `history_alarm` VALUES (85, '2020-10-01 03:45:23', 'EL0A001', '2020-10-01 03:50:23', NULL);
INSERT INTO `history_alarm` VALUES (86, '2020-10-01 03:55:23', 'EL0A001', '2020-10-01 04:00:23', NULL);
INSERT INTO `history_alarm` VALUES (87, '2020-10-01 04:05:23', 'EL0A001', '2020-10-01 04:10:23', NULL);
INSERT INTO `history_alarm` VALUES (88, '2020-10-01 04:15:23', 'EL0A001', '2020-10-01 04:20:23', NULL);
INSERT INTO `history_alarm` VALUES (89, '2020-10-01 04:25:23', 'EL0A001', '2020-10-01 04:30:23', NULL);
INSERT INTO `history_alarm` VALUES (90, '2020-10-01 04:35:23', 'EL0A001', '2020-10-01 04:40:23', NULL);
INSERT INTO `history_alarm` VALUES (91, '2020-10-01 04:45:23', 'EL0A001', '2020-10-01 04:50:23', NULL);
INSERT INTO `history_alarm` VALUES (92, '2020-10-01 04:55:23', 'EL0A001', '2020-10-01 05:00:23', NULL);
INSERT INTO `history_alarm` VALUES (93, '2020-10-01 05:05:23', 'EL0A001', '2020-10-01 05:10:23', NULL);
INSERT INTO `history_alarm` VALUES (94, '2020-10-01 05:15:23', 'EL0A001', '2020-10-01 05:20:23', NULL);
INSERT INTO `history_alarm` VALUES (95, '2020-10-01 05:25:23', 'EL0A001', '2020-10-01 05:30:23', NULL);
INSERT INTO `history_alarm` VALUES (96, '2020-10-01 05:35:23', 'EL0A001', '2020-10-01 05:40:23', NULL);
INSERT INTO `history_alarm` VALUES (97, '2020-10-01 05:45:23', 'EL0A001', '2020-10-01 05:50:23', NULL);
INSERT INTO `history_alarm` VALUES (98, '2020-10-01 05:55:23', 'EL0A001', '2020-10-01 06:00:23', NULL);
INSERT INTO `history_alarm` VALUES (99, '2020-10-01 06:05:23', 'EL0A001', '2020-10-01 06:10:23', NULL);
INSERT INTO `history_alarm` VALUES (100, '2020-10-01 06:15:23', 'EL0A001', '2020-10-01 06:20:23', NULL);
INSERT INTO `history_alarm` VALUES (101, '2020-10-01 06:25:23', 'EL0A001', '2020-10-01 06:30:23', NULL);
INSERT INTO `history_alarm` VALUES (102, '2020-10-01 06:35:23', 'EL0A001', '2020-10-01 06:40:23', NULL);
INSERT INTO `history_alarm` VALUES (103, '2020-10-01 06:45:23', 'EL0A001', '2020-10-01 06:50:23', NULL);
INSERT INTO `history_alarm` VALUES (104, '2020-10-01 06:55:23', 'EL0A001', '2020-10-01 07:00:23', NULL);
INSERT INTO `history_alarm` VALUES (105, '2020-10-01 07:05:23', 'EL0A001', '2020-10-01 07:10:23', NULL);
INSERT INTO `history_alarm` VALUES (106, '2020-10-01 07:15:23', 'EL0A001', '2020-10-01 07:20:23', NULL);
INSERT INTO `history_alarm` VALUES (107, '2020-10-01 07:25:23', 'EL0A001', '2020-10-01 07:30:23', NULL);
INSERT INTO `history_alarm` VALUES (108, '2020-10-01 07:35:23', 'EL0A001', '2020-10-01 07:40:23', NULL);
INSERT INTO `history_alarm` VALUES (109, '2020-10-01 07:45:23', 'EL0A001', '2020-10-01 07:50:23', NULL);
INSERT INTO `history_alarm` VALUES (110, '2020-10-01 07:55:23', 'EL0A001', '2020-10-01 08:00:23', NULL);
INSERT INTO `history_alarm` VALUES (111, '2020-10-01 08:05:23', 'EL0A001', '2020-10-01 08:10:23', NULL);
INSERT INTO `history_alarm` VALUES (112, '2020-10-01 08:15:23', 'EL0A001', '2020-10-01 08:20:23', NULL);
INSERT INTO `history_alarm` VALUES (113, '2020-10-01 08:25:23', 'EL0A001', '2020-10-01 08:30:23', NULL);
INSERT INTO `history_alarm` VALUES (114, '2020-10-01 08:35:23', 'EL0A001', '2020-10-01 08:40:23', NULL);
INSERT INTO `history_alarm` VALUES (115, '2020-10-01 08:45:23', 'EL0A001', '2020-10-01 08:50:23', NULL);
INSERT INTO `history_alarm` VALUES (116, '2020-10-01 08:55:23', 'EL0A001', '2020-10-01 09:00:23', NULL);
INSERT INTO `history_alarm` VALUES (117, '2020-10-01 09:05:23', 'EL0A001', '2020-10-01 09:10:23', NULL);
INSERT INTO `history_alarm` VALUES (118, '2020-10-01 09:15:23', 'EL0A001', '2020-10-01 09:20:23', NULL);
INSERT INTO `history_alarm` VALUES (119, '2020-10-01 09:25:23', 'EL0A001', '2020-10-01 09:30:23', NULL);
INSERT INTO `history_alarm` VALUES (120, '2020-10-01 09:35:23', 'EL0A001', '2020-10-01 09:40:23', NULL);
INSERT INTO `history_alarm` VALUES (121, '2020-10-01 09:45:23', 'EL0A001', '2020-10-01 09:50:23', NULL);
INSERT INTO `history_alarm` VALUES (122, '2020-10-01 09:55:23', 'EL0A001', '2020-10-01 10:00:23', NULL);
INSERT INTO `history_alarm` VALUES (123, '2020-10-01 10:05:23', 'EL0A001', '2020-10-01 10:10:23', NULL);
INSERT INTO `history_alarm` VALUES (124, '2020-10-01 10:15:23', 'EL0A001', '2020-10-01 10:20:23', NULL);
INSERT INTO `history_alarm` VALUES (125, '2020-10-01 10:25:23', 'EL0A001', '2020-10-01 10:30:23', NULL);
INSERT INTO `history_alarm` VALUES (126, '2020-10-01 10:35:23', 'EL0A001', '2020-10-01 10:40:23', NULL);
INSERT INTO `history_alarm` VALUES (127, '2020-10-01 10:45:23', 'EL0A001', '2020-10-01 10:50:23', NULL);
INSERT INTO `history_alarm` VALUES (128, '2020-10-01 10:55:23', 'EL0A001', '2020-10-01 11:00:23', NULL);
INSERT INTO `history_alarm` VALUES (129, '2020-10-01 11:05:23', 'EL0A001', '2020-10-01 11:10:23', NULL);
INSERT INTO `history_alarm` VALUES (130, '2020-10-01 11:15:23', 'EL0A001', '2020-10-01 11:20:23', NULL);
INSERT INTO `history_alarm` VALUES (131, '2020-10-01 11:25:23', 'EL0A001', '2020-10-01 11:30:23', NULL);
INSERT INTO `history_alarm` VALUES (132, '2020-10-01 11:35:23', 'EL0A001', '2020-10-01 11:40:23', NULL);
INSERT INTO `history_alarm` VALUES (133, '2020-10-01 11:45:23', 'EL0A001', '2020-10-01 11:50:23', NULL);
INSERT INTO `history_alarm` VALUES (134, '2020-10-01 11:55:23', 'EL0A001', '2020-10-01 12:00:23', NULL);
INSERT INTO `history_alarm` VALUES (135, '2020-10-01 12:05:23', 'EL0A001', '2020-10-01 12:10:23', NULL);
INSERT INTO `history_alarm` VALUES (136, '2020-10-01 12:15:23', 'EL0A001', '2020-10-01 12:20:23', NULL);
INSERT INTO `history_alarm` VALUES (137, '2020-10-01 12:25:23', 'EL0A001', '2020-10-01 12:30:23', NULL);
INSERT INTO `history_alarm` VALUES (138, '2020-10-01 12:35:23', 'EL0A001', '2020-10-01 12:40:23', NULL);
INSERT INTO `history_alarm` VALUES (139, '2020-10-01 12:45:23', 'EL0A001', '2020-10-01 12:50:23', NULL);
INSERT INTO `history_alarm` VALUES (140, '2020-10-01 12:55:23', 'EL0A001', '2020-10-01 13:00:23', NULL);
INSERT INTO `history_alarm` VALUES (141, '2020-10-01 13:05:23', 'EL0A001', '2020-10-01 13:10:23', NULL);
INSERT INTO `history_alarm` VALUES (142, '2020-10-01 13:15:23', 'EL0A001', '2020-10-01 13:20:23', NULL);
INSERT INTO `history_alarm` VALUES (143, '2020-10-01 13:25:23', 'EL0A001', '2020-10-01 13:30:23', NULL);
INSERT INTO `history_alarm` VALUES (144, '2020-10-01 13:35:23', 'EL0A001', '2020-10-01 13:40:23', NULL);
INSERT INTO `history_alarm` VALUES (145, '2020-10-01 13:45:23', 'EL0A001', '2020-10-01 13:50:23', NULL);
INSERT INTO `history_alarm` VALUES (146, '2020-10-01 13:55:23', 'EL0A001', '2020-10-01 14:00:23', NULL);
INSERT INTO `history_alarm` VALUES (147, '2020-10-01 14:05:23', 'EL0A001', '2020-10-01 14:10:23', NULL);
INSERT INTO `history_alarm` VALUES (148, '2020-10-01 14:15:23', 'EL0A001', '2020-10-01 14:20:23', NULL);
INSERT INTO `history_alarm` VALUES (149, '2020-10-01 14:25:23', 'EL0A001', NULL, NULL);

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `src` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (1, 'conveyor', 'symptom', NULL, 'conveyor.png', 207, 113, 0);
INSERT INTO `images` VALUES (2, 'line_5a', 'symptom', '', '5a.png', 16, 11, 1);
INSERT INTO `images` VALUES (3, 'line_2a', 'symptom', '', '2a.png', 255, 244, 1);
INSERT INTO `images` VALUES (4, 'line_1c', 'symptom', '', '1c.png', 336, 431, 1);
INSERT INTO `images` VALUES (5, 'symptom_5am1', 'symptom', NULL, 'indicatorgrey.png', 725, 85, 1);
INSERT INTO `images` VALUES (6, 'symptom_title', 'symptom', NULL, 'symptom_title.png', 710, 40, 1);

-- ----------------------------
-- Table structure for images_5a
-- ----------------------------
DROP TABLE IF EXISTS `images_5a`;
CREATE TABLE `images_5a`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `src` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of images_5a
-- ----------------------------
INSERT INTO `images_5a` VALUES (17, 'line_5a', 'symptom', NULL, 'line_5a.png', 10, 150, 1);

-- ----------------------------
-- Table structure for line
-- ----------------------------
DROP TABLE IF EXISTS `line`;
CREATE TABLE `line`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of line
-- ----------------------------
INSERT INTO `line` VALUES (1, '5a', 'Line 5A');
INSERT INTO `line` VALUES (2, '2a', 'Line 2A');
INSERT INTO `line` VALUES (3, 'c', 'Line C');

-- ----------------------------
-- Table structure for machine
-- ----------------------------
DROP TABLE IF EXISTS `machine`;
CREATE TABLE `machine`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `line.id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of machine
-- ----------------------------
INSERT INTO `machine` VALUES (1, '5aa1', 'SHEET FEEDER', 1);
INSERT INTO `machine` VALUES (2, '5aa2', 'ROBOT', 1);
INSERT INTO `machine` VALUES (3, '5aa3', 'PRESS', 1);
INSERT INTO `machine` VALUES (4, '5aa4', 'PALLETIZER', 1);
INSERT INTO `machine` VALUES (5, '5aa5', 'LOP', 1);

-- ----------------------------
-- Table structure for part
-- ----------------------------
DROP TABLE IF EXISTS `part`;
CREATE TABLE `part`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `line.id` int(11) NULL DEFAULT NULL,
  `machine.id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for symbol
-- ----------------------------
DROP TABLE IF EXISTS `symbol`;
CREATE TABLE `symbol`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 125 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of symbol
-- ----------------------------
INSERT INTO `symbol` VALUES (1, 'Clarifier', 'clarifier_1.1.2.png');
INSERT INTO `symbol` VALUES (2, 'Clarifier', 'clarifier_1.1.3.png');
INSERT INTO `symbol` VALUES (3, 'Clarifier', 'clarifier_1.1.4.png');
INSERT INTO `symbol` VALUES (4, 'Clarifier', 'clarifier_2.1.1.png');
INSERT INTO `symbol` VALUES (5, 'Clarifier', 'clarifier_2.1.2.png');
INSERT INTO `symbol` VALUES (6, 'Clarifier', 'clarifier_2.1.3.png');
INSERT INTO `symbol` VALUES (7, 'Clarifier', 'clarifier_2.1.4.png');
INSERT INTO `symbol` VALUES (8, 'Closed_Valve', 'closed_valve_1.1.png');
INSERT INTO `symbol` VALUES (9, 'Closed_Valve', 'closed_valve_1.2.png');
INSERT INTO `symbol` VALUES (10, 'Closed_Valve', 'closed_valve_1.3.png');
INSERT INTO `symbol` VALUES (11, 'Closed_Valve', 'closed_valve_1.4.png');
INSERT INTO `symbol` VALUES (12, 'Fliter_Bed', 'filter_bed_1.1.1.png');
INSERT INTO `symbol` VALUES (13, 'Fliter_Bed', 'filter_bed_1.1.2.png');
INSERT INTO `symbol` VALUES (14, 'Fliter_Bed', 'filter_bed_2.1.1.png');
INSERT INTO `symbol` VALUES (15, 'Fliter_Bed', 'filter_bed_2.1.2.png');
INSERT INTO `symbol` VALUES (16, 'Fliter_Bed', 'filter_bed_2.1.3.png');
INSERT INTO `symbol` VALUES (17, 'Fliter_Bed', 'filter_bed_2.1.4.png');
INSERT INTO `symbol` VALUES (18, 'Huge_Tank', 'huge_tank_1.1.png');
INSERT INTO `symbol` VALUES (19, 'Huge_Tank', 'huge_tank_1.2.png');
INSERT INTO `symbol` VALUES (20, 'Huge_Tank', 'huge_tank_1.3.png');
INSERT INTO `symbol` VALUES (21, 'Huge_Tank', 'huge_tank_1.4.png');
INSERT INTO `symbol` VALUES (22, 'L_Bend', 'l_bend_1.1.png');
INSERT INTO `symbol` VALUES (23, 'L_Bend', 'l_bend_1.2.png');
INSERT INTO `symbol` VALUES (24, 'L_Bend', 'l_bend_1.3.png');
INSERT INTO `symbol` VALUES (25, 'L_Bend', 'l_bend_1.4.png');
INSERT INTO `symbol` VALUES (26, 'L_Bend', 'l_bend_1.5.png');
INSERT INTO `symbol` VALUES (27, 'L_Bend', 'l_bend_1.6.png');
INSERT INTO `symbol` VALUES (28, 'L_Bend', 'l_bend_1.7.png');
INSERT INTO `symbol` VALUES (29, 'L_Bend', 'l_bend_1.8.png');
INSERT INTO `symbol` VALUES (30, 'L_Bend', 'l_bend_1.9.png');
INSERT INTO `symbol` VALUES (31, 'L_Bend', 'l_bend_1.10.png');
INSERT INTO `symbol` VALUES (32, 'L_Bend', 'l_bend_1.11.png');
INSERT INTO `symbol` VALUES (33, 'L_Bend', 'l_bend_1.12.png');
INSERT INTO `symbol` VALUES (34, 'Large_Water_Tower', 'large_water_tower_1.1.png');
INSERT INTO `symbol` VALUES (35, 'Large_Water_Tower', 'large_water_tower_1.2.png');
INSERT INTO `symbol` VALUES (36, 'Large_Water_Tower', 'large_water_tower_1.3.png');
INSERT INTO `symbol` VALUES (37, 'Large_Water_Tower', 'large_water_tower_1.4.png');
INSERT INTO `symbol` VALUES (38, 'Motor', 'motor_1.1.png');
INSERT INTO `symbol` VALUES (39, 'Motor', 'motor_1.2.png');
INSERT INTO `symbol` VALUES (40, 'Motor', 'motor_1.3.png');
INSERT INTO `symbol` VALUES (41, 'Motor', 'motor_1.4.png');
INSERT INTO `symbol` VALUES (42, 'Motor', 'motor_1.5.png');
INSERT INTO `symbol` VALUES (43, 'Motor', 'motor_1.6.png');
INSERT INTO `symbol` VALUES (44, 'Open_Valve', 'open_valve_1.1.png');
INSERT INTO `symbol` VALUES (45, 'Open_Valve', 'open_valve_1.2.png');
INSERT INTO `symbol` VALUES (46, 'Open_Valve', 'open_valve_1.3.png');
INSERT INTO `symbol` VALUES (47, 'Open_Valve', 'open_valve_1.4.png');
INSERT INTO `symbol` VALUES (48, 'Pump', 'pump_1.1.png');
INSERT INTO `symbol` VALUES (49, 'Pump', 'pump_1.2.png');
INSERT INTO `symbol` VALUES (50, 'Pump', 'pump_1.3.png');
INSERT INTO `symbol` VALUES (51, 'Pump', 'pump_1.4.png');
INSERT INTO `symbol` VALUES (52, 'Pump', 'pump_1.5.png');
INSERT INTO `symbol` VALUES (53, 'Pump', 'pump_1.6.png');
INSERT INTO `symbol` VALUES (54, 'Pump', 'pump_1.7.png');
INSERT INTO `symbol` VALUES (55, 'Pump', 'pump_1.8.png');
INSERT INTO `symbol` VALUES (56, 'Pump', 'pump_1.9.png');
INSERT INTO `symbol` VALUES (57, 'Pump', 'pump_1.10.png');
INSERT INTO `symbol` VALUES (58, 'Pump', 'pump_1.11.png');
INSERT INTO `symbol` VALUES (59, 'Pump', 'pump_1.12.png');
INSERT INTO `symbol` VALUES (60, 'Pump', 'pump_1.13.png');
INSERT INTO `symbol` VALUES (61, 'Pump', 'pump_1.14.png');
INSERT INTO `symbol` VALUES (62, 'Pump', 'pump_1.15.png');
INSERT INTO `symbol` VALUES (63, 'Pump', 'pump_1.16.png');
INSERT INTO `symbol` VALUES (64, 'Pump', 'pump_1.17.png');
INSERT INTO `symbol` VALUES (65, 'Pump', 'pump_1.18.png');
INSERT INTO `symbol` VALUES (66, 'Pump', 'pump_1.19.png');
INSERT INTO `symbol` VALUES (67, 'Pump', 'pump_1.20.png');
INSERT INTO `symbol` VALUES (68, 'Pump', 'pump_1.21.png');
INSERT INTO `symbol` VALUES (69, 'Pump', 'pump_1.22.png');
INSERT INTO `symbol` VALUES (70, 'Pump', 'pump_1.23.png');
INSERT INTO `symbol` VALUES (71, 'Pump', 'pump_1.24.png');
INSERT INTO `symbol` VALUES (72, 'Rotating_Valve', 'rotating_valve_1.1.png');
INSERT INTO `symbol` VALUES (73, 'Rotating_Valve', 'rotating_valve_1.2.png');
INSERT INTO `symbol` VALUES (74, 'Rotating_Valve', 'rotating_valve_1.3.png');
INSERT INTO `symbol` VALUES (75, 'Rotating_Valve', 'rotating_valve_1.4.png');
INSERT INTO `symbol` VALUES (76, 'Rotating_Valve', 'rotating_valve_1.5.png');
INSERT INTO `symbol` VALUES (77, 'Rotating_Valve', 'rotating_valve_1.6.png');
INSERT INTO `symbol` VALUES (78, 'Rotating_Valve', 'rotating_valve_1.7.png');
INSERT INTO `symbol` VALUES (79, 'Rotating_Valve', 'rotating_valve_1.8.png');
INSERT INTO `symbol` VALUES (80, 'Rotating_Valve', 'rotating_valve_1.9.png');
INSERT INTO `symbol` VALUES (81, 'Rotating_Valve', 'rotating_valve_1.10.png');
INSERT INTO `symbol` VALUES (82, 'Rotating_Valve', 'rotating_valve_1.11.png');
INSERT INTO `symbol` VALUES (83, 'Rotating_Valve', 'rotating_valve_1.12.png');
INSERT INTO `symbol` VALUES (84, 'Straight_Pipe', 'straight_pipe_1.1.png');
INSERT INTO `symbol` VALUES (85, 'Straight_Pipe', 'straight_pipe_1.2.png');
INSERT INTO `symbol` VALUES (86, 'Straight_Pipe', 'straight_pipe_1.3.png');
INSERT INTO `symbol` VALUES (87, 'T_Pipe', 't_pipe_1.1.png');
INSERT INTO `symbol` VALUES (88, 'T_Pipe', 't_pipe_1.2.png');
INSERT INTO `symbol` VALUES (89, 'T_Pipe', 't_pipe_1.3.png');
INSERT INTO `symbol` VALUES (90, 'T_Pipe', 't_pipe_1.4.png');
INSERT INTO `symbol` VALUES (91, 'T_Pipe', 't_pipe_1.5.png');
INSERT INTO `symbol` VALUES (92, 'T_Pipe', 't_pipe_1.6.png');
INSERT INTO `symbol` VALUES (93, 'T_Pipe', 't_pipe_1.7.png');
INSERT INTO `symbol` VALUES (94, 'T_Pipe', 't_pipe_1.8.png');
INSERT INTO `symbol` VALUES (95, 'T_Pipe', 't_pipe_1.9.png');
INSERT INTO `symbol` VALUES (96, 'T_Pipe', 't_pipe_1.10.png');
INSERT INTO `symbol` VALUES (97, 'T_Pipe', 't_pipe_1.11.png');
INSERT INTO `symbol` VALUES (98, 'T_Pipe', 't_pipe_1.12.png');
INSERT INTO `symbol` VALUES (99, 'Tank', 'tank_1.1.png');
INSERT INTO `symbol` VALUES (100, 'Tank', 'tank_1.2.png');
INSERT INTO `symbol` VALUES (101, 'Tank', 'tank_1.3.png');
INSERT INTO `symbol` VALUES (102, 'Tank', 'tank_1.4.png');
INSERT INTO `symbol` VALUES (103, 'Tank', 'tank_1.5.png');
INSERT INTO `symbol` VALUES (104, 'Tank', 'tank_1.6.png');
INSERT INTO `symbol` VALUES (105, 'Tank', 'tank_1.7.png');
INSERT INTO `symbol` VALUES (106, 'Tank', 'tank_1.8.png');
INSERT INTO `symbol` VALUES (107, 'Tank', 'tank_1.9.png');
INSERT INTO `symbol` VALUES (108, 'Tank', 'tank_1.10.png');
INSERT INTO `symbol` VALUES (109, 'Tank', 'tank_1.11.png');
INSERT INTO `symbol` VALUES (110, 'Tank', 'tank_1.12.png');
INSERT INTO `symbol` VALUES (111, 'Tank', 'tank_1.13.png');
INSERT INTO `symbol` VALUES (112, 'Tank', 'tank_1.14.png');
INSERT INTO `symbol` VALUES (113, 'Tank', 'tank_1.15.png');
INSERT INTO `symbol` VALUES (114, 'Tank', 'tank_1.16.png');
INSERT INTO `symbol` VALUES (115, 'Water_Tower', 'water_tower_1.1.png');
INSERT INTO `symbol` VALUES (116, 'Water_Tower', 'water_tower_1.2.png');
INSERT INTO `symbol` VALUES (117, 'Water_Tower', 'water_tower_1.3.png');
INSERT INTO `symbol` VALUES (118, 'Water_Tower', 'water_tower_1.4.png');
INSERT INTO `symbol` VALUES (119, 'Arrow', 'arrow_1.gif');
INSERT INTO `symbol` VALUES (120, 'Arrow', 'arrow_2.gif');
INSERT INTO `symbol` VALUES (121, 'Arrow', 'arrow_3.gif');
INSERT INTO `symbol` VALUES (122, 'Arrow', 'arrow_4.gif');
INSERT INTO `symbol` VALUES (123, 'Arrow', 'arrow_5.gif');
INSERT INTO `symbol` VALUES (124, 'Arrow', 'arrow_6.gif');

-- ----------------------------
-- Table structure for textbox
-- ----------------------------
DROP TABLE IF EXISTS `textbox`;
CREATE TABLE `textbox`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of textbox
-- ----------------------------
INSERT INTO `textbox` VALUES (1, 'box_0', 619, 46, 99999, 'white');
INSERT INTO `textbox` VALUES (2, 'box_1', 432, 462, 99999, 'white');
INSERT INTO `textbox` VALUES (3, 'box_2', 156, 261, 99999, 'white');

SET FOREIGN_KEY_CHECKS = 1;
