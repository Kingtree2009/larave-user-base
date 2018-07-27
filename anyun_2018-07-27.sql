# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: rm-bp146nxrdpyg51i8so.mysql.rds.aliyuncs.com (MySQL 5.6.34)
# Database: anyun
# Generation Time: 2018-07-27 05:49:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table areas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `areas`;

CREATE TABLE `areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `city_id` int(10) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `areas_city_id_index` (`city_id`),
  KEY `areas_code_index` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `province_id` int(10) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cities_province_id_index` (`province_id`),
  KEY `cities_code_index` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table cust_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cust_user`;

CREATE TABLE `cust_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'auto_increment_id',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT 'password',
  `currency` varchar(20) NOT NULL DEFAULT '' COMMENT '币种',
  `region` varchar(40) NOT NULL DEFAULT '' COMMENT '所在地区',
  `user_no` char(5) NOT NULL DEFAULT '' COMMENT '短号',
  `isverified_email` varchar(5) NOT NULL DEFAULT 'no' COMMENT 'yes,no',
  `moblie` varchar(20) DEFAULT NULL,
  `isverified_mobile` varchar(5) DEFAULT NULL COMMENT 'yes,no',
  `wechat_id` varchar(40) DEFAULT NULL,
  `IDNo` varchar(11) DEFAULT NULL COMMENT '身份证',
  `portrait` varchar(100) DEFAULT NULL COMMENT '头像',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `last_login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最近更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table express_line
# ------------------------------------------------------------

DROP TABLE IF EXISTS `express_line`;

CREATE TABLE `express_line` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `country` varchar(30) NOT NULL DEFAULT '' COMMENT '国家',
  `currency` varchar(10) NOT NULL DEFAULT '' COMMENT '币种',
  `exchange_rate` decimal(4,2) NOT NULL COMMENT '汇率',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table http_client
# ------------------------------------------------------------

DROP TABLE IF EXISTS `http_client`;

CREATE TABLE `http_client` (
  `id` bigint(20) NOT NULL DEFAULT '0',
  `http_code` varchar(32) DEFAULT NULL,
  `host_max` int(11) DEFAULT NULL,
  `client_max` int(11) DEFAULT NULL,
  `acquire_timeout` int(11) DEFAULT NULL,
  `connect_timeout` int(11) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  `timeout` int(11) DEFAULT NULL,
  `resp_type` varchar(32) DEFAULT NULL,
  `STATUS` varchar(16) DEFAULT NULL,
  `reqHeader` varchar(1024) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table i_outer_msg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `i_outer_msg`;

CREATE TABLE `i_outer_msg` (
  `msg_id` bigint(20) NOT NULL DEFAULT '0',
  `com_id` varchar(32) DEFAULT NULL,
  `bill_type` varchar(16) DEFAULT NULL,
  `bill_id` varchar(32) DEFAULT NULL,
  `busi_type` varchar(32) DEFAULT NULL,
  `redo_time` int(11) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_user` varchar(32) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_user` varchar(32) DEFAULT NULL,
  `done_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `return_code` varchar(32) DEFAULT NULL,
  `return_msg` varchar(256) DEFAULT NULL,
  `request` varchar(4000) DEFAULT NULL,
  `reponse` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table i_outer_msg_err
# ------------------------------------------------------------

DROP TABLE IF EXISTS `i_outer_msg_err`;

