<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_stonefish_planting_seed`;");
E_C("CREATE TABLE `ims_stonefish_planting_seed` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0' COMMENT '公众号ID',
  `seedname` varchar(50) NOT NULL DEFAULT '' COMMENT '种子名称',
  `seedimg` varchar(512) NOT NULL DEFAULT '' COMMENT '种子形象图',
  `seedad` varchar(150) NOT NULL DEFAULT '' COMMENT '种子介绍',
  `seedinfo` text NOT NULL COMMENT '种子介绍',
  `seedimg01` varchar(512) NOT NULL DEFAULT '' COMMENT '胚胎',
  `seedimg02` varchar(512) NOT NULL DEFAULT '' COMMENT '发芽',
  `seedimg03` varchar(512) NOT NULL DEFAULT '' COMMENT '生长',
  `seedimg04` varchar(512) NOT NULL DEFAULT '' COMMENT '发枝',
  `seedimg05` varchar(512) NOT NULL DEFAULT '' COMMENT '繁荣',
  `seedimg06` varchar(512) NOT NULL DEFAULT '' COMMENT '开花',
  `seedimg07` varchar(512) NOT NULL DEFAULT '' COMMENT '结果',
  `seedimg08` varchar(512) NOT NULL DEFAULT '' COMMENT '成熟',
  `seed01` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '胚胎量',
  `seed02` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '发芽量',
  `seed03` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '生长量',
  `seed04` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '发枝量',
  `seed05` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '繁荣量',
  `seed06` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '开花量',
  `seed07` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '开花量',
  `seed08` int(5) unsigned NOT NULL DEFAULT '0' COMMENT '成熟量',
  PRIMARY KEY (`id`),
  KEY `indx_uniacid` (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `ims_stonefish_planting_seed` values('1','0',0xe69187e992b1e6a0912de69c80e5a5bde5a48de588b6e4b880e4b8aae5908ce6a0b7e79a84e7a78de5ad90e8bf9be8a18ce6b4bbe58aa8,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f30302e706e67,0xe69187e992b1e6a091e5b9bfe5918ae8af8d,0xe69187e992b1e6a091e7a78de5ad90e8afa6e7bb86e8afb4e6988e,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f302e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f312e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f322e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f332e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f342e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f352e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f362e706e67,0x2e2e2f6164646f6e732f73746f6e65666973685f706c616e74696e672f74656d706c6174652f696d616765732f747265655f372e706e67,'0','5','10','15','25','35','45','60');");

require("../../inc/footer.php");
?>