<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.0
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ims_ewei_shop_goods`;");
E_C("CREATE TABLE `ims_ewei_shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `pcate` int(11) DEFAULT '0',
  `ccate` int(11) DEFAULT '0',
  `type` tinyint(1) DEFAULT '1' COMMENT '1为实体，2为虚拟',
  `status` tinyint(1) DEFAULT '1',
  `displayorder` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `unit` varchar(5) DEFAULT '',
  `description` varchar(1000) DEFAULT '',
  `content` text,
  `goodssn` varchar(50) DEFAULT '',
  `productsn` varchar(50) DEFAULT '',
  `productprice` decimal(10,2) DEFAULT '0.00',
  `marketprice` decimal(10,2) DEFAULT '0.00',
  `costprice` decimal(10,2) DEFAULT '0.00',
  `originalprice` decimal(10,2) DEFAULT '0.00' COMMENT '原价',
  `total` int(10) DEFAULT '0',
  `totalcnf` int(11) DEFAULT '0' COMMENT '0 拍下减库存 1 付款减库存 2 永久不减',
  `sales` int(11) DEFAULT '0',
  `salesreal` int(11) DEFAULT '0',
  `spec` varchar(5000) DEFAULT '',
  `createtime` int(11) DEFAULT '0',
  `weight` decimal(10,2) DEFAULT '0.00',
  `credit` varchar(255) DEFAULT NULL,
  `maxbuy` int(11) DEFAULT '0',
  `usermaxbuy` int(11) DEFAULT '0',
  `hasoption` int(11) DEFAULT '0',
  `dispatch` int(11) DEFAULT '0',
  `thumb_url` text,
  `isnew` tinyint(1) DEFAULT '0',
  `ishot` tinyint(1) DEFAULT '0',
  `isdiscount` tinyint(1) DEFAULT '0',
  `isrecommand` tinyint(1) DEFAULT '0',
  `issendfree` tinyint(1) DEFAULT '0',
  `istime` tinyint(1) DEFAULT '0',
  `iscomment` tinyint(1) DEFAULT '0',
  `timestart` int(11) DEFAULT '0',
  `timeend` int(11) DEFAULT '0',
  `viewcount` int(11) DEFAULT '0',
  `deleted` tinyint(3) DEFAULT '0',
  `hascommission` tinyint(3) DEFAULT '0',
  `commission1_rate` decimal(10,2) DEFAULT '0.00',
  `commission1_pay` decimal(10,2) DEFAULT '0.00',
  `commission2_rate` decimal(10,2) DEFAULT '0.00',
  `commission2_pay` decimal(10,2) DEFAULT '0.00',
  `commission3_rate` decimal(10,2) DEFAULT '0.00',
  `commission3_pay` decimal(10,2) DEFAULT '0.00',
  `score` decimal(10,2) DEFAULT '0.00',
  `taobaoid` varchar(255) DEFAULT '',
  `taotaoid` varchar(255) DEFAULT '',
  `taobaourl` varchar(255) DEFAULT '',
  `updatetime` int(11) DEFAULT '0',
  `share_title` varchar(255) DEFAULT '',
  `share_icon` varchar(255) DEFAULT '',
  `cash` tinyint(3) DEFAULT '0',
  `commission_thumb` varchar(255) DEFAULT '',
  `isnodiscount` tinyint(3) DEFAULT '0',
  `showlevels` text,
  `buylevels` text,
  `showgroups` text,
  `buygroups` text,
  `isverify` tinyint(3) DEFAULT '0',
  `storeids` text,
  `noticeopenid` text,
  `tcate` int(11) DEFAULT '0',
  `noticetype` text,
  `needfollow` tinyint(3) DEFAULT '0',
  `followtip` varchar(255) DEFAULT '',
  `followurl` varchar(255) DEFAULT '',
  `deduct` decimal(10,2) DEFAULT '0.00',
  `virtual` int(11) DEFAULT '0',
  `ccates` text,
  `discounts` text,
  `nocommission` tinyint(3) DEFAULT '0',
  `hidecommission` tinyint(3) DEFAULT '0',
  `pcates` text,
  `tcates` text,
  `artid` int(11) DEFAULT '0',
  `detail_logo` varchar(255) DEFAULT '',
  `detail_shopname` varchar(255) DEFAULT '',
  `detail_btntext1` varchar(255) DEFAULT '',
  `detail_btnurl1` varchar(255) DEFAULT '',
  `detail_btntext2` varchar(255) DEFAULT '',
  `detail_btnurl2` varchar(255) DEFAULT '',
  `detail_totaltitle` varchar(255) DEFAULT '',
  `cates` text,
  `saleupdate` tinyint(3) DEFAULT '0',
  `deduct2` decimal(10,2) DEFAULT '0.00',
  `ednum` int(11) DEFAULT '0',
  `edmoney` decimal(10,2) DEFAULT '0.00',
  `edareas` text,
  `diyformtype` tinyint(3) DEFAULT '0',
  `diyformid` int(11) DEFAULT '0',
  `diymode` tinyint(3) DEFAULT '0',
  `dispatchtype` tinyint(1) DEFAULT '0',
  `dispatchid` int(11) DEFAULT '0',
  `dispatchprice` decimal(10,2) DEFAULT '0.00',
  `manydeduct` tinyint(1) DEFAULT '0',
  `shorttitle` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_uniacid` (`uniacid`),
  KEY `idx_pcate` (`pcate`),
  KEY `idx_ccate` (`ccate`),
  KEY `idx_isnew` (`isnew`),
  KEY `idx_ishot` (`ishot`),
  KEY `idx_isdiscount` (`isdiscount`),
  KEY `idx_isrecommand` (`isrecommand`),
  KEY `idx_iscomment` (`iscomment`),
  KEY `idx_issendfree` (`issendfree`),
  KEY `idx_istime` (`istime`),
  KEY `idx_deleted` (`deleted`),
  KEY `idx_tcate` (`tcate`),
  FULLTEXT KEY `idx_buylevels` (`buylevels`),
  FULLTEXT KEY `idx_showgroups` (`showgroups`),
  FULLTEXT KEY `idx_buygroups` (`buygroups`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>