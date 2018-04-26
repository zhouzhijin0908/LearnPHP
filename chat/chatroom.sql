-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2011 年 06 月 08 日 15:08
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `chatroom`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `text`
-- 

CREATE TABLE `text` (
  `serial` int(5) NOT NULL auto_increment,
  `chatname` char(20) NOT NULL,
  `chattype` char(20) NOT NULL,
  `chattime` time NOT NULL,
  `chattext` text,
  `chatemote` char(30) default NULL,
  `chataction` char(30) default NULL,
  PRIMARY KEY  (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

