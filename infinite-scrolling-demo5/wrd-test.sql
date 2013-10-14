/*
MySQL Data Transfer
Source Host: localhost
Source Database: wrd-test
Target Host: localhost
Target Database: wrd-test
Date: 02.06.2008 13:51:24
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for test
-- ----------------------------
CREATE TABLE `test` (
  `testID` int(11) NOT NULL auto_increment,
  `testName` varchar(250) default NULL,
  PRIMARY KEY  (`testID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `test` VALUES ('1', 'a');
INSERT INTO `test` VALUES ('2', 'b');
INSERT INTO `test` VALUES ('3', 'c');
INSERT INTO `test` VALUES ('4', 'd');
INSERT INTO `test` VALUES ('5', 'e');
INSERT INTO `test` VALUES ('6', 'f');
INSERT INTO `test` VALUES ('7', 'g');
INSERT INTO `test` VALUES ('8', 'h');
INSERT INTO `test` VALUES ('9', 'i');
INSERT INTO `test` VALUES ('10', 'j');
INSERT INTO `test` VALUES ('11', 'k');
INSERT INTO `test` VALUES ('12', 'l');
INSERT INTO `test` VALUES ('13', 'm');
INSERT INTO `test` VALUES ('14', 'n');
INSERT INTO `test` VALUES ('15', 'o');
INSERT INTO `test` VALUES ('16', 'p');
INSERT INTO `test` VALUES ('17', 'r');
INSERT INTO `test` VALUES ('18', 's');
INSERT INTO `test` VALUES ('19', 't');
INSERT INTO `test` VALUES ('20', 'u');
INSERT INTO `test` VALUES ('21', 'v');
INSERT INTO `test` VALUES ('22', 'y');
INSERT INTO `test` VALUES ('23', 'z');
INSERT INTO `test` VALUES ('24', 'aa');
INSERT INTO `test` VALUES ('25', 'bb');
INSERT INTO `test` VALUES ('26', 'cc');
INSERT INTO `test` VALUES ('27', 'dd');
INSERT INTO `test` VALUES ('28', 'ee');
INSERT INTO `test` VALUES ('29', 'ff');
INSERT INTO `test` VALUES ('30', 'gg');
INSERT INTO `test` VALUES ('31', 'hh');
INSERT INTO `test` VALUES ('32', 'ii');
INSERT INTO `test` VALUES ('33', 'jj');
INSERT INTO `test` VALUES ('34', 'kk');
INSERT INTO `test` VALUES ('35', 'll');
INSERT INTO `test` VALUES ('36', 'mm');
INSERT INTO `test` VALUES ('37', 'nn');
INSERT INTO `test` VALUES ('38', 'oo');
INSERT INTO `test` VALUES ('39', 'pp');
INSERT INTO `test` VALUES ('40', 'rr');
INSERT INTO `test` VALUES ('41', 'ss');
INSERT INTO `test` VALUES ('42', 'tt');
INSERT INTO `test` VALUES ('43', 'uu');
INSERT INTO `test` VALUES ('44', 'vv');
INSERT INTO `test` VALUES ('45', 'yy');
INSERT INTO `test` VALUES ('46', 'zz');
