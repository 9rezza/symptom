/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : symptom

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 24/12/2019 14:36:02
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for 5am11
-- ----------------------------
DROP TABLE IF EXISTS `5am11`;
CREATE TABLE `5am11`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 166740 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am12
-- ----------------------------
DROP TABLE IF EXISTS `5am12`;
CREATE TABLE `5am12`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 166738 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am13
-- ----------------------------
DROP TABLE IF EXISTS `5am13`;
CREATE TABLE `5am13`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 166738 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am14
-- ----------------------------
DROP TABLE IF EXISTS `5am14`;
CREATE TABLE `5am14`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `standard_temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  `standard_vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 166737 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am21
-- ----------------------------
DROP TABLE IF EXISTS `5am21`;
CREATE TABLE `5am21`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1441 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am22
-- ----------------------------
DROP TABLE IF EXISTS `5am22`;
CREATE TABLE `5am22`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2881 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am23
-- ----------------------------
DROP TABLE IF EXISTS `5am23`;
CREATE TABLE `5am23`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2881 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for 5am24
-- ----------------------------
DROP TABLE IF EXISTS `5am24`;
CREATE TABLE `5am24`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `temperature` float(27, 5) NULL DEFAULT NULL,
  `vibration` float(27, 5) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique`(`timestamp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2881 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
