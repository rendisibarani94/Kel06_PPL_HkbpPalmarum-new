/*
 Navicat Premium Data Transfer

 Source Server         : Database(MSI)
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : new_db

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 11/12/2023 09:53:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bank
-- ----------------------------
DROP TABLE IF EXISTS `bank`;
CREATE TABLE `bank`  (
  `id_bank` int NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_bank`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bank
-- ----------------------------

-- ----------------------------
-- Table structure for bank_gereja
-- ----------------------------
DROP TABLE IF EXISTS `bank_gereja`;
CREATE TABLE `bank_gereja`  (
  `id_bank_gereja` int NOT NULL AUTO_INCREMENT,
  `id_gereja` int NOT NULL,
  `id_bank` int NOT NULL,
  `nama_pemilik` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_rekening` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_bank_gereja`) USING BTREE,
  INDEX `bank_id_bank_gereja`(`id_bank` ASC) USING BTREE,
  INDEX `gereja_id_bank_gereja`(`id_gereja` ASC) USING BTREE,
  CONSTRAINT `fk_id_bank_bank_gereja` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_gereja_bank_gereja` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bank_gereja
-- ----------------------------

-- ----------------------------
-- Table structure for baptis
-- ----------------------------
DROP TABLE IF EXISTS `baptis`;
CREATE TABLE `baptis`  (
  `id_baptis` int NOT NULL AUTO_INCREMENT,
  `id_registrasi_baptis` int NOT NULL,
  `id_jemaat` int NOT NULL,
  `tgl_baptis` date NOT NULL,
  `no_surat_baptis` int NOT NULL,
  `isHKBP` int NOT NULL DEFAULT 0,
  `id_gereja_baptis` int NOT NULL,
  `nama_gereja_non_HKBP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendeta_baptis` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file_surat_baptis` bigint NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_baptis`) USING BTREE,
  INDEX `gereja_id_baptis`(`id_registrasi_baptis` ASC) USING BTREE,
  INDEX `jemaat_id_baptis`(`id_jemaat` ASC) USING BTREE,
  INDEX `gereja_baptis_id_baptis`(`id_gereja_baptis` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_baptis` FOREIGN KEY (`id_gereja_baptis`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_baptis` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_registrasi_baptis_baptis` FOREIGN KEY (`id_registrasi_baptis`) REFERENCES `registrasi_baptis` (`id_registrasi_baptis`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of baptis
-- ----------------------------

-- ----------------------------
-- Table structure for bidang_pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `bidang_pendidikan`;
CREATE TABLE `bidang_pendidikan`  (
  `id_bidang_pendidikan` int NOT NULL AUTO_INCREMENT,
  `nama_bidang_pendidikan` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_bidang_pendidikan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bidang_pendidikan
-- ----------------------------
INSERT INTO `bidang_pendidikan` VALUES (1, 'Pendidikan Dasar', NULL, '2023-06-05 22:09:28', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (2, 'Pendidikan Menengah', NULL, '2023-06-05 22:10:07', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (3, 'Pendididkan Tinggi', NULL, '2023-06-05 22:10:22', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (4, 'Pendidikan Vokasional', NULL, '2023-06-05 22:11:06', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (5, 'Pendidikan Khusus', NULL, '2023-06-05 22:11:18', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (6, 'Pendidikan Nonformal', NULL, '2023-06-05 22:11:40', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (7, 'Pendidikan Dalam Jaringan', NULL, '2023-06-05 22:11:53', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (8, 'Pendidikan Kejuruan', NULL, '2023-06-05 22:12:06', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (9, 'Pendidikan Sains dan Teknologi', NULL, '2023-06-05 22:12:23', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (10, 'Pendidikan Seni dan Budaya', NULL, '2023-06-05 22:12:36', NULL, 0);
INSERT INTO `bidang_pendidikan` VALUES (11, 'Lainnya', NULL, '2023-06-20 05:05:22', NULL, 0);

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city`  (
  `city_id` int NOT NULL AUTO_INCREMENT,
  `city_code` int NOT NULL,
  `province_id` int NOT NULL,
  `province` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `city_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `postal_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`city_id`) USING BTREE,
  INDEX `fk_province_id_city`(`province_id` ASC) USING BTREE,
  CONSTRAINT `fk_province_id_city` FOREIGN KEY (`province_id`) REFERENCES `province` (`province_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES (1, 15, 34, 'Sumatera Utara', 'Kabupaten', 'Asahan', '21214', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (2, 52, 34, 'Sumatera Utara', 'Kabupaten', 'Batu Bara', '21655', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (3, 70, 34, 'Sumatera Utara', 'Kota', 'Binjai', '20712', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (4, 110, 34, 'Sumatera Utara', 'Kabupaten', 'Dairi', '22211', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (5, 112, 34, 'Sumatera Utara', 'Kabupaten', 'Deli Serdang', '20511', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (6, 137, 34, 'Sumatera Utara', 'Kota', 'Gunungsitoli', '22813', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (7, 146, 34, 'Sumatera Utara', 'Kabupaten', 'Humbang Hasundutan', '22457', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (8, 173, 34, 'Sumatera Utara', 'Kabupaten', 'Karo', '22119', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (9, 217, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu', '21412', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (10, 218, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Selatan', '21511', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (11, 219, 34, 'Sumatera Utara', 'Kabupaten', 'Labuhan Batu Utara', '21711', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (12, 229, 34, 'Sumatera Utara', 'Kabupaten', 'Langkat', '20811', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (13, 268, 34, 'Sumatera Utara', 'Kabupaten', 'Mandailing Natal', '22916', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (14, 278, 34, 'Sumatera Utara', 'Kota', 'Medan', '20228', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (15, 307, 34, 'Sumatera Utara', 'Kabupaten', 'Nias', '22876', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (16, 308, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Barat', '22895', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (17, 309, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Selatan', '22865', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (18, 310, 34, 'Sumatera Utara', 'Kabupaten', 'Nias Utara', '22856', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (19, 319, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas', '22763', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (20, 320, 34, 'Sumatera Utara', 'Kabupaten', 'Padang Lawas Utara', '22753', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (21, 323, 34, 'Sumatera Utara', 'Kota', 'Padang Sidempuan', '22727', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (22, 325, 34, 'Sumatera Utara', 'Kabupaten', 'Pakpak Bharat', '22272', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (23, 353, 34, 'Sumatera Utara', 'Kota', 'Pematang Siantar', '21126', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (24, 389, 34, 'Sumatera Utara', 'Kabupaten', 'Samosir', '22392', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (25, 404, 34, 'Sumatera Utara', 'Kabupaten', 'Serdang Bedagai', '20915', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (26, 407, 34, 'Sumatera Utara', 'Kota', 'Sibolga', '22522', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (27, 413, 34, 'Sumatera Utara', 'Kabupaten', 'Simalungun', '21162', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (28, 459, 34, 'Sumatera Utara', 'Kota', 'Tanjung Balai', '21321', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (29, 463, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Selatan', '22742', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (30, 464, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Tengah', '22611', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (31, 465, 34, 'Sumatera Utara', 'Kabupaten', 'Tapanuli Utara', '22414', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (32, 470, 34, 'Sumatera Utara', 'Kota', 'Tebing Tinggi', '20632', '2023-05-03 16:09:28', NULL, 0);
INSERT INTO `city` VALUES (33, 481, 34, 'Sumatera Utara', 'Kabupaten', 'Toba Samosir', '22316', '2023-05-03 16:09:28', NULL, 0);

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country`  (
  `country_id` int NOT NULL AUTO_INCREMENT,
  `country_code` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `country_name` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `code` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`country_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 251 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES (1, 'AFG', 'Afghanistan', 'AF', NULL, NULL, 0);
INSERT INTO `country` VALUES (2, 'ALA', 'Åland', 'AX', NULL, NULL, 0);
INSERT INTO `country` VALUES (3, 'ALB', 'Albania', 'AL', NULL, NULL, 0);
INSERT INTO `country` VALUES (4, 'DZA', 'Algeria', 'DZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (5, 'ASM', 'American Samoa', 'AS', NULL, NULL, 0);
INSERT INTO `country` VALUES (6, 'AND', 'Andorra', 'AD', NULL, NULL, 0);
INSERT INTO `country` VALUES (7, 'AGO', 'Angola', 'AO', NULL, NULL, 0);
INSERT INTO `country` VALUES (8, 'AIA', 'Anguilla', 'AI', NULL, NULL, 0);
INSERT INTO `country` VALUES (9, 'ATA', 'Antarctica', 'AQ', NULL, NULL, 0);
INSERT INTO `country` VALUES (10, 'ATG', 'Antigua and Barbuda', 'AG', NULL, NULL, 0);
INSERT INTO `country` VALUES (11, 'ARG', 'Argentina', 'AR', NULL, NULL, 0);
INSERT INTO `country` VALUES (12, 'ARM', 'Armenia', 'AM', NULL, NULL, 0);
INSERT INTO `country` VALUES (13, 'ABW', 'Aruba', 'AW', NULL, NULL, 0);
INSERT INTO `country` VALUES (14, 'AUS', 'Australia', 'AU', NULL, NULL, 0);
INSERT INTO `country` VALUES (15, 'AUT', 'Austria', 'AT', NULL, NULL, 0);
INSERT INTO `country` VALUES (16, 'AZE', 'Azerbaijan', 'AZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (17, 'BHS', 'Bahamas', 'BS', NULL, NULL, 0);
INSERT INTO `country` VALUES (18, 'BHR', 'Bahrain', 'BH', NULL, NULL, 0);
INSERT INTO `country` VALUES (19, 'BGD', 'Bangladesh', 'BD', NULL, NULL, 0);
INSERT INTO `country` VALUES (20, 'BRB', 'Barbados', 'BB', NULL, NULL, 0);
INSERT INTO `country` VALUES (21, 'BLR', 'Belarus', 'BY', NULL, NULL, 0);
INSERT INTO `country` VALUES (22, 'BEL', 'Belgium', 'BE', NULL, NULL, 0);
INSERT INTO `country` VALUES (23, 'BLZ', 'Belize', 'BZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (24, 'BEN', 'Benin', 'BJ', NULL, NULL, 0);
INSERT INTO `country` VALUES (25, 'BMU', 'Bermuda', 'BM', NULL, NULL, 0);
INSERT INTO `country` VALUES (26, 'BTN', 'Bhutan', 'BT', NULL, NULL, 0);
INSERT INTO `country` VALUES (27, 'BOL', 'Bolivia', 'BO', NULL, NULL, 0);
INSERT INTO `country` VALUES (28, 'BES', 'Bonaire', 'BQ', NULL, NULL, 0);
INSERT INTO `country` VALUES (29, 'BIH', 'Bosnia and Herzegovina', 'BA', NULL, NULL, 0);
INSERT INTO `country` VALUES (30, 'BWA', 'Botswana', 'BW', NULL, NULL, 0);
INSERT INTO `country` VALUES (31, 'BVT', 'Bouvet Island', 'BV', NULL, NULL, 0);
INSERT INTO `country` VALUES (32, 'BRA', 'Brazil', 'BR', NULL, NULL, 0);
INSERT INTO `country` VALUES (33, 'IOT', 'British Indian Ocean Territory', 'IO', NULL, NULL, 0);
INSERT INTO `country` VALUES (34, 'VGB', 'British Virgin Islands', 'VG', NULL, NULL, 0);
INSERT INTO `country` VALUES (35, 'BRN', 'Brunei', 'BN', NULL, NULL, 0);
INSERT INTO `country` VALUES (36, 'BGR', 'Bulgaria', 'BG', NULL, NULL, 0);
INSERT INTO `country` VALUES (37, 'BFA', 'Burkina Faso', 'BF', NULL, NULL, 0);
INSERT INTO `country` VALUES (38, 'BDI', 'Burundi', 'BI', NULL, NULL, 0);
INSERT INTO `country` VALUES (39, 'KHM', 'Cambodia', 'KH', NULL, NULL, 0);
INSERT INTO `country` VALUES (40, 'CMR', 'Cameroon', 'CM', NULL, NULL, 0);
INSERT INTO `country` VALUES (41, 'CAN', 'Canada', 'CA', NULL, NULL, 0);
INSERT INTO `country` VALUES (42, 'CPV', 'Cape Verde', 'CV', NULL, NULL, 0);
INSERT INTO `country` VALUES (43, 'CYM', 'Cayman Islands', 'KY', NULL, NULL, 0);
INSERT INTO `country` VALUES (44, 'CAF', 'Central African Republic', 'CF', NULL, NULL, 0);
INSERT INTO `country` VALUES (45, 'TCD', 'Chad', 'TD', NULL, NULL, 0);
INSERT INTO `country` VALUES (46, 'CHL', 'Chile', 'CL', NULL, NULL, 0);
INSERT INTO `country` VALUES (47, 'CHN', 'China', 'CN', NULL, NULL, 0);
INSERT INTO `country` VALUES (48, 'CXR', 'Christmas Island', 'CX', NULL, NULL, 0);
INSERT INTO `country` VALUES (49, 'CCK', 'Cocos [Keeling] Islands', 'CC', NULL, NULL, 0);
INSERT INTO `country` VALUES (50, 'COL', 'Colombia', 'CO', NULL, NULL, 0);
INSERT INTO `country` VALUES (51, 'COM', 'Comoros', 'KM', NULL, NULL, 0);
INSERT INTO `country` VALUES (52, 'COK', 'Cook Islands', 'CK', NULL, NULL, 0);
INSERT INTO `country` VALUES (53, 'CRI', 'Costa Rica', 'CR', NULL, NULL, 0);
INSERT INTO `country` VALUES (54, 'HRV', 'Croatia', 'HR', NULL, NULL, 0);
INSERT INTO `country` VALUES (55, 'CUB', 'Cuba', 'CU', NULL, NULL, 0);
INSERT INTO `country` VALUES (56, 'CUW', 'Curacao', 'CW', NULL, NULL, 0);
INSERT INTO `country` VALUES (57, 'CYP', 'Cyprus', 'CY', NULL, NULL, 0);
INSERT INTO `country` VALUES (58, 'CZE', 'Czech Republic', 'CZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (59, 'COD', 'Democratic Republic of the Congo', 'CD', NULL, NULL, 0);
INSERT INTO `country` VALUES (60, 'DNK', 'Denmark', 'DK', NULL, NULL, 0);
INSERT INTO `country` VALUES (61, 'DJI', 'Djibouti', 'DJ', NULL, NULL, 0);
INSERT INTO `country` VALUES (62, 'DMA', 'Dominica', 'DM', NULL, NULL, 0);
INSERT INTO `country` VALUES (63, 'DOM', 'Dominican Republic', 'DO', NULL, NULL, 0);
INSERT INTO `country` VALUES (64, 'TLS', 'East Timor', 'TL', NULL, NULL, 0);
INSERT INTO `country` VALUES (65, 'ECU', 'Ecuador', 'EC', NULL, NULL, 0);
INSERT INTO `country` VALUES (66, 'EGY', 'Egypt', 'EG', NULL, NULL, 0);
INSERT INTO `country` VALUES (67, 'SLV', 'El Salvador', 'SV', NULL, NULL, 0);
INSERT INTO `country` VALUES (68, 'GNQ', 'Equatorial Guinea', 'GQ', NULL, NULL, 0);
INSERT INTO `country` VALUES (69, 'ERI', 'Eritrea', 'ER', NULL, NULL, 0);
INSERT INTO `country` VALUES (70, 'EST', 'Estonia', 'EE', NULL, NULL, 0);
INSERT INTO `country` VALUES (71, 'ETH', 'Ethiopia', 'ET', NULL, NULL, 0);
INSERT INTO `country` VALUES (72, 'FLK', 'Falkland Islands', 'FK', NULL, NULL, 0);
INSERT INTO `country` VALUES (73, 'FRO', 'Faroe Islands', 'FO', NULL, NULL, 0);
INSERT INTO `country` VALUES (74, 'FJI', 'Fiji', 'FJ', NULL, NULL, 0);
INSERT INTO `country` VALUES (75, 'FIN', 'Finland', 'FI', NULL, NULL, 0);
INSERT INTO `country` VALUES (76, 'FRA', 'France', 'FR', NULL, NULL, 0);
INSERT INTO `country` VALUES (77, 'GUF', 'French Guiana', 'GF', NULL, NULL, 0);
INSERT INTO `country` VALUES (78, 'PYF', 'French Polynesia', 'PF', NULL, NULL, 0);
INSERT INTO `country` VALUES (79, 'ATF', 'French Southern Territories', 'TF', NULL, NULL, 0);
INSERT INTO `country` VALUES (80, 'GAB', 'Gabon', 'GA', NULL, NULL, 0);
INSERT INTO `country` VALUES (81, 'GMB', 'Gambia', 'GM', NULL, NULL, 0);
INSERT INTO `country` VALUES (82, 'GEO', 'Georgia', 'GE', NULL, NULL, 0);
INSERT INTO `country` VALUES (83, 'DEU', 'Germany', 'DE', NULL, NULL, 0);
INSERT INTO `country` VALUES (84, 'GHA', 'Ghana', 'GH', NULL, NULL, 0);
INSERT INTO `country` VALUES (85, 'GIB', 'Gibraltar', 'GI', NULL, NULL, 0);
INSERT INTO `country` VALUES (86, 'GRC', 'Greece', 'GR', NULL, NULL, 0);
INSERT INTO `country` VALUES (87, 'GRL', 'Greenland', 'GL', NULL, NULL, 0);
INSERT INTO `country` VALUES (88, 'GRD', 'Grenada', 'GD', NULL, NULL, 0);
INSERT INTO `country` VALUES (89, 'GLP', 'Guadeloupe', 'GP', NULL, NULL, 0);
INSERT INTO `country` VALUES (90, 'GUM', 'Guam', 'GU', NULL, NULL, 0);
INSERT INTO `country` VALUES (91, 'GTM', 'Guatemala', 'GT', NULL, NULL, 0);
INSERT INTO `country` VALUES (92, 'GGY', 'Guernsey', 'GG', NULL, NULL, 0);
INSERT INTO `country` VALUES (93, 'GIN', 'Guinea', 'GN', NULL, NULL, 0);
INSERT INTO `country` VALUES (94, 'GNB', 'Guinea-Bissau', 'GW', NULL, NULL, 0);
INSERT INTO `country` VALUES (95, 'GUY', 'Guyana', 'GY', NULL, NULL, 0);
INSERT INTO `country` VALUES (96, 'HTI', 'Haiti', 'HT', NULL, NULL, 0);
INSERT INTO `country` VALUES (97, 'HMD', 'Heard Island and McDonald Islands', 'HM', NULL, NULL, 0);
INSERT INTO `country` VALUES (98, 'HND', 'Honduras', 'HN', NULL, NULL, 0);
INSERT INTO `country` VALUES (99, 'HKG', 'Hong Kong', 'HK', NULL, NULL, 0);
INSERT INTO `country` VALUES (100, 'HUN', 'Hungary', 'HU', NULL, NULL, 0);
INSERT INTO `country` VALUES (101, 'ISL', 'Iceland', 'IS', NULL, NULL, 0);
INSERT INTO `country` VALUES (102, 'IND', 'India', 'IN', NULL, NULL, 0);
INSERT INTO `country` VALUES (103, 'IDN', 'Indonesia', 'ID', NULL, NULL, 0);
INSERT INTO `country` VALUES (104, 'IRN', 'Iran', 'IR', NULL, NULL, 0);
INSERT INTO `country` VALUES (105, 'IRQ', 'Iraq', 'IQ', NULL, NULL, 0);
INSERT INTO `country` VALUES (106, 'IRL', 'Ireland', 'IE', NULL, NULL, 0);
INSERT INTO `country` VALUES (107, 'IMN', 'Isle of Man', 'IM', NULL, NULL, 0);
INSERT INTO `country` VALUES (108, 'ISR', 'Israel', 'IL', NULL, NULL, 0);
INSERT INTO `country` VALUES (109, 'ITA', 'Italy', 'IT', NULL, NULL, 0);
INSERT INTO `country` VALUES (110, 'CIV', 'Ivory Coast', 'CI', NULL, NULL, 0);
INSERT INTO `country` VALUES (111, 'JAM', 'Jamaica', 'JM', NULL, NULL, 0);
INSERT INTO `country` VALUES (112, 'JPN', 'Japan', 'JP', NULL, NULL, 0);
INSERT INTO `country` VALUES (113, 'JEY', 'Jersey', 'JE', NULL, NULL, 0);
INSERT INTO `country` VALUES (114, 'JOR', 'Jordan', 'JO', NULL, NULL, 0);
INSERT INTO `country` VALUES (115, 'KAZ', 'Kazakhstan', 'KZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (116, 'KEN', 'Kenya', 'KE', NULL, NULL, 0);
INSERT INTO `country` VALUES (117, 'KIR', 'Kiribati', 'KI', NULL, NULL, 0);
INSERT INTO `country` VALUES (118, 'XKX', 'Kosovo', 'XK', NULL, NULL, 0);
INSERT INTO `country` VALUES (119, 'KWT', 'Kuwait', 'KW', NULL, NULL, 0);
INSERT INTO `country` VALUES (120, 'KGZ', 'Kyrgyzstan', 'KG', NULL, NULL, 0);
INSERT INTO `country` VALUES (121, 'LAO', 'Laos', 'LA', NULL, NULL, 0);
INSERT INTO `country` VALUES (122, 'LVA', 'Latvia', 'LV', NULL, NULL, 0);
INSERT INTO `country` VALUES (123, 'LBN', 'Lebanon', 'LB', NULL, NULL, 0);
INSERT INTO `country` VALUES (124, 'LSO', 'Lesotho', 'LS', NULL, NULL, 0);
INSERT INTO `country` VALUES (125, 'LBR', 'Liberia', 'LR', NULL, NULL, 0);
INSERT INTO `country` VALUES (126, 'LBY', 'Libya', 'LY', NULL, NULL, 0);
INSERT INTO `country` VALUES (127, 'LIE', 'Liechtenstein', 'LI', NULL, NULL, 0);
INSERT INTO `country` VALUES (128, 'LTU', 'Lithuania', 'LT', NULL, NULL, 0);
INSERT INTO `country` VALUES (129, 'LUX', 'Luxembourg', 'LU', NULL, NULL, 0);
INSERT INTO `country` VALUES (130, 'MAC', 'Macao', 'MO', NULL, NULL, 0);
INSERT INTO `country` VALUES (131, 'MKD', 'Macedonia', 'MK', NULL, NULL, 0);
INSERT INTO `country` VALUES (132, 'MDG', 'Madagascar', 'MG', NULL, NULL, 0);
INSERT INTO `country` VALUES (133, 'MWI', 'Malawi', 'MW', NULL, NULL, 0);
INSERT INTO `country` VALUES (134, 'MYS', 'Malaysia', 'MY', NULL, NULL, 0);
INSERT INTO `country` VALUES (135, 'MDV', 'Maldives', 'MV', NULL, NULL, 0);
INSERT INTO `country` VALUES (136, 'MLI', 'Mali', 'ML', NULL, NULL, 0);
INSERT INTO `country` VALUES (137, 'MLT', 'Malta', 'MT', NULL, NULL, 0);
INSERT INTO `country` VALUES (138, 'MHL', 'Marshall Islands', 'MH', NULL, NULL, 0);
INSERT INTO `country` VALUES (139, 'MTQ', 'Martinique', 'MQ', NULL, NULL, 0);
INSERT INTO `country` VALUES (140, 'MRT', 'Mauritania', 'MR', NULL, NULL, 0);
INSERT INTO `country` VALUES (141, 'MUS', 'Mauritius', 'MU', NULL, NULL, 0);
INSERT INTO `country` VALUES (142, 'MYT', 'Mayotte', 'YT', NULL, NULL, 0);
INSERT INTO `country` VALUES (143, 'MEX', 'Mexico', 'MX', NULL, NULL, 0);
INSERT INTO `country` VALUES (144, 'FSM', 'Micronesia', 'FM', NULL, NULL, 0);
INSERT INTO `country` VALUES (145, 'MDA', 'Moldova', 'MD', NULL, NULL, 0);
INSERT INTO `country` VALUES (146, 'MCO', 'Monaco', 'MC', NULL, NULL, 0);
INSERT INTO `country` VALUES (147, 'MNG', 'Mongolia', 'MN', NULL, NULL, 0);
INSERT INTO `country` VALUES (148, 'MNE', 'Montenegro', 'ME', NULL, NULL, 0);
INSERT INTO `country` VALUES (149, 'MSR', 'Montserrat', 'MS', NULL, NULL, 0);
INSERT INTO `country` VALUES (150, 'MAR', 'Morocco', 'MA', NULL, NULL, 0);
INSERT INTO `country` VALUES (151, 'MOZ', 'Mozambique', 'MZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (152, 'MMR', 'Myanmar [Burma]', 'MM', NULL, NULL, 0);
INSERT INTO `country` VALUES (153, 'NAM', 'Namibia', 'NA', NULL, NULL, 0);
INSERT INTO `country` VALUES (154, 'NRU', 'Nauru', 'NR', NULL, NULL, 0);
INSERT INTO `country` VALUES (155, 'NPL', 'Nepal', 'NP', NULL, NULL, 0);
INSERT INTO `country` VALUES (156, 'NLD', 'Netherlands', 'NL', NULL, NULL, 0);
INSERT INTO `country` VALUES (157, 'NCL', 'New Caledonia', 'NC', NULL, NULL, 0);
INSERT INTO `country` VALUES (158, 'NZL', 'New Zealand', 'NZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (159, 'NIC', 'Nicaragua', 'NI', NULL, NULL, 0);
INSERT INTO `country` VALUES (160, 'NER', 'Niger', 'NE', NULL, NULL, 0);
INSERT INTO `country` VALUES (161, 'NGA', 'Nigeria', 'NG', NULL, NULL, 0);
INSERT INTO `country` VALUES (162, 'NIU', 'Niue', 'NU', NULL, NULL, 0);
INSERT INTO `country` VALUES (163, 'NFK', 'Norfolk Island', 'NF', NULL, NULL, 0);
INSERT INTO `country` VALUES (164, 'PRK', 'North Korea', 'KP', NULL, NULL, 0);
INSERT INTO `country` VALUES (165, 'MNP', 'Northern Mariana Islands', 'MP', NULL, NULL, 0);
INSERT INTO `country` VALUES (166, 'NOR', 'Norway', 'NO', NULL, NULL, 0);
INSERT INTO `country` VALUES (167, 'OMN', 'Oman', 'OM', NULL, NULL, 0);
INSERT INTO `country` VALUES (168, 'PAK', 'Pakistan', 'PK', NULL, NULL, 0);
INSERT INTO `country` VALUES (169, 'PLW', 'Palau', 'PW', NULL, NULL, 0);
INSERT INTO `country` VALUES (170, 'PSE', 'Palestine', 'PS', NULL, NULL, 0);
INSERT INTO `country` VALUES (171, 'PAN', 'Panama', 'PA', NULL, NULL, 0);
INSERT INTO `country` VALUES (172, 'PNG', 'Papua New Guinea', 'PG', NULL, NULL, 0);
INSERT INTO `country` VALUES (173, 'PRY', 'Paraguay', 'PY', NULL, NULL, 0);
INSERT INTO `country` VALUES (174, 'PER', 'Peru', 'PE', NULL, NULL, 0);
INSERT INTO `country` VALUES (175, 'PHL', 'Philippines', 'PH', NULL, NULL, 0);
INSERT INTO `country` VALUES (176, 'PCN', 'Pitcairn Islands', 'PN', NULL, NULL, 0);
INSERT INTO `country` VALUES (177, 'POL', 'Poland', 'PL', NULL, NULL, 0);
INSERT INTO `country` VALUES (178, 'PRT', 'Portugal', 'PT', NULL, NULL, 0);
INSERT INTO `country` VALUES (179, 'PRI', 'Puerto Rico', 'PR', NULL, NULL, 0);
INSERT INTO `country` VALUES (180, 'QAT', 'Qatar', 'QA', NULL, NULL, 0);
INSERT INTO `country` VALUES (181, 'COG', 'Republic of the Congo', 'CG', NULL, NULL, 0);
INSERT INTO `country` VALUES (182, 'REU', 'Réunion', 'RE', NULL, NULL, 0);
INSERT INTO `country` VALUES (183, 'ROU', 'Romania', 'RO', NULL, NULL, 0);
INSERT INTO `country` VALUES (184, 'RUS', 'Russia', 'RU', NULL, NULL, 0);
INSERT INTO `country` VALUES (185, 'RWA', 'Rwanda', 'RW', NULL, NULL, 0);
INSERT INTO `country` VALUES (186, 'BLM', 'Saint Barthélemy', 'BL', NULL, NULL, 0);
INSERT INTO `country` VALUES (187, 'SHN', 'Saint Helena', 'SH', NULL, NULL, 0);
INSERT INTO `country` VALUES (188, 'KNA', 'Saint Kitts and Nevis', 'KN', NULL, NULL, 0);
INSERT INTO `country` VALUES (189, 'LCA', 'Saint Lucia', 'LC', NULL, NULL, 0);
INSERT INTO `country` VALUES (190, 'MAF', 'Saint Martin', 'MF', NULL, NULL, 0);
INSERT INTO `country` VALUES (191, 'SPM', 'Saint Pierre and Miquelon', 'PM', NULL, NULL, 0);
INSERT INTO `country` VALUES (192, 'VCT', 'Saint Vincent and the Grenadines', 'VC', NULL, NULL, 0);
INSERT INTO `country` VALUES (193, 'WSM', 'Samoa', 'WS', NULL, NULL, 0);
INSERT INTO `country` VALUES (194, 'SMR', 'San Marino', 'SM', NULL, NULL, 0);
INSERT INTO `country` VALUES (195, 'STP', 'São Tomé and Príncipe', 'ST', NULL, NULL, 0);
INSERT INTO `country` VALUES (196, 'SAU', 'Saudi Arabia', 'SA', NULL, NULL, 0);
INSERT INTO `country` VALUES (197, 'SEN', 'Senegal', 'SN', NULL, NULL, 0);
INSERT INTO `country` VALUES (198, 'SRB', 'Serbia', 'RS', NULL, NULL, 0);
INSERT INTO `country` VALUES (199, 'SYC', 'Seychelles', 'SC', NULL, NULL, 0);
INSERT INTO `country` VALUES (200, 'SLE', 'Sierra Leone', 'SL', NULL, NULL, 0);
INSERT INTO `country` VALUES (201, 'SGP', 'Singapore', 'SG', NULL, NULL, 0);
INSERT INTO `country` VALUES (202, 'SXM', 'Sint Maarten', 'SX', NULL, NULL, 0);
INSERT INTO `country` VALUES (203, 'SVK', 'Slovakia', 'SK', NULL, NULL, 0);
INSERT INTO `country` VALUES (204, 'SVN', 'Slovenia', 'SI', NULL, NULL, 0);
INSERT INTO `country` VALUES (205, 'SLB', 'Solomon Islands', 'SB', NULL, NULL, 0);
INSERT INTO `country` VALUES (206, 'SOM', 'Somalia', 'SO', NULL, NULL, 0);
INSERT INTO `country` VALUES (207, 'ZAF', 'South Africa', 'ZA', NULL, NULL, 0);
INSERT INTO `country` VALUES (208, 'SGS', 'South Georgia and the South Sandwich Islands', 'GS', NULL, NULL, 0);
INSERT INTO `country` VALUES (209, 'KOR', 'South Korea', 'KR', NULL, NULL, 0);
INSERT INTO `country` VALUES (210, 'SSD', 'South Sudan', 'SS', NULL, NULL, 0);
INSERT INTO `country` VALUES (211, 'ESP', 'Spain', 'ES', NULL, NULL, 0);
INSERT INTO `country` VALUES (212, 'LKA', 'Sri Lanka', 'LK', NULL, NULL, 0);
INSERT INTO `country` VALUES (213, 'SDN', 'Sudan', 'SD', NULL, NULL, 0);
INSERT INTO `country` VALUES (214, 'SUR', 'Suriname', 'SR', NULL, NULL, 0);
INSERT INTO `country` VALUES (215, 'SJM', 'Svalbard and Jan Mayen', 'SJ', NULL, NULL, 0);
INSERT INTO `country` VALUES (216, 'SWZ', 'Swaziland', 'SZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (217, 'SWE', 'Sweden', 'SE', NULL, NULL, 0);
INSERT INTO `country` VALUES (218, 'CHE', 'Switzerland', 'CH', NULL, NULL, 0);
INSERT INTO `country` VALUES (219, 'SYR', 'Syria', 'SY', NULL, NULL, 0);
INSERT INTO `country` VALUES (220, 'TWN', 'Taiwan', 'TW', NULL, NULL, 0);
INSERT INTO `country` VALUES (221, 'TJK', 'Tajikistan', 'TJ', NULL, NULL, 0);
INSERT INTO `country` VALUES (222, 'TZA', 'Tanzania', 'TZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (223, 'THA', 'Thailand', 'TH', NULL, NULL, 0);
INSERT INTO `country` VALUES (224, 'TGO', 'Togo', 'TG', NULL, NULL, 0);
INSERT INTO `country` VALUES (225, 'TKL', 'Tokelau', 'TK', NULL, NULL, 0);
INSERT INTO `country` VALUES (226, 'TON', 'Tonga', 'TO', NULL, NULL, 0);
INSERT INTO `country` VALUES (227, 'TTO', 'Trinidad and Tobago', 'TT', NULL, NULL, 0);
INSERT INTO `country` VALUES (228, 'TUN', 'Tunisia', 'TN', NULL, NULL, 0);
INSERT INTO `country` VALUES (229, 'TUR', 'Turkey', 'TR', NULL, NULL, 0);
INSERT INTO `country` VALUES (230, 'TKM', 'Turkmenistan', 'TM', NULL, NULL, 0);
INSERT INTO `country` VALUES (231, 'TCA', 'Turks and Caicos Islands', 'TC', NULL, NULL, 0);
INSERT INTO `country` VALUES (232, 'TUV', 'Tuvalu', 'TV', NULL, NULL, 0);
INSERT INTO `country` VALUES (233, 'UMI', 'U.S. Minor Outlying Islands', 'UM', NULL, NULL, 0);
INSERT INTO `country` VALUES (234, 'VIR', 'U.S. Virgin Islands', 'VI', NULL, NULL, 0);
INSERT INTO `country` VALUES (235, 'UGA', 'Uganda', 'UG', NULL, NULL, 0);
INSERT INTO `country` VALUES (236, 'UKR', 'Ukraine', 'UA', NULL, NULL, 0);
INSERT INTO `country` VALUES (237, 'ARE', 'United Arab Emirates', 'AE', NULL, NULL, 0);
INSERT INTO `country` VALUES (238, 'GBR', 'United Kingdom', 'GB', NULL, NULL, 0);
INSERT INTO `country` VALUES (239, 'USA', 'United States', 'US', NULL, NULL, 0);
INSERT INTO `country` VALUES (240, 'URY', 'Uruguay', 'UY', NULL, NULL, 0);
INSERT INTO `country` VALUES (241, 'UZB', 'Uzbekistan', 'UZ', NULL, NULL, 0);
INSERT INTO `country` VALUES (242, 'VUT', 'Vanuatu', 'VU', NULL, NULL, 0);
INSERT INTO `country` VALUES (243, 'VAT', 'Vatican City', 'VA', NULL, NULL, 0);
INSERT INTO `country` VALUES (244, 'VEN', 'Venezuela', 'VE', NULL, NULL, 0);
INSERT INTO `country` VALUES (245, 'VNM', 'Vietnam', 'VN', NULL, NULL, 0);
INSERT INTO `country` VALUES (246, 'WLF', 'Wallis and Futuna', 'WF', NULL, NULL, 0);
INSERT INTO `country` VALUES (247, 'ESH', 'Western Sahara', 'EH', NULL, NULL, 0);
INSERT INTO `country` VALUES (248, 'YEM', 'Yemen', 'YE', NULL, NULL, 0);
INSERT INTO `country` VALUES (249, 'ZMB', 'Zambia', 'ZM', NULL, NULL, 0);
INSERT INTO `country` VALUES (250, 'ZWE', 'Zimbabwe', 'ZW', NULL, NULL, 0);

-- ----------------------------
-- Table structure for det_registrasi_jemaat
-- ----------------------------
DROP TABLE IF EXISTS `det_registrasi_jemaat`;
CREATE TABLE `det_registrasi_jemaat`  (
  `id_det_registrasi` int NOT NULL AUTO_INCREMENT,
  `id_registrasi` int NOT NULL COMMENT ' ',
  `id_jemaat` int NOT NULL,
  `id_status` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_det_registrasi`) USING BTREE,
  INDEX `jemaat_id_det_registrasi_jemaat`(`id_jemaat` ASC) USING BTREE,
  INDEX `status_id_det_registrasi_jemaat`(`id_status` ASC) USING BTREE,
  INDEX `fk_id_registrasi_det_registrasi_jemaat`(`id_registrasi` ASC) USING BTREE,
  CONSTRAINT `fk_id_jemaat_det_registrasi_jemaat` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_registrasi_det_registrasi_jemaat` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi_jemaat` (`id_registrasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_det_registrasi_jemaat` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of det_registrasi_jemaat
-- ----------------------------

-- ----------------------------
-- Table structure for detail_pindah
-- ----------------------------
DROP TABLE IF EXISTS `detail_pindah`;
CREATE TABLE `detail_pindah`  (
  `id_det_reg_pindah` int NOT NULL AUTO_INCREMENT,
  `id_jemaat` int NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_det_reg_pindah`) USING BTREE,
  INDEX `jemaat_id_pindah`(`id_jemaat` ASC) USING BTREE,
  CONSTRAINT `fk_id_jemaat_pindah` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detail_pindah
-- ----------------------------

-- ----------------------------
-- Table structure for detail_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `detail_transaksi`;
CREATE TABLE `detail_transaksi`  (
  `id_transaksi` int NOT NULL AUTO_INCREMENT,
  `id_mata_anggaran` int NOT NULL,
  `jumlah_sentralisasi` int NOT NULL DEFAULT 0,
  `jumlah_gereja` int NOT NULL DEFAULT 0,
  `bulan_awal` int NOT NULL,
  `bulan_akhir` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id_transaksi`) USING BTREE,
  INDEX `fk_id_mata_anggaran_detail_transaksi`(`id_mata_anggaran` ASC) USING BTREE,
  CONSTRAINT `fk_id_mata_anggaran_detail_transaksi` FOREIGN KEY (`id_mata_anggaran`) REFERENCES `mata_anggaran` (`id_mata_anggaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of detail_transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for distrik
-- ----------------------------
DROP TABLE IF EXISTS `distrik`;
CREATE TABLE `distrik`  (
  `id_distrik` int NOT NULL AUTO_INCREMENT,
  `kode_distrik` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_distrik` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kota` int NOT NULL,
  `nama_pareses` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_distrik`) USING BTREE,
  INDEX `fk_id_kota_distrik`(`id_kota` ASC) USING BTREE,
  CONSTRAINT `fk_id_kota_distrik` FOREIGN KEY (`id_kota`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of distrik
-- ----------------------------
INSERT INTO `distrik` VALUES (1, '02', 'Silindung', 'Tapanuli Utara', 31, 'Pdt. Hasudungan Manalu', '2023-05-08 11:53:00', NULL, 0);

-- ----------------------------
-- Table structure for gereja
-- ----------------------------
DROP TABLE IF EXISTS `gereja`;
CREATE TABLE `gereja`  (
  `id_gereja` int NOT NULL AUTO_INCREMENT,
  `id_ressort` int NOT NULL,
  `id_jenis_gereja` int NOT NULL,
  `kode_gereja` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_gereja` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kota` int NOT NULL,
  `nama_pendeta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `jenis_gereja` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_gereja`) USING BTREE,
  INDEX `ressort_id_gereja`(`id_ressort` ASC) USING BTREE,
  INDEX `jenis_gereja_id_gereja`(`id_jenis_gereja` ASC) USING BTREE,
  INDEX `fk_id_kota_gereja`(`id_kota` ASC) USING BTREE,
  CONSTRAINT `fk_id_jenis_gereja_gereja` FOREIGN KEY (`id_jenis_gereja`) REFERENCES `jenis_gereja` (`id_jenis_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_kota_gereja` FOREIGN KEY (`id_kota`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_ressort_gereja` FOREIGN KEY (`id_ressort`) REFERENCES `ressort` (`id_ressort`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gereja
-- ----------------------------
INSERT INTO `gereja` VALUES (1, 1, 1, '0243', 'HKBP Palmarum', 'Stadion Tarutung, Hutatoruan VI, Kec. Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara', 31, 'Pdt. Martin Gultom. SSi. Teol', '1999-06-20', 'Tanpa Pagaran', '2023-05-09 15:34:18', NULL, 0);

-- ----------------------------
-- Table structure for head_pindah
-- ----------------------------
DROP TABLE IF EXISTS `head_pindah`;
CREATE TABLE `head_pindah`  (
  `id_head_reg_pindah` int NOT NULL AUTO_INCREMENT,
  `id_registrasi` int NOT NULL,
  `id_jemaat` int NOT NULL,
  `id_gereja` int NULL DEFAULT 1,
  `no_surat_pindah` int NULL DEFAULT NULL,
  `tgl_pindah` date NULL DEFAULT NULL,
  `tgl_warta` date NULL DEFAULT NULL,
  `id_jenis_registrasi` int NULL DEFAULT 2,
  `id_gereja_tujuan` int NULL DEFAULT NULL,
  `nama_gereja` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` int NULL DEFAULT 0,
  `id_user` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id_head_reg_pindah`) USING BTREE,
  INDEX `registrasi_id_head_pindah`(`id_registrasi` ASC) USING BTREE,
  INDEX `gereja_id_head_pindah`(`id_gereja` ASC) USING BTREE,
  INDEX `jenis_registrasi_id_head_pindah`(`id_jenis_registrasi` ASC) USING BTREE,
  INDEX `fk_id_jemaat_head_pindah`(`id_jemaat` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_pindah`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_head_pindah` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_head_pindah` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jenis_registrasi_head_pindah` FOREIGN KEY (`id_jenis_registrasi`) REFERENCES `jenis_registrasi` (`id_jenis_registrasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_registrasi_head_pindah` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi_jemaat` (`id_registrasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_pindah` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of head_pindah
-- ----------------------------
INSERT INTO `head_pindah` VALUES (2, 107, 2, 1, 1832, '2023-06-04', '2023-06-13', 2, 0, 'Parso', 'melayat, akh masak iyaaa', '2023-06-06 11:14:54', '2023-06-18 11:20:54', 0, 2, 0);
INSERT INTO `head_pindah` VALUES (3, 55, 2, 1, NULL, '2023-05-28', NULL, 2, NULL, 'Parso', 'asdfg', '2023-06-06 11:26:27', '2023-06-18 11:20:58', 0, 0, 0);
INSERT INTO `head_pindah` VALUES (4, 1, 1, 1, NULL, '2023-05-28', NULL, 2, NULL, 'adsad', 'wwewe', '2023-06-06 11:27:00', NULL, 0, 1, 0);
INSERT INTO `head_pindah` VALUES (5, 3, 2, 1, 1832, '2023-06-01', NULL, 2, 0, 'Parso', 'Testing1', '2023-06-13 22:47:18', '2023-12-11 09:49:35', 0, 2, 6);
INSERT INTO `head_pindah` VALUES (6, 3, 3, 1, 1832, '2023-05-31', '2023-06-15', 2, 0, 'Parso', 'mwehehehe', '2023-06-14 00:36:24', '2023-06-18 13:21:29', 0, 1, 6);
INSERT INTO `head_pindah` VALUES (7, 6, 9, 1, 1832, '2023-06-15', '2023-06-14', 2, 0, 'asd', 'asdasdasd', '2023-06-18 11:22:00', '2023-06-18 11:22:12', 0, 1, NULL);

-- ----------------------------
-- Table structure for head_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `head_transaksi`;
CREATE TABLE `head_transaksi`  (
  `id_transaksi` int NOT NULL,
  `jenis_transaksi` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_transaksi` int NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tahun_anggaran` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_warta` date NOT NULL,
  `is_Jemaat` tinyint(1) NOT NULL DEFAULT 0,
  `id_jemaat` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_transaksi`) USING BTREE,
  INDEX `fk_id_jemaat_head_transaksi`(`id_jemaat` ASC) USING BTREE,
  CONSTRAINT `fk_id_jemaat_head_transaksi` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of head_transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for hubungan_keluarga
-- ----------------------------
DROP TABLE IF EXISTS `hubungan_keluarga`;
CREATE TABLE `hubungan_keluarga`  (
  `id_hub_keluarga` int NOT NULL AUTO_INCREMENT,
  `nama_hub_keluarga` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_hub_keluarga`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of hubungan_keluarga
-- ----------------------------
INSERT INTO `hubungan_keluarga` VALUES (1, 'Kepala Keluarga', '', '2023-05-10 15:48:26', NULL, 0);
INSERT INTO `hubungan_keluarga` VALUES (2, 'Istri', '', '2023-05-10 15:48:36', NULL, 0);
INSERT INTO `hubungan_keluarga` VALUES (3, 'Anak', '', '2023-05-10 15:48:41', NULL, 0);
INSERT INTO `hubungan_keluarga` VALUES (4, 'Tanggungan', '', '2023-05-10 15:48:46', NULL, 0);

-- ----------------------------
-- Table structure for jadwal_ibadah
-- ----------------------------
DROP TABLE IF EXISTS `jadwal_ibadah`;
CREATE TABLE `jadwal_ibadah`  (
  `id_jadwal_ibadah` int NOT NULL AUTO_INCREMENT,
  `tgl_ibadah` date NOT NULL,
  `id_jenis_minggu` int NULL DEFAULT NULL,
  `id_melayani` int NULL DEFAULT NULL,
  `jumlah_pelayan` int NOT NULL,
  `waktu_mulai` time NOT NULL DEFAULT current_timestamp,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_1` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `votum` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_2` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `hukum_taurat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pengakuan_dosa` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_4` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `epistel` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_5` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pengakuan_iman` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_6` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `khotbah` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nyanyian_7` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `doa_penutup` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jadwal_ibadah`) USING BTREE,
  INDEX `jenis_minggu_id_jadwal_ibadah`(`id_jenis_minggu` ASC) USING BTREE,
  INDEX `fk_id_melayani_jadwal_ibadah`(`id_melayani` ASC) USING BTREE,
  CONSTRAINT `fk_id_jenis_minggu_jadwal_ibadah` FOREIGN KEY (`id_jenis_minggu`) REFERENCES `jenis_minggu` (`id_jenis_minggu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_melayani_jadwal_ibadah` FOREIGN KEY (`id_melayani`) REFERENCES `pelayan_gereja` (`id_pelayan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jadwal_ibadah
-- ----------------------------
INSERT INTO `jadwal_ibadah` VALUES (11, '2023-06-04', 1, 4, 2, '12:01:32', 'Minggu Siang', '559 : 1 - 3', 'A. XIV/A - D. XII/35', '113 : 1', '1 + Artinya', '688 : 1 - 2', 'B.5 - C.6', '128 : 1', 'MATIUS 11 : 25 - 27', '116 : 1 + 4', 'Oleh Pendeta', '112 : 1 .......... Persembahan 1A, 1B', 'KEJADIAN 1 : 1 -2, 26 - 28', '679 : 1 ......... Pelean 2', 'Amen, Amen, Amen', '2023-06-10 02:58:14', '2023-06-19 16:34:05', 0);
INSERT INTO `jadwal_ibadah` VALUES (14, '2023-06-17', 1, 4, 2, '08:00:00', 'testing jo poang', 'asd', 'dsa', 'asd', 'dsa', 'asd', 'dsa', 'asd', 'dsa', 'asd', 'dsa', 'asd', 'dsa', 'asd', 'ya doa penutup', '2023-06-16 17:04:38', '2023-06-16 17:04:59', 0);
INSERT INTO `jadwal_ibadah` VALUES (15, '2023-06-10', 1, 4, 1, '09:19:00', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asdas', 'asdasd', 'assdads', 'asdsada', '123123', '2023-06-18 09:17:00', '2023-06-18 09:17:31', 0);
INSERT INTO `jadwal_ibadah` VALUES (16, '2023-06-21', 1, 4, 123, '12:46:00', 'testing', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'doa Penutup2', '2023-06-18 12:43:42', '2023-06-18 12:44:07', 0);
INSERT INTO `jadwal_ibadah` VALUES (17, '2023-06-23', 1, 4, 2, '13:48:00', 'testing', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'doa Penutup1', '2023-06-18 13:44:53', '2023-06-18 13:47:59', 0);
INSERT INTO `jadwal_ibadah` VALUES (18, '2023-06-06', 1, 4, 2, '17:23:00', 'testing1', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'doa Penutup1', '2023-06-18 17:21:36', '2023-12-11 09:47:51', 0);

-- ----------------------------
-- Table structure for jemaat
-- ----------------------------
DROP TABLE IF EXISTS `jemaat`;
CREATE TABLE `jemaat`  (
  `id_jemaat` int NOT NULL AUTO_INCREMENT,
  `id_registrasi` int NULL DEFAULT NULL,
  `id_user` int UNSIGNED NULL DEFAULT NULL,
  `nama_depan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_belakang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_depan` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `gelar_belakang` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `tempat_lahir` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_hub_keluarga` int NULL DEFAULT NULL,
  `id_status_pernikahan` int NULL DEFAULT 3,
  `id_pendidikan` int NULL DEFAULT NULL,
  `id_bidang_pendidikan` int NULL DEFAULT NULL,
  `id_bidang_pendidikan_lain` int NULL DEFAULT NULL,
  `id_pekerjaan` int NULL DEFAULT NULL,
  `nama_pekerjaan_lain` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gol_darah` char(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_kota` int NULL DEFAULT 31,
  `no_telepon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `isSidi` tinyint(1) NULL DEFAULT 1,
  `isBaptis` tinyint(1) NULL DEFAULT 1,
  `isMeninggal` tinyint(1) NULL DEFAULT 0,
  `isRPP` tinyint(1) NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NULL DEFAULT 0,
  `status` int NULL DEFAULT 0,
  PRIMARY KEY (`id_jemaat`) USING BTREE,
  INDEX `hub_keluarga_id_jemaat`(`id_hub_keluarga` ASC) USING BTREE,
  INDEX `status_pernikahan_id_jemaat`(`id_status_pernikahan` ASC) USING BTREE,
  INDEX `pendidikan_id_jemaat`(`id_pendidikan` ASC) USING BTREE,
  INDEX `bidnag_pendidikan_id_jemaat`(`id_bidang_pendidikan` ASC) USING BTREE,
  INDEX `pekerjaan_id_jemaat`(`id_pekerjaan` ASC) USING BTREE,
  INDEX `fk_id_kota_jemaat`(`id_kota` ASC) USING BTREE,
  INDEX `fk_id_registrasi_jemaat`(`id_registrasi` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_jemaat`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_bidang_pendidikan_jemaat` FOREIGN KEY (`id_bidang_pendidikan`) REFERENCES `bidang_pendidikan` (`id_bidang_pendidikan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_hub_keluarga_jemaat` FOREIGN KEY (`id_hub_keluarga`) REFERENCES `hubungan_keluarga` (`id_hub_keluarga`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_kota_jemaat` FOREIGN KEY (`id_kota`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_pekerjaan_jemaat` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id_pekerjaan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_pendidikan_jemaat` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_registrasi_jemaat` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi_jemaat` (`id_registrasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_pernikahan_jemaat` FOREIGN KEY (`id_status_pernikahan`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_jemaat` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jemaat
-- ----------------------------
INSERT INTO `jemaat` VALUES (1, 1, NULL, 'Lidya', 'Simamora', '', '', 'Tarutung', '1975-09-16', 'Laki-Laki', 3, 3, 6, 11, 0, 11, 'Lainnya', 'A', 'Jl. S. Dis. Sitompul Hutabagot Simaungmaung Dolok', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 08:43:02', NULL, 0, 1);
INSERT INTO `jemaat` VALUES (2, 2, NULL, 'Jahuari', 'Sianturi', '', '', 'Tarutung', '1952-03-11', 'Laki-Laki', 1, 4, 6, 11, 0, 11, 'Lainnya', 'B', 'Jl. Guru Mangaloksa Gang Kompas Ujung', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 08:45:56', NULL, 0, 1);
INSERT INTO `jemaat` VALUES (3, 2, NULL, 'Ritual Delima', 'Sianturi', '', '', 'Tarutung', '1988-02-23', 'Perempuan', 2, 3, 6, 11, 0, 11, 'Lainnya', 'O', 'Jl. Guru Mangaloksa Gang Kompas Ujung', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 08:49:24', NULL, 0, 1);
INSERT INTO `jemaat` VALUES (4, 2, NULL, 'Nova Berta', 'Sianturi', '', '', 'Tarutung', '1991-11-06', 'Laki-Laki', 2, 3, 6, 11, 0, 11, 'Lainnya', 'O', 'Jl. Guru Mangaloksa Gang Kompas Ujung', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 08:56:22', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (5, 3, NULL, 'Ny. Pardede', 'br. Manurung', 'CSt', 'STh', 'Tarutung', '1965-04-28', 'Laki-Laki', 1, 3, 6, 11, 0, 11, 'Lainnya', 'O', 'Jl. Farel Pasaribu', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:03:49', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (6, 3, NULL, 'Talenta', 'Pardede', '', '', 'Tarutung', '1996-09-28', 'Perempuan', 3, 3, 6, 11, 0, 11, 'Lainnya', 'A', 'Jl. Farel Pasaribu', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:06:36', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (7, 3, NULL, 'Ester', 'Pardede', '', '', 'Tarutung', '2000-06-22', 'Perempuan', 3, 3, 6, 11, 0, 11, 'Lainnya', 'O', 'Jl. Farel Pasaribu', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:06:58', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (8, 4, NULL, 'Ny Nababan Rosbinaria', 'Sianturi / Op Hanna Nababan', '', '', 'Tarutung', '1968-06-06', 'Perempuan', 1, 4, 6, 11, 0, 11, 'Lainnya', 'O', 'Jl S.Dis. Sitompul No 92', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:13:09', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (9, 5, NULL, 'Juaja', 'br. Lumbantobing', '', '', 'Tarutung', '1961-06-01', 'Perempuan', 2, 4, 6, 11, 0, 11, 'Lainnya', 'B', 'Jl S.Dis. Sitompul', 31, '', 'Jemaat Pindah', 1, 1, 0, 0, '2023-05-11 09:14:17', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (10, 5, NULL, 'Yansen Januar', 'Nababan', '', '', 'Tarutung', '0000-00-00', 'Laki-Laki', 3, 3, 6, 11, 0, 11, 'Lainnya', 'B', 'Jl S.Dis. Sitompul', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:16:52', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (11, 5, NULL, 'Melissa', 'br. Nababan', '', '', 'Tarutung', '1991-01-04', 'Perempuan', 3, 3, 6, 11, 0, 11, 'Lainnya', 'B', 'Jl S.Dis. Sitompul', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:27:22', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (12, 5, NULL, 'Christofel Pulutan', 'Nababan', '', '', 'Tarutung', '1994-12-09', 'Laki-Laki', 3, 3, 6, 11, 0, 11, 'Lainnya', 'A', 'Jl S.Dis. Sitompul', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:27:50', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (13, 5, NULL, 'Theresia Megawati', 'Nababan', '', '', 'Tarutung', '1998-06-09', 'Perempuan', 3, 3, 6, 11, 0, 11, 'Lainnya', 'B', 'Jl S.Dis. Sitompul', 31, '', NULL, 1, 1, 0, 0, '2023-05-11 09:28:29', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (18, 6, NULL, 'Josep', 'Napitupulu', 'Dr.', 'S.Tr', 'Parsoburan', '2003-09-07', 'Laki-Laki', 3, 2, 1, 11, 1, 1, 'Paragat', 'O', 'Parsanggarahan, Parsoburan', 31, '082285393684', 'Mwehehehee1', 0, 0, 0, 0, '2023-06-05 15:40:30', '2023-06-18 09:21:47', 0, 0);
INSERT INTO `jemaat` VALUES (19, 7, NULL, 'Josep', 'Napitupulu', 'Dr', 'S.Tr', 'Parsoburan', '2003-09-07', 'Laki-Laki', NULL, 2, 6, 11, 1, 11, 'Paragat', 'O', 'Parsanggarahan, Parsoburan', 31, '082285393684', 'Mwehehehee', 1, 1, 0, 0, '2023-06-05 15:47:34', '2023-06-19 16:24:55', 0, 0);
INSERT INTO `jemaat` VALUES (20, 7, NULL, 'rendi', 'Napitupulu', 'Dr.', 'S.Tr', 'Laguboiti', '2003-09-07', 'Laki-Laki', 3, 2, 5, 4, 0, 8, 'Paragat', 'A', 'Parsanggarahan, Parsoburan', 31, '082285393684', 'Mwehehehee1', 1, 1, 0, 0, '2023-06-05 23:42:54', '2023-06-18 13:52:06', 0, 0);
INSERT INTO `jemaat` VALUES (21, 7, NULL, 'Josep', 'Rendi', 'te', 'Sadj', 'parso', '2003-09-07', 'Laki-Laki', 3, 2, 1, 1, 0, 1, 'Pamano', 'O', 'medan, Parsoburan', 31, '89897873', 'hahhaha', 1, 1, 0, 0, '2023-06-06 00:56:34', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (22, 8, NULL, 'sama', 'sda', 'Dr.', 'S.Tr', 'dsds', '2023-05-28', 'Laki-laki', 3, 1, 4, 7, 0, 7, 'Mahasiswa', 'O', 'medan', 31, '095288367229', 'asdfghj', 1, 1, 0, 0, '2023-06-06 09:00:31', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (23, 8, NULL, 'COCEP', 'Phyto', 'Dr.', 'S.Tr', 'Parsoburan', '2023-05-28', 'Laki-laki', 3, 1, 4, 8, 0, 8, 'Mahasiswa', 'O', 'Laguboti', 31, '095288367229', 'mwehehehe', 1, 1, 0, 0, '2023-06-06 09:08:30', '2023-06-16 17:05:19', 0, 1);
INSERT INTO `jemaat` VALUES (24, 8, 6, 'Josep', 'Rendi', 'te', 'Sadj', 'parso', '2003-09-07', 'Laki-Laki', 3, 2, 1, 1, 0, 1, 'Pamano', 'O', 'medan, Parsoburan', 31, '89897873', 'hahhaha', 1, 1, 0, 0, '2023-06-14 00:06:26', NULL, 0, 1);
INSERT INTO `jemaat` VALUES (25, 9, 6, 'Josep', 'sda', 'Dr.', 'S.Tr', 'dsds', '2023-05-31', 'Laki-laki', 2, 3, 1, 3, 0, 2, 'Mahasiswa', 'O', 'Negara Pintupohan', 31, '095288367229', 'asdfg', 1, 1, 0, 0, '2023-06-14 00:27:28', NULL, 0, 2);
INSERT INTO `jemaat` VALUES (26, 10, 6, 'Rendi', 'Phyto', 'Dr.', 'S.Tr', 'Parsoburan', '2023-05-30', 'Laki-laki', 1, 3, 3, 3, 0, 4, 'Mahasiswa', 'O', 'Negara Pintupohan', 31, '095288367229', 'masasi', 1, 1, 0, 0, '2023-06-14 00:29:49', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (27, 10, 6, 'Rendi', 'Phyto', 'Dr.', 'S.Tr', 'Parsoburan', '2023-05-30', 'Laki-laki', 1, 3, 3, 3, 0, 4, 'Mahasiswa', 'O', 'Negara Pintupohan', 31, '095288367229', 'masasi', 1, 1, 0, 0, '2023-06-14 00:30:25', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (28, 11, 6, 'sama', 'Phyto', 'J', 'S.Tr', 'Kenegaraan Pittupohan', '2023-06-02', 'Laki-laki', 1, 3, 1, 3, 0, 2, 'Mahasiswa', 'O', 'medan', 31, '095288367229', 'gfgf', 1, 1, 0, 0, '2023-06-14 00:31:00', NULL, 0, 0);
INSERT INTO `jemaat` VALUES (29, 1, 7, 'Josep Phyto', 'Sibarani', 'Dr.', 'S.Tr', 'Kenegaraan Pittupohan', '2023-06-02', 'Laki-laki', 3, 3, 5, NULL, 0, 2, 'Mahasiswa', 'O', 'Negara Pintupohan', 31, '095288367229', 'wwewe', 1, 1, 0, 0, '2023-06-14 00:32:07', '2023-06-20 08:38:37', 0, 0);
INSERT INTO `jemaat` VALUES (30, 1, NULL, 'Rendi Jonathan', 'Sibarani', 'Dr.', 'S.Tr.Kom', 'Laguboti', '2003-04-09', 'Laki-Laki', 3, 3, NULL, 9, NULL, 4, 'Mahasiswa', 'O', 'Laguboti', 31, '082166368282', 'Jemaat Programmer', 1, 1, 0, 0, '2023-06-20 08:34:33', '2023-06-20 08:37:19', 0, 1);

-- ----------------------------
-- Table structure for jemaat_hadir
-- ----------------------------
DROP TABLE IF EXISTS `jemaat_hadir`;
CREATE TABLE `jemaat_hadir`  (
  `id_jemaat_hadir` int NOT NULL AUTO_INCREMENT,
  `id_jadwal_ibadah` int NOT NULL,
  `bapak` int NOT NULL,
  `ibu` int NOT NULL,
  `naposo_laki` int NOT NULL,
  `naposo_perempuan` int NOT NULL,
  `remaja_laki` int NOT NULL,
  `remaja_perempuan` int NOT NULL,
  `sekolah_minggu_laki` int NOT NULL,
  `sekolah_minggu_perempuan` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jemaat_hadir`) USING BTREE,
  INDEX `jadwal_ibadah_id_jemaat_hadir`(`id_jadwal_ibadah` ASC) USING BTREE,
  CONSTRAINT `fk_id_jadwal_ibadah_jemaat_hadir` FOREIGN KEY (`id_jadwal_ibadah`) REFERENCES `jadwal_ibadah` (`id_jadwal_ibadah`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jemaat_hadir
-- ----------------------------

-- ----------------------------
-- Table structure for jenis_gereja
-- ----------------------------
DROP TABLE IF EXISTS `jenis_gereja`;
CREATE TABLE `jenis_gereja`  (
  `id_jenis_gereja` int NOT NULL AUTO_INCREMENT,
  `jenis_gereja` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_gereja`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_gereja
-- ----------------------------
INSERT INTO `jenis_gereja` VALUES (1, 'HKBP', 'Gereja Batak Protestan', '2023-04-23 15:10:31', NULL, 0);

-- ----------------------------
-- Table structure for jenis_kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `jenis_kegiatan`;
CREATE TABLE `jenis_kegiatan`  (
  `id_jenis_kegiatan` int NOT NULL AUTO_INCREMENT,
  `nama_jenis_kegiatan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lokasi_kegiatan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_kegiatan` date NULL DEFAULT NULL,
  `waktu_kegiatan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_kegiatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_kegiatan
-- ----------------------------
INSERT INTO `jenis_kegiatan` VALUES (1, 'Pesta Huria', 'Gedung Serbaguna HKBP Palmarum', '2023-05-31', '10:56:58', 'Melaksanakan Acara Lelang', '2023-06-07 10:57:00', '2023-06-12 01:34:53', 0);
INSERT INTO `jenis_kegiatan` VALUES (2, 'Lelang', 'HKBP Palmarum', '2023-05-28', '16:09:05', 'Lelang Tahunan', '2023-06-07 11:09:10', '2023-12-11 09:36:42', 0);
INSERT INTO `jenis_kegiatan` VALUES (3, 'kegiatan bersama', 'laguboti', '2023-06-09', '16:09:05', 'testing', '2023-06-12 02:09:01', '2023-06-12 03:01:11', 0);
INSERT INTO `jenis_kegiatan` VALUES (4, 'yang lain dulu la lagi', 'balige', '2023-06-01', '12:04:02', 'yg baru', '2023-06-12 02:12:54', '2023-06-12 03:13:50', 0);
INSERT INTO `jenis_kegiatan` VALUES (5, 'kegiatan bersama lagi', 'balige lagi', '2023-06-21', '14:57:00', 'awkoawkow', '2023-06-12 02:53:07', '2023-06-12 02:59:28', 0);
INSERT INTO `jenis_kegiatan` VALUES (6, 'kegiatan bersama lagi', 'laguboti lagi', '2023-06-22', '03:06:00', 'hahaha', '2023-06-12 03:02:14', '2023-06-12 03:02:17', 0);
INSERT INTO `jenis_kegiatan` VALUES (7, 'kegiatan bersama lagi', 'laguboti lagi', '2023-06-01', '03:10:00', 'Pembunuhan Berencana', '2023-06-12 03:04:12', '2023-06-12 03:04:14', 0);
INSERT INTO `jenis_kegiatan` VALUES (8, 'yang lain dulu la lagi', 'balige', '2023-06-01', '12:04:02', 'yg baru09', '2023-06-12 03:12:05', '2023-06-17 06:20:15', 0);
INSERT INTO `jenis_kegiatan` VALUES (9, 'ini lagi la ya', 'laguboti lagi', '2023-06-17', '07:51', 'heheheh123', '2023-06-12 03:49:03', '2023-06-16 17:06:30', 0);
INSERT INTO `jenis_kegiatan` VALUES (10, 'kegiatan bersama lagi', 'laguboti lagi', '2023-06-17', '17:10', 'testing12312', '2023-06-16 17:07:31', '2023-06-16 17:07:41', 0);
INSERT INTO `jenis_kegiatan` VALUES (11, 'kegiatan bersama lagi', 'laguboti lagi', '2023-06-13', '21:33', 'hahaha1', '2023-06-18 09:31:34', '2023-06-18 09:31:41', 0);
INSERT INTO `jenis_kegiatan` VALUES (12, 'kegiatan bersama lagi', 'laguboti lagi', '2023-06-21', '18:45', 'testing', '2023-06-18 18:41:35', '2023-06-18 18:42:56', 0);
INSERT INTO `jenis_kegiatan` VALUES (13, 'itu itu', 'laguboti', '2023-11-24', '15:47', 'hehe', '2023-11-22 15:43:37', '2023-11-22 15:51:52', 0);
INSERT INTO `jenis_kegiatan` VALUES (14, 'ini itu', 'disini', '2023-11-03', '15:50', 'iya ?', '2023-11-22 15:44:33', '2023-11-22 15:51:44', 0);
INSERT INTO `jenis_kegiatan` VALUES (15, 'ini nini inin', 'laguboti', '2023-11-04', '15:54', 'hehe', '2023-11-22 15:49:38', '2023-12-11 09:43:48', 0);

-- ----------------------------
-- Table structure for jenis_minggu
-- ----------------------------
DROP TABLE IF EXISTS `jenis_minggu`;
CREATE TABLE `jenis_minggu`  (
  `id_jenis_minggu` int NOT NULL AUTO_INCREMENT,
  `nama_jenis_minggu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_minggu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_minggu
-- ----------------------------
INSERT INTO `jenis_minggu` VALUES (1, 'Minggu Trinitatis', NULL, NULL, NULL, 0);

-- ----------------------------
-- Table structure for jenis_registrasi
-- ----------------------------
DROP TABLE IF EXISTS `jenis_registrasi`;
CREATE TABLE `jenis_registrasi`  (
  `id_jenis_registrasi` int NOT NULL AUTO_INCREMENT,
  `nama_jenis_registrasi` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci NOT NULL,
  `sub_jenis_registrasi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `id_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_registrasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_registrasi
-- ----------------------------
INSERT INTO `jenis_registrasi` VALUES (1, 'Registrasi Jemaat Baru', 'Registrasi Jemaat', 'Digunakan Sebagai Jenis Registrasi dari Jemaat', '2023-05-08 16:08:00', NULL, 0);
INSERT INTO `jenis_registrasi` VALUES (2, 'Registrasi Jemaat Pindah', 'Registrasi Jemaat', 'Digunakan Sebagai Jenis Registrasi dari Jemaat', '2023-05-08 16:08:23', NULL, 0);

-- ----------------------------
-- Table structure for jenis_rpp
-- ----------------------------
DROP TABLE IF EXISTS `jenis_rpp`;
CREATE TABLE `jenis_rpp`  (
  `id_jenis_rpp` int NOT NULL AUTO_INCREMENT,
  `jenis_rpp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_rpp`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_rpp
-- ----------------------------
INSERT INTO `jenis_rpp` VALUES (1, 'Membunuh', 'Pelanggaran Berat', '2023-05-23 22:13:44', NULL, 0);

-- ----------------------------
-- Table structure for jenis_status
-- ----------------------------
DROP TABLE IF EXISTS `jenis_status`;
CREATE TABLE `jenis_status`  (
  `id_jenis_status` int NOT NULL AUTO_INCREMENT,
  `jenis_status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_jenis_status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jenis_status
-- ----------------------------
INSERT INTO `jenis_status` VALUES (1, 'Registrasi', 'Jenis Status Ini Digunakan Untuk Status Registrasi', '2023-04-23 09:25:38', NULL, 0);
INSERT INTO `jenis_status` VALUES (2, 'Pernikahan', 'Untuk Status Pernikahan', '2023-05-10 15:49:58', NULL, 0);
INSERT INTO `jenis_status` VALUES (3, 'Status Jemaat Aktif', '', '2023-05-17 10:27:59', NULL, 0);
INSERT INTO `jenis_status` VALUES (4, 'Status Jemaat Meninggal', '', '2023-05-17 10:27:59', NULL, 0);
INSERT INTO `jenis_status` VALUES (5, 'Status Jemaat Pindah', '', '2023-05-17 10:27:59', NULL, 0);
INSERT INTO `jenis_status` VALUES (6, 'Status Jemaat Rpp', '', '2023-05-17 10:27:59', NULL, 0);
INSERT INTO `jenis_status` VALUES (7, 'Status Majelis Aktif', '', '2023-05-17 10:27:59', NULL, 0);

-- ----------------------------
-- Table structure for kategori_mata_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `kategori_mata_anggaran`;
CREATE TABLE `kategori_mata_anggaran`  (
  `id_kategori_anggaran` int NOT NULL AUTO_INCREMENT,
  `kode_kategori_anggaran` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_kategori_Anggaran` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kategori_anggaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kategori_mata_anggaran
-- ----------------------------

-- ----------------------------
-- Table structure for kategori_pemasukan
-- ----------------------------
DROP TABLE IF EXISTS `kategori_pemasukan`;
CREATE TABLE `kategori_pemasukan`  (
  `id_kategori_pemasukan` int NOT NULL AUTO_INCREMENT,
  `kategori_pemasukan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kategori_pemasukan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kategori_pemasukan
-- ----------------------------

-- ----------------------------
-- Table structure for kategori_pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `kategori_pengeluaran`;
CREATE TABLE `kategori_pengeluaran`  (
  `id_kategori_pengeluaran` int NOT NULL AUTO_INCREMENT,
  `kategori_pengeluaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kategori_pengeluaran`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kategori_pengeluaran
-- ----------------------------

-- ----------------------------
-- Table structure for kegiatan
-- ----------------------------
DROP TABLE IF EXISTS `kegiatan`;
CREATE TABLE `kegiatan`  (
  `id_kegiatan` int NOT NULL AUTO_INCREMENT,
  `id_jenis_kegiatan` int NOT NULL,
  `id_gereja_mengadakan` int NOT NULL,
  `tema_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `waktu_kegiatan` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `lokasi_kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_kegiatan`) USING BTREE,
  INDEX `gereja_id_jam_kegiatan`(`id_gereja_mengadakan` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_jam_kegiatan` FOREIGN KEY (`id_gereja_mengadakan`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jam_kegiatan_jenis_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `jenis_kegiatan` (`id_jenis_kegiatan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kegiatan
-- ----------------------------

-- ----------------------------
-- Table structure for majelis
-- ----------------------------
DROP TABLE IF EXISTS `majelis`;
CREATE TABLE `majelis`  (
  `id_majelis` int NOT NULL AUTO_INCREMENT,
  `id_jemaat` int NOT NULL,
  `id_pelayan` int NOT NULL,
  `id_gereja` int NOT NULL DEFAULT 1,
  `tgh_tahbis` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `tgl_akhir_jawatan` date NOT NULL,
  `id_status_pelayanan` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_majelis`) USING BTREE,
  INDEX `gereja_id_majelis`(`id_gereja` ASC) USING BTREE,
  INDEX `jemaat_id_majelis`(`id_jemaat` ASC) USING BTREE,
  INDEX `pelayan_id_majelis`(`id_pelayan` ASC) USING BTREE,
  INDEX `status_pelayanan_id_majelis`(`id_status_pelayanan` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_majelis` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_majelis` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_pelayan_majelis` FOREIGN KEY (`id_pelayan`) REFERENCES `pelayan_gereja` (`id_pelayan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_pelayanan_majelis` FOREIGN KEY (`id_status_pelayanan`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of majelis
-- ----------------------------
INSERT INTO `majelis` VALUES (9, 12, 4, 1, '2023-06-08 10:15:17', '0000-00-00', 11, '2023-06-08 10:15:17', NULL, 0);

-- ----------------------------
-- Table structure for mata_anggaran
-- ----------------------------
DROP TABLE IF EXISTS `mata_anggaran`;
CREATE TABLE `mata_anggaran`  (
  `id_mata_anggaran` int NOT NULL AUTO_INCREMENT,
  `id_kategori_anggaran` int NOT NULL,
  `kode_mata_anggaran` char(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_mata_anggaran` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_anggaran` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isSentralisasi` tinyint(1) NOT NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_mata_anggaran`) USING BTREE,
  INDEX `fk_kategori_anggaran_mata_anggaran`(`id_kategori_anggaran` ASC) USING BTREE,
  CONSTRAINT `fk_kategori_anggaran_mata_anggaran` FOREIGN KEY (`id_kategori_anggaran`) REFERENCES `kategori_mata_anggaran` (`id_kategori_anggaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mata_anggaran
-- ----------------------------

-- ----------------------------
-- Table structure for mejelis_lingkungan
-- ----------------------------
DROP TABLE IF EXISTS `mejelis_lingkungan`;
CREATE TABLE `mejelis_lingkungan`  (
  `id_majelis` int NOT NULL AUTO_INCREMENT,
  `id_wijk` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_majelis`, `id_wijk`) USING BTREE,
  INDEX `wijk_id_majelis_lingkungan`(`id_wijk` ASC) USING BTREE,
  CONSTRAINT `fk_id_majelis_majelis_lingkungan` FOREIGN KEY (`id_majelis`) REFERENCES `majelis` (`id_majelis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_wijk_majelis_lingkungan` FOREIGN KEY (`id_wijk`) REFERENCES `wijk` (`id_wijk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of mejelis_lingkungan
-- ----------------------------

-- ----------------------------
-- Table structure for meninggal
-- ----------------------------
DROP TABLE IF EXISTS `meninggal`;
CREATE TABLE `meninggal`  (
  `id_meninggal` int NOT NULL AUTO_INCREMENT,
  `id_gereja` int NOT NULL,
  `id_jemaat` int NOT NULL,
  `tgl_meninggal` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `tempat_pemakaman` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pendeta_melayani` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_meninggal`) USING BTREE,
  INDEX `gereja_id_meninggal`(`id_gereja` ASC) USING BTREE,
  INDEX `jemaat_id__meninggal`(`id_jemaat` ASC) USING BTREE,
  INDEX `status_id_meninggal`(`id_status` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_meninggal` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_meninggal` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_meninggal` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of meninggal
-- ----------------------------

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
INSERT INTO `password_reset_tokens` VALUES ('yunisiagian30@gmail.com', '$2y$10$86H5/fH6MLE3mQTsefrMIeGpKUnUoiHasIokxXK/7Tjx4C6qDaF82', '2023-06-15 01:57:00');
INSERT INTO `password_reset_tokens` VALUES ('yunisiagian@gmail.com', '$2y$10$e42lICThtFIy9Cetao9TgOdXGsr2Z3oz5QtvV9S4oOoEKbflUzMIK', '2023-06-15 01:51:53');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `pekerjaan`;
CREATE TABLE `pekerjaan`  (
  `id_pekerjaan` int NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pekerjaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pekerjaan
-- ----------------------------
INSERT INTO `pekerjaan` VALUES (1, 'Pegawai Ne', NULL, '2023-05-10 17:43:29', NULL, 0);
INSERT INTO `pekerjaan` VALUES (2, 'Wiraswasta', NULL, '2023-05-10 17:43:51', NULL, 0);
INSERT INTO `pekerjaan` VALUES (3, 'Dokter', NULL, '2023-06-05 23:11:48', NULL, 0);
INSERT INTO `pekerjaan` VALUES (4, 'Polisi', NULL, '2023-06-05 23:12:08', NULL, 0);
INSERT INTO `pekerjaan` VALUES (5, 'Tentara', NULL, '2023-06-05 23:12:20', NULL, 0);
INSERT INTO `pekerjaan` VALUES (6, 'Perawat', NULL, '2023-06-05 23:12:27', NULL, 0);
INSERT INTO `pekerjaan` VALUES (7, 'Bidan', NULL, '2023-06-05 23:12:48', NULL, 0);
INSERT INTO `pekerjaan` VALUES (8, 'Programmer', NULL, '2023-06-05 23:13:04', NULL, 0);
INSERT INTO `pekerjaan` VALUES (9, 'Ahli Hukum', NULL, '2023-06-05 23:13:20', NULL, 0);
INSERT INTO `pekerjaan` VALUES (10, 'Petani', NULL, '2023-06-05 23:13:28', NULL, 0);
INSERT INTO `pekerjaan` VALUES (11, 'Lainnya', NULL, '2023-06-20 05:04:42', NULL, 0);

-- ----------------------------
-- Table structure for pelayan_gereja
-- ----------------------------
DROP TABLE IF EXISTS `pelayan_gereja`;
CREATE TABLE `pelayan_gereja`  (
  `id_pelayan` int NOT NULL AUTO_INCREMENT,
  `id_jemaat` int NOT NULL,
  `tanggal_tahbisan` date NOT NULL,
  `tanggal_akhir_jawatan` date NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_status_pelayanan` int NOT NULL DEFAULT 11,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelayan`) USING BTREE,
  INDEX `fk_id_jemaat_pelayan_gereja`(`id_jemaat` ASC) USING BTREE,
  CONSTRAINT `fk_id_jemaat_pelayan_gereja` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pelayan_gereja
-- ----------------------------
INSERT INTO `pelayan_gereja` VALUES (4, 12, '1990-06-11', '2023-06-05', 'pendeta', 11, 'Pendeta Gereja HKBP Palmarum Tarutung', '2023-06-08 09:42:36', '2023-06-18 18:38:59', 0, 'sintua.jpeg');
INSERT INTO `pelayan_gereja` VALUES (5, 1, '1994-01-19', '2023-06-24', 'pendatua', 11, 'Sintua Gereja HKBP Palmarum', '2023-06-08 10:13:36', '2023-12-11 09:36:28', 0, 'sintua.jpg');
INSERT INTO `pelayan_gereja` VALUES (6, 3, '2009-11-11', '2023-06-16', 'Guru Huria', 11, 'Guru Huria Gereja HKBP Palmarum Tarutung Pusat bgt', '2023-06-08 10:32:21', '2023-12-11 09:27:57', 0, 'sintua.jpg');
INSERT INTO `pelayan_gereja` VALUES (8, 3, '2023-06-23', '2023-06-20', 'pendeta', 11, 'baru bgt menjabat1', '2023-06-18 09:59:49', '2023-12-11 09:06:55', 0, NULL);

-- ----------------------------
-- Table structure for pelayan_ibadah
-- ----------------------------
DROP TABLE IF EXISTS `pelayan_ibadah`;
CREATE TABLE `pelayan_ibadah`  (
  `id_jadwal_ibadah` int NOT NULL,
  `id_pelayanan_ibadah` int NOT NULL,
  `id_det_jam_kegiatan` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  INDEX `pelayanan_ibadah_id_pelayanan_ibadah`(`id_pelayanan_ibadah` ASC) USING BTREE,
  CONSTRAINT `fk_id_pelayanan_ibadah_pelayanan_ibadah` FOREIGN KEY (`id_pelayanan_ibadah`) REFERENCES `pelayanan_ibadah` (`id_pelayanan_ibadah`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pelayan_ibadah
-- ----------------------------

-- ----------------------------
-- Table structure for pelayanan_ibadah
-- ----------------------------
DROP TABLE IF EXISTS `pelayanan_ibadah`;
CREATE TABLE `pelayanan_ibadah`  (
  `id_pelayanan_ibadah` int NOT NULL AUTO_INCREMENT,
  `nama_pelayanan_ibadah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pelayanan_ibadah`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pelayanan_ibadah
-- ----------------------------

-- ----------------------------
-- Table structure for pemasukan
-- ----------------------------
DROP TABLE IF EXISTS `pemasukan`;
CREATE TABLE `pemasukan`  (
  `id_pemasukan` int NOT NULL AUTO_INCREMENT,
  `nama_kategori_pemasukan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `total_pemasukan` int NOT NULL,
  `lingkungan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_pemasukan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori_pemasukan` int NULL DEFAULT NULL,
  `bukti_pemasukan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jemaat` int NULL DEFAULT NULL,
  `id_bank` int NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pemasukan`) USING BTREE,
  INDEX `jemaat_id_pemasukan`(`id_jemaat` ASC) USING BTREE,
  INDEX `bank_id_pemasukan`(`id_bank` ASC) USING BTREE,
  INDEX `fk_id_kategori_pemasukan_pemasukan`(`id_kategori_pemasukan` ASC) USING BTREE,
  CONSTRAINT `fk_id_bank_pemasukan` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_pemasukan` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_kategori_pemasukan_pemasukan` FOREIGN KEY (`id_kategori_pemasukan`) REFERENCES `kategori_pemasukan` (`id_kategori_pemasukan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pemasukan
-- ----------------------------
INSERT INTO `pemasukan` VALUES (2, 'Persembahan Minggu', '2023-05-28', 550000, 'Tarutung', 'Uang', NULL, NULL, NULL, NULL, '2023-06-07 21:39:50', NULL, 0);
INSERT INTO `pemasukan` VALUES (3, 'persembahan_ibadah_lingkungan', '0000-00-00', 300000, 'Tarutung', 'Uang', NULL, NULL, NULL, NULL, '2023-06-07 21:40:57', NULL, 0);
INSERT INTO `pemasukan` VALUES (4, 'Pembangunan', '0000-00-00', 100, 'Tarutung', 'Semen', NULL, NULL, NULL, NULL, '2023-06-07 21:47:48', NULL, 0);

-- ----------------------------
-- Table structure for pendidikan
-- ----------------------------
DROP TABLE IF EXISTS `pendidikan`;
CREATE TABLE `pendidikan`  (
  `id_pendidikan` int NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) UNSIGNED ZEROFILL NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pendidikan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pendidikan
-- ----------------------------
INSERT INTO `pendidikan` VALUES (1, 'TK', '', '2023-05-10 15:46:37', NULL, 0);
INSERT INTO `pendidikan` VALUES (2, 'SD', '', '2023-05-10 15:46:41', NULL, 0);
INSERT INTO `pendidikan` VALUES (3, 'SMP', '', '2023-05-10 15:46:46', NULL, 0);
INSERT INTO `pendidikan` VALUES (4, 'SMA', '', '2023-05-10 15:46:51', NULL, 0);
INSERT INTO `pendidikan` VALUES (5, 'Perguruan Tinggi', '', '2023-05-10 15:47:00', NULL, 0);
INSERT INTO `pendidikan` VALUES (6, 'Lainnya', '', '2023-06-20 05:06:26', NULL, 0);

-- ----------------------------
-- Table structure for pengeluaran
-- ----------------------------
DROP TABLE IF EXISTS `pengeluaran`;
CREATE TABLE `pengeluaran`  (
  `id_pengeluaran` int NOT NULL AUTO_INCREMENT,
  `nama_kategori_pengelaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_pengeluaran` int NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `keterangan_pengeluaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori_pengeluaran` int NULL DEFAULT NULL,
  `id_bank` int NULL DEFAULT NULL,
  `bukti_pengeluaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pengeluaran`) USING BTREE,
  INDEX `fk_id_bank_pengeluaran`(`id_bank` ASC) USING BTREE,
  INDEX `fk_id_kategori_pengeluaran`(`id_kategori_pengeluaran` ASC) USING BTREE,
  CONSTRAINT `fk_id_bank_pengeluaran` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_kategori_pengeluaran` FOREIGN KEY (`id_kategori_pengeluaran`) REFERENCES `kategori_pengeluaran` (`id_kategori_pengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pengeluaran
-- ----------------------------
INSERT INTO `pengeluaran` VALUES (3, 'Pembangunan', 1000000, '0000-00-00', 'beli bakso', NULL, NULL, '', '2023-06-07 23:29:57', NULL, 0);
INSERT INTO `pengeluaran` VALUES (4, 'Acara Pesta Haheheon Ama', 500000, '0000-00-00', 'Acara', NULL, NULL, '', '2023-06-07 23:30:33', NULL, 0);

-- ----------------------------
-- Table structure for pernikahan
-- ----------------------------
DROP TABLE IF EXISTS `pernikahan`;
CREATE TABLE `pernikahan`  (
  `id_pernikahan` int NOT NULL AUTO_INCREMENT,
  `id_registrasi_pernikahan` int NOT NULL,
  `id_gereja` int NULL DEFAULT NULL,
  `tgl_pernikahan` date NOT NULL,
  `nats_pernikahan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isHKBP` int NOT NULL DEFAULT 0,
  `id_gereja_nikah` int NULL DEFAULT NULL,
  `nama_gereja_non_HKBP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendeta` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_pernikahan`) USING BTREE,
  INDEX `gereja_id_pernikahan`(`id_gereja` ASC) USING BTREE,
  INDEX `gereja_nikah_id_pernikahan`(`id_gereja_nikah` ASC) USING BTREE,
  INDEX `status_id_pernikahan`(`id_status` ASC) USING BTREE,
  INDEX `fk_registrasi_nikah_pernikahan`(`id_registrasi_pernikahan` ASC) USING BTREE,
  CONSTRAINT `fk_registrasi_nikah_pernikahan` FOREIGN KEY (`id_registrasi_pernikahan`) REFERENCES `registrasi_pernikahan` (`id_registrasi_nikah`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gereja_id_pernikahan` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gereja_nikah_id_pernikahan` FOREIGN KEY (`id_gereja_nikah`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `status_id_pernikahan` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pernikahan
-- ----------------------------
INSERT INTO `pernikahan` VALUES (2, 7, NULL, '2023-06-09', 'asdas', 0, 1, 'sadas', 'ini', 'ini lagi', NULL, '2023-06-18 10:16:02', '2023-06-18 10:16:08', 1, NULL);
INSERT INTO `pernikahan` VALUES (3, 7, NULL, '2023-06-14', 'terlalu panjang keknya', 0, NULL, 'asdas', 'A. Simanungkalit', 'testing', NULL, '2023-06-18 10:16:42', '2023-06-18 10:16:53', 1, 1);
INSERT INTO `pernikahan` VALUES (4, 7, NULL, '2023-06-22', 'terlalu panjang keknya', 0, NULL, 'HKBP Godung', 'A. Simanungkalit', 'test1', NULL, '2023-06-18 13:55:55', '2023-12-11 09:50:18', 1, 1);

-- ----------------------------
-- Table structure for pernikahan_jemaat
-- ----------------------------
DROP TABLE IF EXISTS `pernikahan_jemaat`;
CREATE TABLE `pernikahan_jemaat`  (
  `id_pernikahan_jemaat` int NOT NULL AUTO_INCREMENT,
  `id_pernikahan` int NOT NULL,
  `id_jemaat_laki` int NOT NULL,
  `id_jemaat_perempuan` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NULL DEFAULT 0,
  PRIMARY KEY (`id_pernikahan_jemaat`) USING BTREE,
  INDEX `pernikahan_id_pernikahan_jemaat`(`id_pernikahan` ASC) USING BTREE,
  INDEX `jemaat_laki_id_pernikahan_jemaat`(`id_jemaat_laki` ASC) USING BTREE,
  INDEX `fk_id_jemaat_perempuan_pernikahan_jemaat`(`id_jemaat_perempuan` ASC) USING BTREE,
  CONSTRAINT `fk_id_jemaat_laki_pernikahan_jemaat` FOREIGN KEY (`id_jemaat_laki`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_perempuan_pernikahan_jemaat` FOREIGN KEY (`id_jemaat_perempuan`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_pernikahan_pernikahan_jemaat` FOREIGN KEY (`id_pernikahan`) REFERENCES `pernikahan` (`id_pernikahan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pernikahan_jemaat
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tokenable_id` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` varchar(64) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `abilities` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for province
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province`  (
  `province_id` int NOT NULL,
  `country_id` int NOT NULL DEFAULT 103,
  `province_name` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`province_id`) USING BTREE,
  INDEX `fk_id_country_province`(`country_id` ASC) USING BTREE,
  CONSTRAINT `fk_id_country_province` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES (1, 103, 'Bali', NULL, NULL, 0);
INSERT INTO `province` VALUES (2, 103, 'Bangka Belitung', NULL, NULL, 0);
INSERT INTO `province` VALUES (3, 103, 'Banten', NULL, NULL, 0);
INSERT INTO `province` VALUES (4, 103, 'Bengkulu', NULL, NULL, 0);
INSERT INTO `province` VALUES (5, 103, 'DI Yogyakarta', NULL, NULL, 0);
INSERT INTO `province` VALUES (6, 103, 'DKI Jakarta', NULL, NULL, 0);
INSERT INTO `province` VALUES (7, 103, 'Gorontalo', NULL, NULL, 0);
INSERT INTO `province` VALUES (8, 103, 'Jambi', NULL, NULL, 0);
INSERT INTO `province` VALUES (9, 103, 'Jawa Barat', NULL, NULL, 0);
INSERT INTO `province` VALUES (10, 103, 'Jawa Tengah', NULL, NULL, 0);
INSERT INTO `province` VALUES (11, 103, 'Jawa Timur', NULL, NULL, 0);
INSERT INTO `province` VALUES (12, 103, 'Kalimantan Barat', NULL, NULL, 0);
INSERT INTO `province` VALUES (13, 103, 'Kalimantan Selatan', NULL, NULL, 0);
INSERT INTO `province` VALUES (14, 103, 'Kalimantan Tengah', NULL, NULL, 0);
INSERT INTO `province` VALUES (15, 103, 'Kalimantan Timur', NULL, NULL, 0);
INSERT INTO `province` VALUES (16, 103, 'Kalimantan Utara', NULL, NULL, 0);
INSERT INTO `province` VALUES (17, 103, 'Kepulauan Riau', NULL, NULL, 0);
INSERT INTO `province` VALUES (18, 103, 'Lampung', NULL, NULL, 0);
INSERT INTO `province` VALUES (19, 103, 'Maluku', NULL, NULL, 0);
INSERT INTO `province` VALUES (20, 103, 'Maluku Utara', NULL, NULL, 0);
INSERT INTO `province` VALUES (21, 103, 'Nanggroe Aceh Darussalam (NAD)', NULL, NULL, 0);
INSERT INTO `province` VALUES (22, 103, 'Nusa Tenggara Barat (NTB)', NULL, NULL, 0);
INSERT INTO `province` VALUES (23, 103, 'Nusa Tenggara Timur (NTT)', NULL, NULL, 0);
INSERT INTO `province` VALUES (24, 103, 'Papua', NULL, NULL, 0);
INSERT INTO `province` VALUES (25, 103, 'Papua Barat', NULL, NULL, 0);
INSERT INTO `province` VALUES (26, 103, 'Riau', NULL, NULL, 0);
INSERT INTO `province` VALUES (27, 103, 'Sulawesi Barat', NULL, NULL, 0);
INSERT INTO `province` VALUES (28, 103, 'Sulawesi Selatan', NULL, NULL, 0);
INSERT INTO `province` VALUES (29, 103, 'Sulawesi Tengah', NULL, NULL, 0);
INSERT INTO `province` VALUES (30, 103, 'Sulawesi Tenggara', NULL, NULL, 0);
INSERT INTO `province` VALUES (31, 103, 'Sulawesi Utara', NULL, NULL, 0);
INSERT INTO `province` VALUES (32, 103, 'Sumatera Barat', NULL, NULL, 0);
INSERT INTO `province` VALUES (33, 103, 'Sumatera Selatan', NULL, NULL, 0);
INSERT INTO `province` VALUES (34, 103, 'Sumatera Utara', NULL, NULL, 0);

-- ----------------------------
-- Table structure for registrasi_baptis
-- ----------------------------
DROP TABLE IF EXISTS `registrasi_baptis`;
CREATE TABLE `registrasi_baptis`  (
  `id_registrasi_baptis` int NOT NULL AUTO_INCREMENT,
  `id_user` int UNSIGNED NULL DEFAULT NULL,
  `is_jemaat` tinyint(1) NULL DEFAULT 1,
  `nama_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_baptis` date NULL DEFAULT NULL,
  `jenis_kelamin` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pendeta` int NULL DEFAULT NULL,
  `id_hub_keluarga` int NULL DEFAULT 3,
  `is_HKBP` tinyint(1) NULL DEFAULT 1,
  `id_gereja_baptis` int NULL DEFAULT 1,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT 1,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NULL DEFAULT 0,
  `status` int NULL DEFAULT 0,
  PRIMARY KEY (`id_registrasi_baptis`) USING BTREE,
  INDEX `fk_id_status_registrasi_baptis`(`id_status` ASC) USING BTREE,
  INDEX `fk_id_hub_keluarga_registrasi_baptis`(`id_hub_keluarga` ASC) USING BTREE,
  INDEX `fk_id_gereja_baptis_registrasi_baptis`(`id_gereja_baptis` ASC) USING BTREE,
  INDEX `fk_id_pendeta_registrasi_baptis`(`id_pendeta` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_baptis`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_baptis_registrasi_baptis` FOREIGN KEY (`id_gereja_baptis`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_hub_keluarga_registrasi_baptis` FOREIGN KEY (`id_hub_keluarga`) REFERENCES `hubungan_keluarga` (`id_hub_keluarga`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_pendeta_registrasi_baptis` FOREIGN KEY (`id_pendeta`) REFERENCES `pelayan_gereja` (`id_pelayan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_registrasi_baptis` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_baptis` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registrasi_baptis
-- ----------------------------
INSERT INTO `registrasi_baptis` VALUES (1, 7, 1, 'asdfg', 'asd', 'asdf', 'asdf', '2023-03-09', 'qwer', NULL, 'gh', NULL, 3, 1, 1, 'asda', 1, '2023-06-13 23:06:09', NULL, 0, 1);
INSERT INTO `registrasi_baptis` VALUES (2, 6, 1, 'RINNI', 'SUSU', 'Josep', 'Parsoburan', '2023-05-29', 'Negara Pintupohan', NULL, 'Laki-laki', NULL, 3, 1, 1, 'gfgf', 1, '2023-06-13 23:06:45', NULL, 0, 1);
INSERT INTO `registrasi_baptis` VALUES (3, NULL, 1, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani', 'Laguboti', '2023-06-23', 'Laguboti', '2023-06-17', 'Laki-Laki', 4, 3, 1, 1, 'testing12', 1, '2023-06-16 17:06:05', '2023-06-16 17:06:17', 0, 1);
INSERT INTO `registrasi_baptis` VALUES (4, NULL, 1, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani', 'Laguboti', '2023-06-16', 'Laguboti', '2023-06-22', 'Laki-Laki', 4, 3, 1, 1, 'hahaha1', 1, '2023-06-18 09:24:51', '2023-06-18 09:24:57', 0, 1);
INSERT INTO `registrasi_baptis` VALUES (5, NULL, 1, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani', 'Laguboti', '2023-06-04', 'Laguboti', '2023-06-11', 'Laki-Laki', 4, 3, 1, 1, 'testing', 1, '2023-06-18 12:34:26', '2023-06-18 12:34:32', 0, 1);
INSERT INTO `registrasi_baptis` VALUES (6, NULL, 1, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani', 'Laguboti', '2023-06-07', 'laguboti', '2023-06-06', 'Laki-Laki', 4, 3, 1, 1, 'testingan ajai', 1, '2023-06-18 13:22:23', '2023-11-22 20:01:04', 0, 1);
INSERT INTO `registrasi_baptis` VALUES (7, NULL, 1, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani', 'Laguboti', '2023-06-07', 'Laguboti', '2023-06-19', 'Laki-Laki', 4, 3, 1, 1, 'testing1', 1, '2023-06-18 14:53:21', '2023-12-11 09:48:55', 0, 1);
INSERT INTO `registrasi_baptis` VALUES (8, NULL, 1, 'ini', 'itu', 'Ray', 'disini', '2023-11-30', 'sibolga', '2023-11-21', 'laki', 4, 3, 1, 1, 'ya', 1, '2023-11-22 19:58:34', '2023-12-11 09:48:21', 0, 1);

-- ----------------------------
-- Table structure for registrasi_calon_mempelai
-- ----------------------------
DROP TABLE IF EXISTS `registrasi_calon_mempelai`;
CREATE TABLE `registrasi_calon_mempelai`  (
  `id_registrasi_calon` int NOT NULL AUTO_INCREMENT,
  `id_user` int UNSIGNED NULL DEFAULT NULL,
  `id_registrasi_nikah` int NULL DEFAULT NULL,
  `isHKBP_laki` tinyint(1) NOT NULL DEFAULT 0,
  `id_gereja_laki` int NULL DEFAULT NULL,
  `nama_gereja_laki` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isJemaat_laki` tinyint(1) NOT NULL DEFAULT 0,
  `id_jemaat_laki` int NOT NULL,
  `nama_ayah_laki` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu_laki` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `isHKBP_perempuan` tinyint(1) NOT NULL DEFAULT 0,
  `id_gereja_perempuan` int NULL DEFAULT NULL,
  `nama_gereja_perempuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isJemaat_perempuan` tinyint(1) NOT NULL DEFAULT 0,
  `id_jemaat_perempuan` int NOT NULL,
  `nama_ayah_perempuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu_perempuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` int NULL DEFAULT 0,
  PRIMARY KEY (`id_registrasi_calon`) USING BTREE,
  INDEX `fk_registrasi_nikah_registrasi_calon_mempelai`(`id_registrasi_nikah` ASC) USING BTREE,
  INDEX `fk_id_gereja_laki_registrasi_calon_mempelai`(`id_gereja_laki` ASC) USING BTREE,
  INDEX `fk_id_jemaat_laki_registrasi_calon_mempelai`(`id_jemaat_laki` ASC) USING BTREE,
  INDEX `fk_id_gereja_perempuan_registrasi_calon_mempelai`(`id_gereja_perempuan` ASC) USING BTREE,
  INDEX `fk_id_jemaat_perempuan_registrasi_calon_mempelai`(`id_jemaat_perempuan` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_mempelai`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_laki_registrasi_calon_mempelai` FOREIGN KEY (`id_gereja_laki`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_gereja_perempuan_registrasi_calon_mempelai` FOREIGN KEY (`id_gereja_perempuan`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_laki_registrasi_calon_mempelai` FOREIGN KEY (`id_jemaat_laki`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_perempuan_registrasi_calon_mempelai` FOREIGN KEY (`id_jemaat_perempuan`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_mempelai` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_registrasi_nikah_registrasi_calon_mempelai` FOREIGN KEY (`id_registrasi_nikah`) REFERENCES `registrasi_pernikahan` (`id_registrasi_nikah`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registrasi_calon_mempelai
-- ----------------------------
INSERT INTO `registrasi_calon_mempelai` VALUES (1, NULL, NULL, 0, NULL, 'Palamrum', 0, 12, 'Jaki', 'There', 0, NULL, 'Sarimatrondang', 0, 2, 'Sahat', 'Kiki', 'asdfg', '2023-06-06 09:59:11', NULL, 0, 1);
INSERT INTO `registrasi_calon_mempelai` VALUES (2, NULL, NULL, 0, NULL, 'Palmarum', 0, 18, 'Mahar', 'Mama', 0, NULL, 'Parso', 0, 9, 'Sahat', 'Turnip', 'mwehehehe', '2023-06-06 10:09:26', NULL, 0, 1);
INSERT INTO `registrasi_calon_mempelai` VALUES (3, NULL, NULL, 0, NULL, 'Palmarum', 0, 3, 'Santo', 'Mama', 0, NULL, 'Parso', 0, 11, 'Sahat', 'Turnip', 'asdfghj', '2023-06-06 10:10:55', NULL, 0, 1);
INSERT INTO `registrasi_calon_mempelai` VALUES (4, 6, NULL, 0, NULL, 'sda', 0, 19, 'Mahar', 'Mama', 0, NULL, 'Parso', 0, 10, 'Sahat', 'Turnip', 'asdfg', '2023-06-14 00:35:52', NULL, 0, 1);

-- ----------------------------
-- Table structure for registrasi_jemaat
-- ----------------------------
DROP TABLE IF EXISTS `registrasi_jemaat`;
CREATE TABLE `registrasi_jemaat`  (
  `id_registrasi` int NOT NULL AUTO_INCREMENT,
  `no_registrasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_registrasi` date NULL DEFAULT NULL,
  `nama_keluarga` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_wijk` int NOT NULL,
  `id_jenis_register` int NOT NULL,
  `id_gereja` int NOT NULL,
  `nama_gereja_nonHKBP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_register_sebelumnya` int NULL DEFAULT NULL,
  `tgl_warta` date NULL DEFAULT NULL,
  `id_status_registrasi` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_registrasi`) USING BTREE,
  INDEX `wijk_id_registrasi_jemaat`(`id_wijk` ASC) USING BTREE,
  INDEX `jenis_register_id_registrasi_jemaat`(`id_jenis_register` ASC) USING BTREE,
  INDEX `gereja_id_registrasi_jemaat`(`id_gereja` ASC) USING BTREE,
  INDEX `fk_id_status_registrasi_registrasi_jemaat`(`id_status_registrasi` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_registrasi_jemaat` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jenis_register_registrasi_jemaat` FOREIGN KEY (`id_jenis_register`) REFERENCES `jenis_registrasi` (`id_jenis_registrasi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_registrasi_registrasi_jemaat` FOREIGN KEY (`id_status_registrasi`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_wijk_registrasi_jemaat` FOREIGN KEY (`id_wijk`) REFERENCES `wijk` (`id_wijk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 126 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registrasi_jemaat
-- ----------------------------
INSERT INTO `registrasi_jemaat` VALUES (1, '024303', '2020-09-14', 'Ny. Simamora A. br. Situmorang Op. Maria', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:41:23', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (2, '024306', '2020-09-14', 'Jahuari Sianturi', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:46:35', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (3, '0243001', '2020-09-17', 'Ny. Pardede br. Manurung STh', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:51:05', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (4, '0243002', '2020-09-14', 'Ny Nababan Rosbinaria Sianturi Op Hanna Nababan', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:51:41', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (5, '0243004', '2020-10-25', 'B. Nababan, SH (+) / Juaja br. Lumbantobing', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:52:09', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (6, '0243005', '2020-09-25', 'Horas Sihombing / Rosalin Tambunan', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 15:53:11', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (7, '0243007', NULL, 'Oberlin Hutabarat / Pakah Ria Hutagalung', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:10:22', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (8, '0243009', '2020-11-20', 'Andri Hamonangan Nababan / Nur Safitri Theresia Gultom', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:11:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (9, '0243010', '2020-09-14', 'Jhonny Sianturi / Megawati Sinaga', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:12:05', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (10, '0243011', '2020-09-14', 'Edibroto Munthe / Herlina Simatupang', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:12:23', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (11, '0243012', NULL, 'Ronny Bona Malau / Elvinora Br. Hutagalung', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:12:31', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (12, '0243013', '2020-09-23', 'Ny St Drs M Sitorus M.Pd br. Nainggolan', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:12:46', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (13, '0243014', '2020-10-06', 'Drs Pardomuan  Marbun / Pestaria  Simanjuntak', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:13:02', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (14, '0243015', '2020-10-25', 'Drs. Hotman Sagala / Dra. Christina br. Hutagalung', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:13:16', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (15, '0243016', '2020-09-14', 'Frengky Manurung / Lamtiurma Sormin', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:13:29', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (16, '0243017', '2020-10-06', 'Sonta Renova Marbun', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:17:20', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (17, '0243136', NULL, 'Rezki Nanda Pratama Sagala', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:17:40', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (18, '0243138', NULL, 'Naek Irwan Tinambunan / Tebi Zera Sinaga', 1, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:18:04', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (19, '0243018', '2020-09-16', 'Drs Petrus Hasurungan Purba / Terty Oktavia Simanjuntak S.Pd', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:18:21', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (20, '0243019', '2020-09-25', 'H.R. Siahaan / Purnama Raya br. Lumbangao', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:18:58', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (21, '0243020', '2020-09-28', 'Op Josua Sinaga L br Ompusunggu', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 16:19:14', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (22, '0243021', '2020-09-14', 'Asan Sinaga / Kartini Nababan', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:49:36', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (23, '0243023', '2020-09-23', 'Ardiles  Sinaga / lastiar Sitanggang', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:50:10', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (24, '0243024', '2020-09-25', 'Ade Juhara  Sinaga / Tetty Chrystina Nadeak', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:53:37', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (25, '0243025', '2020-09-23', 'St. Freddy Siagian / Hotma Ida Panggabean', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:53:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (26, '0243026', NULL, 'Marudut Aritonang SE / Marni Siregar SST, M.Kes', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:54:04', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (27, '0243027', '2020-09-16', 'Ir Junter Marbun / Rosnita Sihombing', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:54:23', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (28, '0243028', '2020-09-25', 'Absalom Aritonang / Fransiska Margaretha Siburian', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:54:40', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (29, '0243029', '2020-09-28', 'Saut Ganti  Sinaga / Leris Imak P Simanjuntak', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:55:02', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (30, '0243126', '2021-02-04', 'Hotdiman Sinaga / Descy Lumbantobing', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:55:16', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (31, '0243141', NULL, 'Febriantonius Parasian Sinaga / Editha Dorice Sihombing', 2, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:55:29', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (32, '024336', '2020-10-06', ' Jefri  \r\nSilitonga SH / Nuraini  Lumbantobing S.Pd', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:58:38', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (33, '0243030', '2020-09-28', 'St Drs NelsonPangihutan Siahaan MM / Lasmaida Sihaloho AMd, S.Pd', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 17:59:50', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (34, '0243031', '2020-09-14', 'Pdt Pdt Martin Gultom SSi, Teol / Tetty Sabrina Rotua Tambunan S.Th', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:00:04', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (35, '0243032', '2020-09-28', 'St Tohap Pandiangan BA / Ruslan  Manalu', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:00:19', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (36, '0243033', '2020-09-28', 'Ernest Julianto Pandiangan S.Hut M.Si / Novita Magdalena Ompusunggu S.Pd', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:00:40', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (37, '0243034', '2020-11-20', 'Saudara Silalahi / Clara br. Siahaan', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:00:58', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (38, '0243039', NULL, 'Brian Leonardo Simatupang S.T / Lydia Natalia br. Pane S.T', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:01:07', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (39, '0243040', NULL, 'St. S. Tinambunan (+) / Elly Simangunsong', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:01:20', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (40, '0243042', '2020-09-25', 'S. Siburian (+) / Rumata br. Sitompul (Op. Enjel)', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:01:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (41, '0243043', '2020-11-20', 'Agus Parningotan Siburian / Romauli br. Tampubolon', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:02:00', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (42, '0243044', '2020-09-14', 'Drs Ropiol Panjaitan / H.R Manik M.Kes', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:02:14', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (43, '0243045', '2020-09-28', 'Pahala Simamora / Juni Kristina Panggabean', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:02:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (44, '0243046', '2020-10-25', 'Maruddin Simanjuntak / Maryanti br. Siregar', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:02:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (45, '0243048', '2020-11-20', 'P. Sihombing (+) / Emmy Hutabarat', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:03:11', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (46, '0243049', '2020-10-25', 'CKosmas Tambunan / Monalisa br. Siagian', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:03:24', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (47, '0243050', '2020-11-20', 'Baris Pandiangan / Marni Sartika Silaban', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:03:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (48, '0243051', '2020-11-20', 'Jesmon Pangabahan Hutauruk / Melati Raya Purba', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:04:19', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (49, '0243052', '2020-09-29', 'Rommy Tulus  Simatupang SE / Andriana  Hutabarat', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:04:36', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (50, '0243054', '2020-09-14', 'St Polan Simanullang / M Nainggolan', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:04:55', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (51, '0243058', '2020-09-14', 'Sahata Tua Sirait SP / Imelda Hutabarat SE', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:05:14', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (52, '0243061', '2020-10-25', 'Jamanter Nainggolan / R br. Siahaan (+)', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:05:27', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (53, '0243124', NULL, 'Jefri Sagala / G. Sartika br. Silaban', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:05:33', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (54, '0243125', '2020-11-20', 'Jimmi Inal Rikardo Siregar / Tati Maria br. Simanjuntak', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:05:49', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (55, '0243128', NULL, 'Hary Simanjuntak / Ida Christina Lumbantobing', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:05:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (56, '0243132', NULL, ' Jonris Martunas Nainggolan', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:06:09', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (57, '0243135', '2022-04-10', 'Olsen Pandiangan / Kartini Lumbangaol', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:06:32', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (58, '0243137', '2022-02-20', 'Boris Partogi Manurung / Ivo Anjelina Simanullang', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:06:50', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (59, '0243139', '2022-02-20', 'Frans Octa Wednes Siahaan S.KOM, MH / Beatrix Metaria Tambunan S.KOM, MTI', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:06:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (60, '0243142', '2022-03-27', 'Exa Alpones Simanullang / Fitri Morina Lumbantobing', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:07:12', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (61, '0243053', '2020-10-06', 'Sartohap Manalu / Royana Sinabutar', 3, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:09:20', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (62, '0243062', '2020-10-06', 'St Ny Sihotang br Lumbanraja', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:14:31', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (63, '0243063', '2020-09-23', 'Drs Mangiring Manalu / Lermin Sianturi', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:14:41', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (64, '0243064', '2020-09-23', 'Agus F M Manalu SP / Merika S Sinaga', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:14:58', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (65, '0243065', '2020-09-14', 'Bonar P.F. Manalu S.Pd / Yulan Yanti Angelina Sibuea SKM', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:15:12', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (66, '0243066', '2020-10-06', 'Drs Jasman Sinaga / br Hutagalung', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:15:26', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (67, '0243067', '2020-10-06', 'Tua  Nadapdap', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:16:33', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (68, '0243068', '2020-10-06', 'H Hutagalung / Rosipa Purba', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:16:46', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (69, '0243145', '2022-12-25', 'Danny Gustra H Siagian / Agnes Simangunsong', 4, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:17:01', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (70, '0243070', '2020-10-25', 'St. M. Hutasoit Op. Partogi B.A / Sariana Sinaga', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:17:27', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (71, '0243071', '2020-11-20', 'Djairus Siahaan (+) / Linda Manurung', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:17:39', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (72, '0243073', '2020-09-28', 'Ny. Aritonang Sitiera br manalu (Mak Dedy)', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:17:50', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (73, '0243074', '2020-09-28', 'Ny M Sitompul br Hutahuruk', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:18:05', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (74, '0243075', '2020-10-25', 'Hulber Sianturi / Serly br. Sihombing', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:18:16', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (75, '0243076', '2020-09-28', 'Hotma Parulian Aritonang / Ronauli  Pakpahan', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:18:30', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (76, '0243077', '2020-09-28', 'Elvis Tulus  Sihite S.Pd / Chandra Devina  Hutauruk S.Pd', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:18:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (77, '0243079', '2020-09-28', 'Christopher Cosmos Hutagalung / Pesta Natalina Sinaga', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:19:04', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (78, '0243129', '2021-03-14', 'Midian Paber Hutapea / Intan R. br. Manurung', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:19:19', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (79, '0243069', '2020-09-25', 'St. Sahat Hutapea / Rolasma Panggabean', 5, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:22:24', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (80, '024383', '2020-10-06', 'Ny Risma Mediana Lumbantobing', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:22:37', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (81, '0243080', '2020-09-25', 'Victor Pandiangan / St. Tumonggo Hutabarat S.PAK', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:22:48', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (82, '0243081', '2020-09-29', 'Ny Manullang /Mery l Nora Nababan', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:23:00', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (83, '0243082', NULL, 'Togap Purba / Nurlija Togatorop', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:23:14', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (84, '0243084', '2020-09-25', 'Maringan Nababan / Mariasni Sinaga', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:28:38', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (85, '0243085', '2020-09-25', 'A. Laomor. S Situmorang ST / Marlina br. Sihombing', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:28:50', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (86, '0243086', '2020-09-25', 'Burman Sihite / Imelda Simatupang', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:29:04', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (87, '0243087', '2020-09-29', 'Simon  Panggabean / Elerida Hutabarat', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:29:15', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (88, '0243088', NULL, 'Marulak Daniel M Lumbantobing / Tiurma Estheronika br. Silitonga', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:29:21', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (89, '0243089', '2020-09-14', 'Josua Pardomuan Sihombing ST, MT / Sesilya  Siburian SP', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:29:36', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (90, '0243090', '2020-10-06', 'Verawaty K Nababan', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:30:01', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (91, '0243091', '2020-09-29', 'Bonardo  manullang / Vony Heidy Situmorang', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:30:14', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (92, '0243092', '2020-09-09', 'Bontor Arifin Hutasoit SIP, MSP / Relina M Simanungkalit S.Pd', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:30:27', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (93, '0243130', '2021-08-29', 'Sudung Hutabarat / Ester Veronika Panggabean', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:30:43', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (94, '0243131', '2022-01-30', 'Limjun Butarbutar / Henni Ervina Pasaribu', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:30:56', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (95, '0243143', NULL, 'Arifin Nababan / Kartini D. Sitompul', 6, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:31:02', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (96, '0243093', '2020-09-15', 'St P. Nainggolan / Rouli  Silaban S.Kep', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:31:39', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (97, '0243094', NULL, 'Luat Henry Malau / St. D.R. br. Pangaribuan', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:31:47', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (98, '0243095', '2020-09-29', 'Op Mastaria Pardosi', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:31:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (99, '0243096', '2020-10-25', 'Henry Sunaryo Tinambunan / Nurhayati br. Hutagalung', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:32:08', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (100, '0243097', '2020-09-14', 'Drs Jasmani  Siagian  / Dorlan Rosmauli Siallagan', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:32:20', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (101, '0243098', NULL, 'L Lumbantobing / D Nainggolan', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:32:29', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (102, '0243099', '2020-10-06', 'Ranto P Sitanggang SP / Kristina Natalina Hutahuruk SE', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:32:42', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (103, '0243100', '2020-09-17', 'Herianto  Siahaan SP.Msi / Endang NV Siagian S.Kep, Ners', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:32:57', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (104, '0243101', '2020-09-14', 'Sampiter Simatupang / Fransisca Hasugian S.Th', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:33:13', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (105, '0243103', '2020-09-14', 'J. Simanjuntak S.ST, MT / H. Siadari S.Pd', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:36:07', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (106, '0243104', '2020-09-25', 'Eppy Jusuf Silalahi / Bintang Hutasoit', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:36:19', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (107, '0243106', '2020-09-17', 'IJ Panggabean / S br. Sihombing', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:36:34', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (108, '0243108', '2020-09-29', 'Drs B P Siahaan MM / L br Rumahorbo', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:36:47', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (109, '0243109', '2020-09-25', 'Sihombing (+) / Ny. Restiana br. Silitonga', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:37:03', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (110, '0243133', '2020-06-26', 'St. Januari Hutabarat / Iriani Rosmawati Sitorus', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:37:17', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (111, '0243140', NULL, 'Bernat Tua Simatupang / Tenti Simangunsong', 7, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:37:23', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (112, '0243112', '2020-09-14', 'Drs Efendi Siallagan / St. Rennauli Hutabarat S.Pd', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:37:58', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (113, '0243114', NULL, 'Manatap Simanungkalit / Juwita Marlibe Simanjuntak', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:38:08', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (114, '0243115', '2020-09-14', 'Rimhot Simanungkalit / Naomi K. Siregar', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:38:22', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (115, '0243116', '2020-09-14', 'Jefry Siburian SE / Yunita Veronika Munthe S.Kel, SE', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:38:35', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (116, '0243117', '2020-09-14', 'Frengki Siallagan / Melisa Napitupulu', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:38:58', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (117, '0243118', '2020-10-06', 'R  Nahampun / E Sitepu', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:39:10', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (118, '0243119', '2020-09-14', 'Belsasar Siburian / Anny Pandiangan', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:39:22', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (119, '0243120', '2020-10-06', 'Sebastian H M  Siburian', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:39:38', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (120, '0243121', '2020-09-14', 'Posma Situmeang / Yosi Lumbantoruan', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:41:43', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (121, '0243122', '2020-09-14', 'Tommi Hutapea / Marta  Hutabarat', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:41:55', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (122, '0243123', '2020-09-14', 'Sidin Jona Simarmata / Sunita Juniberti Ritonga', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:42:08', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (123, '0243127', NULL, 'Martahan Simanjuntak / Maria Mardelina Sirait', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:42:15', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (124, '0243134', '2022-03-27', 'Gamler Hutasoit / Bunga Roslina Sinambela', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:42:29', NULL, 0);
INSERT INTO `registrasi_jemaat` VALUES (125, '0243144', '2022-12-10', 'CPdt. Mikhael Sihotang / Shintya br. Sitorus', 8, 1, 1, NULL, NULL, NULL, 2, '2023-05-09 18:42:40', NULL, 0);

-- ----------------------------
-- Table structure for registrasi_pernikahan
-- ----------------------------
DROP TABLE IF EXISTS `registrasi_pernikahan`;
CREATE TABLE `registrasi_pernikahan`  (
  `id_registrasi_nikah` int NOT NULL AUTO_INCREMENT,
  `id_gereja` int NULL DEFAULT NULL,
  `id_gereja_martumpol` int NULL DEFAULT NULL,
  `tgl_martumpol` date NOT NULL,
  `tgl_warta_martumpol` date NULL DEFAULT NULL,
  `isHKBP_martumpol` int NULL DEFAULT NULL,
  `nama_gereja_martumpol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_surat_martumpol` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendeta_martumpol` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_surat_martumpol` bigint NULL DEFAULT NULL,
  `tgl_pemberkatan` date NOT NULL,
  `tgl_warta_pemberkatan` date NULL DEFAULT NULL,
  `isHKBP_pemeberkatan` int NULL DEFAULT NULL,
  `id_gereja_pemberkatan` int NULL DEFAULT NULL,
  `nama_gereja_pemberkatan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_surat_pemberkatan` int NULL DEFAULT NULL,
  `nama_pendeta_pemberkatan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_surat_pemberkatan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status_reg_nikah` int NULL DEFAULT 4,
  `id_jemaat_laki` int NULL DEFAULT NULL,
  `isHKBP_laki` tinyint(1) NULL DEFAULT 0,
  `id_gereja_laki` tinyint(1) NULL DEFAULT NULL,
  `nama_lengkap_laki` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_gereja_laki` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_jemaat_laki` tinyint(1) NULL DEFAULT 0,
  `nama_ayah_laki` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_ibu_laki` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_jemaat_perempuan` int NULL DEFAULT NULL,
  `nama_lengkap_perempuan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_HKBP_perempuan` tinyint(1) NULL DEFAULT 0,
  `id_gereja_perempuan` int NULL DEFAULT NULL,
  `nama_gereja_perempuan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `is_jemaat_perempuan` tinyint(1) NULL DEFAULT 0,
  `nama_ayah_perempuan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_ibu_perempuan` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `status` int NULL DEFAULT 0,
  `id_user` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id_registrasi_nikah`) USING BTREE,
  INDEX `gereja_id_registrasi_pernikahan`(`id_gereja` ASC) USING BTREE,
  INDEX `gereja_martumpol_id_registrasi_pernikahan`(`id_gereja_martumpol` ASC) USING BTREE,
  INDEX `gereja_pemberkatan_id_registrasi_pernikahan`(`id_gereja_pemberkatan` ASC) USING BTREE,
  INDEX `status_reg_nikah_registrasi_pernikahan`(`id_status_reg_nikah` ASC) USING BTREE,
  INDEX `fk_id_calon_mempelai_laki`(`id_jemaat_laki` ASC) USING BTREE,
  INDEX `fk_id_calon_mempelai_perempuan`(`id_jemaat_perempuan` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_pernikahan`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_calon_mempelai_laki` FOREIGN KEY (`id_jemaat_laki`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_calon_mempelai_perempuan` FOREIGN KEY (`id_jemaat_perempuan`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_pernikahan` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gereja_id_registrasi_pernikahan` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gereja_martumpol_id_registrasi_pernikahan` FOREIGN KEY (`id_gereja_martumpol`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `gereja_pemberkatan_id_registrasi_pernikahan` FOREIGN KEY (`id_gereja_pemberkatan`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `status_reg_nikah_registrasi_pernikahan` FOREIGN KEY (`id_status_reg_nikah`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registrasi_pernikahan
-- ----------------------------
INSERT INTO `registrasi_pernikahan` VALUES (1, NULL, NULL, '2023-04-09', NULL, NULL, 'adasd', '0821', 'Timur Aja yach', NULL, '2023-07-07', NULL, NULL, NULL, 'asda', 823, 'Timur Aja yach', NULL, NULL, NULL, 0, NULL, NULL, 'cxcz', 0, 'xcxz', 'zxcz', NULL, NULL, 0, NULL, 'xczc', 0, 'zxczc', 'vds', 'asda', '2023-06-06 10:27:42', '2023-06-16 17:08:07', 1, 1, 0);
INSERT INTO `registrasi_pernikahan` VALUES (2, NULL, NULL, '2023-05-29', '0000-00-00', NULL, 'Marturani', NULL, NULL, NULL, '2023-06-01', '0000-00-00', NULL, NULL, 'hakja', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'Palmarum', 0, 'Mahar', 'dsds', NULL, NULL, 0, NULL, 'Parso', 0, 'Sahat', 'Turnip', 'mwehehehe', '2023-06-06 10:32:55', '2023-06-16 17:08:10', 1, 1, 0);
INSERT INTO `registrasi_pernikahan` VALUES (6, NULL, NULL, '2023-04-09', NULL, NULL, 'adasd', '0821', 'Timur Aja yach', NULL, '2023-07-07', NULL, NULL, NULL, 'asda', 823, 'Timur Aja yach', NULL, 4, NULL, 0, NULL, 'gfd', 'cxcz', 0, 'xcxz', 'zxcz', NULL, 'sdfg', 0, NULL, 'xczc', 0, 'zxczc', 'vds', 'ada', '2023-06-13 23:37:09', '2023-06-18 09:36:04', 1, 1, 7);
INSERT INTO `registrasi_pernikahan` VALUES (7, NULL, NULL, '2023-05-28', '2023-05-10', NULL, 'Marturani', '0821', 'Timur Aja', NULL, '2023-06-01', '2023-05-20', NULL, NULL, 'Palmarum', 823, 'Timur Aja yach', NULL, 4, NULL, 0, NULL, 'Samaran', 'Palmarum', 0, 'Mahar', 'Mama', NULL, 'Samida', 0, NULL, 'Parso', 0, 'sdsd1', 'Turnip', 'masasi', '2023-06-13 23:45:27', '2023-12-11 09:50:34', 1, 1, 6);

-- ----------------------------
-- Table structure for registrasi_sidi
-- ----------------------------
DROP TABLE IF EXISTS `registrasi_sidi`;
CREATE TABLE `registrasi_sidi`  (
  `id_registrasi_sidi` int NOT NULL AUTO_INCREMENT,
  `is_jemaat` tinyint(1) NULL DEFAULT 0,
  `id_jemaat` int NULL DEFAULT NULL,
  `nama_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_hub_keluarga` int NOT NULL DEFAULT 3,
  `is_HKBP` tinyint(1) NOT NULL DEFAULT 0,
  `id_gereja_sidi` int NOT NULL DEFAULT 1,
  `nama_gereja_non_HKBP` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_sidi` date NULL DEFAULT NULL,
  `nats_sidi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendeta_sidi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NULL DEFAULT 0,
  `status` int UNSIGNED NULL DEFAULT 0,
  `id_user` int UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id_registrasi_sidi`) USING BTREE,
  INDEX `fk_id_jemaat_registrasi_sidi`(`id_jemaat` ASC) USING BTREE,
  INDEX `fk_id_hub_keluarga_registrasi_sidi`(`id_hub_keluarga` ASC) USING BTREE,
  INDEX `fk_id_gereja_sidi_registrasi_sidi`(`id_gereja_sidi` ASC) USING BTREE,
  INDEX `fk_id_status_registrasi_sidi`(`id_status` ASC) USING BTREE,
  INDEX `fk_pendeta_sidi`(`nama_pendeta_sidi` ASC) USING BTREE,
  INDEX `fk_id_user_registrasi_sidi`(`id_user` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_sidi_registrasi_sidi` FOREIGN KEY (`id_gereja_sidi`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_hub_keluarga_registrasi_sidi` FOREIGN KEY (`id_hub_keluarga`) REFERENCES `hubungan_keluarga` (`id_hub_keluarga`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_registrasi_sidi` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_registrasi_sidi` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_registrasi_sidi` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of registrasi_sidi
-- ----------------------------
INSERT INTO `registrasi_sidi` VALUES (1, 0, NULL, 'maja', 'mija', 'JOCEP', 'Parso', '2003-07-09', 3, 0, 1, 'HKBP Palmarum', '2023-06-01', 'Tarutung', 'Timur', 'adasdsa1', NULL, '2023-06-06 11:42:19', '2023-06-18 19:08:01', 0, 1, 0);
INSERT INTO `registrasi_sidi` VALUES (2, 0, NULL, 'sas', 'sddsd', 'Sahat', 'Parsoburan', '2023-05-28', 3, 0, 1, 'medan jaya', NULL, NULL, NULL, 'wwewe', NULL, '2023-06-06 11:57:40', '2023-06-18 08:01:18', 0, 1, 0);
INSERT INTO `registrasi_sidi` VALUES (3, 0, NULL, 'RINNI', 'SUSU', 'Josep', 'Parsoburan', '2023-05-28', 3, 0, 1, 'medan jaya', NULL, NULL, NULL, 'asdfg', NULL, '2023-06-07 12:04:46', '2023-06-18 08:18:01', 0, 1, 0);
INSERT INTO `registrasi_sidi` VALUES (4, 0, NULL, 'qwe', 'er', 'qwe', 'rt', '2023-05-29', 3, 0, 1, 'sdfg', NULL, NULL, NULL, 'gfgf', NULL, '2023-06-07 15:03:35', '2023-06-18 07:57:06', 0, 2, 0);
INSERT INTO `registrasi_sidi` VALUES (5, 0, NULL, 'sas', 'SUlu', 'Sahat', 'Laguboti', '2023-05-31', 1, 0, 1, 'medan jaya', '2023-06-16', 'Tarutung', 'Timur', 'masasi', NULL, '2023-06-13 22:50:10', '2023-06-18 16:37:21', 0, 1, 0);
INSERT INTO `registrasi_sidi` VALUES (6, 0, NULL, 'dfg', 'bnbvc', 'qwer', 'dfgh', '2023-04-09', 3, 0, 1, 'zxcvb', NULL, NULL, NULL, 'asda', NULL, '2023-06-13 23:54:34', '2023-06-18 07:59:12', 0, 2, 6);
INSERT INTO `registrasi_sidi` VALUES (7, 0, NULL, 'sas', 'SUSU', 'Sahat', 'vb', '2023-05-30', 1, 0, 1, 'medan jaya', NULL, NULL, NULL, 'masasi', NULL, '2023-06-13 23:57:09', NULL, 0, 1, 6);
INSERT INTO `registrasi_sidi` VALUES (8, 0, NULL, 'RINNI', 'sddsd', 'Sahat', 'dsds', '2023-06-02', 1, 0, 1, 'medan jaya', NULL, NULL, NULL, 'gfgf', NULL, '2023-06-14 11:24:51', '2023-12-11 09:49:14', 0, 0, 6);
INSERT INTO `registrasi_sidi` VALUES (9, 0, NULL, 'J. Sibarani', 'A. Silaen', 'Rendi Jonathan Sibarani1', 'Laguboti', '2023-06-22', 3, 0, 1, 'HKBP Godung', '2023-06-30', 'poda', 'Timur', 'testing2', NULL, '2023-06-18 08:17:09', '2023-06-18 08:17:18', 0, 1, NULL);

-- ----------------------------
-- Table structure for ressort
-- ----------------------------
DROP TABLE IF EXISTS `ressort`;
CREATE TABLE `ressort`  (
  `id_ressort` int NOT NULL AUTO_INCREMENT,
  `id_distrik` int NOT NULL,
  `kode_ressort` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ressort` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_kota` int NOT NULL,
  `pendeta_ressort` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_berdiri` date NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_ressort`) USING BTREE,
  INDEX `distrik_id_ressort`(`id_distrik` ASC) USING BTREE,
  INDEX `fk_id_kota_ressort`(`id_kota` ASC) USING BTREE,
  CONSTRAINT `fk_id_distrik_ressort` FOREIGN KEY (`id_distrik`) REFERENCES `distrik` (`id_distrik`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_kota_ressort` FOREIGN KEY (`id_kota`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of ressort
-- ----------------------------
INSERT INTO `ressort` VALUES (1, 1, '0243', 'Ressort Palmarum', 'Stadion Tarutung, Hutatoruan VI, Kec. Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara', 31, 'Pdt. Martin Gultom. SSi. Teol', '1999-07-20', '2023-05-08 15:58:18', NULL, 0);

-- ----------------------------
-- Table structure for rpp
-- ----------------------------
DROP TABLE IF EXISTS `rpp`;
CREATE TABLE `rpp`  (
  `id_rpp` int NOT NULL AUTO_INCREMENT,
  `id_gereja` int NOT NULL DEFAULT 1,
  `id_jemaat` int NOT NULL,
  `tgl_warta_rpp` date NOT NULL,
  `id_jenis_rpp` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NOT NULL DEFAULT 6,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_rpp`) USING BTREE,
  INDEX `gereja_id_rpp`(`id_gereja` ASC) USING BTREE,
  INDEX `jemaat_id_rpp`(`id_jemaat` ASC) USING BTREE,
  INDEX `status_id_rpp`(`id_status` ASC) USING BTREE,
  INDEX `fk_id_jenis_rpp_rpp`(`id_jenis_rpp` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_rpp` FOREIGN KEY (`id_gereja`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_rpp` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jenis_rpp_rpp` FOREIGN KEY (`id_jenis_rpp`) REFERENCES `jenis_rpp` (`id_jenis_rpp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_rpp` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of rpp
-- ----------------------------
INSERT INTO `rpp` VALUES (1, 1, 2, '2023-04-06', 1, 'Pembunuhan Tidak Terencana lagi', 6, '2023-05-24 17:52:28', '2023-05-24 22:47:59', 0);
INSERT INTO `rpp` VALUES (2, 1, 1, '2020-09-20', 1, 'Pembunuhan', 6, '2023-05-25 00:04:57', '2023-05-25 00:08:11', 0);
INSERT INTO `rpp` VALUES (3, 1, 3, '2023-05-24', 1, 'Pembunuhan Berencana', 6, '2023-05-25 00:05:27', '2023-05-25 00:08:12', 0);
INSERT INTO `rpp` VALUES (4, 1, 1, '2023-05-19', 1, 'Pembunuhan Berencana', 6, '2023-05-25 00:08:29', '2023-05-25 00:09:24', 0);
INSERT INTO `rpp` VALUES (5, 1, 1, '2020-05-20', 1, 'Pembunuhan Berencana', 6, '2023-05-25 00:11:25', '2023-05-25 01:35:23', 0);
INSERT INTO `rpp` VALUES (6, 1, 1, '2023-05-05', 1, 'pembunuhan', 6, '2023-05-25 10:30:39', '2023-05-26 02:01:55', 0);
INSERT INTO `rpp` VALUES (7, 1, 3, '2023-05-13', 1, 'bunu', 6, '2023-05-26 02:00:55', '2023-12-11 09:35:23', 0);
INSERT INTO `rpp` VALUES (8, 1, 1, '2023-05-13', 1, 'testing', 6, '2023-05-27 21:08:31', '2023-12-11 09:33:20', 0);
INSERT INTO `rpp` VALUES (9, 1, 1, '2023-06-09', 1, 'testing', 6, '2023-06-18 10:32:39', '2023-12-11 09:32:53', 0);

-- ----------------------------
-- Table structure for set_sentralisasi
-- ----------------------------
DROP TABLE IF EXISTS `set_sentralisasi`;
CREATE TABLE `set_sentralisasi`  (
  `id_sentralisasi` int NOT NULL,
  `persentasi_sentralisasi` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_sentralisasi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of set_sentralisasi
-- ----------------------------

-- ----------------------------
-- Table structure for sidi
-- ----------------------------
DROP TABLE IF EXISTS `sidi`;
CREATE TABLE `sidi`  (
  `id_sidi` int NOT NULL AUTO_INCREMENT,
  `id_registrasi_sidi` int NOT NULL,
  `id_jemaat` int NOT NULL,
  `tgl_sidi` date NOT NULL,
  `no_surat_sidi` int NOT NULL,
  `nats_sidi` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_gereja_sidi` int NOT NULL,
  `isHKBP` tinyint(1) NOT NULL DEFAULT 0,
  `nama_gereja_non_hkbp` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_pendeta_sidi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file_surat_sidi` bigint NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_status` int NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_sidi`) USING BTREE,
  INDEX `jemaat_id_sidi`(`id_jemaat` ASC) USING BTREE,
  INDEX `gereja_sidi_id_sidi`(`id_registrasi_sidi` ASC) USING BTREE,
  INDEX `status_id_sidi`(`id_status` ASC) USING BTREE,
  INDEX `fk_id_gereja_sidi_sidi`(`id_gereja_sidi` ASC) USING BTREE,
  CONSTRAINT `fk_id_gereja_sidi_sidi` FOREIGN KEY (`id_gereja_sidi`) REFERENCES `gereja` (`id_gereja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_jemaat_sidi` FOREIGN KEY (`id_jemaat`) REFERENCES `jemaat` (`id_jemaat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_status_sidi` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_registrasi_sidi_sidi` FOREIGN KEY (`id_registrasi_sidi`) REFERENCES `registrasi_sidi` (`id_registrasi_sidi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sidi
-- ----------------------------

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis_status` int NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_status`) USING BTREE,
  INDEX `jenis_status_id_status`(`id_jenis_status` ASC) USING BTREE,
  CONSTRAINT `fk_id_jenis_status_status` FOREIGN KEY (`id_jenis_status`) REFERENCES `jenis_status` (`id_jenis_status`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, '0', 1, 'Not Approved', '2023-04-23 09:29:45', NULL, 0);
INSERT INTO `status` VALUES (2, '1', 1, 'Approved', '2023-04-23 09:30:12', NULL, 0);
INSERT INTO `status` VALUES (3, '0', 2, 'Belum Menikah', '2023-05-10 15:51:25', NULL, 0);
INSERT INTO `status` VALUES (4, '1', 2, 'Sudah Menikah', '2023-05-10 15:51:34', NULL, 0);
INSERT INTO `status` VALUES (5, '0', 3, 'Jemaat Tidak Aktif', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (6, '1', 3, 'Jemaat Aktif', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (7, '1', 4, 'Jemaat Meninggal', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (8, '1', 5, 'Jemaat Pindah', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (9, '1', 6, 'Jemaat Rpp', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (10, '0', 7, 'Majelis Tidak Aktif', '2023-05-17 10:33:21', NULL, 0);
INSERT INTO `status` VALUES (11, '1', 7, 'Majelis Aktif', '2023-05-17 10:33:21', NULL, 0);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (6, 'josep', 'Admin@gmail.com', NULL, '$2y$10$LicvMTz728QlL6QZnlyFBeWHRiXL3BdOAoCKke5e3BnvN5X/Io/Xa', NULL, '2023-06-13 08:25:48', '2023-06-13 08:25:48', 1);
INSERT INTO `users` VALUES (7, 'Josep Napitupulu', 'josepnapitupulu9@gmail.com', NULL, '$2y$10$ufYdRs/QaZVYLsqiAl1irusIf04pfaoPwQwBubbwYC1kCesaRmubu', 'sjUif1qe81Rm0ZQDkyYrC1b6ruupv5HHOVBMQ90PawZ9amocXtqVctw9Wdva', '2023-06-13 08:26:20', '2023-06-13 10:22:17', 0);
INSERT INTO `users` VALUES (8, 'yuni', 'yunisiagian@gmail.com', NULL, '$2y$10$7lUW3Mv8HpUmPTBQI/fXcuEB3ovq8kw/Lda.ag1TofeoB93VDuQyy', NULL, '2023-06-15 01:49:33', '2023-06-15 01:49:33', 0);
INSERT INTO `users` VALUES (9, 'yuni', 'yunisiagian30@gmail.com', NULL, '$2y$10$A8p3LijksL2BHcXZZBkwye/5eJxUq1NulYRNXhcjq4tf3GJrmw5Uu', NULL, '2023-06-15 01:56:42', '2023-06-15 01:56:42', 0);

-- ----------------------------
-- Table structure for wijk
-- ----------------------------
DROP TABLE IF EXISTS `wijk`;
CREATE TABLE `wijk`  (
  `id_wijk` int NOT NULL AUTO_INCREMENT,
  `nama_wijk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp,
  `update_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_wijk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of wijk
-- ----------------------------
INSERT INTO `wijk` VALUES (1, 'Wijk-1', 'Wijk Pertama', '2023-05-08 20:55:50', NULL, 0);
INSERT INTO `wijk` VALUES (2, 'Wijk-2', 'Wijk Kedua', '2023-05-09 17:36:39', NULL, 0);
INSERT INTO `wijk` VALUES (3, 'Wijk-3', 'Wijk Ketiga', '2023-05-09 17:36:48', NULL, 0);
INSERT INTO `wijk` VALUES (4, 'Wijk-4', 'Wijk Keempat', '2023-05-09 17:37:07', NULL, 0);
INSERT INTO `wijk` VALUES (5, 'Wijk-5', 'Wijk Kelima', '2023-05-09 17:37:14', NULL, 0);
INSERT INTO `wijk` VALUES (6, 'Wijk-6', 'Wijk Keenam', '2023-05-09 17:37:25', NULL, 0);
INSERT INTO `wijk` VALUES (7, 'Wijk-7', 'Wijk Ketujuh', '2023-05-09 17:38:25', NULL, 0);
INSERT INTO `wijk` VALUES (8, 'Wijk-8', 'Wijk Kedelapan', '2023-05-09 17:38:38', NULL, 0);

-- ----------------------------
-- Procedure structure for addJadwalIbadah
-- ----------------------------
DROP PROCEDURE IF EXISTS `addJadwalIbadah`;
delimiter ;;
CREATE PROCEDURE `addJadwalIbadah`(IN p_tgl_ibadah DATE,
IN p_id_jenis_minggu INT,
IN p_id_melayani INT,
IN p_jumlah_pelayan INT,
IN p_waktu_mulai TIME,
IN p_nyanyian_1 VARCHAR(250),
IN p_votum VARCHAR(250),
IN p_nyanyian_2 VARCHAR(250),
IN p_hukum_taurat VARCHAR(250),
IN p_nyanyian_3 VARCHAR(250),
IN p_pengakuan_dosa VARCHAR(250),
IN p_nyanyian_4 VARCHAR(250),
IN p_epistel VARCHAR(250),
IN p_nyanyian_5 VARCHAR(250),
IN p_pengakuan_iman VARCHAR(250),
IN p_nyanyian_6 VARCHAR(250),
IN p_khotbah VARCHAR(250),
IN p_nyanyian_7 VARCHAR(250),
IN p_doa_penutup VARCHAR(250),
IN p_keterangan VARCHAR(250))
BEGIN

INSERT INTO jadwal_ibadah (tgl_ibadah, id_jenis_minggu, id_melayani, jumlah_pelayan, waktu_mulai, nyanyian_1,votum, nyanyian_2, hukum_taurat, nyanyian_3, pengakuan_dosa, nyanyian_4, epistel, nyanyian_5, pengakuan_iman, nyanyian_6, khotbah, nyanyian_7, doa_penutup, keterangan) VALUES (p_tgl_ibadah, p_id_jenis_minggu, p_id_melayani, p_jumlah_pelayan, p_waktu_mulai, p_nyanyian_1, p_votum, p_nyanyian_2, p_hukum_taurat, p_nyanyian_3, p_pengakuan_dosa, p_nyanyian_4, p_epistel, p_nyanyian_5, p_pengakuan_iman, p_nyanyian_6, p_khotbah, p_nyanyian_7, p_doa_penutup, p_keterangan);


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addJemaatPindah
-- ----------------------------
DROP PROCEDURE IF EXISTS `addJemaatPindah`;
delimiter ;;
CREATE PROCEDURE `addJemaatPindah`(IN p_id_registrasi INT, 
IN p_id_jemaat INT,
IN p_no_surat_pindah INT,
IN p_tgl_pindah DATE,
IN p_tgl_warta DATE,
IN p_id_gereja_tujuan INT,
IN p_nama_gereja_non_HKBP VARCHAR(100),
IN p_keterangan VARCHAR(250))
BEGIN

INSERT INTO head_pindah (id_registrasi, id_jemaat, no_surat_pindah, tgl_pindah, tgl_warta, id_gereja_tujuan, nama_gereja_non_HKBP, keterangan,`status`) 
VALUES(p_id_registrasi, p_id_jemaat, p_no_surat_pindah, p_tgl_pindah, p_tgl_warta, p_id_gereja_tujuan, p_nama_gereja_non_HKBP, p_keterangan,1);

UPDATE jemaat SET is_deleted = 1, keterangan = "Jemaat Pindah" WHERE id_jemaat = p_id_jemaat;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addKegiatan
-- ----------------------------
DROP PROCEDURE IF EXISTS `addKegiatan`;
delimiter ;;
CREATE PROCEDURE `addKegiatan`(IN p_nama_jenis_kegiatan VARCHAR(250),
IN p_lokasi_kegiatan VARCHAR(250),
IN p_tanggal_kegiatan DATE,
IN p_waktu_kegiatan VARCHAR(50),
IN p_keterangan VARCHAR(250))
BEGIN
	INSERT INTO jenis_kegiatan (nama_jenis_kegiatan, lokasi_kegiatan, tanggal_kegiatan, waktu_kegiatan, keterangan) VALUES (p_nama_jenis_kegiatan, p_lokasi_kegiatan, p_tanggal_kegiatan, p_waktu_kegiatan, p_keterangan);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addPelayanGereja
-- ----------------------------
DROP PROCEDURE IF EXISTS `addPelayanGereja`;
delimiter ;;
CREATE PROCEDURE `addPelayanGereja`(IN p_id_jemaat INT,
IN p_tanggal_tahbisan DATE,
IN p_jabatan VARCHAR(255),
IN p_tangggal_akhir_jawatan DATE,
IN p_keterangan VARCHAR(255))
BEGIN

INSERT INTO pelayan_gereja (id_jemaat,tanggal_tahbisan, jabatan, tanggal_akhir_jawatan, keterangan) VALUES (p_id_jemaat, p_tanggal_tahbisan, p_jabatan, p_tangggal_akhir_jawatan, p_keterangan);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `addPernikahan`;
delimiter ;;
CREATE PROCEDURE `addPernikahan`(IN p_id_registrasi_pernikahan INT,
IN p_id_gereja_nikah INT,
IN p_tgl_pernikahan DATE,
IN p_nats_pernikahan VARCHAR(250),
IN p_nama_gereja_non_HKBP VARCHAR(100),
IN p_nama_pendeta VARCHAR(100),
IN p_keterangan VARCHAR(250))
BEGIN
INSERT INTO pernikahan (id_registrasi_pernikahan, id_gereja_nikah, tgl_pernikahan, nats_pernikahan, nama_gereja_non_HKBP, nama_pendeta, keterangan) VALUES(p_id_registrasi_pernikahan, p_id_gereja, p_tgl_pernikahan, p_nats_pernikahan, p_nama_gereja_non_HKBP, p_nama_pendeta, p_keterangan);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addRegistrasiBaptis
-- ----------------------------
DROP PROCEDURE IF EXISTS `addRegistrasiBaptis`;
delimiter ;;
CREATE PROCEDURE `addRegistrasiBaptis`(IN p_nama_ayah VARCHAR(100),
IN p_nama_ibu VARCHAR(100),
IN p_nama_lengkap VARCHAR(100),
IN p_tempat_lahir VARCHAR(150),
IN p_tanggal_lahir DATE,
IN p_alamat VARCHAR(250),
IN p_tanggal_baptis DATE,
IN p_jenis_kelamin VARCHAR(50),
IN p_id_pendeta INT,
IN p_keterangan VARCHAR(250))
BEGIN

INSERT INTO registrasi_baptis( nama_ayah, nama_ibu, nama_lengkap, tempat_lahir, tanggal_lahir, alamat, tanggal_baptis, jenis_kelamin, id_pendeta, keterangan, `status`) 
VALUES (p_nama_ayah, p_nama_ibu, p_nama_lengkap, p_tempat_lahir, p_tanggal_lahir, p_alamat, p_tanggal_baptis, p_jenis_kelamin, p_id_pendeta, p_keterangan, 1);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addRegistrasiJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `addRegistrasiJemaat`;
delimiter ;;
CREATE PROCEDURE `addRegistrasiJemaat`(IN p_id_registrasi INT,
IN p_nama_depan VARCHAR (50),
IN p_nama_belakang VARCHAR (50),
IN p_gelar_depan VARCHAR (25),
IN p_gelar_belakang VARCHAR (25),
IN p_tempat_lahir VARCHAR (100),
IN p_tanggal_lahir DATE,
IN p_jenis_kelamin VARCHAR(25),
IN p_id_hub_keluarga INT,
IN p_id_pendidikan INT,
IN p_id_bidang_pendidikan INT,
IN p_id_bidang_pendidikan_lain INT,
IN p_id_pekerjaan INT,
IN p_nama_pekerjaan_lain VARCHAR(100),
IN p_gol_darah VARCHAR (5),
IN p_alamat VARCHAR (250),
IN p_no_telepon VARCHAR(20),
IN p_keterangan VARCHAR(250))
BEGIN

INSERT INTO jemaat(id_registrasi, nama_depan, nama_belakang, gelar_depan, gelar_belakang, tempat_lahir, tanggal_lahir, jenis_kelamin, id_hub_keluarga, id_pendidikan, id_bidang_pendidikan, id_bidang_pendidikan_lain, id_pekerjaan, nama_pekerjaan_lain, gol_darah, alamat, no_telepon, keterangan, `status`) VALUES(
p_id_registrasi, 
p_nama_depan, 
p_nama_belakang, 
p_gelar_depan, 
p_gelar_belakang, 
p_tempat_lahir, 
p_tanggal_lahir, 
p_jenis_kelamin, 
p_id_hub_keluarga, 
p_id_pendidikan, 
p_id_bidang_pendidikan, 
p_id_bidang_pendidikan_lain, 
p_id_pekerjaan, 
p_nama_pekerjaan_lain, 
p_gol_darah, 
p_alamat, 
p_no_telepon, 
p_keterangan, 
1
);


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addRegistrasiPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `addRegistrasiPernikahan`;
delimiter ;;
CREATE PROCEDURE `addRegistrasiPernikahan`(IN p_id_gereja_martumpol INT,
IN p_tgl_martumpol DATE,
IN p_tgl_warta_martumpol DATE,
IN p_nama_gereja_martumpol VARCHAR(100),
IN p_nomor_surat_martumpol VARCHAR(150),
IN p_nama_pendeta_martumpol VARCHAR(100),
IN p_id_gereja_pemberkatan INT,
IN p_tgl_pemberkatan DATE,
IN p_tgl_warta_pemberkatan DATE,
IN p_nama_gereja_pemberkatan VARCHAR(150),
IN p_nomor_surat_pemberkatan VARCHAR(150),
IN p_nama_pendeta_pemberkatan VARCHAR(100),
IN p_keterangan VARCHAR(250),
IN p_id_jemaat_laki INT,
IN p_id_gereja_laki INT,
IN p_nama_gereja_laki VARCHAR (150),
IN p_nama_lengkap_laki VARCHAR(150),
IN p_nama_ayah_laki VARCHAR (150),
IN p_nama_ibu_laki VARCHAR (150),
IN p_id_jemaat_perempuan INT,
IN p_id_gereja_perempuan INT,
IN p_nama_gereja_perempuan VARCHAR (150),
IN p_nama_lengkap_perempuan VARCHAR(150),
IN p_nama_ayah_perempuan VARCHAR (150),
IN p_nama_ibu_perempuan VARCHAR (150))
BEGIN

INSERT INTO registrasi_pernikahan(
id_gereja_martumpol,
 tgl_martumpol, 
 tgl_warta_martumpol, 
 nama_gereja_martumpol, 
 nomor_surat_martumpol, 
 nama_pendeta_martumpol, 
 id_gereja_pemberkatan, 
 tgl_pemberkatan, 
 tgl_warta_pemberkatan, 
 nama_gereja_pemberkatan, 
 nomor_surat_pemberkatan, 
 nama_pendeta_pemberkatan, 
 keterangan, 
 id_jemaat_laki, 
 id_gereja_laki, 
 nama_gereja_laki, 
 nama_lengkap_laki, 
 nama_ayah_laki, 
 nama_ibu_laki, 
 id_jemaat_perempuan, 
 id_gereja_perempuan, 
 nama_gereja_perempuan, 
 nama_lengkap_perempuan, 
 nama_ayah_perempuan, 
 nama_ibu_perempuan) 
VALUES(
p_id_gereja_martumpol, 
p_tgl_martumpol, 
p_tgl_warta_martumpol, 
p_nama_gereja_martumpol, 
p_nomor_surat_martumpol, 
p_nama_pendeta_martumpol,
p_id_gereja_pemberkatan, 
p_tgl_pemberkatan, 
p_tgl_warta_pemberkatan, 
p_nama_gereja_pemberkatan, 
p_nomor_surat_pemberkatan, 
p_nama_pendeta_pemberkatan, 
p_keterangan, 
p_id_jemaat_laki, 
p_id_gereja_laki, 
p_nama_lengkap_laki, 
p_nama_ayah_laki, 
p_nama_ibu_laki, 
p_id_jemaat_perempuan, 
p_id_gereja_perempuan, 
p_nama_gereja_perempuan, 
p_nama_lengkap_perempuan, 
p_nama_ayah_perempuan, 
p_nama_ibu_perempuan
);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addRegistrasiSidi
-- ----------------------------
DROP PROCEDURE IF EXISTS `addRegistrasiSidi`;
delimiter ;;
CREATE PROCEDURE `addRegistrasiSidi`(IN p_nama_lengkap VARCHAR(100),
IN p_nama_ayah VARCHAR(100),
IN p_nama_ibu VARCHAR(100),
IN p_tempat_lahir VARCHAR(150),
IN p_tanggal_lahir DATE,
IN p_nats_sidi VARCHAR(250),
IN p_nama_gereja_non_HKBP VARCHAR(150),
IN p_nama_pendeta_sidi VARCHAR(100),
IN p_keterangan VARCHAR (250),
IN p_tanggal_sidi DATE)
BEGIN
	INSERT INTO registrasi_sidi (nama_lengkap, nama_ayah, nama_ibu, tempat_lahir, tanggal_lahir, nats_sidi, nama_gereja_non_HKBP, nama_pendeta_sidi, keterangan, tanggal_sidi, `status`) VALUES (p_nama_lengkap,
	p_nama_ayah, p_nama_ibu, p_tempat_lahir, p_tanggal_lahir, p_nats_sidi, p_nama_gereja_non_HKBP, p_nama_pendeta_sidi, p_keterangan, p_tanggal_sidi, 1);

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for addRPP
-- ----------------------------
DROP PROCEDURE IF EXISTS `addRPP`;
delimiter ;;
CREATE PROCEDURE `addRPP`(p_id_jemaat INT,
p_id_jenis_rpp INT,
p_tgl_warta_rpp DATE,
p_keterangan VARCHAR(250))
BEGIN

INSERT INTO rpp( id_jemaat, id_jenis_rpp, tgl_warta_rpp, keterangan) VALUES ( p_id_jemaat, p_id_jenis_rpp, p_tgl_warta_rpp, p_keterangan);

UPDATE jemaat SET isRPP = 1 WHERE id_jemaat = p_id_jemaat;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteJadwalIbadah
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteJadwalIbadah`;
delimiter ;;
CREATE PROCEDURE `deleteJadwalIbadah`(IN p_id_jadwal_ibadah INT)
BEGIN

DECLARE rows_affected INT;

UPDATE jadwal_ibadah SET is_deleted = 1, update_at = NOW() WHERE id_jadwal_ibadah = p_id_jadwal_ibadah;

SELECT ROW_COUNT() INTO rows_affected;

IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteJemaat`;
delimiter ;;
CREATE PROCEDURE `deleteJemaat`(IN p_id_jemaat INT)
BEGIN
	DECLARE rows_affected INT;
	
	UPDATE jemaat SET is_deleted = 1 WHERE id_jemaat =p_id_jemaat;
	
	SELECT ROW_COUNT() INTO rows_affected;

IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteKegiatan
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteKegiatan`;
delimiter ;;
CREATE PROCEDURE `deleteKegiatan`(IN p_id_jenis_kegiatan INT)
BEGIN
DECLARE rows_affected INT;

	UPDATE jenis_kegiatan SET is_deleted = 1, update_at= NOW() WHERE id_jenis_kegiatan = p_id_jenis_kegiatan;

SELECT ROW_COUNT() INTO rows_affected;

IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deletePelayan
-- ----------------------------
DROP PROCEDURE IF EXISTS `deletePelayan`;
delimiter ;;
CREATE PROCEDURE `deletePelayan`(IN p_id_pelayan INT)
BEGIN
    DECLARE rows_affected INT;
    
    UPDATE pelayan_gereja 
    SET is_deleted = 1,
    update_at = NOW() 
    WHERE id_pelayan = p_id_pelayan;

    SELECT ROW_COUNT() INTO rows_affected;

    IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deletePernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `deletePernikahan`;
delimiter ;;
CREATE PROCEDURE `deletePernikahan`(IN p_id_pernikahan INT)
BEGIN
	DECLARE rows_affected INT;
	
UPDATE pernikahan SET is_deleted = 1,
update_at = NOW()
 WHERE id_pernikahan = p_id_pernikahan;
 
 SELECT ROW_COUNT() INTO rows_affected;
 
 IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deletePindahJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `deletePindahJemaat`;
delimiter ;;
CREATE PROCEDURE `deletePindahJemaat`(IN p_id_head_reg_pindah INT)
BEGIN
	
	DECLARE rows_affected INT;
    
UPDATE head_pindah SET is_deleted = 1, update_at = NOW() WHERE id_head_reg_pindah = p_id_head_reg_pindah;

SELECT ROW_COUNT() INTO rows_affected;

	IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteRegistrasiBaptis
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteRegistrasiBaptis`;
delimiter ;;
CREATE PROCEDURE `deleteRegistrasiBaptis`(IN p_id_registras_baptis INT)
BEGIN
 DECLARE rows_affected INT;
 
	UPDATE registrasi_baptis SET is_deleted = 1, update_at = NOW() WHERE id_registrasi_baptis = p_id_registras_baptis;
	
	SELECT ROW_COUNT() INTO rows_affected;

IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteRegistrasiPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteRegistrasiPernikahan`;
delimiter ;;
CREATE PROCEDURE `deleteRegistrasiPernikahan`(IN p_id_registrasi_nikah INT)
BEGIN
	
	DECLARE rows_affected INT;
	
	UPDATE registrasi_pernikahan SET is_deleted = 1, update_at = NOW() 
	WHERE id_registrasi_nikah = p_id_registrasi_nikah;
	
	SELECT ROW_COUNT() INTO rows_affected;

	IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteRegistrasiSidi
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteRegistrasiSidi`;
delimiter ;;
CREATE PROCEDURE `deleteRegistrasiSidi`(IN p_id_registrasi_sidi INT)
BEGIN
	DECLARE rows_affected INT;
    
	UPDATE registrasi_sidi SET is_deleted = 1, update_at = NOW() WHERE id_registrasi_sidi = p_id_registrasi_sidi;
	
	SELECT ROW_COUNT() INTO rows_affected;

	IF rows_affected > 0 THEN
        SELECT 'Success' AS message;
    ELSE
        SELECT 'Failed' AS message;
    END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for deleteRPP
-- ----------------------------
DROP PROCEDURE IF EXISTS `deleteRPP`;
delimiter ;;
CREATE PROCEDURE `deleteRPP`(p_id_rpp INT)
BEGIN
    DECLARE rows_affected INT;
    DECLARE statusRpp INT;
    DECLARE id_jemaat_last INT;

    -- Retrieve id_jemaat from rpp table
--     SELECT id_jemaat INTO id_jemaat_last FROM rpp WHERE id_rpp = p_id_rpp;

    -- Update the rpp table
    UPDATE rpp SET is_deleted = 1, update_at = NOW() WHERE id_rpp = p_id_rpp;

    -- Retrieve the is_deleted status from rpp table
--     SELECT is_deleted INTO statusRpp FROM rpp WHERE id_rpp = p_id_rpp;

--     IF statusRpp = 1 THEN
        -- If is_deleted is 1, update the jemaat table
--         UPDATE jemaat SET isRPP = 0 WHERE id_jemaat = id_jemaat_last;

        -- Check the number of affected rows after the jemaat table update
        SELECT ROW_COUNT() INTO rows_affected;
				
			IF rows_affected > 0 THEN
            SELECT 'Success' AS message;
        ELSE
            SELECT 'Failed' AS message;
        END IF;
        -- Return 'Success' if the jemaat table was updated successfully; otherwise, return 'Failed'
        
--     ELSE
--         SELECT 'Failed' AS message; -- Return 'Failed' if the rpp table update failed
--     END IF;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getBaptisYear
-- ----------------------------
DROP PROCEDURE IF EXISTS `getBaptisYear`;
delimiter ;;
CREATE PROCEDURE `getBaptisYear`()
BEGIN

SELECT COUNT(*) AS count FROM registrasi_baptis WHERE YEAR(create_at) = YEAR(NOW()) AND is_deleted=0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getBidangPendidikan
-- ----------------------------
DROP PROCEDURE IF EXISTS `getBidangPendidikan`;
delimiter ;;
CREATE PROCEDURE `getBidangPendidikan`()
BEGIN
	SELECT * FROM bidang_pendidikan WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getGereja
-- ----------------------------
DROP PROCEDURE IF EXISTS `getGereja`;
delimiter ;;
CREATE PROCEDURE `getGereja`()
BEGIN
	SELECT id_gereja, nama_gereja FROM gereja WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getHubunganKeluarga
-- ----------------------------
DROP PROCEDURE IF EXISTS `getHubunganKeluarga`;
delimiter ;;
CREATE PROCEDURE `getHubunganKeluarga`()
BEGIN
	SELECT * FROM hubungan_keluarga WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `getJemaat`;
delimiter ;;
CREATE PROCEDURE `getJemaat`()
BEGIN
	SELECT id_jemaat, CONCAT(gelar_depan, ' ' ,nama_depan, ' ', nama_belakang, ' ', gelar_belakang) as nama_lengkap FROM jemaat WHERE is_deleted=0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getJemaatCount
-- ----------------------------
DROP PROCEDURE IF EXISTS `getJemaatCount`;
delimiter ;;
CREATE PROCEDURE `getJemaatCount`()
BEGIN
	SELECT COUNT(*) AS count FROM jemaat WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getJemaatPerempuan
-- ----------------------------
DROP PROCEDURE IF EXISTS `getJemaatPerempuan`;
delimiter ;;
CREATE PROCEDURE `getJemaatPerempuan`()
BEGIN
	SELECT COUNT(*) AS count FROM jemaat WHERE jenis_kelamin = "Perempuan" AND is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getJenisRPP
-- ----------------------------
DROP PROCEDURE IF EXISTS `getJenisRPP`;
delimiter ;;
CREATE PROCEDURE `getJenisRPP`()
BEGIN
	SELECT id_jenis_rpp,jenis_rpp FROM jenis_rpp WHERE is_deleted = 0;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getKeluarga
-- ----------------------------
DROP PROCEDURE IF EXISTS `getKeluarga`;
delimiter ;;
CREATE PROCEDURE `getKeluarga`()
BEGIN
	SELECT COUNT(*) AS count FROM registrasi_jemaat WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getLakiJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `getLakiJemaat`;
delimiter ;;
CREATE PROCEDURE `getLakiJemaat`()
BEGIN

	
	SELECT COUNT(*) AS count FROM jemaat WHERE jenis_kelamin = "Perempuan" AND is_deleted = 0;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getNamaMinggu
-- ----------------------------
DROP PROCEDURE IF EXISTS `getNamaMinggu`;
delimiter ;;
CREATE PROCEDURE `getNamaMinggu`()
BEGIN
	SELECT * FROM jenis_minggu WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getPekerjaan
-- ----------------------------
DROP PROCEDURE IF EXISTS `getPekerjaan`;
delimiter ;;
CREATE PROCEDURE `getPekerjaan`()
BEGIN
	SELECT * FROM pekerjaan WHERE is_deleted = 0;
 
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getPelayanCount
-- ----------------------------
DROP PROCEDURE IF EXISTS `getPelayanCount`;
delimiter ;;
CREATE PROCEDURE `getPelayanCount`()
BEGIN
	SELECT COUNT(*) AS count FROM pelayan_gereja WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getPendeta
-- ----------------------------
DROP PROCEDURE IF EXISTS `getPendeta`;
delimiter ;;
CREATE PROCEDURE `getPendeta`()
BEGIN
	SELECT pelayan_gereja.id_pelayan, CONCAT(jemaat.gelar_depan, '' ,jemaat.nama_depan, ' ', jemaat.nama_belakang, ' ', jemaat.gelar_belakang) as nama_lengkap FROM pelayan_gereja JOIN jemaat ON jemaat.id_jemaat = pelayan_gereja.id_jemaat WHERE pelayan_gereja.jabatan = "pendeta" AND pelayan_gereja.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getPendidikan
-- ----------------------------
DROP PROCEDURE IF EXISTS `getPendidikan`;
delimiter ;;
CREATE PROCEDURE `getPendidikan`()
BEGIN
	SELECT * FROM pendidikan WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getPernikahanYear
-- ----------------------------
DROP PROCEDURE IF EXISTS `getPernikahanYear`;
delimiter ;;
CREATE PROCEDURE `getPernikahanYear`()
BEGIN
	
SELECT COUNT(*) AS count FROM registrasi_pernikahan WHERE YEAR(create_at) = YEAR(NOW()) AND is_deleted=0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getRegistrasiJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `getRegistrasiJemaat`;
delimiter ;;
CREATE PROCEDURE `getRegistrasiJemaat`()
BEGIN
	SELECT id_registrasi, nama_keluarga FROM registrasi_jemaat WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getRegistrasiNikah
-- ----------------------------
DROP PROCEDURE IF EXISTS `getRegistrasiNikah`;
delimiter ;;
CREATE PROCEDURE `getRegistrasiNikah`()
BEGIN
	SELECT id_registrasi_nikah, CONCAT(nama_lengkap_laki," / ",nama_lengkap_perempuan) as pasangan FROM registrasi_pernikahan WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for getSidiYear
-- ----------------------------
DROP PROCEDURE IF EXISTS `getSidiYear`;
delimiter ;;
CREATE PROCEDURE `getSidiYear`()
BEGIN
	SELECT COUNT(*) AS count FROM registrasi_sidi WHERE YEAR(create_at) = YEAR(NOW()) AND is_deleted=0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for RegistrasiPernikahanJemaatPerempuan
-- ----------------------------
DROP PROCEDURE IF EXISTS `RegistrasiPernikahanJemaatPerempuan`;
delimiter ;;
CREATE PROCEDURE `RegistrasiPernikahanJemaatPerempuan`(IN p_id_jemaat INT)
BEGIN
	
	UPDATE jemaat SET is_deleted = 1,
	update_at = NOW(),
	keterangan = "Jemaat Pindah (Pernikahan Perempuan)"
	WHERE id_jemaat = p_id_jemaat;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for RegistrasiPernikahanLakiLaki
-- ----------------------------
DROP PROCEDURE IF EXISTS `RegistrasiPernikahanLakiLaki`;
delimiter ;;
CREATE PROCEDURE `RegistrasiPernikahanLakiLaki`(IN p_id_jemaat INT)
BEGIN
	
	SELECT id_registrasi FROM jemaat WHERE id_jemaat = p_id_jemaat;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateJadwalIbadah
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateJadwalIbadah`;
delimiter ;;
CREATE PROCEDURE `updateJadwalIbadah`(IN p_id_jadwal_ibadah INT)
BEGIN
	UPDATE jadwal_ibadah SET
	update_at = NOW() WHERE id_jadwal_ibadah = p_id_jadwal_ibadah;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateJemaat`;
delimiter ;;
CREATE PROCEDURE `updateJemaat`(IN p_id_jemaat INT)
BEGIN
	UPDATE jemaat SET
	update_at = NOW() WHERE id_jemaat = p_id_jemaat;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateJemaatPindah
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateJemaatPindah`;
delimiter ;;
CREATE PROCEDURE `updateJemaatPindah`(IN p_id_head_reg_pindah INT)
BEGIN

UPDATE head_pindah SET
update_at = NOW()
WHERE id_head_reg_pindah = p_id_head_reg_pindah;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateKegiatan
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateKegiatan`;
delimiter ;;
CREATE PROCEDURE `updateKegiatan`(IN p_id_jenis_kegiatan INT,
IN p_nama_jenis_kegiatan VARCHAR(250),
IN p_lokasi_kegiatan VARCHAR(250),
IN p_tanggal_kegiatan DATE,
IN p_waktu_kegiatan TIME,
IN p_keterangan VARCHAR(250))
BEGIN
	UPDATE jenis_kegiatan SET 
	nama_jenis_kegiatan = p_nama_jenis_kegiatan,
	lokasi_kegiatan = p_lokasi_kegiatan,
	tanggal_kegiatan = p_tanggal_kegiatan,
	waktu_kegiatan = p_waktu_kegiatan,
	keterangan = p_keterangan,
	update_at = NOW() WHERE id_jenis_kegiatan = p_id_jenis_kegiatan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateKegiatanA
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateKegiatanA`;
delimiter ;;
CREATE PROCEDURE `updateKegiatanA`(IN p_id_jenis_kegiatan INT)
BEGIN


	UPDATE jenis_kegiatan SET
	update_at = NOW() WHERE id_jenis_kegiatan = p_id_jenis_kegiatan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updatePelayan
-- ----------------------------
DROP PROCEDURE IF EXISTS `updatePelayan`;
delimiter ;;
CREATE PROCEDURE `updatePelayan`(IN p_id_pelayan INT,
IN p_id_jemaat INT,
IN p_tanggal_tahbisan DATE,
IN p_jabatan VARCHAR(255),
IN p_tangggal_akhir_jawatan DATE,
IN p_keterangan VARCHAR(255))
BEGIN
UPDATE pelayan_gereja SET id_jemaat = p_id_jemaat, tanggal_tahbisan = p_tanggal_tahbisan, jabatan = p_jabatan, tanggal_akhir_jawatan = p_tangggal_akhir_jawatan, keterangan = p_keterangan, update_at = NOW()
WHERE id_pelayan = p_id_pelayan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updatePernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `updatePernikahan`;
delimiter ;;
CREATE PROCEDURE `updatePernikahan`(IN p_id_pernikahan INT)
BEGIN
	
UPDATE pernikahan SET 
update_at = NOW()
WHERE id_pernikahan = p_id_pernikahan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateRegistrasiBaptis
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateRegistrasiBaptis`;
delimiter ;;
CREATE PROCEDURE `updateRegistrasiBaptis`(IN p_id_registrasi_baptis INT)
BEGIN
UPDATE registrasi_baptis SET update_at = NOW()
 WHERE id_registrasi_baptis = p_id_registrasi_baptis;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateRegistrasiPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateRegistrasiPernikahan`;
delimiter ;;
CREATE PROCEDURE `updateRegistrasiPernikahan`(IN p_id_registrasi_nikah INT)
BEGIN

UPDATE registrasi_pernikahan SET 
update_at = NOW()
WHERE id_registrasi_nikah = p_id_registrasi_nikah;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for updateRegistrasiSidi
-- ----------------------------
DROP PROCEDURE IF EXISTS `updateRegistrasiSidi`;
delimiter ;;
CREATE PROCEDURE `updateRegistrasiSidi`(IN p_id_registrasi_sidi INT)
BEGIN

UPDATE registrasi_sidi SET 
update_at = NOW()
WHERE id_registrasi_sidi = p_id_registrasi_sidi;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for UpdateRPPA
-- ----------------------------
DROP PROCEDURE IF EXISTS `UpdateRPPA`;
delimiter ;;
CREATE PROCEDURE `UpdateRPPA`(p_id_rpp INT,
p_id_jemaat INT,
p_tgl_warta_rpp DATE,
p_id_jenis_rpp INT,
p_keterangan VARCHAR(250))
BEGIN 

DECLARE id_jemaat_lama INT;

SELECT id_jemaat INTO id_jemaat_lama FROM rpp WHERE id_rpp = p_id_rpp;

if id_jemaat_lama != p_id_jemaat THEN

UPDATE jemaat SET isRPP = 0 WHERE id_jemaat = id_jemaat_lama;

END IF;

UPDATE rpp SET
id_jemaat = p_id_jemaat,
tgl_warta_rpp = p_tgl_warta_rpp,
keterangan = p_keterangan,
update_at = NOW()
 WHERE id_rpp = p_id_rpp;
 
 UPDATE jemaat SET isRPP = 1 WHERE id_jemaat = p_id_jemaat; 

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllJadwalIbadah
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllJadwalIbadah`;
delimiter ;;
CREATE PROCEDURE `viewAllJadwalIbadah`()
BEGIN
	SELECT ji.id_jadwal_ibadah, ji.tgl_ibadah, jm.nama_jenis_minggu, CONCAT( j.nama_depan, ' ', j.nama_belakang) as nama_pendeta, ji.jumlah_pelayan, ji.waktu_mulai, ji.keterangan, ji.nyanyian_1, ji.votum, ji.nyanyian_2, ji.hukum_taurat, ji.nyanyian_3, ji.pengakuan_dosa, ji.nyanyian_4, ji.epistel, ji.nyanyian_5, ji.pengakuan_iman, ji.nyanyian_6, ji.khotbah, ji.nyanyian_7, ji.doa_penutup FROM jadwal_ibadah ji JOIN jenis_minggu jm ON ji.id_jenis_minggu = jm.id_jenis_minggu JOIN pelayan_gereja pg ON ji.id_melayani = pg.id_pelayan JOIN jemaat j ON pg.id_jemaat = j.id_jemaat WHERE ji.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllJemaat`;
delimiter ;;
CREATE PROCEDURE `viewAllJemaat`()
BEGIN
	SELECT j.id_jemaat, j.id_registrasi, rj.nama_keluarga, CONCAT(j.gelar_depan, ' ' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap, j.tempat_lahir, j.tanggal_lahir, j.jenis_kelamin, pk.pekerjaan, hk.nama_hub_keluarga as status_keluarga, pd.pendidikan , s.keterangan as status_pernikahan, j.gol_darah, j.alamat, j.no_telepon, j.keterangan FROM jemaat j 
JOIN pekerjaan pk ON j.id_pekerjaan = pk.id_pekerjaan 
JOIN registrasi_jemaat rj ON j.id_registrasi = rj.id_registrasi
JOIN pendidikan pd ON j.id_pendidikan = pd.id_pendidikan
JOIN hubungan_keluarga hk ON j.id_hub_keluarga = hk.id_hub_keluarga
JOIN `status` s ON j.id_status_pernikahan = s.id_status
WHERE j.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllJemaatPindah
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllJemaatPindah`;
delimiter ;;
CREATE PROCEDURE `viewAllJemaatPindah`()
BEGIN
SELECT hp.id_head_reg_pindah, CONCAT(j.gelar_depan, ' ' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap FROM head_pindah hp JOIN jemaat j ON hp.id_jemaat = j.id_jemaat
WHERE hp.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllKegiatan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllKegiatan`;
delimiter ;;
CREATE PROCEDURE `viewAllKegiatan`()
BEGIN
	SELECT * FROM jenis_kegiatan WHERE is_deleted= 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllPelayan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllPelayan`;
delimiter ;;
CREATE PROCEDURE `viewAllPelayan`()
BEGIN
	SELECT pg.id_pelayan, pg.photo, j.id_jemaat, CONCAT(j.gelar_depan, '' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap, pg.tanggal_tahbisan, pg.jabatan, s.keterangan as status_pelayan , j.alamat, pg.keterangan FROM pelayan_gereja pg JOIN jemaat j ON pg.id_jemaat = j.id_jemaat
JOIN `status` s ON s.id_status = pg.id_status_pelayanan WHERE pg.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllPernikahan`;
delimiter ;;
CREATE PROCEDURE `viewAllPernikahan`()
BEGIN
	SELECT p.id_pernikahan, CONCAT(rp.nama_lengkap_laki, ' / ', rp.nama_lengkap_perempuan)as pasangan, p.tgl_pernikahan FROM pernikahan p 
JOIN registrasi_pernikahan rp 
ON p.id_registrasi_pernikahan = rp.id_registrasi_nikah 
WHERE p.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllRegistrasiBaptis
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllRegistrasiBaptis`;
delimiter ;;
CREATE PROCEDURE `viewAllRegistrasiBaptis`()
BEGIN
	SELECT registrasi_baptis.id_registrasi_baptis,
 registrasi_baptis.nama_lengkap,
 registrasi_baptis.nama_ayah,
 registrasi_baptis.nama_ibu,
 registrasi_baptis.jenis_kelamin,
 registrasi_baptis.tempat_lahir,
 registrasi_baptis.tanggal_lahir,
 registrasi_baptis.alamat,
 registrasi_baptis.tanggal_baptis,
				CONCAT( jemaat.nama_depan, ' ', jemaat.nama_belakang) as nama_pendeta, registrasi_baptis.keterangan FROM registrasi_baptis JOIN pelayan_gereja ON registrasi_baptis.id_pendeta = pelayan_gereja.id_pelayan JOIN jemaat ON jemaat.id_jemaat = pelayan_gereja.id_jemaat WHERE registrasi_baptis.is_deleted = 0;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllRegistrasiPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllRegistrasiPernikahan`;
delimiter ;;
CREATE PROCEDURE `viewAllRegistrasiPernikahan`()
BEGIN
	SELECT * FROM registrasi_pernikahan WHERE is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllRegistrasiSidi
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllRegistrasiSidi`;
delimiter ;;
CREATE PROCEDURE `viewAllRegistrasiSidi`()
BEGIN
	
	SELECT * FROM registrasi_sidi WHERE is_deleted = 0;
	
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewAllRPP
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewAllRPP`;
delimiter ;;
CREATE PROCEDURE `viewAllRPP`()
BEGIN
DECLARE namaLengkap VARCHAR(250);

SELECT r.id_rpp,
j.id_jemaat, CONCAT(j.gelar_depan, '' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap,
r.tgl_warta_rpp,
jr.jenis_rpp,
r.keterangan 
FROM rpp r
JOIN jemaat j on r.id_jemaat = j.id_jemaat
JOIN jenis_rpp jr on jr.id_jenis_rpp = r.id_jenis_rpp
WHERE r.is_deleted = 0;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditJadwalIbadah
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditJadwalIbadah`;
delimiter ;;
CREATE PROCEDURE `viewEditJadwalIbadah`(IN p_id_jadwal_ibadah INT)
BEGIN
SELECT * FROM jadwal_ibadah WHERE id_jadwal_ibadah = p_id_jadwal_ibadah;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditJemaat
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditJemaat`;
delimiter ;;
CREATE PROCEDURE `viewEditJemaat`(IN p_id_jemaat INT)
BEGIN
SELECT * FROM jemaat WHERE id_jemaat = p_id_jemaat AND is_deleted = 0;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditJemaatPindah
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditJemaatPindah`;
delimiter ;;
CREATE PROCEDURE `viewEditJemaatPindah`(IN p_id_head_reg_pindah INT)
BEGIN

SELECT * FROM head_pindah WHERE id_head_reg_pindah = p_id_head_reg_pindah;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditKegiatan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditKegiatan`;
delimiter ;;
CREATE PROCEDURE `viewEditKegiatan`(IN p_id_jenis_kegiatan INT)
BEGIN
SELECT * FROM jenis_kegiatan WHERE id_jenis_kegiatan = p_id_jenis_kegiatan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditPernikahan`;
delimiter ;;
CREATE PROCEDURE `viewEditPernikahan`(IN p_id_pernikahan INT)
BEGIN
	SELECT * FROM pernikahan WHERE id_pernikahan = p_id_pernikahan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditRegistrasiBaptis
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditRegistrasiBaptis`;
delimiter ;;
CREATE PROCEDURE `viewEditRegistrasiBaptis`(IN p_id_registrasi_baptis INT)
BEGIN
	SELECT id_registrasi_baptis, nama_lengkap, nama_ayah, nama_ibu, jenis_kelamin, tempat_lahir,
 tanggal_lahir, alamat, tanggal_baptis, id_pendeta, keterangan FROM registrasi_baptis WHERE id_registrasi_baptis = p_id_registrasi_baptis;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditRegistrasiPernikahan
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditRegistrasiPernikahan`;
delimiter ;;
CREATE PROCEDURE `viewEditRegistrasiPernikahan`(IN p_id_registrasi_nikah INT)
BEGIN
	SELECT * FROM registrasi_pernikahan WHERE id_registrasi_nikah = p_id_registrasi_nikah;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditRegistrasiSidi
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditRegistrasiSidi`;
delimiter ;;
CREATE PROCEDURE `viewEditRegistrasiSidi`(IN p_id_registrasi_sidi INT)
BEGIN

SELECT * FROM registrasi_sidi WHERE id_registrasi_sidi = p_id_registrasi_sidi;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewEditRPP
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewEditRPP`;
delimiter ;;
CREATE PROCEDURE `viewEditRPP`(IN p_id_rpp INT)
BEGIN
SELECT id_rpp, id_jemaat, id_jenis_rpp, tgl_warta_rpp, keterangan FROM rpp WHERE id_rpp = p_id_rpp;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewJadwalIbadahById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewJadwalIbadahById`;
delimiter ;;
CREATE PROCEDURE `viewJadwalIbadahById`(IN p_id_jadwal_ibadah INT)
BEGIN

		SELECT ji.id_jadwal_ibadah,ji.tgl_ibadah, jm.nama_jenis_minggu, CONCAT( j.nama_depan, ' ', j.nama_belakang) as nama_pendeta, ji.jumlah_pelayan, ji.waktu_mulai, ji.keterangan, ji.nyanyian_1, ji.votum, ji.nyanyian_2, ji.hukum_taurat, ji.nyanyian_3, ji.pengakuan_dosa, ji.nyanyian_4, ji.epistel, ji.nyanyian_5, ji.pengakuan_iman, ji.nyanyian_6, ji.khotbah, ji.nyanyian_7, ji.doa_penutup FROM jadwal_ibadah ji JOIN jenis_minggu jm ON ji.id_jenis_minggu = jm.id_jenis_minggu JOIN pelayan_gereja pg ON ji.id_melayani = pg.id_pelayan JOIN jemaat j ON pg.id_jemaat = j.id_jemaat WHERE ji.is_deleted = 0 AND ji.id_jadwal_ibadah = p_id_jadwal_ibadah;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewJemaatById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewJemaatById`;
delimiter ;;
CREATE PROCEDURE `viewJemaatById`(IN p_id_jemaat INT)
BEGIN

SELECT j.id_jemaat, j.id_registrasi, CONCAT(j.gelar_depan, ' ' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap, j.tempat_lahir, j.tanggal_lahir, j.jenis_kelamin, pk.pekerjaan, hk.nama_hub_keluarga as status_keluarga, pd.pendidikan , s.keterangan as status_pernikahan, j.gol_darah, j.alamat, j.no_telepon, j.keterangan FROM jemaat j 
JOIN pekerjaan pk ON j.id_pekerjaan = pk.id_pekerjaan 
JOIN pendidikan pd ON j.id_pendidikan = pd.id_pendidikan
JOIN hubungan_keluarga hk ON j.id_hub_keluarga = hk.id_hub_keluarga
JOIN `status` s ON j.id_status_pernikahan = s.id_status
WHERE j.id_jemaat = p_id_jemaat AND j.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewJemaatPindahById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewJemaatPindahById`;
delimiter ;;
CREATE PROCEDURE `viewJemaatPindahById`(IN p_id_head_reg_pindah INT)
BEGIN

SELECT hp.id_head_reg_pindah, hp.no_surat_pindah, hp.id_registrasi, hp.id_jemaat, CONCAT(j.gelar_depan, ' ' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap, hp.id_gereja_tujuan, hp.nama_gereja, hp.tgl_pindah, hp.tgl_warta, hp.keterangan FROM
head_pindah hp JOIN jemaat j ON hp.id_jemaat = j.id_jemaat WHERE hp.id_head_reg_pindah = p_id_head_reg_pindah AND hp.is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewKegiatanById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewKegiatanById`;
delimiter ;;
CREATE PROCEDURE `viewKegiatanById`(IN p_id_jenis_kegiatan INT)
BEGIN
	SELECT * FROM jenis_kegiatan WHERE id_jenis_kegiatan = p_id_jenis_kegiatan and is_deleted = 0;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewPelayanById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewPelayanById`;
delimiter ;;
CREATE PROCEDURE `viewPelayanById`(IN p_id_pelayan INT)
BEGIN
SELECT pg.id_pelayan, j.id_jemaat, CONCAT(j.gelar_depan, '' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap, pg.tanggal_tahbisan, pg.jabatan, pg.tanggal_akhir_jawatan, s.keterangan as status_pelayan , j.alamat, pg.keterangan FROM pelayan_gereja pg JOIN jemaat j ON pg.id_jemaat = j.id_jemaat
JOIN `status` s ON s.id_status = pg.id_status_pelayanan WHERE pg.id_pelayan = p_id_pelayan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewPernikahanById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewPernikahanById`;
delimiter ;;
CREATE PROCEDURE `viewPernikahanById`(IN p_id_pernikahan INT)
BEGIN
	SELECT p.id_pernikahan, CONCAT(rp.nama_lengkap_laki, ' / ', rp.nama_lengkap_perempuan)as pasangan, p.tgl_pernikahan, p.nats_pernikahan, p.nama_gereja_non_HKBP, p.nama_pendeta, p.keterangan FROM pernikahan p 
JOIN registrasi_pernikahan rp ON p.id_registrasi_pernikahan = rp.id_registrasi_nikah
WHERE p.id_pernikahan = p_id_pernikahan;

-- SELECT * FROM pernikahan WHERE id_pernikahan = p_id_pernikahan;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewRegistrasiBaptisById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewRegistrasiBaptisById`;
delimiter ;;
CREATE PROCEDURE `viewRegistrasiBaptisById`(IN p_id_registrasi_baptis INT)
BEGIN
	SELECT registrasi_baptis.id_registrasi_baptis,
 registrasi_baptis.nama_lengkap,
 registrasi_baptis.nama_ayah,
 registrasi_baptis.nama_ibu,
 registrasi_baptis.jenis_kelamin,
 registrasi_baptis.tempat_lahir,
 registrasi_baptis.tanggal_lahir,
 registrasi_baptis.alamat,
 registrasi_baptis.tanggal_baptis,
				CONCAT( jemaat.nama_depan, ' ', jemaat.nama_belakang) as nama_pendeta, registrasi_baptis.keterangan FROM registrasi_baptis JOIN pelayan_gereja ON registrasi_baptis.id_pendeta = pelayan_gereja.id_pelayan JOIN jemaat ON jemaat.id_jemaat = pelayan_gereja.id_jemaat WHERE registrasi_baptis.id_registrasi_baptis = p_id_registrasi_baptis AND registrasi_baptis.is_deleted = 0;


END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewRegistrasiPernikahanById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewRegistrasiPernikahanById`;
delimiter ;;
CREATE PROCEDURE `viewRegistrasiPernikahanById`(IN p_id_registrasi_nikah INT)
BEGIN
	SELECT * FROM registrasi_pernikahan WHERE id_registrasi_nikah = p_id_registrasi_nikah;

END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewRegistrasiSidiById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewRegistrasiSidiById`;
delimiter ;;
CREATE PROCEDURE `viewRegistrasiSidiById`(IN p_id_registrasi_sidi INT)
BEGIN

SELECT id_registrasi_sidi, nama_lengkap, nama_ayah, nama_ibu, tempat_lahir, tanggal_lahir, nama_gereja_non_hkbp, nats_sidi, tanggal_sidi, nama_pendeta_sidi, keterangan FROM registrasi_sidi WHERE id_registrasi_sidi = p_id_registrasi_sidi AND is_deleted = 0;
END
;;
delimiter ;

-- ----------------------------
-- Procedure structure for viewRPPById
-- ----------------------------
DROP PROCEDURE IF EXISTS `viewRPPById`;
delimiter ;;
CREATE PROCEDURE `viewRPPById`(IN p_id_rpp INT)
BEGIN
	DECLARE namaLengkap VARCHAR(250);

SELECT r.id_rpp,
j.id_jemaat,
CONCAT(j.gelar_depan, '' ,j.nama_depan, ' ', j.nama_belakang, ' ', j.gelar_belakang) as nama_lengkap,
r.tgl_warta_rpp,
jr.jenis_rpp,
r.keterangan 
FROM rpp r
JOIN jemaat j on r.id_jemaat = j.id_jemaat
JOIN jenis_rpp jr on jr.id_jenis_rpp = r.id_jenis_rpp
WHERE r.id_rpp = p_id_rpp;

END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
