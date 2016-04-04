-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 03:03 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8
-- https://github.com/peredurabefrog/phpSecureLogin
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

drop schema if exists secure_login;
CREATE DATABASE `secure_login`;
use secure_login;
CREATE USER 'agustin'@'localhost' IDENTIFIED BY '100991';
GRANT SELECT, INSERT, UPDATE ON `secure_login`.* TO 'agustin'@'localhost';
CREATE TABLE `secure_login`.`members` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `password` CHAR(128) NOT NULL,
    `salt` CHAR(128) NOT NULL 
) ENGINE = InnoDB;
CREATE TABLE `secure_login`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB
