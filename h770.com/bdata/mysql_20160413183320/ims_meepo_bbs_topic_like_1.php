<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_meepo_bbs_topic_like`;");
E_C("CREATE TABLE `ims_meepo_bbs_topic_like` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `openid` varchar(40) NOT NULL DEFAULT '',
  `tid` int(11) unsigned NOT NULL DEFAULT '0',
  `time` int(11) unsigned NOT NULL DEFAULT '0',
  `num` int(11) unsigned NOT NULL DEFAULT '0',
  `fid` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`) USING BTREE,
  KEY `fid` (`fid`) USING BTREE,
  KEY `openid` (`openid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=496 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC");

require("../../inc/footer.php");
?>