/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50612
Source Host           : 127.0.0.1:3306
Source Database       : virtual_advisor

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-02-17 10:40:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `estudiante`
-- ----------------------------
DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
`ID_ESTUDIANTE`  varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`MATRICULA`  varchar(9) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`COD_FACULTAD`  varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`CARRERA`  varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`ID_ESTUDIANTE`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of estudiante
-- ----------------------------
BEGIN;
INSERT INTO `estudiante` VALUES ('0920106796', '200803369', 'FIEC', 'INGENIERIA EN CIENCIAS COMPUTACIONALES CON ORIENTACION EN SISTEMAS DE INFORMACION');
COMMIT;

-- ----------------------------
-- Table structure for `materia`
-- ----------------------------
DROP TABLE IF EXISTS `materia`;
CREATE TABLE `materia` (
`COD_MATERIA`  varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`NOMBRE`  varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL ,
`PROYECTOS`  int(11) NOT NULL ,
PRIMARY KEY (`COD_MATERIA`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of materia
-- ----------------------------
BEGIN;
INSERT INTO `materia` VALUES ('FIEC02097', 'SISTEMAS OPERATIVOS', '2'), ('FIEC05306', 'FORMULACIÓN Y EVALUACIÓN DE PROYECTOS INFORMÁTICOS', '0'), ('FIEC05322', 'SISTEMAS DE TOMA DE DECISIONES', '1');
COMMIT;

-- ----------------------------
-- Table structure for `materia_ranking`
-- ----------------------------
DROP TABLE IF EXISTS `materia_ranking`;
CREATE TABLE `materia_ranking` (
`ID_MATERIA_RANKING`  int(11) NOT NULL AUTO_INCREMENT ,
`COD_MATERIA`  varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`ID_ESTUDIANTE`  varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`MARK`  float NOT NULL ,
PRIMARY KEY (`ID_MATERIA_RANKING`),
FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`ID_ESTUDIANTE`) ON DELETE RESTRICT ON UPDATE CASCADE,
FOREIGN KEY (`COD_MATERIA`) REFERENCES `materia` (`COD_MATERIA`) ON DELETE RESTRICT ON UPDATE CASCADE,
INDEX `fk_materia_idx` (`COD_MATERIA`) USING BTREE ,
INDEX `fk_estudiante_idx` (`ID_ESTUDIANTE`) USING BTREE ,
INDEX `fk_estudiante_materia` (`ID_ESTUDIANTE`, `COD_MATERIA`) USING BTREE 
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of materia_ranking
-- ----------------------------
BEGIN;
INSERT INTO `materia_ranking` VALUES ('2', 'FIEC02097', '0920106796', '100');
COMMIT;

-- ----------------------------
-- Auto increment value for `materia_ranking`
-- ----------------------------
ALTER TABLE `materia_ranking` AUTO_INCREMENT=3;
