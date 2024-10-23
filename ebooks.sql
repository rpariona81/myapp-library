use laboratorio_ci;
-- laboratorio_ci.t_catalogs definition
DROP TABLE `t_catalogs`;
CREATE TABLE `t_catalogs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `catalog_name` varchar(255) NOT NULL,
  `catalog_alias` varchar(255) DEFAULT NULL,
  `catalog_display` varchar(255) DEFAULT NULL,
  `catalog_type` varchar(255) DEFAULT NULL,
  `catalog_ico` varchar(255) DEFAULT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_name` (`catalog_name`),
  UNIQUE KEY `u_display` (`catalog_display`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

use laboratorio_ci;
-- newapp.t_catalogs definition
DROP TABLE `t_ebooks`;
CREATE TABLE `t_ebooks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ebook_code` varchar(255) NOT NULL,
  `ebook_isbn` varchar(255) DEFAULT NULL,
  `ebook_title` varchar(255) DEFAULT NULL,
  `ebook_alias` varchar(255) DEFAULT NULL,
  `ebook_display` varchar(255) NOT NULL,
  `ebook_type` varchar(255) DEFAULT NULL,
  `ebook_author` varchar(255) DEFAULT NULL,
  `ebook_editorial` varchar(255) DEFAULT NULL,
  `ebook_year` char(4) DEFAULT NULL,
  `ebook_pages` mediumint(8) DEFAULT NULL,
  `ebook_front_page` varchar(255) DEFAULT NULL,
  `ebook_details` text DEFAULT NULL,
  `ebook_url` varchar(255) DEFAULT NULL,
  `ebook_file` varchar(255) DEFAULT NULL,
  `catalog_id` bigint(20) unsigned DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_code` (`ebook_code`),
  UNIQUE KEY `u_display` (`ebook_display`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2001,'2001');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2002,'2002');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2003,'2003');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2004,'2004');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2005,'2005');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2006,'2006');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2007,'2007');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2008,'2008');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2009,'2009');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2010,'2010');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2011,'2011');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2012,'2012');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2013,'2013');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2014,'2014');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2015,'2015');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2016,'2016');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2017,'2017');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2018,'2018');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2019,'2019');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2020,'2020');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2021,'2021');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2022,'2022');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2023,'2023');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2024,'2024');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2025,'2025');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2026,'2026');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2027,'2027');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2028,'2028');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2029,'2029');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2030,'2030');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2031,'2031');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2032,'2032');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2033,'2033');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2034,'2034');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2035,'2035');

INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2000,'2000');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2001,'2001');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2002,'2002');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2003,'2003');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2004,'2004');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2005,'2005');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2006,'2006');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2007,'2007');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2008,'2008');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2009,'2009');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2010,'2010');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2011,'2011');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2012,'2012');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2013,'2013');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2014,'2014');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2015,'2015');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2016,'2016');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2017,'2017');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2018,'2018');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2019,'2019');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2020,'2020');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2021,'2021');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2022,'2022');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2023,'2023');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2024,'2024');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2025,'2025');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2026,'2026');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2027,'2027');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2028,'2028');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2029,'2029');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2030,'2030');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2031,'2031');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2032,'2032');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2033,'2033');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2034,'2034');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(2035,'2035');
