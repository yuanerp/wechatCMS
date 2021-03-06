<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_ewei_couplet_fans_help`;");
E_C("CREATE TABLE `ims_ewei_couplet_fans_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rid` int(11) DEFAULT '0',
  `fansopenid` varchar(100) DEFAULT '',
  `openid` varchar(100) DEFAULT '',
  `nickname` varchar(255) DEFAULT '',
  `headurl` varchar(255) DEFAULT '',
  `desc` text,
  `status` tinyint(1) DEFAULT '0' COMMENT '0 错误 1 正确',
  `createtime` int(10) DEFAULT '0' COMMENT '帮助时间',
  PRIMARY KEY (`id`),
  KEY `idx_rid` (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>