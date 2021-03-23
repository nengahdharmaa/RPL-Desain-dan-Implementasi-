CREATE DATABASE `PARKIRIN`;
USE `parkirin`;

create table `kendaraan` (
`tipe_kendaraan` varchar(15) NOT NULL,
`plat_nomor` varchar(8) NOT NULL,
PRIMARY KEY (`plat_nomor`)
);

create table `kendaraan` (
`tipe_kendaraan` varchar(7) NOT NULL,
`plat_nomor` int(10) NOT NULL,
PRIMARY KEY (`plat_nomor`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `TiketParkir` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `jam_keluar` varchar(50) NOT NULL,
  `tarif` int (50) NOT NULL,
  `id_parkir` varchar(8) NOT NULL,
   `jam_masuk` varchar(50) NOT NULL,
   `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_tiket`),
  KEY `FK_plat_nomor` (`plat_nomor`),
  CONSTRAINT `FK_plat_nomor` FOREIGN KEY (`plat_nomor`) REFERENCES `TiketParkir` (`plat_nomor`),
KEY `FK_id_parkir` (`id_parkir`),
  CONSTRAINT `FK_id_parkir` FOREIGN KEY (`id_parkir`) REFERENCES `TiketParkir` (`id_parkir`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`),
  KEY `FK_id_pegawai` (`id_pegawai`),
  CONSTRAINT `FK_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `Pegawai` (`id_pegawai`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Laporan` (
  `id_laporan` int(11) NOT NULL,
  `jamMasuk` varchar(50) NOT NULL,
  `jamKeluar` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `tarif` int(100) NOT NULL,
  PRIMARY KEY (`id_laporan`),
  KEY `FK_id_pegawai` (`id_pegawai`),
  CONSTRAINT `FK_id_pegawai` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  KEY `FK_id_admin` (`id_admin`),
  CONSTRAINT `FK_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `Admin` (`id_admin`),
  KEY `FK_id_tiket` (`id_tiket`),
  CONSTRAINT `FK_id_tiket` FOREIGN KEY (`id_tiket`) REFERENCES `TiketParkir` (`id_tiket`),
  KEY `FK_jamMasuk` (`jamMasuk`),
  CONSTRAINT `FK_jamMasuk` FOREIGN KEY (`jamMasuk`) REFERENCES `TiketParkir` (`jamMasuk`),
  KEY `FK_jamKeluar` (`jamKeluar`),
  CONSTRAINT `FK_jamKeluar` FOREIGN KEY (`jamKeluar`) REFERENCES `TiketParkir` (`jamKeluar`),
  KEY `FK_tanggal` (`tanggal`),
  CONSTRAINT `FK_tanggal` FOREIGN KEY (`tanggal`) REFERENCES `TiketParkir` (`tanggal`),
  KEY `FK_tarif` (`tarif`),
  CONSTRAINT `FK_tarif` FOREIGN KEY (`tarif`) REFERENCES `TiketParkir` (`tarif`),
  KEY `FK_nama` (`nama`),
  CONSTRAINT `FK_nama` FOREIGN KEY (`nama`) REFERENCES `Admin` (`nama`),
  KEY `FK_plat_nomor` (`plat_nomor`),
  CONSTRAINT `FK_plat_nomor` FOREIGN KEY (`plat_nomor`) REFERENCES `TiketParkir` (`plat_nomor`)
);

create table`parkir` (
`kapasitas` varchar(15) NOT NULL,
`id_parkir` varchar(8) NOT NULL,
PRIMARY KEY (`id_parkir`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `pegawai` (
  `id_pegawai` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `attribute` varchar(10) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `id_emoney` varchar(10) NOT NULL,
  `jamMasuk` varchar(5) NOT NULL,
  `jamKeluar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `pengunjung` (
  `id_pengunjung` varchar(10) NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `id_emoney` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

