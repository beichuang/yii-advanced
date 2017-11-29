CREATE TABLE `kang_country` (
  `code` CHAR(2) NOT NULL PRIMARY KEY,
  `name` CHAR(52) NOT NULL,
  `population` INT(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `kang_country` VALUES ('AU','Australia',18886000);
INSERT INTO `kang_country` VALUES ('BR','Brazil',170115000);
INSERT INTO `kang_country` VALUES ('CA','Canada',1147000);
INSERT INTO `kang_country` VALUES ('CN','China',1277558000);
INSERT INTO `kang_country` VALUES ('DE','Germany',82164700);
INSERT INTO `kang_country` VALUES ('FR','France',59225700);
INSERT INTO `kang_country` VALUES ('GB','United Kingdom',59623400);
INSERT INTO `kang_country` VALUES ('IN','India',1013662000);
INSERT INTO `kang_country` VALUES ('RU','Russia',146934000);
INSERT INTO `kang_country` VALUES ('US','United States',278357000);