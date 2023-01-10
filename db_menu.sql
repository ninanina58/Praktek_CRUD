/*
Navicat MySQL Data Transfer

Source Server         : pkl
Source Server Version : 100427
Source Host           : localhost:33060
Source Database       : db_menu

Target Server Type    : MYSQL
Target Server Version : 100427
File Encoding         : 65001

Date: 2023-01-10 13:05:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_menu
-- ----------------------------
DROP TABLE IF EXISTS `tb_menu`;
CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` char(255) DEFAULT '',
  `harga` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of tb_menu
-- ----------------------------
INSERT INTO `tb_menu` VALUES ('5', 'Es Teh Manis', '5k');
INSERT INTO `tb_menu` VALUES ('9', 'Teh Anget', '5k');
INSERT INTO `tb_menu` VALUES ('10', 'Coklat Panas', '8k');
INSERT INTO `tb_menu` VALUES ('11', 'Mie Goreng', '8k');
INSERT INTO `tb_menu` VALUES ('14', 'Nasi Goreng', '15k');
SET FOREIGN_KEY_CHECKS=1;
