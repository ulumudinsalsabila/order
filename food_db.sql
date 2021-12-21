/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : food_db

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 21/12/2021 21:31:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES (3, 'Shoyu Ramen', '15000', 'Makanan Enakk', '1', '1');
INSERT INTO `barang` VALUES (4, 'Shio Ramen', '20000', 'Makanan nihh', '1', '1');
INSERT INTO `barang` VALUES (5, 'Tonkotso Ramen', '12000', 'Makanan Ramen', '1', '1');
INSERT INTO `barang` VALUES (6, 'Miso Ramen', '15000', 'makanan ', '1', '1');
INSERT INTO `barang` VALUES (7, 'Kobe Ramen', '15000', 'Makanan', '1', '1');
INSERT INTO `barang` VALUES (8, 'Hakodate Ramen', '15000', 'deskripsi', '1', '1');
INSERT INTO `barang` VALUES (9, 'Jus Strobery', '12000', 'Minuman', '2', '1');
INSERT INTO `barang` VALUES (10, 'Lemon Squash', '15000', 'Deskripsi', '2', '1');
INSERT INTO `barang` VALUES (11, 'Dalgona', '15000', 'Deskripsi', '2', '1');
INSERT INTO `barang` VALUES (12, 'Es Buah', '15000', 'Deskripsi', '2', '1');
INSERT INTO `barang` VALUES (13, 'Eskrim', '15000', 'deskripsi', '2', '1');
INSERT INTO `barang` VALUES (14, 'Es Kelapa', '15000', 'Deskripsi', '2', '1');

-- ----------------------------
-- Table structure for keranjang
-- ----------------------------
DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE `keranjang`  (
  `Id_pesanan` int(20) NOT NULL,
  `jumlah` int(50) NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi`  (
  `id_pesanan` int(20) NOT NULL AUTO_INCREMENT,
  `no_pesanan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pesanan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pelanggan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_meja` int(20) NOT NULL,
  `waktu` date NOT NULL,
  `tipe` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_pesanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES (13, 'makanan nih', 'pesanan ', 'pelanggan', '123123', 123, '2021-11-06', 'makanan');
INSERT INTO `transaksi` VALUES (14, '123', '123', '12312', '123123', 123123, '2021-11-06', 'minuman');
INSERT INTO `transaksi` VALUES (15, '123', 'pesanan ', 'pelanggan', '15000', 123, '2021-11-07', 'makanan');
INSERT INTO `transaksi` VALUES (16, '1', '123', '23', '123', 123, '2021-12-21', 'minuman');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (6, 'admin', 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad');
INSERT INTO `users` VALUES (7, 'marcel', 'marcel@gmail.com', '25d55ad283aa400af464c76d713c07ad');

SET FOREIGN_KEY_CHECKS = 1;