CREATE TABLE `i_outer_msg_err` (
  `msg_id` bigint(20) DEFAULT NULL,
  `com_id` varchar(32) DEFAULT NULL,
  `bill_type` varchar(16) DEFAULT NULL,
  `bill_id` varchar(32) DEFAULT NULL,
  `busi_type` varchar(32) DEFAULT NULL,
  `redo_time` int(11) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_user` varchar(32) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_user` varchar(32) DEFAULT NULL,
  `done_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `return_code` varchar(32) DEFAULT NULL,
  `return_msg` varchar(256) DEFAULT NULL,
  `request` varchar(4000) DEFAULT NULL,
  `reponse` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table i_outer_msg_his
# ------------------------------------------------------------

DROP TABLE IF EXISTS `i_outer_msg_his`;

CREATE TABLE `i_outer_msg_his` (
  `msg_id` bigint(20) DEFAULT NULL,
  `com_id` varchar(32) DEFAULT NULL,
  `bill_type` varchar(16) DEFAULT NULL,
  `bill_id` varchar(32) DEFAULT NULL,
  `busi_type` varchar(32) DEFAULT NULL,
  `redo_time` int(11) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_user` varchar(32) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_user` varchar(32) DEFAULT NULL,
  `done_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `return_code` varchar(32) DEFAULT NULL,
  `return_msg` varchar(256) DEFAULT NULL,
  `request` varchar(4000) DEFAULT NULL,
  `reponse` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table manage_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `manage_user`;

CREATE TABLE `manage_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `user_mail` varchar(60) DEFAULT '',
  `mob` varchar(20) DEFAULT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'operator',
  `position` varchar(20) NOT NULL DEFAULT '' COMMENT '职务',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '登录时间',
  `is_disable` varchar(10) NOT NULL DEFAULT 'no' COMMENT 'yes,no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table provinces
# ------------------------------------------------------------

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `code` varchar(191) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `provinces_code_index` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table rece_address
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rece_address`;

CREATE TABLE `rece_address` (
  `id` bigint(20) unsigned NOT NULL COMMENT '自生成主键',
  `cust_id` int(11) NOT NULL COMMENT '用户主键，寄件人id',
  `country` varchar(30) NOT NULL DEFAULT '' COMMENT '国家名',
  `state` varchar(20) NOT NULL DEFAULT '' COMMENT '省',
  `city` varchar(20) NOT NULL DEFAULT '' COMMENT '市',
  `county` varchar(20) DEFAULT NULL COMMENT '县',
  `country_code` varchar(20) DEFAULT NULL COMMENT '国家编码',
  `address` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL COMMENT '邮编',
  `name` varchar(10) DEFAULT NULL COMMENT '收件人',
  `mobile` varchar(20) DEFAULT NULL,
  `IDNo` varchar(20) DEFAULT NULL COMMENT '收件人身份证号',
  `is_default` varchar(5) DEFAULT NULL COMMENT 'yes,no',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收件人地址列表';



# Dump of table store
# ------------------------------------------------------------

DROP TABLE IF EXISTS `store`;

CREATE TABLE `store` (
  `store_id` varchar(255) NOT NULL,
  `store_code` varchar(255) NOT NULL,
  `store_name` varchar(255) NOT NULL,
  `conutry` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `country_code` varchar(20) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `adress1` varchar(255) NOT NULL,
  `adress2` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` varchar(255) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `update_user` varchar(255) DEFAULT NULL,
  `postcode` varchar(45) NOT NULL,
  PRIMARY KEY (`store_id`),
  UNIQUE KEY `store_code_UNIQUE` (`store_code`),
  UNIQUE KEY `store_name_UNIQUE` (`store_name`),
  UNIQUE KEY `store_id_UNIQUE` (`store_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table store_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `store_user`;

CREATE TABLE `store_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `update_date` timestamp NULL DEFAULT NULL,
  `store_id` varchar(45) NOT NULL,
  `mob` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table support_gen
# ------------------------------------------------------------

DROP TABLE IF EXISTS `support_gen`;

CREATE TABLE `support_gen` (
  `table_name` varchar(50) NOT NULL DEFAULT '',
  `extend_table` varchar(50) DEFAULT NULL,
  `implements` varchar(300) DEFAULT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `rebuild` varchar(50) DEFAULT NULL,
  `preset` varchar(512) DEFAULT NULL COMMENT '预置数据;进行分隔',
  `bill_no` varchar(64) DEFAULT NULL,
  `only_query` varchar(16) DEFAULT NULL COMMENT '查询统计yes，只产生类，不产生dao',
  PRIMARY KEY (`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;



# Dump of table sys_cfg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sys_cfg`;

CREATE TABLE `sys_cfg` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cfg_kind` varchar(32) DEFAULT NULL,
  `cfg_code` varchar(32) DEFAULT NULL,
  `value` varchar(128) DEFAULT NULL,
  `cfg_desc` varchar(128) DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `remarks` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cfg_kind&cfg_code` (`cfg_kind`,`cfg_code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table waybill_main
# ------------------------------------------------------------

DROP TABLE IF EXISTS `waybill_main`;

CREATE TABLE `waybill_main` (
  `main_id` bigint(20) NOT NULL,
  `main_order_id` varchar(24) DEFAULT NULL COMMENT '订单编号',
  `logistics_numbers` varchar(24) NOT NULL COMMENT '物流单号',
  `logistics_id` varchar(24) DEFAULT NULL COMMENT '物流信息跟踪ID',
  `express_numbers` varchar(24) DEFAULT NULL COMMENT '国内物流单号',
  `store_id` varchar(24) NOT NULL COMMENT '出发地(门店ID)',
  `rece_address_id` bigint(20) NOT NULL COMMENT '目的地(收货地址ID)',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `cust_user_id` int(12) DEFAULT NULL COMMENT '创建人',
  `update_date` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  `update_user` varchar(20) DEFAULT NULL COMMENT '更新操作人',
  `store_user_id` int(11) DEFAULT NULL COMMENT '寄件人ID',
  `status` varchar(12) DEFAULT NULL COMMENT '订单状态',
  `declare_money` decimal(16,8) DEFAULT NULL COMMENT '申报金额',
  `remark` varchar(100) DEFAULT NULL COMMENT '备注信息',
  `freight` decimal(16,8) DEFAULT NULL COMMENT '运费',
  `tax` decimal(16,8) DEFAULT NULL COMMENT '税费',
  `charging_weight` double(12,8) DEFAULT NULL COMMENT '计费重量',
  `pay_order` varchar(24) DEFAULT NULL COMMENT '支付凭证',
  `pay_date` timestamp NULL DEFAULT NULL COMMENT '付款时间',
  `express_id` int(32) NOT NULL COMMENT '快递公司ID',
  `package_gw` decimal(12,4) DEFAULT NULL COMMENT '包裹毛重',
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table waybill_order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `waybill_order`;

CREATE TABLE `waybill_order` (
  `order_id` bigint(20) NOT NULL,
  `main_id` bigint(20) DEFAULT NULL COMMENT '订单主表ID',
  `commodity_type_id` varchar(24) DEFAULT NULL COMMENT '商品类别id',
  `commodity_name` varchar(24) DEFAULT NULL COMMENT '商品名称',
  `commodity_price` decimal(12,4) DEFAULT NULL COMMENT '商品单价(美金)',
  `commodity_quantity` int(12) DEFAULT NULL COMMENT '商品数量',
  `weight` decimal(12,2) DEFAULT NULL COMMENT '入库重量',
  `total_amount` decimal(16,8) DEFAULT NULL COMMENT '总金额',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `status` varchar(12) DEFAULT NULL COMMENT '状态',
  `specifications` varchar(20) DEFAULT NULL COMMENT '(长*宽*高)',
  `unit` varchar(10) DEFAULT NULL COMMENT '单位',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table waybill_pay
# ------------------------------------------------------------

DROP TABLE IF EXISTS `waybill_pay`;

CREATE TABLE `waybill_pay` (
  `pay_id` varchar(24) NOT NULL,
  `serial_number` varchar(24) DEFAULT NULL COMMENT '支付流水号',
  `pay_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '操作时间',
  `pay_status` varchar(10) DEFAULT NULL COMMENT '支付状态',
  `main_order_id` varchar(24) DEFAULT NULL COMMENT '关联订单号',
  `pay_type` varchar(10) DEFAULT NULL COMMENT '操作类型',
  `pay_sum` decimal(16,8) DEFAULT NULL COMMENT '操作金额',
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table world_cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_cities`;

CREATE TABLE `world_cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `country_id` int(10) unsigned NOT NULL COMMENT 'Country ID',
  `division_id` int(10) unsigned DEFAULT NULL COMMENT 'Division ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'City Name',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'City Fullname',
  `code` varchar(64) DEFAULT NULL COMMENT 'City Code',
  PRIMARY KEY (`id`),
  KEY `uniq_city` (`country_id`,`division_id`,`name`),
  KEY `division_id` (`division_id`),
  CONSTRAINT `world_cities_ibfk_2` FOREIGN KEY (`division_id`) REFERENCES `world_divisions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `world_cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `world_countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_cities_locale
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_cities_locale`;

CREATE TABLE `world_cities_locale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `city_id` int(10) unsigned NOT NULL COMMENT 'City ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'Localized city name',
  `alias` varchar(191) DEFAULT NULL COMMENT 'Localized city alias',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Localized city fullname',
  `locale` varchar(6) DEFAULT NULL COMMENT 'locale name',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_locale` (`city_id`,`locale`),
  CONSTRAINT `world_cities_locale_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `world_cities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_continents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_continents`;

CREATE TABLE `world_continents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `name` varchar(16) NOT NULL DEFAULT '' COMMENT 'Continent Name',
  `code` varchar(2) NOT NULL DEFAULT '' COMMENT 'Continent Code',
  PRIMARY KEY (`id`),
  KEY `uniq_continent` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_continents_locale
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_continents_locale`;

CREATE TABLE `world_continents_locale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `continent_id` int(10) unsigned NOT NULL COMMENT 'Continent ID',
  `name` varchar(191) DEFAULT NULL COMMENT 'Localized Name',
  `alias` varchar(191) DEFAULT NULL COMMENT 'Localized Alias',
  `abbr` varchar(16) DEFAULT NULL COMMENT 'Localized Abbr name',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Localized Fullname',
  `locale` varchar(6) DEFAULT NULL COMMENT 'Locale',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_locale` (`continent_id`,`locale`),
  CONSTRAINT `world_continents_locale_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `world_continents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_countries`;

CREATE TABLE `world_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `continent_id` int(10) unsigned NOT NULL COMMENT 'Continent ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'Country Common Name',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Country Fullname',
  `capital` varchar(191) DEFAULT NULL COMMENT 'Capital Common Name',
  `code` varchar(4) DEFAULT NULL COMMENT 'ISO3166-1-Alpha-2',
  `code_alpha3` varchar(6) DEFAULT NULL COMMENT 'ISO3166-1-Alpha-3',
  `emoji` varchar(16) DEFAULT NULL COMMENT 'Country Emoji',
  `has_division` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Has Division',
  `currency_code` varchar(3) DEFAULT NULL COMMENT 'iso_4217_code',
  `currency_name` varchar(128) DEFAULT NULL COMMENT 'iso_4217_name',
  `tld` varchar(8) DEFAULT NULL COMMENT 'Top level domain',
  `callingcode` varchar(8) DEFAULT NULL COMMENT 'Calling prefix',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_country` (`continent_id`,`name`),
  CONSTRAINT `world_countries_ibfk_1` FOREIGN KEY (`continent_id`) REFERENCES `world_continents` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_countries_locale
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_countries_locale`;

CREATE TABLE `world_countries_locale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto increase ID',
  `country_id` int(10) unsigned NOT NULL COMMENT 'Country ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'Localized Country Name',
  `alias` varchar(191) DEFAULT NULL COMMENT 'Localized Country Alias',
  `abbr` varchar(16) DEFAULT NULL COMMENT 'Localized Country Abbr Name',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Localized Country Fullname',
  `currency_name` varchar(191) DEFAULT NULL COMMENT 'Localized Country Currency Name',
  `locale` varchar(6) DEFAULT NULL COMMENT 'locale',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_locale` (`country_id`,`locale`),
  CONSTRAINT `world_countries_locale_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `world_countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_divisions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_divisions`;

CREATE TABLE `world_divisions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto Increase ID',
  `country_id` int(10) unsigned NOT NULL COMMENT 'Country ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'Division Common Name',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Division Full Name',
  `code` varchar(64) DEFAULT NULL COMMENT 'ISO 3166-2 Code',
  `has_city` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Has city?',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_division` (`country_id`,`name`),
  CONSTRAINT `world_divisions_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `world_countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table world_divisions_locale
# ------------------------------------------------------------

DROP TABLE IF EXISTS `world_divisions_locale`;

CREATE TABLE `world_divisions_locale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Auto Increase ID',
  `division_id` int(10) unsigned NOT NULL COMMENT 'Division ID',
  `name` varchar(191) NOT NULL DEFAULT '' COMMENT 'Localized Division Name',
  `abbr` varchar(16) DEFAULT NULL COMMENT 'Localized Division Abbr',
  `alias` varchar(191) DEFAULT NULL COMMENT 'Localized Division Alias',
  `full_name` varchar(191) DEFAULT NULL COMMENT 'Localized Division Fullname',
  `locale` varchar(6) DEFAULT NULL COMMENT 'locale',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_locale` (`division_id`,`locale`),
  CONSTRAINT `world_divisions_locale_ibfk_1` FOREIGN KEY (`division_id`) REFERENCES `world_divisions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table zone_code
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zone_code`;

CREATE TABLE `zone_code` (
  `id` varchar(24) NOT NULL COMMENT '主键',
  `country_name` varchar(64) DEFAULT NULL COMMENT '国家名',
  `country_name_en` varchar(64) DEFAULT NULL COMMENT '国家英文名',
  `status` varchar(24) DEFAULT NULL COMMENT '状态',
  `zone_code` varchar(24) DEFAULT NULL COMMENT '区号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
