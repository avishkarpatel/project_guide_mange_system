/*
SQLyog Community Edition- MySQL GUI v5.22a
Host - 5.0.19-nt : Database - dbproject
*********************************************************************
Server version : 5.0.19-nt
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `dbproject`;

USE `dbproject`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `addskill` */

DROP TABLE IF EXISTS `addskill`;

CREATE TABLE `addskill` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL,
  `a10` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `addskill` */

insert  into `addskill`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`,`a10`) values ('a','01-01-2014','Male','999999999999','sds','sds','sds','Mechanical','aaa','1'),('kamal','27-02-1998','Male','9856231245','new delhi uttmagnar','new delhi uttmagnar','new delhi uttmagnar','Software','kjdsfkl adflk aldf  lkasdfjlsadfdsfa ','5');

/*Table structure for table `admin_login` */

DROP TABLE IF EXISTS `admin_login`;

CREATE TABLE `admin_login` (
  `id` varchar(100) default NULL,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `name` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin_login` */

insert  into `admin_login`(`id`,`username`,`password`,`name`) values ('1','a','a','a'),('2','ADMIN','ADMIN','A');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `name` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `phone` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `contact_as` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `password` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`name`,`dob`,`gender`,`phone`,`address`,`contact_as`,`email`,`password`) values ('avi','10-03-2016','Male','9856231245','new delhi','uttamnagar','a','a'),('hadid','03-03-1999','Male','9856231245','new delhi uttmagnar','uttamnagar','hadid@gmail.com','1234');

/*Table structure for table `faq` */

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `faqid` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `faqdetails` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `faq` */

insert  into `faq`(`faqid`,`name`,`faqdetails`) values ('1','hhjh','hjhjh'),('2','dfd','dfdf'),('3','R','WEI DKFJK SFOISDF DKLF JKLDSFJ DJF DS');

/*Table structure for table `payment` */

DROP TABLE IF EXISTS `payment`;

CREATE TABLE `payment` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` varchar(100) default NULL,
  `a8` varchar(100) default NULL,
  `a9` varchar(100) default NULL,
  `date` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `payment` */

insert  into `payment`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`,`a8`,`a9`,`date`) values ('aaaaa','Art','Cabinet painting','34444','2',NULL,NULL,'68888',NULL,'now()'),('sssss','fdfd','Live painting','800','2',NULL,NULL,'1600',NULL,'2013-06-05 16:01:43'),('ww','fdfd','Live painting','800','2',NULL,NULL,'1600',NULL,'2013-06-05 16:08:46'),('r','df','BABY CLOTH','5555','4',NULL,NULL,'22220',NULL,'2013-11-18 20:12:05'),('w','fd','Inspiration','444','33',NULL,NULL,'14652',NULL,'2013-11-20 19:24:54'),('r','fd','Inspiration','444','5',NULL,NULL,'2220',NULL,'2013-11-21 11:56:33'),('','','','','2',NULL,NULL,'1000',NULL,'2014-03-11 12:14:27'),('a','ATM','StateBank','323','3232',NULL,NULL,'2323232',NULL,'2014-04-14 17:30:58'),('a','ATM','Central_Bank','4444','500','434343333','434343',NULL,NULL,'2014-04-14 17:54:06'),('a','ATM','StateBank','434','3232','2323232','434343333','Website dev','5000','2014-04-14 17:56:57'),('pramod','Debit-Card','StateBank','5000','2000','451212451241','434343333','Dlf property website','7500','2014-04-17 14:38:00'),('neha@gmail.com','ATM','Central_Bank','5555','8900','43434343434','4454545454','iitm website','8900','2016-03-18 11:46:20'),('pramod@gmail.com','ATM','StateBank','333','100000','343433434','343434343','aMITY WEBSITE','100000','2016-07-16 13:27:36');

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product` */

insert  into `product`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`) values ('diitm job portal','01-05-2016','Software','     dsfa fdsf sdf sd sdfdsaf ','','img_f2016100447.docx'),('aMITY WEBSITE','31-07-2016','Software','D DS DFA FDASF ASDF DSAFDSF','','img_f2016095238.docx');

/*Table structure for table `product1` */

DROP TABLE IF EXISTS `product1`;

CREATE TABLE `product1` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a6` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `product1` */

insert  into `product1`(`a1`,`a2`,`a3`,`a4`,`a6`) values ('dfdddddddddd','20-11-2013','Inspiration','df','img_f2013030430.doc'),('dfdddddddddddfdd','21-11-2013','Inspiration','df','img_f2013071246.doc');

/*Table structure for table `regestration` */

DROP TABLE IF EXISTS `regestration`;

CREATE TABLE `regestration` (
  `name` varchar(100) default NULL,
  `dob` varchar(100) default NULL,
  `gender` varchar(100) default NULL,
  `phone` varchar(100) default NULL,
  `address` varchar(100) default NULL,
  `contact_as` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  `password` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `regestration` */

insert  into `regestration`(`name`,`dob`,`gender`,`phone`,`address`,`contact_as`,`email`,`password`) values ('yt','28-05-2013','Male','5','t','ty','a','a'),('pramod','05-06-2013','Male','98856231245','delhi','delhi','pramod@gmail.com','pramod'),('rahul','03-04-1996','Male','9856231245','fdfd','gggggggggggggggg','pramod@gmail.com','123'),('kamal','27-02-1998','Male','9856231245','new delhi uttmagnar','uttamnagar','neha@gmail.com','1234'),('rohit','27-01-1998','Male','9999735028','new delhi uttmagnar','new delhi','rohit@gmail.com','1234');

/*Table structure for table `reply` */

DROP TABLE IF EXISTS `reply`;

CREATE TABLE `reply` (
  `faqid` varchar(100) default NULL,
  `name` varchar(100) default NULL,
  `faqdetails` varchar(100) default NULL,
  `reply` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reply` */

insert  into `reply`(`faqid`,`name`,`faqdetails`,`reply`) values ('2','dfd','dfdf','FFFFFFFFFF'),('3','R','WEI DKFJK SFOISDF DKLF JKLDSFJ DJF DS','DSF ADF ASDF');

/*Table structure for table `review` */

DROP TABLE IF EXISTS `review`;

CREATE TABLE `review` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `review` */

insert  into `review`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`) values ('Website dev','Inspiration','df','fdf','30-11-2013','500'),('Website dev','Software','f df ','rajiv','','4500'),('Dlf property website','Software','Payment df','a','','8500'),('Dlf property website','Software','Payment df','pramod','','7500'),('iitm website','Software',' asfdssaas dsafsdaf','neha@gmail.com','','8900'),('iitm website','Software',' asfdssaas dsafsdaf','neha@gmail.com','','7000'),('iitm website','Software',' asfdssaas dsafsdaf','r','','60000'),('aMITY WEBSITE','Software','D DS DFA FDASF ASDF DSAFDSF','R','','89000'),('aMITY WEBSITE','Software','D DS DFA FDASF ASDF DSAFDSF','rohit@gmail.com','','12000'),('aMITY WEBSITE','Software','D DS DFA FDASF ASDF DSAFDSF','pramod@gmail.com','','7000');

/*Table structure for table `task` */

DROP TABLE IF EXISTS `task`;

CREATE TABLE `task` (
  `a1` varchar(100) default NULL,
  `a2` varchar(100) default NULL,
  `a3` varchar(100) default NULL,
  `a4` varchar(100) default NULL,
  `a5` varchar(100) default NULL,
  `a6` varchar(100) default NULL,
  `a7` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `task` */

insert  into `task`(`a1`,`a2`,`a3`,`a4`,`a5`,`a6`,`a7`) values ('Website dev','Software','f df ','a','14-04-2014','400','fdf'),('Dlf property website','Software','Payment df','pramod','10-05-2014','7500','payment '),('iitm website','Software',' asfdssaas dsafsdaf','neha@gmail.com','30-03-2016','8900',' sdfsa sfsdfsdffdsdfsdfsdffdsfd'),('iitm website','Software',' asfdssaas dsafsdaf','kamal','18-03-2016','8900','dafsd'),('iitm website','Software',' asfdssaas dsafsdaf','neha@gmail.com','17-04-2016','8900','dafsd'),('aMITY WEBSITE','Software','D DS DFA FDASF ASDF DSAFDSF','Accept','','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
