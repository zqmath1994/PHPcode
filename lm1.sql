/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : lm

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2014-04-05 21:46:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for lm_bclass
-- ----------------------------
DROP TABLE IF EXISTS `lm_bclass`;
CREATE TABLE `lm_bclass` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(90) NOT NULL,
  `pid` int(11) NOT NULL,
  `image` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_bclass
-- ----------------------------
INSERT INTO `lm_bclass` VALUES ('1', '综述通览', '1', 'zongshu.jpg');
INSERT INTO `lm_bclass` VALUES ('2', '公司历史', '1', 'history.jpg');
INSERT INTO `lm_bclass` VALUES ('3', '设计应用', '2', 'shejiyingyong.jpg');
INSERT INTO `lm_bclass` VALUES ('4', '影音制作', '2', 'yingyinzhizuo.jpg');
INSERT INTO `lm_bclass` VALUES ('5', '媒体发布', '3', 'meiti.jpg');
INSERT INTO `lm_bclass` VALUES ('6', '企事业综合服务', '3', 'zonghe.jpg');
INSERT INTO `lm_bclass` VALUES ('7', '公司新闻', '4', 'gongsinews.jpg');
INSERT INTO `lm_bclass` VALUES ('8', '案例解析', '4', 'gongsinews.jpg');
INSERT INTO `lm_bclass` VALUES ('9', '业内资讯', '4', 'hangyezixun.jpg');
INSERT INTO `lm_bclass` VALUES ('10', '媒体报道', '4', 'hangyezixun.jpg');
INSERT INTO `lm_bclass` VALUES ('11', '招聘职位', '6', 'zhaopinzhiwei.jpg');
INSERT INTO `lm_bclass` VALUES ('12', '入职流程', '6', 'liucheng.jpg');

