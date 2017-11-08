CREATE DATABASE IF NOT EXISTS `SQLitest`;

USE SQLitest;

CREATE TABLE `fl4g` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `text` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

CREATE TABLE `msgs` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `msg` TEXT,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

INSERT INTO `msgs` VALUES (1, 'When you were here before');
INSERT INTO `msgs` VALUES (2, "Couldn't look you in the eye");
INSERT INTO `msgs` VALUES (3, "You're just like an angel");
INSERT INTO `msgs` VALUES (4, 'Your skin makes me cry');
INSERT INTO `msgs` VALUES (5, 'You float like a feather');
INSERT INTO `msgs` VALUES (6, 'In a beautiful world');
INSERT INTO `msgs` VALUES (7, 'And I wish I was special');
INSERT INTO `msgs` VALUES (8, "You're so fuckin' special");
INSERT INTO `msgs` VALUES (9, 'What the hell am I doing here?');
INSERT INTO `msgs` VALUES (10, 'I want to have control');
INSERT INTO `msgs` VALUES (11, 'I want a perfect body');

INSERT INTO `fl4g` VALUES (1, 'flag{I_4m_1_Ge_r3aL_de_Fl@9}');