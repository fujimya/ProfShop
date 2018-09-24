/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - db_profshop
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_profshop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_profshop`;

/*Table structure for table `detail_pembelian` */

DROP TABLE IF EXISTS `detail_pembelian`;

CREATE TABLE `detail_pembelian` (
  `id_detail` varchar(10) NOT NULL,
  `faktur` varchar(50) DEFAULT NULL,
  `id_barang` varchar(100) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `detail_pembelian` */

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `id_barang` varchar(100) NOT NULL,
  `id_kategori` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT '0',
  `harga_jual` int(11) DEFAULT '0',
  `satuan` varchar(50) DEFAULT 'PCS',
  `minimal_stok` int(11) DEFAULT '0',
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_barang` */

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `id_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

/*Table structure for table `tbl_pembelian` */

DROP TABLE IF EXISTS `tbl_pembelian`;

CREATE TABLE `tbl_pembelian` (
  `faktur` varchar(50) NOT NULL,
  `tanggal_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_pembelian` int(11) DEFAULT NULL,
  `hutang_pembelian` int(11) DEFAULT NULL,
  PRIMARY KEY (`faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pembelian` */

/*Table structure for table `tbl_stok` */

DROP TABLE IF EXISTS `tbl_stok`;

CREATE TABLE `tbl_stok` (
  `faktur` varchar(10) NOT NULL,
  `id_barang` varchar(50) DEFAULT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `barang_masuk` int(11) DEFAULT NULL,
  `barang_keluar` int(11) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`faktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_stok` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` varchar(10) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`nama_user`,`username`,`password`,`jabatan`) values ('1','Pemilik Toko','pemilik','F5LALxU5Bjq0owwdlRXF2g1I8FmUZcwBLMWQtx8LXLiVzs95zZ9kz22ImyX6TTUIDS6yovHeAYabLPrUWUmq1Q==','Pemilik'),('BD8186M','Admin','admin','UxSMJleJHQCEU0rPKZPyohhE+Uo0u/wGAA9NLLCefb3t+PXJF2BhO0laP7uBm0xwzmbYQI5ZA9EVluk1Hem1vw==','Admin'),('ZV358Q','Karyawan','karyawan','3dR9dswnSgQQQZvBkGCqh08aXFj60ryXGA8rh5haGSjGdzuMcFvgihlfmQcL7/C8zThxkwKjJm/qDtTTtvlUSQ==','Karyawan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