-- ----------------------------
-- Table structure for lm_company
-- ----------------------------
DROP TABLE IF EXISTS `lm_company`;
CREATE TABLE `lm_company` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(180) NOT NULL COMMENT '标题',
  `lowertitle` varchar(180) NOT NULL COMMENT '二级标题',
  `outline` varchar(255) NOT NULL COMMENT '概述',
  `content` text NOT NULL COMMENT '内容',
  `postid` int(11) NOT NULL COMMENT '发表人id',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `addip` varchar(15) NOT NULL COMMENT '添加ip',
  `pic` varchar(50) NOT NULL COMMENT '缩略图',
  `pid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_company
-- ----------------------------
INSERT INTO `lm_company` VALUES ('2', '公司历史', '公司的历史', '这是概述', '<p>21:10:18】这是内容<br/></p>', '1', '2147483647', '192.168.1.1', '3.jpg', '0');
INSERT INTO `lm_company` VALUES ('1', '综述统揽', '综述统揽', '综述统揽21', '<p>综述统揽</p>', '1', '2147483647', '192.168.2.1', '533421cf4faa4.jpg', '0');
INSERT INTO `lm_company` VALUES ('3', '人才招聘', '人才招聘', '人才招聘', '人才招聘', '1', '1323242423', '192.168.1.1', '2.jpg', '0');
INSERT INTO `lm_company` VALUES ('27', '正德嘉信', '正德嘉信知识产权代理有限公司', '正德嘉信知识产权代理有限公司是专业从事商标等知识产权事务的法律服务机构，汇集了一批在商标代理行业具有丰富的理论和实践经验，熟谙国内以及国际商标、版权等各种相关法律、处理知识产权纠纷和侵权行为的专业人士。', '<p>正德嘉信知识产权代理有限公司是专业从事商标等知识产权事务的法律服务机构，汇集了一批在商标代理行业具有丰富的理论和实践经验，熟谙国内以及国际商标、版权等各种相关法律、处理知识产权纠纷和侵权行为的专业人士。</p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503692114597.jpg\" style=\"float:none;\" title=\"正德嘉信_01.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503694321705.jpg\" style=\"float:none;\" title=\"正德嘉信_02.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503695131492.jpg\" style=\"float:none;\" title=\"正德嘉信_03.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503696535100.jpg\" style=\"float:none;\" title=\"正德嘉信_04.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503697449596.jpg\" style=\"float:none;\" title=\"正德嘉信_05.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503698124245.jpg\" style=\"float:none;\" title=\"正德嘉信_06.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396503699127572.jpg\" style=\"float:none;\" title=\"正德嘉信_07.jpg\"/></p><p><br/></p>', '0', '0', '', '533cf4aed40a8.jpg', '1');
INSERT INTO `lm_company` VALUES ('26', '培禾教育', '青少年兴趣教育第一品牌形象策划', '青少年兴趣教育第一品牌形象策划', '<p>培禾教育是青少年兴趣教育第一品牌，主要是针对青少年的兴趣进行课外辅导。</p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492118236459.jpg\" style=\"float:none;\" title=\"peihe 01.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492119241150.jpg\" style=\"float:none;\" title=\"peihe 02.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492119134728.jpg\" style=\"float:none;\" title=\"peihe 03.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492120127593.jpg\" style=\"float:none;\" title=\"peihe 04.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492121325449.jpg\" style=\"float:none;\" title=\"peihe 05.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492122334959.jpg\" style=\"float:none;\" title=\"peihe 06.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396492123908874.jpg\" style=\"float:none;\" title=\"peihe 07.jpg\"/></p><p><br/></p>', '0', '0', '', '533cd09b18551.jpg', '1');
INSERT INTO `lm_company` VALUES ('28', '北京正德嘉信知识产权代理有限公司', '北京正德嘉信知识产权代理有限公司品牌升级', '北京正德嘉信知识产权代理有限公司是专业从事商标等知识产权事务的法律服务机构，汇集了一批在商标代理行业具有丰富的理论和实践经验，熟谙国内以及国际商标、版权等各种相关法律、处理知识产权纠纷和侵权行为的专业人士。', '<p>北京正德嘉信知识产权代理有限公司是专业从事商标等知识产权事务的法律服务机构，汇集了一批在商标代理行业具有丰富的理论和实践经验，熟谙国内以及国际商标、版权等各种相关法律、处理知识产权纠纷和侵权行为的专业人士。</p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505229102613.jpg\" style=\"float:none;\" title=\"正德嘉信_01.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505230120519.jpg\" style=\"float:none;\" title=\"正德嘉信_02.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505231430489.jpg\" style=\"float:none;\" title=\"正德嘉信_03.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505231118685.jpg\" style=\"float:none;\" title=\"正德嘉信_04.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505231415256.jpg\" style=\"float:none;\" title=\"正德嘉信_05.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505232946700.jpg\" style=\"float:none;\" title=\"正德嘉信_06.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396505233133308.jpg\" style=\"float:none;\" title=\"正德嘉信_07.jpg\"/></p><p><br/></p>', '0', '0', '', '533cfaa74b798.jpg', '1');
INSERT INTO `lm_company` VALUES ('29', '硬汉渔具', 'LOGO', '硬汉渔具主营由钓钩、钓饵、钓线等，有些还装上浮子、沉子、钓竿或其他附件。以强钢坚韧为主打！', '<p>硬汉渔具主营由钓钩、钓饵、钓线等，有些还装上浮子、沉子、钓竿或其他附件。以强钢坚韧为主打！</p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396509152751291.jpg\" style=\"float:none;\" title=\"yinghanyuju_01.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396509153748408.jpg\" style=\"float:none;\" title=\"yinghanyuju_02.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396509153676502.jpg\" style=\"float:none;\" title=\"yinghanyuju_03.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396509154924580.jpg\" style=\"float:none;\" title=\"yinghanyuju_04.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396509155121977.jpg\" style=\"float:none;\" title=\"yinghanyuju_05.jpg\"/></p><p><br/></p>', '0', '0', '', '533d0a1c2e8dd.jpg', '1');
INSERT INTO `lm_company` VALUES ('30', '头等客', '', '头等客主打西餐牛排，经营范围为温州，上海等地！', '', '0', '0', '', '533d22e09b294.jpg', '1');
INSERT INTO `lm_company` VALUES ('31', '头等客', '', '头等客主打西餐牛排，经营范围为温州，上海等地！', '', '0', '0', '', '533d22f4b2aad.jpg', '2');
INSERT INTO `lm_company` VALUES ('32', '头等客', '', '头等客主打西餐牛排，经营范围为温州，上海等地！', '<p>头等客主打西餐牛排，经营范围为温州，上海等地！</p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515637157797.jpg\" style=\"float:none;\" title=\"头等客-01.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515798708001.jpg\" title=\"头等客-02.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515638215503.jpg\" style=\"float:none;\" title=\"头等客-03.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515640110750.jpg\" style=\"float:none;\" title=\"头等客-04.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515641662947.jpg\" style=\"float:none;\" title=\"头等客-05.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515642779348.jpg\" style=\"float:none;\" title=\"头等客-06.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515644170405.jpg\" style=\"float:none;\" title=\"头等客-07.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515645916577.jpg\" style=\"float:none;\" title=\"头等客-08.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515646923246.jpg\" style=\"float:none;\" title=\"头等客-09.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515647124878.jpg\" style=\"float:none;\" title=\"头等客-10.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515649137034.jpg\" style=\"float:none;\" title=\"头等客-11.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515650124387.jpg\" style=\"float:none;\" title=\"头等客-12.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515651667078.jpg\" style=\"float:none;\" title=\"头等客-14.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515653668498.jpg\" style=\"float:none;\" title=\"头等客-15.jpg\"/></p><p><img src=\"http://longmamedia.com/Public/ueditor/php/upload1/20140403/1396515661977509.jpg\" style=\"float:none;\" title=\"头等客-16.jpg\"/></p><p><br/></p>', '0', '0', '', '533d23e6582f8.jpg', '2');
INSERT INTO `lm_company` VALUES ('33', '公司简介', '', '', '<p>龙马视艺广告传媒有限责任公司成立于2008年，是</p><p>一家从事视觉效果设计和大众媒体传播与实施的高</p><p>科技品牌工作室。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>公司业务涵盖标志LOGO+VI，商业空间设计、会展，</p><p>空间导视系统设计开发，WEB+APP &nbsp;UI设计研发，</p><p>产品包装设计，公关类广告设计应用，地产类三维</p><p>数字展示，企业宣传片，专业音频制作，TVC制作，&nbsp;</p><p>企事业单位综合服务，媒体广告植入与 发布。</p><p><br/></p><p><br/></p><p>承蒙社会各界的鼎力支持，随着近几年数字科技的</p><p>蓬勃发展，我们组建了一支强大的知识型，技术型</p><p>的高效团队。 &nbsp;</p><p>&nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>公司以高标准服务，以客户需求为准则，高质量地完</p><p>成每一个项目，我们始终坚持不断提高，不断开拓，</p><p>不断进取，以高品质，高效率为己任。</p><p><br/></p><p><br/></p><p>相信在广大客户的关心抬爱下，龙马视艺必将与您一</p><p>起跑的更长，飞的更高。</p><p><br/></p>', '0', '0', '', '', '1');
INSERT INTO `lm_company` VALUES ('34', '公司简介', '', '', '<p>龙马视艺广告传媒有限责任公司成立于2008年，是</p><p>一家从事视觉效果设计和大众媒体传播与实施的高</p><p>科技品牌工作室。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>公司业务涵盖标志LOGO+VI，商业空间设计、会展，</p><p>空间导视系统设计开发，WEB+APP &nbsp;UI设计研发，</p><p>产品包装设计，公关类广告设计应用，地产类三维</p><p>数字展示，企业宣传片，专业音频制作，TVC制作，&nbsp;</p><p>企事业单位综合服务，媒体广告植入与 发布。</p><p><br/></p><p><br/></p><p>承蒙社会各界的鼎力支持，随着近几年数字科技的</p><p>蓬勃发展，我们组建了一支强大的知识型，技术型</p><p>的高效团队。 &nbsp;</p><p>&nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>公司以高标准服务，以客户需求为准则，高质量地完</p><p>成每一个项目，我们始终坚持不断提高，不断开拓，</p><p>不断进取，以高品质，高效率为己任。</p><p><br/></p><p><br/></p><p>相信在广大客户的关心抬爱下，龙马视艺必将与您一</p><p>起跑的更长，飞的更高。</p><p><br/></p>', '0', '0', '', '', '1');

-- ----------------------------
-- Table structure for lm_menu
-- ----------------------------
DROP TABLE IF EXISTS `lm_menu`;
CREATE TABLE `lm_menu` (
  `id` mediumint(4) NOT NULL auto_increment,
  `title` varchar(30) NOT NULL,
  `path` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_menu
-- ----------------------------
INSERT INTO `lm_menu` VALUES ('1', '公司介绍', 'gongsijieshao');
INSERT INTO `lm_menu` VALUES ('2', '设计应用', 'shejiyingyong');
INSERT INTO `lm_menu` VALUES ('3', '媒体发布', 'meitifabu');
INSERT INTO `lm_menu` VALUES ('4', '新闻资讯', 'xinwenzixun');
INSERT INTO `lm_menu` VALUES ('5', '下载中心', '');
INSERT INTO `lm_menu` VALUES ('6', '人才招聘', 'rencaizhaoping');

-- ----------------------------
-- Table structure for lm_message
-- ----------------------------
DROP TABLE IF EXISTS `lm_message`;
CREATE TABLE `lm_message` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `company` varchar(90) NOT NULL COMMENT '公司',
  `office` varchar(30) NOT NULL COMMENT '职位',
  `name` varchar(18) NOT NULL COMMENT '姓名',
  `demand` varchar(255) NOT NULL COMMENT '需求',
  `phone` varchar(15) NOT NULL COMMENT '电话',
  `telphone` varchar(11) NOT NULL COMMENT '手机',
  `qq` varchar(11) NOT NULL COMMENT 'qq',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `content` text NOT NULL COMMENT '留言信息',
  `addtime` int(11) unsigned NOT NULL COMMENT '留言时间',
  `addip` varchar(15) NOT NULL COMMENT '留言ip',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_message
-- ----------------------------
INSERT INTO `lm_message` VALUES ('14', '小鑫', 'CC', '小鑫', 'daslk	', '13021964706', '13021964706', '137105161', '137106161@qq.com', '大跨度哈喽肯定还能操控大赛可能性', '1395997269', '127.0.0.1');
INSERT INTO `lm_message` VALUES ('12', '', '', '', '', '', '', '', '', '111111111', '1395996786', '127.0.0.1');
INSERT INTO `lm_message` VALUES ('13', '', '', '', '', '', '', '', '', 'dasdsa', '1395996854', '127.0.0.1');
INSERT INTO `lm_message` VALUES ('10', '龙马视艺', '设计', '龙马视艺', '龙马视艺', '0416-3234171', '1364416999', '表哥位置', '915495588', '龙马视艺', '1395993239', '127.0.0.1');
INSERT INTO `lm_message` VALUES ('15', 'salkjdas', 'kclsdnkla', 'h j', 'kjh ', 'ncksnkl', ' jkj', 'h', 'kjj', 'kj hjk jk', '1395997538', '127.0.0.1');

-- ----------------------------
-- Table structure for lm_olay
-- ----------------------------
DROP TABLE IF EXISTS `lm_olay`;
CREATE TABLE `lm_olay` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `method` smallint(1) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_olay
-- ----------------------------
INSERT INTO `lm_olay` VALUES ('6', '', '', '1', '');

-- ----------------------------
-- Table structure for lm_sclass
-- ----------------------------
DROP TABLE IF EXISTS `lm_sclass`;
CREATE TABLE `lm_sclass` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(90) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_sclass
-- ----------------------------
INSERT INTO `lm_sclass` VALUES ('1', 'LOGO商标', '3');
INSERT INTO `lm_sclass` VALUES ('2', 'VI应用', '3');
INSERT INTO `lm_sclass` VALUES ('3', '画册宣传册', '3');
INSERT INTO `lm_sclass` VALUES ('4', '产品包装', '3');
INSERT INTO `lm_sclass` VALUES ('5', '商业空间', '3');
INSERT INTO `lm_sclass` VALUES ('6', '空间导示系统', '3');
INSERT INTO `lm_sclass` VALUES ('7', '公关广告应用', '3');
INSERT INTO `lm_sclass` VALUES ('8', 'WEB+APPUI', '3');
INSERT INTO `lm_sclass` VALUES ('9', '宣传片', '4');
INSERT INTO `lm_sclass` VALUES ('10', 'TVC广告', '4');
INSERT INTO `lm_sclass` VALUES ('11', '3D数字展示', '4');
INSERT INTO `lm_sclass` VALUES ('12', '音视特效合成', '4');
INSERT INTO `lm_sclass` VALUES ('13', '虚拟现实', '4');
INSERT INTO `lm_sclass` VALUES ('25', '公司新闻', '7');
INSERT INTO `lm_sclass` VALUES ('17', ' 社区广告', '5');
INSERT INTO `lm_sclass` VALUES ('18', '广播电视', '5');
INSERT INTO `lm_sclass` VALUES ('19', '掌上APP广告植入', '5');
INSERT INTO `lm_sclass` VALUES ('20', '<br />综合性网站', '5');
INSERT INTO `lm_sclass` VALUES ('21', '营销策略', '5');
INSERT INTO `lm_sclass` VALUES ('22', ' 庆典、年会策划执行', '6');
INSERT INTO `lm_sclass` VALUES ('23', '<br />展览展示策划实施', '6');
INSERT INTO `lm_sclass` VALUES ('24', '论坛会议策划', '6');
INSERT INTO `lm_sclass` VALUES ('26', '案例解析', '8');
INSERT INTO `lm_sclass` VALUES ('27', '业内资讯', '9');
INSERT INTO `lm_sclass` VALUES ('28', '媒体报道', '10');
INSERT INTO `lm_sclass` VALUES ('30', '设备租赁', '6');

-- ----------------------------
-- Table structure for lm_show
-- ----------------------------
DROP TABLE IF EXISTS `lm_show`;
CREATE TABLE `lm_show` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL,
  `method` tinyint(1) NOT NULL,
  `url` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=216 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_show
-- ----------------------------
INSERT INTO `lm_show` VALUES ('1', '木可可', '', '1', 'longmamedia.com/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('2', '非淋沐浴', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('3', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('4', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('5', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('6', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('7', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('8', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('9', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('10', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('11', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('12', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('13', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('14', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('15', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('16', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('17', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('18', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('19', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('20', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('21', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('22', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('23', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('24', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('25', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('26', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('27', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('28', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('29', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('30', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('31', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('32', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('33', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('34', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('35', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('36', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('37', '推荐案例', '', '1', 'localhost/longmlocalhost/longma/index.php/Company/index/id/1');
INSERT INTO `lm_show` VALUES ('38', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('39', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('40', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('41', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('42', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('43', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('44', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('45', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('46', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('47', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('48', '推荐案例', '', '1', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('49', '推荐案例', '533c10e2831a7.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('50', '推荐案例', 'r2.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('51', '推荐案例', 'r3.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('52', '推荐案例', 'r4.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('53', '推荐案例', 'r1_1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('54', '推荐案例', 'r2_1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('55', '推荐案例', 'r3_1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('56', '推荐案例', 'r4_1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('57', '推荐案例', 'b1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('58', '推荐案例', 'b2.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('59', '推荐案例', 'b2_1.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('60', '推荐案例', 'b3.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('61', '推荐案例', 'b4.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('62', '推荐案例', '31.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('63', '推荐案例', '33.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('64', '推荐案例', '35.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('65', '推荐案例', '32.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('66', '推荐案例', '34.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('67', '推荐案例', '36.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('68', '推荐案例', '41.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('69', '推荐案例', '42.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('70', '推荐案例', '44.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('71', '推荐案例', '45.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('72', '推荐案例', '43.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');
INSERT INTO `lm_show` VALUES ('73', '推荐案例', '46.jpg', '2', 'localhost/longma/index.php/Company/index/id/14');

-- ----------------------------
-- Table structure for lm_slide
-- ----------------------------
DROP TABLE IF EXISTS `lm_slide`;
CREATE TABLE `lm_slide` (
  `id` int(11) NOT NULL auto_increment,
  `image` varchar(120) NOT NULL,
  `title` varchar(120) NOT NULL,
  `url` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_slide
-- ----------------------------
INSERT INTO `lm_slide` VALUES ('2', '533cd8049362a.jpg', '培禾教育', 'http://www.longmamedia.com/index.php/Company/index/id/26', '0');
INSERT INTO `lm_slide` VALUES ('3', '533cf632c13ab.jpg', '正德嘉信', 'http://www.longmamedia.com/index.php/Company/index/id/27', '0');
INSERT INTO `lm_slide` VALUES ('4', '4.jpg', '4444', '', '0');
INSERT INTO `lm_slide` VALUES ('5', '5.jpg', '55555', '', '0');
INSERT INTO `lm_slide` VALUES ('6', '6.jpg', '6666666', '', '0');
INSERT INTO `lm_slide` VALUES ('7', '533c107016484.jpg', 'wqwqsqw', 'http://www.badiu.com', '0');
INSERT INTO `lm_slide` VALUES ('8', '5333c8df3d4a3.jpg', '测试测试', '', '14');
INSERT INTO `lm_slide` VALUES ('9', '5333c8df3f43a.jpg', '测试测试', '', '14');
INSERT INTO `lm_slide` VALUES ('26', '53352fa08c7b2.jpg', 'http://www.baidu.com', 'http://www.baidu.com', '5');
INSERT INTO `lm_slide` VALUES ('19', '533423438f99a.png', '`````````', '', '1');
INSERT INTO `lm_slide` VALUES ('18', '53342343885ce.jpg', '`````````', '', '1');
INSERT INTO `lm_slide` VALUES ('20', '53350c3ff0861.jpg', 'ceshi', 'http://www.baidu.com', '24');
INSERT INTO `lm_slide` VALUES ('25', '53352f59a5081.jpg', 'http://www.baidu.com', 'http://www.baidu.com', '2');
INSERT INTO `lm_slide` VALUES ('24', '53352f59a3215.jpg', 'http://www.baidu.com', 'http://www.baidu.com', '2');
INSERT INTO `lm_slide` VALUES ('27', '53352fa08d8fb.jpg', 'http://www.baidu.com', 'http://www.baidu.com', '5');
INSERT INTO `lm_slide` VALUES ('50', '533cd09aee9e5.jpg', '', '', '26');
INSERT INTO `lm_slide` VALUES ('51', '533cd09b0fe33.jpg', '', '', '26');
INSERT INTO `lm_slide` VALUES ('46', '533cd09aa5484.jpg', '', '', '26');
INSERT INTO `lm_slide` VALUES ('47', '533cd09ab0732.jpg', '', '', '26');
INSERT INTO `lm_slide` VALUES ('48', '533cd09ab393a.jpg', '', '', '26');
INSERT INTO `lm_slide` VALUES ('49', '533cd09acb5ee.jpg', '', '', '26');

