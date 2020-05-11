-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 30 日 15:43
-- 服务器版本: 5.5.53
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `dftk_admin_lite`
--

-- --------------------------------------------------------

--
-- 表的结构 `dftk_admin`
--

CREATE TABLE IF NOT EXISTS `dftk_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码；mb_password加密',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像，相对于upload/avatar目录',
  `email` varchar(100) NOT NULL DEFAULT '' COMMENT '登录邮箱',
  `email_code` varchar(60) DEFAULT NULL COMMENT '激活码',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '用户状态 0：禁用； 1：正常 ；2：未验证',
  `register_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` varchar(16) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `last_login_time` int(10) unsigned NOT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`username`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=90 ;

--
-- 转存表中的数据 `dftk_admin`
--

INSERT INTO `dftk_admin` (`id`, `username`, `password`, `avatar`, `email`, `email_code`, `phone`, `status`, `register_time`, `last_login_ip`, `last_login_time`) VALUES
(88, 'admin', 'ef2f5f9a2a2048143d5d2519cec8157d', '', '', '', NULL, 1, 1449199996, '', 0),
(89, 'admin2', 'ef2f5f9a2a2048143d5d2519cec8157d', '', '', '', NULL, 1, 1449199996, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `dftk_admin_nav`
--

CREATE TABLE IF NOT EXISTS `dftk_admin_nav` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '菜单表',
  `pid` int(11) unsigned DEFAULT '0' COMMENT '所属菜单',
  `name` varchar(15) DEFAULT '' COMMENT '菜单名称',
  `mca` varchar(255) DEFAULT '' COMMENT '模块、控制器、方法',
  `ico` varchar(20) DEFAULT '' COMMENT 'font-awesome图标',
  `order_number` int(11) unsigned DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mca` (`mca`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- 转存表中的数据 `dftk_admin_nav`
--

INSERT INTO `dftk_admin_nav` (`id`, `pid`, `name`, `mca`, `ico`, `order_number`) VALUES
(1, 0, '系统设置', 'Admin/ShowNav/config', 'cog', 1),
(2, 1, '菜单管理', 'Admin/Nav/index', NULL, NULL),
(7, 4, '权限管理', 'Admin/Rule/index', '', 1),
(4, 0, '权限控制', 'Admin/ShowNav/rule', 'expeditedssl', 2),
(8, 4, '用户组管理', 'Admin/Rule/group', '', 2),
(9, 4, '管理员列表', 'Admin/Rule/admin_user_list', '', 3);

-- --------------------------------------------------------

--
-- 表的结构 `dftk_auth_group`
--

CREATE TABLE IF NOT EXISTS `dftk_auth_group` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text COMMENT '规则id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户组表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `dftk_auth_group`
--

INSERT INTO `dftk_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理员', 1, '6,96,20,1,2,3,4,5,64,21,7,8,9,10,11,12,13,14,15,16,123,19,130,131,132,133'),
(2, '产品管理员', 1, '6,96,1,2,3,4,56,57,60,61,63,71,72,65,67,74,75,66,68,69,70,73,77,78,82,83,88,89,90,99,91,92,97,98,104,105,106,107,108,118,109,110,111,112,117,113,114');

-- --------------------------------------------------------

--
-- 表的结构 `dftk_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `dftk_auth_group_access` (
  `uid` int(11) unsigned NOT NULL COMMENT '用户id',
  `group_id` int(11) unsigned NOT NULL COMMENT '用户组id',
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户组明细表';

--
-- 转存表中的数据 `dftk_auth_group_access`
--

INSERT INTO `dftk_auth_group_access` (`uid`, `group_id`) VALUES
(88, 1),
(89, 2);

-- --------------------------------------------------------

--
-- 表的结构 `dftk_auth_rule`
--

CREATE TABLE IF NOT EXISTS `dftk_auth_rule` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文名称',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态：为1正常，为0禁用',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '' COMMENT '规则表达式，为空表示存在就验证，不为空表示按照条件验证',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='规则表' AUTO_INCREMENT=135 ;

--
-- 转存表中的数据 `dftk_auth_rule`
--

INSERT INTO `dftk_auth_rule` (`id`, `pid`, `name`, `title`, `status`, `type`, `condition`) VALUES
(1, 20, 'Admin/ShowNav/nav', '菜单管理', 1, 1, ''),
(2, 1, 'Admin/Nav/index', '菜单列表', 1, 1, ''),
(3, 1, 'Admin/Nav/add', '添加菜单', 1, 1, ''),
(4, 1, 'Admin/Nav/edit', '修改菜单', 1, 1, ''),
(5, 1, 'Admin/Nav/delete', '删除菜单', 1, 1, ''),
(21, 0, 'Admin/ShowNav/rule', '权限控制', 1, 1, ''),
(7, 21, 'Admin/Rule/index', '权限管理', 1, 1, ''),
(8, 7, 'Admin/Rule/add', '添加权限', 1, 1, ''),
(9, 7, 'Admin/Rule/edit', '修改权限', 1, 1, ''),
(10, 7, 'Admin/Rule/delete', '删除权限', 1, 1, ''),
(11, 21, 'Admin/Rule/group', '用户组管理', 1, 1, ''),
(12, 11, 'Admin/Rule/add_group', '添加用户组', 1, 1, ''),
(13, 11, 'Admin/Rule/edit_group', '修改用户组', 1, 1, ''),
(14, 11, 'Admin/Rule/delete_group', '删除用户组', 1, 1, ''),
(15, 11, 'Admin/Rule/rule_group', '分配权限', 1, 1, ''),
(16, 11, 'Admin/Rule/check_user', '查找成员', 1, 1, ''),
(19, 21, 'Admin/Rule/admin_user_list', '管理员列表', 1, 1, ''),
(20, 0, 'Admin/ShowNav/config', '系统设置', 1, 1, ''),
(6, 0, 'Admin/Index/index', '后台首页', 1, 1, ''),
(64, 1, 'Admin/Nav/order', '菜单排序', 1, 1, ''),
(96, 6, 'Admin/Index/welcome', '欢迎界面', 1, 1, ''),
(123, 11, 'Admin/Rule/add_user_to_group', '添加成员', 1, 1, ''),
(130, 19, 'Admin/Rule/add_admin', '添加管理员', 1, 1, ''),
(131, 19, 'Admin/Rule/edit_admin', '编辑管理员', 1, 1, ''),
(132, 19, 'Admin/Rule/delete_admin', '删除管理员', 1, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
