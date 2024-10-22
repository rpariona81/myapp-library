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

INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1001,'1001');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1002,'1002');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1003,'1003');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1004,'1004');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1005,'1005');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1006,'1006');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1007,'1007');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1008,'1008');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1009,'1009');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1010,'1010');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1011,'1011');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1012,'1012');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1013,'1013');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1014,'1014');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1015,'1015');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1016,'1016');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1017,'1017');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1018,'1018');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1019,'1019');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1020,'1020');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1021,'1021');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1022,'1022');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1023,'1023');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1024,'1024');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1025,'1025');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1026,'1026');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1027,'1027');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1028,'1028');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1029,'1029');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1030,'1030');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1031,'1031');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1032,'1032');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1033,'1033');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1034,'1034');
INSERT INTO t_ebooks(ebook_code,ebook_display) VALUES(1035,'1035');