-- ----------------------------
-- Table structure for lm_user
-- ----------------------------
DROP TABLE IF EXISTS `lm_user`;
CREATE TABLE `lm_user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(64) NOT NULL,
  `userpwd` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_user
-- ----------------------------
INSERT INTO `lm_user` VALUES ('1', 'admin', '21232F297A57A5A743894A0E4A801FC3');

-- ----------------------------
-- Table structure for lm_webconfig
-- ----------------------------
DROP TABLE IF EXISTS `lm_webconfig`;
CREATE TABLE `lm_webconfig` (
  `item` varchar(255) NOT NULL COMMENT 'key',
  `content` text NOT NULL COMMENT 'value',
  `description` varchar(255) NOT NULL COMMENT '注释'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lm_webconfig
-- ----------------------------
INSERT INTO `lm_webconfig` VALUES ('title', '龙马视艺', '标题');
INSERT INTO `lm_webconfig` VALUES ('keywords', '专业成就您的品牌传播力！', '关键字');
INSERT INTO `lm_webconfig` VALUES ('description', '专业成就您的品牌传播力！', '网站描述');
INSERT INTO `lm_webconfig` VALUES ('address', '辽宁省锦州市古塔区辽工东苑<br /> 7-2号，邮编 121000', '公司地址');
INSERT INTO `lm_webconfig` VALUES ('telphone', '13644169949', '手机号码');
INSERT INTO `lm_webconfig` VALUES ('phone', '(416) 3234-171-818 (业务),(416) 3234-171-819 (业务),(416) 3234-171-817 (人事)', '电话');
INSERT INTO `lm_webconfig` VALUES ('QQ', '915495588/925495588/<br />935495588/', 'QQ号码');
INSERT INTO `lm_webconfig` VALUES ('email', 'market@longmamedia.com<br />HR@longmamedia.com', '邮箱地址');
INSERT INTO `lm_webconfig` VALUES ('weibo', 'xxx.com/XXX', '微博地址');
INSERT INTO `lm_webconfig` VALUES ('logo', '533d36e5e4a45.png', '网站logo');
INSERT INTO `lm_webconfig` VALUES ('record', '鲁A-dsadas', '备案号');
INSERT INTO `lm_webconfig` VALUES ('count', '', '网站统计');
INSERT INTO `lm_webconfig` VALUES ('copyright', 'Copyright © 2008-2012 All rights reserved www.longmamedia.com<br />龙马视艺广告传媒有限公司 版权所有 辽ICP备12009747号-1 ', '版权信息');
INSERT INTO `lm_webconfig` VALUES ('prompt', '清明节放假4月5日—4月7日', '首页提示');
