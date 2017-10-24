-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 10 月 24 日 17:19
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `loachcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `cms_level`
--

CREATE TABLE IF NOT EXISTS `cms_level` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `level` tinyint(2) unsigned NOT NULL COMMENT '//等级编号',
  `level_name` varchar(30) NOT NULL COMMENT '//等级名称',
  `level_info` varchar(200) NOT NULL COMMENT '//等级说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `cms_level`
--

INSERT INTO `cms_level` (`id`, `level`, `level_name`, `level_info`) VALUES
(2, 6, '超级管理员', ''),
(3, 4, '发帖员', ''),
(4, 3, '评论员', ''),
(5, 2, '会员专员', ''),
(6, 1, '后台游客', '后台游客'),
(14, 0, '检查员', '检查一下');

-- --------------------------------------------------------

--
-- 表的结构 `cms_manager`
--

CREATE TABLE IF NOT EXISTS `cms_manager` (
  `id` int(8) NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `admin_user` varchar(30) NOT NULL COMMENT '//管理账号',
  `admin_pass` char(40) NOT NULL COMMENT '//管理员密码',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '//管理员等级',
  `login_count` smallint(5) NOT NULL DEFAULT '0' COMMENT '//管理员登录次数',
  `last_ip` varchar(20) NOT NULL DEFAULT '000.000.000.000' COMMENT '//管理员最后一次登录的ip',
  `last_time` datetime NOT NULL COMMENT '//管理员最后一次登录的时间',
  `reg_time` datetime NOT NULL COMMENT '//注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `cms_manager`
--

INSERT INTO `cms_manager` (`id`, `admin_user`, `admin_pass`, `level`, `login_count`, `last_ip`, `last_time`, `reg_time`) VALUES
(39, 'caocao', 'f7e53511ba9e51c773216224207eee0957be45df', 3, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-10-17 12:50:13'),
(38, 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 6, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-10-17 12:35:29'),
(3, 'lisi', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-07-29 08:12:21'),
(4, 'wangwu', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-07-31 05:07:13'),
(5, 'zhaoliu', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-07-31 00:00:00'),
(20, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 3, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-08-01 22:02:54'),
(26, 'cccccc', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 2, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-08-03 21:57:21'),
(35, 'sudanji', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-09-27 16:06:40'),
(40, 'zhongdao', 'f7e53511ba9e51c773216224207eee0957be45df', 6, 0, '000.000.000.000', '0000-00-00 00:00:00', '2017-10-17 12:52:56');

-- --------------------------------------------------------

--
-- 表的结构 `cms_nav`
--

CREATE TABLE IF NOT EXISTS `cms_nav` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航编号',
  `nav_name` varchar(32) NOT NULL COMMENT '导航名称',
  `nav_info` varchar(200) NOT NULL COMMENT '导航信息',
  `pid` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '父类导航',
  `sort` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='前台导航栏目' AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `cms_nav`
--

INSERT INTO `cms_nav` (`id`, `nav_name`, `nav_info`, `pid`, `sort`) VALUES
(1, '笔记分类', '对笔记进行分类展示', 0, 8),
(2, '笔记归档', '笔记按年份、月份归档', 0, 7),
(3, '时间轴', '时间轴', 0, 6),
(5, '新闻', '222', 0, 5),
(6, '小说', '333', 0, 4),
(7, '玄幻小说', '这是测试', 6, 7),
(8, '测试1', '测试1', 2, 8),
(9, '测试7', '测试7', 1, 8),
(10, '测试3', '测试3', 1, 7),
(11, '测试4', '测试4', 1, 6),
(12, '测试5', '测试5', 1, 5),
(13, '电影1', '电影1', 0, 3),
(14, '其他1', '其他1', 0, 2),
(15, '测试6', '测试6', 1, 4),
(16, '测试8', '测试8', 1, 3),
(17, '测试9', '测试9', 1, 2),
(19, 'test1', 'test1', 0, 1),
(20, '测试10', '测试10', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `cms_post`
--

CREATE TABLE IF NOT EXISTS `cms_post` (
  `id` tinyint(8) NOT NULL AUTO_INCREMENT COMMENT '文章编号',
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '文章标题',
  `nav` tinyint(8) NOT NULL COMMENT '文章栏目',
  `tag` varchar(300) CHARACTER SET utf8 NOT NULL COMMENT '文章标签',
  `keyword` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '文章关键字',
  `thumbnail` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '文章缩略图',
  `author` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '文章作者',
  `introduction` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '文章简介',
  `content` tinytext COLLATE utf8_estonian_ci NOT NULL COMMENT '文章内容',
  `command` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '评论选项',
  `sort` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '文章排序',
  `access` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '阅读权限',
  `color` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '标题颜色',
  `money` int(11) NOT NULL COMMENT '消费金币',
  `source` varchar(300) CHARACTER SET utf8 NOT NULL COMMENT '文章来源',
  `property` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '文章属性',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_estonian_ci COMMENT='文章' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
