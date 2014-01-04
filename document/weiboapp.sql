-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2014 at 08:13 AM
-- Server version: 5.6.4-m7-log
-- PHP Version: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weiboapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `lee_article`
--

CREATE TABLE IF NOT EXISTS `lee_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(120) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `copyfrom` varchar(100) NOT NULL,
  `fromlink` varchar(200) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `color` char(7) NOT NULL,
  `isbold` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `recommends` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `realhits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `puttime` int(10) unsigned NOT NULL DEFAULT '0',
  `tpl` varchar(20) NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`),
  KEY `recommend` (`recommends`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_ask`
--

CREATE TABLE IF NOT EXISTS `lee_ask` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(120) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `color` char(7) NOT NULL,
  `isbold` tinyint(1) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `recommends` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `realhits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `puttime` int(10) unsigned NOT NULL DEFAULT '0',
  `tpl` varchar(20) NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`),
  KEY `recommend` (`recommends`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_category`
--

CREATE TABLE IF NOT EXISTS `lee_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lft` mediumint(9) unsigned NOT NULL,
  `rht` mediumint(9) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `isexternal` tinyint(1) NOT NULL DEFAULT '0',
  `externalurl` varchar(255) NOT NULL,
  `target` varchar(10) NOT NULL DEFAULT '_self',
  `dir` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `model` varchar(20) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `color` char(7) NOT NULL,
  `tpllist` varchar(20) NOT NULL,
  `tpldetail` varchar(20) NOT NULL,
  `pagesize` tinyint(4) unsigned NOT NULL,
  `isnavigation` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `isdisabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  KEY `lang` (`lang`),
  KEY `dir` (`dir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `lee_category`
--

INSERT INTO `lee_category` (`id`, `parent`, `lft`, `rht`, `name`, `isexternal`, `externalurl`, `target`, `dir`, `title`, `keywords`, `description`, `model`, `thumb`, `content`, `color`, `tpllist`, `tpldetail`, `pagesize`, `isnavigation`, `isdisabled`, `listorder`, `lang`) VALUES
(1, 0, 1, 2, '新闻中心', 0, '', '_self', 'news', '', '', '0', 'article', '', '', '', '', '', 2, 1, 0, 2, 'zh_cn'),
(3, 0, 3, 4, '产品中心', 0, '', '_self', 'product', '', '', '0', 'product', '', '', '', '', '', 0, 1, 1, 1, 'zh_cn'),
(15, 0, 1, 6, 'Product', 0, '', '_self', 'product', '', '', '', 'product', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(16, 15, 2, 3, 'Special Package', 0, '', '_self', 'youhui', '', '', '', 'product', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(17, 15, 4, 5, 'Products and service', 0, '', '_self', 'fuwu', '', '', '', 'product', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(18, 0, 7, 8, 'News', 0, '', '_self', 'news', '', '', '', 'article', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(19, 0, 9, 10, 'Down', 0, '', '_self', 'down', '', '', '', 'down', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(20, 0, 11, 12, 'Recruitment', 0, '', '_self', 'hr', '', '', '', 'hr', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(21, 0, 13, 14, 'Ask', 0, '', '_self', 'ask', '', '', '', 'ask', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(22, 0, 15, 16, 'Guestbook', 0, '', '_self', 'guestbook', '', '', '', 'guestbook', '', '', '', '', '', 0, 1, 0, 99, 'en'),
(23, 0, 17, 18, 'About us', 0, '', '_self', 'aboutus', '', '', '', 'page', '', 'aboutus', '', '', '', 0, 1, 0, 99, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `lee_city`
--

CREATE TABLE IF NOT EXISTS `lee_city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `city` varchar(20) NOT NULL DEFAULT '',
  `province` int(11) NOT NULL,
  `number` int(11) NOT NULL DEFAULT '1',
  `real_number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `city_id` (`province`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lee_city`
--

INSERT INTO `lee_city` (`id`, `city`, `province`, `number`, `real_number`) VALUES
(1, '长宁区', 1, 5, 5),
(2, '澳大利亚', 2, 1, 1),
(3, '虹口区', 1, 2, 2),
(4, '越南', 2, 1, 1),
(5, '黄浦区', 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `lee_config`
--

CREATE TABLE IF NOT EXISTS `lee_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category` char(10) NOT NULL,
  `value` text NOT NULL,
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `varname` (`varname`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `lee_config`
--

INSERT INTO `lee_config` (`id`, `varname`, `title`, `category`, `value`, `issystem`, `lang`) VALUES
(1, 'site_name', '', 'base', '力士', 1, 'zh_cn'),
(2, 'site_title', '', 'base', '力士', 1, 'zh_cn'),
(3, 'site_keywords', '', 'base', '力士', 1, 'zh_cn'),
(4, 'site_description', '', 'base', '力士', 1, 'zh_cn'),
(5, 'site_code', '', 'base', '', 1, 'zh_cn'),
(6, 'site_logo', '', 'base', 'images/logo.png', 1, 'zh_cn'),
(7, 'site_template', '', 'base', 'default', 1, 'zh_cn'),
(8, 'site_beian', '备案号', 'base', '', 0, 'zh_cn'),
(9, 'site_name', '', 'base', 'Six network technology', 1, 'en'),
(10, 'site_title', '', 'base', 'X6CMS is a function of a sound marketing website content management platform', 1, 'en'),
(11, 'site_keywords', '', 'base', 'X6CMS, website management system', 1, 'en'),
(12, 'site_description', '', 'base', '', 1, 'en'),
(13, 'site_code', '', 'base', '', 1, 'en'),
(14, 'site_logo', '', 'base', 'images/logo.png', 1, 'en'),
(15, 'site_template', '', 'base', 'default', 1, 'en'),
(34, 'water_type', '', 'attr', '2', 1, '0'),
(33, 'attr_allowtype', '', 'attr', '', 1, '0'),
(32, 'attr_maxsize', '', 'attr', '200', 1, '0'),
(21, 'site_adminlang', '', 'lang', 'zh_cn', 1, '0'),
(22, 'site_frontlang', '', 'lang', 'zh_cn', 1, '0'),
(23, 'site_home', '', 'base', '', 1, 'en'),
(25, 'site_home', '', 'base', '', 1, 'zh_cn'),
(26, 'smtp_host', '', 'mail', '', 1, '0'),
(27, 'smtp_user', '', 'mail', '', 1, '0'),
(28, 'smtp_pass', '', 'mail', '', 1, '0'),
(29, 'smtp_port', '', 'mail', '', 1, '0'),
(30, 'smtp_sendmail', '', 'mail', '', 1, '0'),
(31, 'mail_type', '', 'mail', 'sendmail', 1, '0'),
(35, 'water_text_value', '', 'attr', 'Powered by X6CMS', 1, '0'),
(36, 'water_text_size', '', 'attr', '24', 1, '0'),
(37, 'water_text_color', '', 'attr', '#990000', 1, '0'),
(38, 'water_text_font', '', 'attr', '', 1, '0'),
(39, 'water_minwidth', '', 'attr', '200', 1, '0'),
(40, 'water_minheight', '', 'attr', '100', 1, '0'),
(41, 'water_padding', '', 'attr', '-20', 1, '0'),
(42, 'water_opacity', '', 'attr', '10', 1, '0'),
(43, 'water_quality', '', 'attr', '100', 1, '0'),
(44, 'water_position', '', 'attr', 'bottomright', 1, '0'),
(45, 'water_image_path', '', 'attr', 'data/attachment/image/20130131/638be3a673f86444ee7d48637cf015fa.png', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `lee_down`
--

CREATE TABLE IF NOT EXISTS `lee_down` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(120) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `color` char(7) NOT NULL,
  `attrurl` varchar(100) NOT NULL,
  `attrname` varchar(100) NOT NULL,
  `isbold` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `recommends` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `realhits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `puttime` int(10) unsigned NOT NULL DEFAULT '0',
  `tpl` varchar(20) NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`),
  KEY `recommend` (`recommends`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_fragment`
--

CREATE TABLE IF NOT EXISTS `lee_fragment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `remark` mediumtext NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lee_fragment`
--

INSERT INTO `lee_fragment` (`id`, `title`, `varname`, `content`, `remark`, `createtime`, `updatetime`, `status`, `lang`) VALUES
(1, '首页-产品介绍', 'index_cpjs', '<h2>\r\n <a href=""><img alt="" align="left" src="data/attachment/image/20121029/20121029091643_53887.png" width="108" height="150" /></a> \r\n</h2>\r\n<div>\r\n <a href=""><span></span></a> \r\n</div>\r\n<div>\r\n <h2>\r\n  <span style="color:#006600;">X6CMS网站</span><span style="color:#006600;">内容管理系统 v2.0</span> \r\n </h2>\r\n<span style="line-height:2.5;color:#666666;">X6CMS：全称小六网站内容管理系统<span style="color:#666666;line-height:30px;">。X6CMS是一个功能完善的营销型网站管理平台，采用PHP+MYSQL架构，全站内置SEO优化机制，界面简介，操作方便。<span style="color:#666666;line-height:30px;">&nbsp;X6CMS系统核心采用Codeigniter框架，同时作为免费开源软件发布，集众多开源项目于一身，使X6CMS从安全、效率、易用及扩展性更</span><span style="color:#666666;line-height:30px;">加突出。<span style="color:#666666;line-height:30px;">&nbsp;X6CMS系统核心采用Codeigniter框架，同时作为免费开源软件发布，集众多开源项目于一身，使X6CMS从安全、效率、易用及扩展性更</span><span style="color:#666666;line-height:30px;">加突出。</span></span></span></span> \r\n</div>', '', 0, 1359699157, 1, 'zh_cn'),
(4, '联系我们', 'contact', '<p>\r\n <span style="line-height:24px;color:#003399;"><strong>联系我们</strong></span> \r\n</p>\r\n<p>\r\n <span style="line-height:2;color:#666666;">QQ：355997214</span><span id="__kindeditor_bookmark_start_22__"></span>\r\n</p>\r\n<p>\r\n <span style="line-height:2;color:#666666;">邮箱：admin@x6cms.com</span> \r\n</p>\r\n<p>\r\n <span style="line-height:2;color:#666666;">联系人：小六</span> \r\n</p>\r\n<p>\r\n <span style="line-height:2;color:#666666;">网址：<a href="http://www.x6cms.com" target="_blank">http://www.x6cms.com</a></span> \r\n</p>\r\n<p>\r\n <span style="line-height:2;color:#666666;">地址：西安市高新区唐延路1号旺座国际城B座9层</span> \r\n</p>', '', 0, 1361413566, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_guestbook`
--

CREATE TABLE IF NOT EXISTS `lee_guestbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `replyuid` int(10) unsigned NOT NULL DEFAULT '0',
  `author` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `replytime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` mediumint(9) NOT NULL DEFAULT '999',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `lee_guestbook`
--

INSERT INTO `lee_guestbook` (`id`, `category`, `title`, `uid`, `replyuid`, `author`, `email`, `phone`, `description`, `content`, `createtime`, `replytime`, `status`, `listorder`, `lang`) VALUES
(41, 22, '33', 1, 1, '333', '33@qq.com', '', '', '12341234', 1361264204, 1361264212, 0, 999, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `lee_hr`
--

CREATE TABLE IF NOT EXISTS `lee_hr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(120) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `num` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `color` char(7) NOT NULL,
  `isbold` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `recommends` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `realhits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `puttime` int(10) unsigned NOT NULL DEFAULT '0',
  `tpl` varchar(20) NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`),
  KEY `recommend` (`recommends`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_keywords`
--

CREATE TABLE IF NOT EXISTS `lee_keywords` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `listorder` int(3) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lee_keywords`
--

INSERT INTO `lee_keywords` (`id`, `title`, `url`, `listorder`, `status`, `lang`) VALUES
(3, 'X6CMS', 'http://www.x6cms.com', 99, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_lang`
--

CREATE TABLE IF NOT EXISTS `lee_lang` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `varname` varchar(20) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lee_lang`
--

INSERT INTO `lee_lang` (`id`, `title`, `varname`, `icon`, `listorder`, `status`) VALUES
(1, '简体中文', 'zh_cn', 'data/language/zh_cn/zh_cn.gif', 1, 1),
(2, 'English', 'en', 'data/language/en/en.gif', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lee_link`
--

CREATE TABLE IF NOT EXISTS `lee_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` mediumint(8) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `remark` mediumtext NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(3) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`type`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lee_link`
--

INSERT INTO `lee_link` (`id`, `type`, `title`, `description`, `thumb`, `url`, `remark`, `createtime`, `updatetime`, `listorder`, `status`, `lang`) VALUES
(1, 0, 'X6论坛', '网站建设知识分享社区', '', 'http://bbs.x6cms.com', '默认友情链接', 1336135102, 1336135390, 2, 1, 'zh_cn'),
(3, 0, '小六网络科技', '西安网站建设、西安做网站', '', 'http://soft.x6cms.com', '', 0, 0, 99, 1, 'zh_cn'),
(2, 0, '网站管理系统', 'X6CMS网站内容管理系统', '', 'http://www.x6cms.com', '默认友情链接', 0, 0, 1, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_model`
--

CREATE TABLE IF NOT EXISTS `lee_model` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `issearch` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `isrecommend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_navigation`
--

CREATE TABLE IF NOT EXISTS `lee_navigation` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` mediumint(8) unsigned NOT NULL,
  `title` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL,
  `color` char(7) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `rel` varchar(20) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `lee_navigation`
--

INSERT INTO `lee_navigation` (`id`, `type`, `title`, `url`, `color`, `remark`, `rel`, `thumb`, `listorder`, `status`, `lang`) VALUES
(21, 4, '网站地图', 'sitemap', '0', '', '', '', 2, 1, 'zh_cn'),
(25, 4, 'RSS订阅', 'rss', '0', '', '', '', 3, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_online`
--

CREATE TABLE IF NOT EXISTS `lee_online` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `remark` mediumtext NOT NULL,
  `listorder` int(3) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`type`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lee_online`
--

INSERT INTO `lee_online` (`id`, `type`, `title`, `description`, `remark`, `listorder`, `status`, `lang`) VALUES
(1, 'qq', 'BUG提交', '355997214', '0', 2, 1, 'zh_cn'),
(4, 'qq', '授权咨询', '355997214', '0', 1, 1, 'zh_cn'),
(5, 'qq', '建站咨询', '355997214', '0', 3, 1, 'zh_cn'),
(6, 'code', '联系电话', '<font color="red"><b>13888888888</b></font>', '0', 6, 1, 'zh_cn'),
(7, 'email', '小六邮箱', 'admin@x6cms.com', '0', 5, 1, 'zh_cn'),
(10, 'wangwang', '旺旺客服', 'lilv7214@126.com', '0', 4, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_product`
--

CREATE TABLE IF NOT EXISTS `lee_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL,
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `keywords` varchar(120) NOT NULL,
  `description` mediumtext NOT NULL,
  `content` text NOT NULL,
  `price` float(10,2) unsigned NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `color` char(7) NOT NULL,
  `isbold` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `recommends` varchar(255) NOT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `realhits` int(10) unsigned NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `puttime` int(10) unsigned NOT NULL DEFAULT '0',
  `tpl` varchar(20) NOT NULL,
  `listorder` int(10) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  `linkurl` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `lang` (`lang`),
  KEY `recommend` (`recommends`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `lee_product`
--

INSERT INTO `lee_product` (`id`, `category`, `title`, `uid`, `keywords`, `description`, `content`, `price`, `thumb`, `color`, `isbold`, `tags`, `recommends`, `hits`, `realhits`, `createtime`, `updatetime`, `puttime`, `tpl`, `listorder`, `status`, `lang`, `linkurl`) VALUES
(1, 0, '白皙焕采', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/e0188d03b5ff83b037e067584df97d6c.png', '0', 0, '0', '', 0, 0, 1386327404, 1387791499, 1386327369, '0', 4, 1, 'zh_cn', 'http://item.yhd.com/item/10349275_1?ref=1_1_52_search.ctg_1'),
(2, 0, '白皙莹润', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/5729ae17dc265a15df7d9ec2a6de5b21.png', '0', 0, '0', '', 0, 0, 1387512085, 1387791517, 1387511926, '0', 5, 1, 'zh_cn', 'http://item.yhd.com/item/8796074_1?ref=1_1_52_search.ctg_1'),
(3, 0, '恒久嫩肤', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/cf5751227eb24528eed98421e4eddadd.png', '0', 0, '0', '', 0, 0, 1387512968, 1387791680, 1387512913, '0', 1, 1, 'zh_cn', 'http://item.yhd.com/item/8796082_1?ref=gl.1.1.0.[pms_15_2_42].0.CEASn1'),
(4, 0, '滋养柔肤', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/37d3f44a0f33b77777282cf42faa9076.png', '0', 0, '0', '', 0, 0, 1387513025, 1387791540, 1387512973, '0', 3, 1, 'zh_cn', 'http://item.yhd.com/item/8796084_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEARKr'),
(5, 0, '丝滑润肤', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/d6226caa5b44651eae4ca8ca3c765594.png', '0', 0, '0', '', 0, 0, 1387520724, 1387791556, 1387520675, '0', 2, 1, 'zh_cn', 'http://item.yhd.com/item/13502628_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEARKr'),
(6, 0, '闪亮冰爽', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/73dd5520ad4b5cc370f5cb57b7214aab.png', '0', 0, '0', '', 0, 0, 1387520890, 1387791569, 1387520727, '0', 6, 1, 'zh_cn', 'http://item.yhd.com/item/8796068_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEeqmp'),
(7, 0, '水漾沁爽', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/16b54cc2d33161897058b044d734c86e.png', '0', 0, '0', '', 0, 0, 1387520968, 1387791584, 1387520895, '0', 7, 1, 'zh_cn', 'http://item.yhd.com/item/8796065_1?ref=1_1_52_search.ctg_1'),
(8, 0, '舞媚怡香', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/cb637586f0f0ff3b51750846c243b3c1.png', '0', 0, '0', '', 0, 0, 1387521163, 1387791598, 1387521082, '0', 9, 1, 'zh_cn', 'http://item.yhd.com/item/8796080_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEeqmp'),
(9, 0, '迷醉沁香', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/febed2c9fdb630368c7b6e72bff9399b.png', '0', 0, '0', '', 0, 0, 1387521420, 1387791622, 1387521374, '0', 10, 1, 'zh_cn', 'http://item.yhd.com/item/19447578_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEeqmp'),
(10, 0, '幽莲魅肤', 5, '0', '', '', 0.00, 'data/attachment/image/20131223/cdaf7e7af5fd0041495f5d85da30800e.png', '0', 0, '0', '', 0, 0, 1387521555, 1387791634, 1387521507, '0', 8, 1, 'zh_cn', 'http://item.yhd.com/item/8796076_1?ref=gl.1.1.52.[1_1_52_search.ctg_1].0.CEeqmp');

-- --------------------------------------------------------

--
-- Table structure for table `lee_province`
--

CREATE TABLE IF NOT EXISTS `lee_province` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `province` varchar(20) NOT NULL DEFAULT '',
  `number` int(11) NOT NULL DEFAULT '1',
  `real_number` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lee_province`
--

INSERT INTO `lee_province` (`id`, `province`, `number`, `real_number`) VALUES
(1, '上海', 13, 13),
(2, '海外', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lee_purview`
--

CREATE TABLE IF NOT EXISTS `lee_purview` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `class` varchar(20) NOT NULL,
  `method` varchar(255) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `lee_purview`
--

INSERT INTO `lee_purview` (`id`, `parent`, `class`, `method`, `listorder`, `status`) VALUES
(1, 0, 'system', '', 5, 1),
(2, 1, 'purview', 'add,edit,del,order', 1, 1),
(3, 1, 'usergroup', 'add,edit,del,order,grant', 2, 1),
(4, 1, 'user', 'add,edit,del', 3, 1),
(5, 0, 'content', '', 2, 1),
(6, 0, 'module', '', 4, 1),
(7, 0, 'seo', '', 3, 1),
(20, 6, 'type', 'add,edit,del,order', 6, 1),
(9, 6, 'link', 'add,edit,del,order', 2, 1),
(19, 1, 'config', 'add,base,lang,mail,attr,del', 6, 1),
(11, 5, 'article', 'add,edit,del,order', 2, 1),
(14, 5, 'ask', 'add,edit,del,order', 4, 1),
(15, 6, 'slide', 'add,edit,del,order', 1, 1),
(21, 5, 'category', 'add,edit,del,order', 1, 1),
(22, 6, 'navigation', 'add,edit,del,order', 3, 1),
(23, 7, 'tags', 'add,edit,del,order', 1, 1),
(24, 5, 'hr', 'add,edit,del,order', 6, 1),
(25, 5, 'product', 'add,edit,del,order', 3, 1),
(32, 0, 'personal', '', 1, 1),
(28, 7, 'keywords', 'add,edit,del', 2, 1),
(29, 7, 'robots', 'save,restore', 4, 1),
(30, 7, 'htaccess', 'save,restore', 3, 1),
(33, 32, 'adminindex', '', 1, 1),
(34, 32, 'profile', 'save', 3, 1),
(35, 32, 'propass', 'save', 2, 1),
(36, 6, 'fragment', 'add,edit,del', 5, 1),
(37, 1, 'clearcache', '', 12, 1),
(38, 6, 'online', 'add,edit,del,order', 4, 1),
(39, 5, 'down', 'add,edit,del,order', 5, 1),
(40, 1, 'database', 'backup,download,upgrade,optimize,del', 10, 1),
(41, 5, 'guestbook', 'add,edit,del,order', 7, 1),
(42, 1, 'template', 'edit', 11, 1),
(43, 7, 'sitemap', 'generate,download,del', 5, 1),
(51, 1, 'lang', 'add,edit,del,order', 9, 1),
(52, 5, 'model', 'add,edit,del,order', 9, 1),
(53, 5, 'recommend', 'add,edit,del', 8, 1),
(54, 1, 'tpltags', '', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lee_recommend`
--

CREATE TABLE IF NOT EXISTS `lee_recommend` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `model` varchar(20) NOT NULL,
  `remark` mediumtext NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` tinyint(4) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`),
  KEY `model` (`model`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_sessions`
--

CREATE TABLE IF NOT EXISTS `lee_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lee_sessions`
--

INSERT INTO `lee_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ec9dc589aded40ce9ddb9b67835c0384', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0', 1388729684, ''),
('f9c56256d106095df90c1676ac447468', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0', 1388733382, ''),
('5cad4d2dee57f8b59dbfce1acfcc402f', '101.224.29.178', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388729517, ''),
('c13d65a7cf6d08a2edf289d1f1ad1a3f', '101.224.29.178', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 1388744864, ''),
('5425f0c61c4afd2e125ed1cc1b6ea45f', '8.35.201.48', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36 AppEngine-G', 1388794126, 'a:6:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";s:9:"edit_lang";s:5:"zh_cn";}'),
('8a0ff8a9470e8e55f57116a87a55e9e1', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 1388794085, ''),
('0223e5b5c6540d493f61118e31b0ccb4', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 1388794084, ''),
('bf4b10f36f1a0ba4bd951a9833810ee8', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 1388794084, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('3ca690da0c8991cf5ec139b2c5ffb54d', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:26.0) Gecko/20100101 Firefox/26.0', 1388794077, ''),
('946630a6a231fa749a4346ab01dc040e', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388794048, ''),
('12ce8c691a89f838d91673354ef07202', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388794048, ''),
('2b52034fe693d6b2a466b0b6cc283618', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388794048, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('1325710004a465299f4e69d3821a5ce7', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388794041, ''),
('26aa8edf51b66117ac29f70a4823551d', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388794010, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('182cc640127ae7248beed52ef7efb7a6', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793985, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('5c994122c26222d77a7d2d26127219e0', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793969, ''),
('c1b1232c81f41be9143fd71fb946c8ef', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793961, ''),
('dae1a2a97657c87aaf5bc6275ba13ff3', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793953, ''),
('6bc1a3e077bb315507b0125b5e8d4e8d', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793950, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('dac0db0995f59897a74fb0a6f1a3e180', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793933, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('aae551120b472286d53b7ba14cf97fe0', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793912, ''),
('1f88cb619e079c9f999bf7c94d829ba9', '60.55.43.120', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388793919, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('45de13c498fabf08601f031139c07ad0', '116.231.180.107', 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko', 1388716494, ''),
('18b77e73c393b20bf9e482ba897d978e', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793905, ''),
('71e56611ba6498c6ff941c504696b4c1', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793904, ''),
('cd08c8825479d12686d646b6e89e3e3f', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793904, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('d74d0292db67542624f363605151358f', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793896, ''),
('c1ed408ccb36c93d86393d13ba74ce51', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388734429, 'a:6:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";s:9:"edit_lang";s:5:"zh_cn";}'),
('3bc7af06117f8ba36cefee57ae22396c', '123.129.195.189', 'Mozilla/4.0', 1388725989, ''),
('554c6ea3c61a44fdbc07bcd4b0512258', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0', 1388729452, ''),
('8055faa466e3fff75905dbf3d7953436', '23.94.43.231', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.21 (KHTML, like Gecko) rekonq/2.3.2 Safari/537.21', 1388719647, ''),
('64e791cfff3016ddcc1d2d588219ad0d', '101.224.29.178', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388718457, 'a:5:{s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";s:9:"edit_lang";s:5:"zh_cn";}'),
('38bc28a5440b8eb93d243318c2c4bd88', '78.112.144.236', 'Mozilla/5.0 (X11; U; FreeBSD amd64; en-US; rv:1.8.1.21) Gecko/20090424 SeaMonkey/1.1.16', 1388719833, ''),
('3d6fde7ed9e4a316ffefee931859a28c', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730233, ''),
('9efa651de55df9b130c65a071b4230d3', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730325, ''),
('4c848f73bc46a3993de6c37392098c54', '116.231.180.107', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET4.0C; .NET4.0E)', 1388716600, ''),
('72481784fa84f42896c14d2c02dc2231', '123.129.195.189', 'Mozilla/4.0', 1388716435, ''),
('ea86e10dceba33ee06c44a27cecade48', '116.231.180.107', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', 1388716480, ''),
('4a118829971f865f3c258e48f27342dc', '180.159.193.5', 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_4 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/11B554a QQ/4.5.0', 1388793770, 'a:6:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";s:9:"edit_lang";s:5:"zh_cn";}'),
('d34203e004ff3bc30b5acbc2eda4b87b', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793655, ''),
('3a9fc772e2332283dac77b0801b1db56', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793651, ''),
('5ab3b545a073b513b02dcc8977d32366', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793650, ''),
('f28d0c23fcb03f7ea3c43a1e5979deda', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793650, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('9d09d78203fd85da6145877a63950c57', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793637, ''),
('60f24700b6630bda79f49f11e8f457af', '124.160.169.17', 'Mozilla/4.0', 1388793631, ''),
('e39969e1e53055f84c257d02735010a5', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793594, ''),
('0c90b65e1a42c2de2df43aea19478024', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793594, ''),
('8c8ab66fff359ca719b0556b16a05b64', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793594, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('881c5418c6e199977fe20f1b9bdab9af', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793558, ''),
('d8416bdeb66e181d364468d06cf7e81d', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793558, ''),
('bf2b13c15286fc662393e70289642f7f', '124.160.169.17', 'Mozilla/4.0', 1388790032, ''),
('d900a94d50b11f2f9c066a995efc67ca', '60.55.43.120', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793443, ''),
('d7beb78701adbbe2f546f884caef0ff4', '124.160.169.17', 'Mozilla/4.0', 1388782885, ''),
('5d74f02a556c1c9a66b421062668fcf4', '124.160.169.17', 'Mozilla/4.0', 1388775635, ''),
('647b31210890e7f103f674ad2fd3de94', '124.160.169.17', 'Mozilla/4.0', 1388779274, ''),
('7714591f45bbce2f35f20623cd9db965', '124.160.169.17', 'Mozilla/4.0', 1388768487, ''),
('24afb43438afc538f6b54c5f4bcc15c4', '140.206.123.74', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.1 (KHTML, like Gecko) Maxthon/4.1.3.5000 Chrome/26.0.1410.43 Safari/537.1', 1388771220, ''),
('c5e57fb5fc2bd1a88b2f9b19c45f09c8', '123.129.195.189', 'Mozilla/4.0', 1388761235, ''),
('76c3c7d213485a7dfd2223fa1167a5bc', '124.160.169.17', 'Mozilla/4.0', 1388764847, ''),
('e5d6e9a46a021764c4e56d07f4ef2c59', '123.129.195.189', 'Mozilla/4.0', 1388750434, ''),
('9303f0aa5e3c236ee034cf02f68964a7', '123.129.195.189', 'Mozilla/4.0', 1388754087, ''),
('469c99cff7e3fcb1d1ba9825cb7da897', '60.55.43.210', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1388793557, 'a:5:{s:9:"user_data";s:0:"";s:3:"uid";s:1:"5";s:9:"usergroup";s:1:"6";s:7:"varname";s:12:"generaladmin";s:8:"username";s:3:"lux";}'),
('828833e93a63e7b1f98d00083c6dc6a0', '123.129.195.189', 'Mozilla/4.0', 1388712959, ''),
('79e06df4c582eb9fb8f46d278abd39c2', '116.231.180.107', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1388725892, ''),
('cc57dd03d440723fa6719ef724e95335', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388717891, ''),
('42427938196b9d25e3fdd28b4b653e9e', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388717891, ''),
('2b000197dbe59f5c47ac9f9ecad8be5b', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388717907, ''),
('69e7b6389b4a8102a9564e0e136bcdfa', '54.219.3.234', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Data Center; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.0450', 1388719099, ''),
('d21b0c5227c1243c47256b93f5b09975', '54.219.3.234', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Data Center; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.0450', 1388719296, ''),
('dcda9924f0c604ced896be1c069d099d', '54.219.3.234', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.2; Data Center; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.0450', 1388719338, ''),
('0cfef64c262beac4d5d83cb27472852e', '78.112.144.236', 'Mozilla/5.0 (X11; U; FreeBSD amd64; en-US; rv:1.8.1.20) Gecko/20090422 Firefox/2.0.0.20 Kazehakase/0.5.4', 1388719464, ''),
('e821dedac250b7b798affe191401e2e3', '78.112.144.236', 'Mozilla/5.0 (X11; U; FreeBSD amd64; en-US; rv:1.8.1.20) Gecko/20090422 Galeon/2.0.7 Firefox/2.0.0.20', 1388719468, ''),
('f0df7eacb85d6e8a0ce1b3a838890cf8', '23.94.43.231', 'Mozilla/5.0 (X11; Linux x86_64; rv:26.0) Gecko/20100101 Firefox/26.0 SeaMonkey/2.23', 1388719594, ''),
('028a83cc5b14407ed52b225cd0595fa7', '198.23.129.125', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:9.0.1) Gecko/20100101 Firefox/9.0.1', 1388719601, ''),
('475948fa86800eb98fab020c7f88d229', '198.23.129.125', 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.16) Gecko Kazehakase/0.5.8 Debian/0.5.8-4', 1388719602, ''),
('cb48942184ce9b738293e952ced05810', '198.23.155.208', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:12.0) Gecko/20120429 Firefox/12.0 SeaMonkey/2.9.1', 1388719602, ''),
('39315d6f477acfce13912f141595bdaa', '198.23.155.208', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:11.0) Gecko/20120312 Firefox/11.0 SeaMonkey/2.8', 1388719603, ''),
('79a1b32e720a77b04ee9185cd03f3bff', '198.23.139.251', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.34 (KHTML, like Gecko) rekonq/1.1 Safari/534.34', 1388719604, ''),
('acea9b6a5b20b7945042c10d4cd29a25', '23.94.43.231', 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; c) AppleWebKit/537+ (KHTML, like Gecko) Version/5.0 Safari/537.6+ Midori/0.4', 1388719605, ''),
('7ae2be891450a6bc08daaed25db95f77', '198.23.155.208', 'Mozilla/5.0 (X11; Linux x86_64; rv:24.0) Gecko/20100101 Firefox/24.0', 1388719605, ''),
('4ad008020bb9ef51ee928287994566d7', '198.23.155.208', 'Mozilla/5.0 (X11; Linux x86_64; rv:23.0) Gecko/20100101 Firefox/23.0', 1388719605, ''),
('bc528447eecc58be6947ac59cf8e2a68', '198.23.155.208', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:10.0.2) Gecko/20120216 Firefox/10.0.2 SeaMonkey/2.7.2', 1388719606, ''),
('9ec1d8109fb829bc73b23738b0482952', '198.23.139.251', 'Mozilla/5.0 (X11; Linux i686) KHTML/4.9.5 (like Gecko) Konqueror/4.9', 1388719606, ''),
('9d80a4ea46f69f5b09fd1ee3136acf2a', '77.183.3.216', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/31.0.1650.63 Chrome/31.0.1650.63 ', 1388719606, ''),
('a71f734d8948dd8651f907a3c0fbff3b', '198.23.129.126', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:10.0.2) Gecko/20100101 Firefox/10.0.2', 1388719607, ''),
('c84ff7540e9e3958b981622293b2199e', '198.23.139.251', 'Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0', 1388719607, ''),
('42ef1bbc2a9838c07f9330940c8e9858', '198.23.129.126', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:8.0.1) Gecko/20100101 Firefox/8.0.1', 1388719608, ''),
('ba4176e0af6c86f49203a881f11951af', '198.23.129.126', 'Mozilla/5.0 (X11; Linux x86_64) KHTML/4.8.4 (like Gecko) Konqueror/4.8', 1388719608, ''),
('1c2bd314c3f09fb7d1dddfe8f88c2e7e', '198.23.155.208', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:22.0) Gecko/20100101 Firefox/22.0', 1388719608, ''),
('7f93083701e435906529172e55743779', '198.23.155.208', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:20.0) Gecko/20130214 Firefox/20.0', 1388719608, ''),
('263290adec21cfb7f269ba3138bfa2ca', '198.23.129.126', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:7.0.1) Gecko/20100101 Firefox/7.0.1', 1388719609, ''),
('83b796bc73bc7901e349076df90fc7e9', '198.23.139.251', 'Mozilla/5.0 (Linux i686) AppleWebKit/535.22+ (KHTML, like Gecko) WebKitGTK+/1.8.0 luakit', 1388719610, ''),
('c591c78b8e572e4ae39726d85cf3408d', '23.94.43.231', 'Mozilla/5.0 (X11; Linux x86_64; rv:27.0) Gecko/20100101 Firefox/27.0', 1388719611, ''),
('8e7356a05f483cc407710978334ec0ac', '198.23.139.251', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.47 Safari/537.36', 1388719611, ''),
('6a5df6af0fa9203d191e47365cfd7037', '23.94.43.6', 'Mozilla/5.0 (X11; Linux x86_64; rv:26.0) Gecko/20100101 Firefox/26.0', 1388719614, ''),
('7d9f3107c9fd1c085d310d2c10e157f4', '198.23.129.125', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1', 1388719615, ''),
('45c3112d9370adedeb68fd1f23f54847', '198.23.129.125', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:6.0.1) Gecko/20100101 Firefox/6.0.1', 1388719619, ''),
('d441b8bbf47b3ca0e15b0ff807f2a588', '23.94.43.6', 'Mozilla/5.0 (X11; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0', 1388719619, ''),
('ae9e8bf91f4f51463f904a7cc0f3349c', '198.23.139.251', 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/534.34 (KHTML, like Gecko) Arora/0.11.0 Safari/534.34', 1388719622, ''),
('bd1b7d6ada69c71ad21f766d853527d3', '78.112.144.236', 'Mozilla/5.0 (X11; U; FreeBSD amd64; en; rv:1.8.1.20) Gecko/20090422 Epiphany/2.22 Firefox/2.0.0.20', 1388719625, ''),
('057c150fd8c2e42827bd1000eea2bc68', '198.23.129.125', 'Mozilla/5.0 (X11; U; Linux i686 (x86_64); de; rv:1.9.2.27) Gecko/20120216 Firefox/3.6.27', 1388719627, ''),
('2c9b9386f286da6949525919fc14b149', '198.23.155.208', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.37 Safari/537.36', 1388719627, ''),
('972913c8e4243a882304f0af66e5748e', '198.23.129.126', 'Mozilla/5.0 (X11; Linux i686 on x86_64; rv:5.0.1) Gecko/20100101 Firefox/5.0.1', 1388719631, ''),
('a786f6e14d95fe85af2460428d00965f', '23.94.43.231', 'Mozilla/5.0 (X11; Linux x86_64) KHTML/4.11.3 (like Gecko) Konqueror/4.11', 1388719936, ''),
('a2640a97f14a8847b77711fda62bb265', '89.156.70.145', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.34 (KHTML, like Gecko) rekonq Safari/534.34', 1388719972, ''),
('55bdc07940d9a568eeb1b172911c50f1', '75.127.3.82', 'Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.10.289 Version/12.02', 1388720004, ''),
('8f47b3b052335c340665f73d0a758638', '75.127.3.82', 'Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.10.229 Version/11.64', 1388720006, ''),
('fe3805486cebe8eafe163248882fc99f', '75.127.3.82', 'Mozilla/5.0 (X11; Linux x86_64; rv:10.0.12) Gecko/20130119 Firefox/10.0.11esrpre Iceape/2.7.12', 1388720011, ''),
('25a0a40a8a482883882f371f56a126ae', '75.127.3.82', 'Mozilla/5.0 (X11; Linux x86_64; rv:17.0) Gecko/20131030 Firefox/17.0 Iceweasel/17.0.10', 1388720011, ''),
('bdfb603d3106b4d33d77100418f4dae1', '75.127.3.82', 'Mozilla/5.0 (X11; Linux x86_64) KHTML/4.8.4 (like Gecko) Konqueror/4.8', 1388720012, ''),
('4b939cd1207492e3826855a5a1250cf5', '75.127.3.82', 'Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.6.30 Version/10.60', 1388720013, ''),
('7811d7519bc7e7c7a253c3925edb2bfb', '75.127.3.82', 'Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.5.24 Version/10.53', 1388720014, ''),
('85e94b78693392f0d1001e287313d819', '63.143.46.130', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.71 (KHTML, like Gecko) Version/6.1 Safari/537.71', 1388720165, ''),
('3ce15ff0e8b359600d9e93e7d89cebce', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388720450, ''),
('1bf8adcdd3504c70e8c64a5375088c9b', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388720450, ''),
('e2df8416c890f7eea3dc027213eb2303', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388720456, ''),
('1746a71290247ae420bf287e368b4fe8', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388720460, ''),
('afae9dbabd1894884817ee10bf6e8e3c', '101.224.29.178', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0)', 1388720461, ''),
('6482dd8f4b1111a29321efd3b409314d', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388721380, ''),
('0c4021994b66a9f10fe972c019fe3b10', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388721380, ''),
('aad0331ea59fc3b0b59d02627651c8bc', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388721397, ''),
('ec2aa8b1ba30fb399b06cbc60405f9ae', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388721401, ''),
('3cd55036fde475767e1d33a3f3d44a9c', '220.181.132.215', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR ', 1388722258, ''),
('c047468a871d694ab3a2d554a16c843b', '220.181.132.16', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.11 (KHTML, like Gecko) DumpRenderTree/0.0.0.0 Safari/536.11', 1388722299, ''),
('142ec9eed055499166c099e73b8a06e5', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388723162, ''),
('738678d7adbe37584e50b9070a49d0b1', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388723162, ''),
('2cdb26e603577c72b8bc6122a3ae3615', '58.32.203.37', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .N', 1388723178, ''),
('501058eb39f37dcabb64f73dcaa1cf3a', '101.224.29.178', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36', 1388750251, ''),
('288e535e4ab2fcde361a0a092889f2f1', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730326, ''),
('300c94ba393e4a368c1bd4f0e3c65380', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730342, ''),
('875e0fcca541f82ddca56fc2abd495a4', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730357, ''),
('78b48bf26cb44005142340e77a561d02', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730358, ''),
('a73f0fbac248970ceaade6f51f7dc2cf', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388730361, ''),
('a345f525dbfffd247cfd9f8e0644905c', '116.236.171.164', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.94 Safari/537.36', 1388730433, ''),
('d2b7d8a91993ca2075f7e6716bf095c7', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731305, ''),
('17ae045e790494415e07b7d66e844e59', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731305, ''),
('37ea6e34fd54a50dd59f34abd408db8b', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731321, ''),
('417820dbdf41d8b45218d57003501f80', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731342, ''),
('169cab3e9d042c0565545f3ffe252dd8', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731342, ''),
('a4207dae46be8302a751f73eb561b56b', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731358, ''),
('460a278a6f7cff6ea5a0fe368426d039', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731610, ''),
('7d93487cc350cf4c059dd4e08a19f77c', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731611, ''),
('b13efcdde537d8a69186564dcb200359', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731629, ''),
('c6d6d7dcdb4e4ff869afd7735d148921', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731630, ''),
('293b87dd8095c751e96b4db77ab6d241', '116.236.171.164', 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; Touch)', 1388731646, ''),
('2a852c6cec5b27e50199e0c023ef78cd', '123.129.195.189', 'Mozilla/4.0', 1388732433, ''),
('51dbe043e7809d5dd94c9764876994a0', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0', 1388733721, ''),
('e496d18acc3cc18f17b017eeaf88ca7e', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11', 1388734298, ''),
('bd527ac51b118920f548ba788bd8f066', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11', 1388734516, ''),
('55d4f18b6eabf1c5fe4e79d95dd90766', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11', 1388734516, ''),
('1f5ddfd7db266559857b14e9d7639963', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11', 1388734532, ''),
('50d9fcd1ca72cdb8295a728c6af5a681', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) AppleWebKit/537.73.11 (KHTML, like Gecko) Version/6.1.1 Safari/537.73.11', 1388734560, ''),
('e98ce6bdfe30998db530b4e510871f69', '123.129.195.189', 'Mozilla/4.0', 1388736036, ''),
('01da6a16b70d7bac1ea7198fda9f8077', '116.236.171.164', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:26.0) Gecko/20100101 Firefox/26.0', 1388759384, ''),
('e881a4a6c7bd8b1f161fbee52ba6e3ae', '123.129.195.189', 'Mozilla/4.0', 1388739680, ''),
('2ca13682009ad2a185ab28e16dbb785b', '123.129.195.189', 'Mozilla/4.0', 1388743290, '');

-- --------------------------------------------------------

--
-- Table structure for table `lee_share_night`
--

CREATE TABLE IF NOT EXISTS `lee_share_night` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `mid` bigint(15) NOT NULL,
  `createtime` int(10) NOT NULL,
  `user_thumb` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lee_share_record`
--

CREATE TABLE IF NOT EXISTS `lee_share_record` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT '',
  `content` text,
  `mid` bigint(20) DEFAULT NULL,
  `province` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `lee_share_record`
--

INSERT INTO `lee_share_record` (`id`, `user_id`, `nickname`, `content`, `mid`, `province`, `city`, `addtime`) VALUES
(1, 2147483647, 'LUX力士', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661247620843359, 1, 1, 1388392922),
(2, 2147483647, 'LUX力士', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661252784472513, 1, 1, 1388394152),
(3, 2147483647, 'Cleo_Tse', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661269909684743, 2, 2, 1388398236),
(4, 2147483647, '乜都唔會嘅D', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661271243419213, 1, NULL, 1388398553),
(5, 2147483647, '乜都唔會嘅D', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661366974126261, 1, NULL, 1388421377),
(6, 2147483647, 'LUX力士', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661529947884637, 1, 1, 1388460232),
(7, 2147483647, '乜都唔會嘅D', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661546146634457, 1, NULL, 1388464094),
(8, 2147483647, '鸡蛋炒冷饭', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661614874531932, 1, 3, 1388480480),
(9, 2147483647, 'LUX力士', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661624164558237, 1, 1, 1388482695),
(10, 2147483647, '爱吃鸡的anseer', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3661698324098991, 1, 3, 1388500375),
(11, 2147483647, 'LUX力士', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3662311363816665, 1, 1, 1388646533),
(12, 2147483647, '爱情罗蔓蒂', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3662646769694238, 2, 4, 1388726498),
(13, 2147483647, 'ageof30', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3662663509183208, 1, 5, 1388730490),
(14, 2147483647, 'ageof30', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3662664637183613, 1, 5, 1388730759),
(15, 2147483647, 'ageof30', '#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。', 3662676603460984, 1, 5, 1388733612);

-- --------------------------------------------------------

--
-- Table structure for table `lee_share_story`
--

CREATE TABLE IF NOT EXISTS `lee_share_story` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(50) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `mid` bigint(15) DEFAULT NULL,
  `user_thumb` varchar(200) NOT NULL DEFAULT '',
  `share_thumb` varchar(200) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lee_share_story`
--

INSERT INTO `lee_share_story` (`id`, `nickname`, `content`, `mid`, `user_thumb`, `share_thumb`, `createtime`) VALUES
(1, '乜都唔會嘅D', '#燃情之夜#和心爱的人奢享燃情享受', 3661564811006391, 'http://tp3.sinaimg.cn/1939073690/50/40036441116/0', 'http://ww1.sinaimg.cn/thumbnail/7393ea9ajw1ec2u0rdeiqj20b40goab0.jpg', 1388468544),
(2, '鸡蛋炒冷饭', '#燃情之夜#你好', 3661604254373610, 'http://tp4.sinaimg.cn/1698398187/50/5679054177/0', 'http://ww2.sinaimg.cn/thumbnail/653b7febjw1ec2yju6w90j20sg0ia0xj.jpg', 1388477948),
(3, '乜都唔會嘅D', '#燃情之夜#天不老，情难绝。心似双丝网，中有千千结', 3661612227984099, 'http://tp3.sinaimg.cn/1939073690/50/40036441116/0', 'http://ww4.sinaimg.cn/thumbnail/7393ea9ajw1ec2zgs9jonj20e60hvjs4.jpg', 1388479849),
(4, '老汪家--松花蛋個保個流油', '#燃情之夜#燃情之夜', 3661614664611123, 'http://tp4.sinaimg.cn/1782829571/50/40032626445/0', 'http://ww2.sinaimg.cn/thumbnail/6a43d203jw1ec2zqvr9o8j20pk0j6wi9.jpg', 1388480430);

-- --------------------------------------------------------

--
-- Table structure for table `lee_slide`
--

CREATE TABLE IF NOT EXISTS `lee_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` mediumint(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `remark` mediumtext NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(3) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL,
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `category` (`type`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lee_slide`
--

INSERT INTO `lee_slide` (`id`, `type`, `title`, `description`, `thumb`, `url`, `remark`, `createtime`, `updatetime`, `listorder`, `status`, `lang`) VALUES
(1, 2, 'X6CMS 2.2 正式发布！', 'X6CMS 2.2 正式发布！', 'data/attachment/image/20130114/20130114063604_52113.jpg', 'http://www.x6cms.com', '', 0, 1358671121, 1, 1, 'zh_cn'),
(2, 2, 'X6CMS 2.2 正式发布！', 'X6CMS 2.2 正式发布！', 'data/attachment/image/20130114/20130114063555_51759.jpg', 'http://www.x6cms.com', '', 0, 1358666593, 2, 1, 'zh_cn'),
(3, 2, 'X6CMS 2.2 正式发布！', 'X6CMS 2.2 正式发布！', 'data/attachment/image/20130114/20130114063546_93581.jpg', 'http://www.x6cms.com', '', 0, 1358666596, 3, 1, 'zh_cn'),
(4, 2, 'X6CMS 2.2 正式发布！', 'X6CMS 2.2 正式发布！', 'data/attachment/image/20130114/20130114063533_32175.jpg', 'http://www.x6cms.com', '', 0, 1358666600, 4, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_tags`
--

CREATE TABLE IF NOT EXISTS `lee_tags` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `listorder` mediumint(9) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `lee_tags`
--

INSERT INTO `lee_tags` (`id`, `title`, `url`, `listorder`, `status`, `lang`) VALUES
(4, '西安网站建设', '%E8%A5%BF%E5%AE%89%E7%BD%91%E7%AB%99%E5%BB%BA%E8%AE%BE', 999, 1, 'zh_cn'),
(5, '西安网络推广', '%E8%A5%BF%E5%AE%89%E7%BD%91%E7%BB%9C%E6%8E%A8%E5%B9%BF', 999, 1, 'zh_cn'),
(17, 'X6CMS', 'X6CMS', 99, 1, 'en'),
(29, '优惠套餐', '%E4%BC%98%E6%83%A0%E5%A5%97%E9%A4%90', 99, 1, 'zh_cn'),
(30, '系统安装', '%E7%B3%BB%E7%BB%9F%E5%AE%89%E8%A3%85', 0, 1, 'zh_cn'),
(31, 'seo', 'seo', 0, 1, 'zh_cn'),
(32, '系统使用', '%E7%B3%BB%E7%BB%9F%E4%BD%BF%E7%94%A8', 0, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_tpltags`
--

CREATE TABLE IF NOT EXISTS `lee_tpltags` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL,
  `value` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `listorder` mediumint(9) unsigned NOT NULL DEFAULT '99',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `lee_tpltags`
--

INSERT INTO `lee_tpltags` (`id`, `title`, `type`, `value`, `description`, `listorder`) VALUES
(1, '基本配置标签', 'system', '<?=$config[''site_name''];?>', '站点名称。其中site_name为参数，默认参数有：site_name（站点名称）、site_title（站点标题）、site_keywords（站点关键词）、site_description（站点描述）、seo_title（当前页SEO标题）、seo_keywords（当前页SEO关键词）、seo_description（当前页SEO描述）、site_logo（站点logo）、site_template（站点模板文件夹）、site_templateurl（站点模板文件夹路径），这里的参数还包括您自定义的配置，在后台->系统管理->站点设置中查看', 99),
(2, '搜索标签', 'system', '<?=x6cms_search(''article'',true);?>', '其中有两个参数：参数1：article(默认搜索模型)\r\n参数2:true或者false（是否有下拉选择模型搜索）\r\n其中参数1的模型，后台->系统管理->模型管理中的模型表名，注意，只能填写允许搜索的模型', 99),
(3, '文件路径标签', 'system', '<?=x6cms_path(''logo.png'');?>', '得到文件的完整路径。其中 logo.png即为参数，相对于系统根目录。', 99),
(4, '网址URL标签', 'system', '<?=x6cms_url(''news'');?>', '得到页面的完整路径，其中 news 为参数，会生成 http://www.anli.com/demo/index.php?/news', 99),
(5, '语言标签', 'system', '<?php $tmpData = x6cms_lang();?>\r\n<?php foreach($tmpData as $item):?>\r\n<li>\r\n <a href="<?=$item[''url'']?>">\r\n  <img src="<?=$item[''thumb'']?>" alt="<?=$item[''title'']?>"/>\r\n </a>\r\n</li>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_lang();?>得到语言数组\r\n<?php foreach($tmpData as $item):?>\r\n循环数据：\r\n<?=$item[''title''];?>语言名称\r\n<?=$item[''thumb''];?>语言图标\r\n<?=$item[''url''];?>该语言首页地址\r\n<?php endforeach;?>', 99),
(6, '网站栏目', 'system', '<?=x6cms_category(0);?>', '其中0为参数，控制栏目显示多少级（0或不填即为显示所有栏目，1只显示顶级栏目2显示两级，以此类推）', 99),
(7, '加载模板', 'system', '<?php $this->load->view($config[''site_template''].''/head'');?>', 'head 为参数，意思是加载head.php（头部）文件，如果为foot即，加载foot.php（底部）文件', 99),
(8, '幻灯标签', 'model', '<?php $tmpData = x6cms_slide(2);?>\r\n<?php foreach($tmpData as $item):?>\r\n<a href="<?=$item[''url'']?>" target="_blank">\r\n<img src="<?=$item[''thumb'']?>" alt="<?=$item[''title'']?>" width="640" height="250" />\r\n</a>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_slide(2);?>\r\n取得后台系统管理->类别管理中幻灯分类id为2的所有幻灯数据\r\n<?=$item[''url'']?> 链接\r\n<?=$item[''thumb'']?> 图片\r\n<?=$item[''title'']?> 标题\r\n<?=$item[''description'']?> 描述', 99),
(9, '面包屑导航', 'seo', '<?=x6cms_location($category,'' > '');?>', '返回当前页面路径，用于除首页、RSS聚合、分类聚合、网站地图之外的其他页面。\r\n两个参数：$category，默认，一般不需要修改； '' > ''两个链接直接的连接符号。\r\n例：文章列表页会生成：首页 > 新闻中心 > 小六动态\r\n', 99),
(10, '导航标签', 'model', '<?php $tmpData = x6cms_navigation(4);?>\r\n<?php foreach($tmpData as $item):?>\r\n<li><a href="<?=$item[''url'']?>" <?=$item[''color'']?>><?=$item[''title'']?></a></li>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_navigation(4);?>\r\n取回导航分类ID为4的所有链接导航\r\n<?=$item[''url'']?>导航链接\r\n<?=$item[''color'']?>导航颜色\r\n<?=$item[''title'']?>导航文字\r\n<?=$item[''thumb'']?>导航图片', 99),
(11, '内容数据标签', 'content', '<?php $tmpData = x6cms_modellist(''article'',0,''default'',7,0);?>\r\n<?php foreach($tmpData as $item):?>\r\n<li>\r\n[<a href="<?=$item[''categoryurl'']?>"><?=$item[''categoryname'']?></a>]\r\n<a href="<?=$item[''url'']?>" style="<?=$item[''color'']?><?=$item[''isbold'']?>"><?=$item[''title'']?></a>\r\n</li>\r\n<?php endforeach;?>\r\n<?php unset($tempData,$item);?>', '<?php $tmpData = x6cms_modellist(''article'',0,''default'',7,0);?>\r\n三个参数：1、article(模型，还包括product、ask、hr、down)。2、0（分类栏目ID），如果为0即该模型下所有栏目。3：default（默认排序），puttime(发布时间)、hits(点击量)、id。4：7（显示条数）5：0（包括所有推荐位的数据）或者1（不包含所有推荐位的数据）\r\n<?=$item[''categoryurl'']?>该条数据的栏目链接\r\n<?=$item[''categoryname'']?>该条数据的栏目名称\r\n<?=$item[''url'']?>该条数据的链接\r\n<?=$item[''title'']?>该条数据的标题\r\n<?=$item[''color'']?>该条数据的显示颜色\r\n<?=$item[''isbold'']?>加粗\r\n<?=$item[''thumb'']?>缩略图\r\n<?=$item[''puttime'']?>发布时间\r\n<?=$item[''tagsstr'']?>标签\r\n<?=$item[''tagsstr'']?>标签\r\n<?=$item[''oldur'']?>下载链接（只有下载模块，oldurl，直接显示链接）\r\n<?=$item[''downurl'']?>下载链接（只有下载模块，downurl，经过转义的链接）\r\n<?=$item[''categorymodel'']?>该条数据所属模型\r\n<?=$item[''categoryid'']?>该条数据栏目的id', 99),
(12, '推荐位标签', 'content', '<?php $tmpData = x6cms_recommend(1,''default'',7);?>\r\n<?php foreach($tmpData as $item):?>\r\n<li>\r\n[<a href="<?=$item[''categoryurl'']?>"><?=$item[''categoryname'']?></a>]\r\n<a href="<?=$item[''url'']?>" style="<?=$item[''color'']?><?=$item[''isbold'']?>"><?=$item[''title'']?></a>\r\n</li>\r\n<?php endforeach;?>\r\n<?php unset($tempData,$item);?>', '<?php $tmpData = x6cms_recommend(1,''default'',7);?>\r\n三个参数：1、1（推荐位ID）。2、default（默认排序），puttime(发布时间)、hits(点击量)、id。3：7（显示条数）\r\n<?=$item[''categoryurl'']?>该条数据的栏目链接\r\n<?=$item[''categoryname'']?>该条数据的栏目名称\r\n<?=$item[''url'']?>该条数据的链接\r\n<?=$item[''title'']?>该条数据的标题\r\n<?=$item[''color'']?>该条数据的显示颜色\r\n<?=$item[''isbold'']?>加粗\r\n<?=$item[''thumb'']?>缩略图\r\n<?=$item[''puttime'']?>发布时间\r\n<?=$item[''tagsstr'']?>标签\r\n<?=$item[''tagsstr'']?>标签\r\n<?=$item[''oldur'']?>下载链接（只有下载模块，oldurl，直接显示链接）\r\n<?=$item[''downurl'']?>下载链接（只有下载模块，downurl，经过转义的链接）\r\n<?=$item[''categorymodel'']?>该条数据所属模型\r\n<?=$item[''categoryid'']?>该条数据栏目的id', 99),
(13, '碎片标签', 'model', '<?=x6cms_fragment(''index_cpjs'')?>', '参数：index_cpjs（碎片变量名称）\r\n显示：该变量名称的值', 99),
(14, '聚合标签', 'seo', '<?php $tmpData = x6cms_tags(5);?>\r\n<?php foreach($tmpData as $item):?>\r\n<a href="<?=$item[''url'']?>" class="font<?=rand(1,10)?>"><?=$item[''title'']?></a>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_tags(5);?>\r\n取得聚合标签的数据\r\n<?=$item[''url'']?>标签链接\r\n<?=$item[''title'']?>标签文字', 99),
(15, '聚合标签数据', 'seo', '<?php $tmpData = x6cms_tagsData(''article'',$tags,5);?>\r\n<?php foreach($tmpData as $item):?>\r\n<li>[<a href="<?=$item[''categoryurl'']?>"><?=$item[''categoryname'']?></a>] \r\n<a href="<?=$item[''url'']?>" target="_blank"><?=$item[''title'']?></a>\r\n<span><?=$item[''puttime'']?></span></li>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_tagsData(''article'',$tags,5);?>\r\n三个参数：1、article（文章模型数据）2、$tags(标签文字，在标签页面，直接使用$tags,如果在其他页面使用，直接输入标签文字)。3、5（显示数据条数）\r\n数据显示，与x6cms_modellist的一样', 99),
(16, '友情链接', 'model', '<?php $tmpData = x6cms_link();?>\r\n<?php foreach($tmpData as $item):?>\r\n<a href="<?=$item[''url'']?>" target="_blank" title="<?=$item[''description'']?>"><?=$item[''title'']?></a>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '<?php $tmpData = x6cms_link(0);?>\r\n取得友情链接数据，参数：0（友情链接分类ID，如果为0或空即显示所有链接）\r\n<?=$item[''url'']?>链接\r\n<?=$item[''description'']?>链接描述\r\n<?=$item[''title'']?>链接文字', 99),
(17, '客服标签', 'model', '<?php $tmpData = x6cms_online();?>\r\n<?php foreach($tmpData as $item):?>\r\n<?=$item[''type'']?>\r\n<?=$item[''title'']?>\r\n<?=$item[''description'']?>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', 'type:客服类型（qq：qq客服、wangwang：旺旺客服、email：邮箱客服、code：纯代码）\r\ntitle：客服文字\r\ndescription：客服号码或者代码', 99),
(18, '栏目左侧分类', 'content', '<?php $tmpData = x6cms_thiscategory($category);?>\r\n<?php foreach ($tmpData as $item): ?>\r\n<li class="level<?=$item[''level'']?><?php if($item[''id'']==$category[''id'']):?> active<?php endif;?>">\r\n<a href="<?=$item[''url'']?>"><?=$item[''name'']?></a>\r\n</li>\r\n<?php endforeach; ?>', '只应用于栏目列表页和详情页', 99),
(19, '栏目标签', 'seo', '<?php $tmpData = x6cms_allcategory();?>\r\n<?php foreach ($tmpData as $item): ?>\r\n<li class="level<?=$item[''level'']?>">\r\n<a href="<?=$item[''url'']?>"><?=$item[''name'']?></a>\r\n</li>\r\n<?php endforeach;?>\r\n<?php unset($tmpData,$item);?>', '用于站点地图和rss，展示网站所有栏目的链接', 99),
(20, '内容相关标签', 'content', '<?php $tmpData = x6cms_related($detail);?>\r\n<?php foreach ($tmpData as $item): ?>\r\n<li><a href="<?=$item[''url'']?>"><?=$item[''title'']?></a></li>\r\n<?php endforeach; ?>\r\n<?php unset($tmpData,$item);?>', '用于各栏目详情页，展示当前文章（产品等）相关的信息', 99);

-- --------------------------------------------------------

--
-- Table structure for table `lee_type`
--

CREATE TABLE IF NOT EXISTS `lee_type` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lee_type`
--

INSERT INTO `lee_type` (`id`, `title`, `class`, `remark`, `thumb`, `listorder`, `status`, `lang`) VALUES
(1, '默认链接', 'link', '', '', 99, 1, 'zh_cn'),
(2, '首页幻灯', 'slide', '', '', 99, 1, 'zh_cn'),
(3, 'Home', 'slide', '', '', 99, 1, 'en'),
(4, '顶部导航', 'navigation', '', '', 99, 1, 'zh_cn');

-- --------------------------------------------------------

--
-- Table structure for table `lee_user`
--

CREATE TABLE IF NOT EXISTS `lee_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `usergroup` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `salt` char(6) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `tel` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `regip` char(15) NOT NULL,
  `lastip` char(15) NOT NULL,
  `logincount` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `usergroup` (`usergroup`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lee_user`
--

INSERT INTO `lee_user` (`id`, `usergroup`, `username`, `password`, `salt`, `email`, `realname`, `sex`, `tel`, `mobile`, `fax`, `address`, `createtime`, `updatetime`, `lasttime`, `regip`, `lastip`, `logincount`, `status`) VALUES
(1, 1, 'admin', '2cdade01b71a47ec21a6fcb8b71ef21a', '4jA89I', 'admin@admin.com', 'admin', 1, '', '', '', '', 1335922827, 1386226489, 1387250095, '127.0.0.1', '::1', 310, 1),
(5, 6, 'lux', 'addecb786d1facf4bba36e2e81fc0220', 'Fc6PuU', 'lux@lux.com', '力士', 0, '', '', '', '', 1361287120, 1386302635, 1388794126, '127.0.0.1', '127.0.0.1', 46, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lee_usergroup`
--

CREATE TABLE IF NOT EXISTS `lee_usergroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `purview` text NOT NULL,
  `isupdate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `lee_usergroup`
--

INSERT INTO `lee_usergroup` (`id`, `varname`, `listorder`, `purview`, `isupdate`, `status`) VALUES
(1, 'superadmin', 1, 'a:4:{i:0;a:37:{i:0;s:2:"32";i:1;s:2:"33";i:2;s:2:"23";i:3;s:2:"21";i:4;s:2:"15";i:5;s:1:"2";i:6;s:2:"35";i:7;s:2:"28";i:8;s:1:"3";i:9;s:1:"5";i:10;s:2:"11";i:11;s:1:"9";i:12;s:2:"34";i:13;s:1:"4";i:14;s:2:"22";i:15;s:1:"7";i:16;s:2:"25";i:17;s:2:"30";i:18;s:2:"14";i:19;s:2:"29";i:20;s:1:"6";i:21;s:2:"38";i:22;s:2:"43";i:23;s:2:"39";i:24;s:2:"36";i:25;s:1:"1";i:26;s:2:"20";i:27;s:2:"24";i:28;s:2:"19";i:29;s:2:"54";i:30;s:2:"41";i:31;s:2:"53";i:32;s:2:"51";i:33;s:2:"52";i:34;s:2:"40";i:35;s:2:"42";i:36;s:2:"37";}i:1;a:37:{s:8:"personal";a:3:{s:2:"id";s:2:"32";s:5:"class";s:8:"personal";s:6:"method";b:0;}s:10:"adminindex";a:3:{s:2:"id";s:2:"33";s:5:"class";s:10:"adminindex";s:6:"method";b:0;}s:4:"tags";a:3:{s:2:"id";s:2:"23";s:5:"class";s:4:"tags";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:8:"category";a:3:{s:2:"id";s:2:"21";s:5:"class";s:8:"category";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:5:"slide";a:3:{s:2:"id";s:2:"15";s:5:"class";s:5:"slide";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:7:"purview";a:3:{s:2:"id";s:1:"2";s:5:"class";s:7:"purview";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:7:"propass";a:3:{s:2:"id";s:2:"35";s:5:"class";s:7:"propass";s:6:"method";a:2:{i:0;s:2:"on";i:1;s:4:"save";}}s:8:"keywords";a:3:{s:2:"id";s:2:"28";s:5:"class";s:8:"keywords";s:6:"method";a:4:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";}}s:9:"usergroup";a:3:{s:2:"id";s:1:"3";s:5:"class";s:9:"usergroup";s:6:"method";a:6:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";i:5;s:5:"grant";}}s:7:"content";a:3:{s:2:"id";s:1:"5";s:5:"class";s:7:"content";s:6:"method";b:0;}s:7:"article";a:3:{s:2:"id";s:2:"11";s:5:"class";s:7:"article";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:4:"link";a:3:{s:2:"id";s:1:"9";s:5:"class";s:4:"link";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:7:"profile";a:3:{s:2:"id";s:2:"34";s:5:"class";s:7:"profile";s:6:"method";a:2:{i:0;s:2:"on";i:1;s:4:"save";}}s:4:"user";a:3:{s:2:"id";s:1:"4";s:5:"class";s:4:"user";s:6:"method";a:4:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";}}s:10:"navigation";a:3:{s:2:"id";s:2:"22";s:5:"class";s:10:"navigation";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:3:"seo";a:3:{s:2:"id";s:1:"7";s:5:"class";s:3:"seo";s:6:"method";b:0;}s:7:"product";a:3:{s:2:"id";s:2:"25";s:5:"class";s:7:"product";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:8:"htaccess";a:3:{s:2:"id";s:2:"30";s:5:"class";s:8:"htaccess";s:6:"method";a:3:{i:0;s:2:"on";i:1;s:4:"save";i:2;s:7:"restore";}}s:3:"ask";a:3:{s:2:"id";s:2:"14";s:5:"class";s:3:"ask";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:6:"robots";a:3:{s:2:"id";s:2:"29";s:5:"class";s:6:"robots";s:6:"method";a:3:{i:0;s:2:"on";i:1;s:4:"save";i:2;s:7:"restore";}}s:6:"module";a:3:{s:2:"id";s:1:"6";s:5:"class";s:6:"module";s:6:"method";b:0;}s:6:"online";a:3:{s:2:"id";s:2:"38";s:5:"class";s:6:"online";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:7:"sitemap";a:3:{s:2:"id";s:2:"43";s:5:"class";s:7:"sitemap";s:6:"method";a:4:{i:0;s:2:"on";i:1;s:8:"generate";i:2;s:8:"download";i:3;s:3:"del";}}s:4:"down";a:3:{s:2:"id";s:2:"39";s:5:"class";s:4:"down";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:8:"fragment";a:3:{s:2:"id";s:2:"36";s:5:"class";s:8:"fragment";s:6:"method";a:4:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";}}s:6:"system";a:3:{s:2:"id";s:1:"1";s:5:"class";s:6:"system";s:6:"method";b:0;}s:4:"type";a:3:{s:2:"id";s:2:"20";s:5:"class";s:4:"type";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:2:"hr";a:3:{s:2:"id";s:2:"24";s:5:"class";s:2:"hr";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:6:"config";a:3:{s:2:"id";s:2:"19";s:5:"class";s:6:"config";s:6:"method";a:7:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"base";i:3;s:4:"lang";i:4;s:4:"mail";i:5;s:4:"attr";i:6;s:3:"del";}}s:7:"tpltags";a:3:{s:2:"id";s:2:"54";s:5:"class";s:7:"tpltags";s:6:"method";b:0;}s:9:"guestbook";a:3:{s:2:"id";s:2:"41";s:5:"class";s:9:"guestbook";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:9:"recommend";a:3:{s:2:"id";s:2:"53";s:5:"class";s:9:"recommend";s:6:"method";a:4:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";}}s:4:"lang";a:3:{s:2:"id";s:2:"51";s:5:"class";s:4:"lang";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:5:"model";a:3:{s:2:"id";s:2:"52";s:5:"class";s:5:"model";s:6:"method";a:5:{i:0;s:2:"on";i:1;s:3:"add";i:2;s:4:"edit";i:3;s:3:"del";i:4;s:5:"order";}}s:8:"database";a:3:{s:2:"id";s:2:"40";s:5:"class";s:8:"database";s:6:"method";a:6:{i:0;s:2:"on";i:1;s:6:"backup";i:2;s:8:"download";i:3;s:7:"upgrade";i:4;s:8:"optimize";i:5;s:3:"del";}}s:8:"template";a:3:{s:2:"id";s:2:"42";s:5:"class";s:8:"template";s:6:"method";a:2:{i:0;s:2:"on";i:1;s:4:"edit";}}s:10:"clearcache";a:3:{s:2:"id";s:2:"37";s:5:"class";s:10:"clearcache";s:6:"method";b:0;}}i:2;a:6:{i:0;a:5:{i:0;a:6:{s:2:"id";s:2:"32";s:6:"parent";s:1:"0";s:5:"class";s:8:"personal";s:6:"method";s:0:"";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:1:"5";s:6:"parent";s:1:"0";s:5:"class";s:7:"content";s:6:"method";s:0:"";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:1:"7";s:6:"parent";s:1:"0";s:5:"class";s:3:"seo";s:6:"method";s:0:"";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:3;a:6:{s:2:"id";s:1:"6";s:6:"parent";s:1:"0";s:5:"class";s:6:"module";s:6:"method";s:0:"";s:9:"listorder";s:1:"4";s:6:"status";s:1:"1";}i:4;a:6:{s:2:"id";s:1:"1";s:6:"parent";s:1:"0";s:5:"class";s:6:"system";s:6:"method";s:0:"";s:9:"listorder";s:1:"5";s:6:"status";s:1:"1";}}i:32;a:3:{i:0;a:6:{s:2:"id";s:2:"33";s:6:"parent";s:2:"32";s:5:"class";s:10:"adminindex";s:6:"method";s:0:"";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:2:"35";s:6:"parent";s:2:"32";s:5:"class";s:7:"propass";s:6:"method";s:4:"save";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:2:"34";s:6:"parent";s:2:"32";s:5:"class";s:7:"profile";s:6:"method";s:4:"save";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}}i:7;a:5:{i:0;a:6:{s:2:"id";s:2:"23";s:6:"parent";s:1:"7";s:5:"class";s:4:"tags";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:2:"28";s:6:"parent";s:1:"7";s:5:"class";s:8:"keywords";s:6:"method";s:12:"add,edit,del";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:2:"30";s:6:"parent";s:1:"7";s:5:"class";s:8:"htaccess";s:6:"method";s:12:"save,restore";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:3;a:6:{s:2:"id";s:2:"29";s:6:"parent";s:1:"7";s:5:"class";s:6:"robots";s:6:"method";s:12:"save,restore";s:9:"listorder";s:1:"4";s:6:"status";s:1:"1";}i:4;a:6:{s:2:"id";s:2:"43";s:6:"parent";s:1:"7";s:5:"class";s:7:"sitemap";s:6:"method";s:21:"generate,download,del";s:9:"listorder";s:1:"5";s:6:"status";s:1:"1";}}i:5;a:9:{i:0;a:6:{s:2:"id";s:2:"21";s:6:"parent";s:1:"5";s:5:"class";s:8:"category";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:2:"11";s:6:"parent";s:1:"5";s:5:"class";s:7:"article";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:2:"25";s:6:"parent";s:1:"5";s:5:"class";s:7:"product";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:3;a:6:{s:2:"id";s:2:"14";s:6:"parent";s:1:"5";s:5:"class";s:3:"ask";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"4";s:6:"status";s:1:"1";}i:4;a:6:{s:2:"id";s:2:"39";s:6:"parent";s:1:"5";s:5:"class";s:4:"down";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"5";s:6:"status";s:1:"1";}i:5;a:6:{s:2:"id";s:2:"24";s:6:"parent";s:1:"5";s:5:"class";s:2:"hr";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"6";s:6:"status";s:1:"1";}i:6;a:6:{s:2:"id";s:2:"41";s:6:"parent";s:1:"5";s:5:"class";s:9:"guestbook";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"7";s:6:"status";s:1:"1";}i:7;a:6:{s:2:"id";s:2:"53";s:6:"parent";s:1:"5";s:5:"class";s:9:"recommend";s:6:"method";s:12:"add,edit,del";s:9:"listorder";s:1:"8";s:6:"status";s:1:"1";}i:8;a:6:{s:2:"id";s:2:"52";s:6:"parent";s:1:"5";s:5:"class";s:5:"model";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"9";s:6:"status";s:1:"1";}}i:6;a:6:{i:0;a:6:{s:2:"id";s:2:"15";s:6:"parent";s:1:"6";s:5:"class";s:5:"slide";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:1:"9";s:6:"parent";s:1:"6";s:5:"class";s:4:"link";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:2:"22";s:6:"parent";s:1:"6";s:5:"class";s:10:"navigation";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:3;a:6:{s:2:"id";s:2:"38";s:6:"parent";s:1:"6";s:5:"class";s:6:"online";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"4";s:6:"status";s:1:"1";}i:4;a:6:{s:2:"id";s:2:"36";s:6:"parent";s:1:"6";s:5:"class";s:8:"fragment";s:6:"method";s:12:"add,edit,del";s:9:"listorder";s:1:"5";s:6:"status";s:1:"1";}i:5;a:6:{s:2:"id";s:2:"20";s:6:"parent";s:1:"6";s:5:"class";s:4:"type";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"6";s:6:"status";s:1:"1";}}i:1;a:9:{i:0;a:6:{s:2:"id";s:1:"2";s:6:"parent";s:1:"1";s:5:"class";s:7:"purview";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:1:"3";s:6:"parent";s:1:"1";s:5:"class";s:9:"usergroup";s:6:"method";s:24:"add,edit,del,order,grant";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:2;a:6:{s:2:"id";s:1:"4";s:6:"parent";s:1:"1";s:5:"class";s:4:"user";s:6:"method";s:12:"add,edit,del";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:3;a:6:{s:2:"id";s:2:"19";s:6:"parent";s:1:"1";s:5:"class";s:6:"config";s:6:"method";s:27:"add,base,lang,mail,attr,del";s:9:"listorder";s:1:"6";s:6:"status";s:1:"1";}i:4;a:6:{s:2:"id";s:2:"54";s:6:"parent";s:1:"1";s:5:"class";s:7:"tpltags";s:6:"method";s:0:"";s:9:"listorder";s:1:"7";s:6:"status";s:1:"1";}i:5;a:6:{s:2:"id";s:2:"51";s:6:"parent";s:1:"1";s:5:"class";s:4:"lang";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"9";s:6:"status";s:1:"1";}i:6;a:6:{s:2:"id";s:2:"40";s:6:"parent";s:1:"1";s:5:"class";s:8:"database";s:6:"method";s:36:"backup,download,upgrade,optimize,del";s:9:"listorder";s:2:"10";s:6:"status";s:1:"1";}i:7;a:6:{s:2:"id";s:2:"42";s:6:"parent";s:1:"1";s:5:"class";s:8:"template";s:6:"method";s:4:"edit";s:9:"listorder";s:2:"11";s:6:"status";s:1:"1";}i:8;a:6:{s:2:"id";s:2:"37";s:6:"parent";s:1:"1";s:5:"class";s:10:"clearcache";s:6:"method";s:0:"";s:9:"listorder";s:2:"12";s:6:"status";s:1:"1";}}}i:3;a:5:{i:32;a:6:{s:2:"id";s:2:"32";s:6:"parent";s:1:"0";s:5:"class";s:8:"personal";s:6:"method";s:0:"";s:9:"listorder";s:1:"1";s:6:"status";s:1:"1";}i:5;a:6:{s:2:"id";s:1:"5";s:6:"parent";s:1:"0";s:5:"class";s:7:"content";s:6:"method";s:0:"";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:7;a:6:{s:2:"id";s:1:"7";s:6:"parent";s:1:"0";s:5:"class";s:3:"seo";s:6:"method";s:0:"";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}i:6;a:6:{s:2:"id";s:1:"6";s:6:"parent";s:1:"0";s:5:"class";s:6:"module";s:6:"method";s:0:"";s:9:"listorder";s:1:"4";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:1:"1";s:6:"parent";s:1:"0";s:5:"class";s:6:"system";s:6:"method";s:0:"";s:9:"listorder";s:1:"5";s:6:"status";s:1:"1";}}}', 0, 1),
(6, 'generaladmin', 2, 'a:4:{i:0;a:3:{i:0;s:1:"5";i:1;s:2:"11";i:2;s:2:"25";}i:1;a:3:{s:7:"content";a:3:{s:2:"id";s:1:"5";s:5:"class";s:7:"content";s:6:"method";b:0;}s:7:"article";a:3:{s:2:"id";s:2:"11";s:5:"class";s:7:"article";s:6:"method";a:4:{i:0;s:3:"add";i:1;s:4:"edit";i:2;s:3:"del";i:3;s:5:"order";}}s:7:"product";a:3:{s:2:"id";s:2:"25";s:5:"class";s:7:"product";s:6:"method";a:4:{i:0;s:3:"add";i:1;s:4:"edit";i:2;s:3:"del";i:3;s:5:"order";}}}i:2;a:2:{i:0;a:1:{i:0;a:6:{s:2:"id";s:1:"5";s:6:"parent";s:1:"0";s:5:"class";s:7:"content";s:6:"method";s:0:"";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}}i:5;a:2:{i:0;a:6:{s:2:"id";s:2:"11";s:6:"parent";s:1:"5";s:5:"class";s:7:"article";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}i:1;a:6:{s:2:"id";s:2:"25";s:6:"parent";s:1:"5";s:5:"class";s:7:"product";s:6:"method";s:18:"add,edit,del,order";s:9:"listorder";s:1:"3";s:6:"status";s:1:"1";}}}i:3;a:1:{i:5;a:6:{s:2:"id";s:1:"5";s:6:"parent";s:1:"0";s:5:"class";s:7:"content";s:6:"method";s:0:"";s:9:"listorder";s:1:"2";s:6:"status";s:1:"1";}}}', 0, 1),
(7, 'generaluser', 3, 'a:0:{}', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
