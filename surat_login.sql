-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2020 pada 02.03
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `perusahaan`, `username`, `password`, `email`, `level`) VALUES
(2, 'adi saputra', 'martadinata', 'adisaputraa11', 'ae2350afc49136a0caf67a4e2a74c7a2', 'adis21@gmail.com', 'admin'),
(3, 'superadmin', 'martadinata II', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'imamgh321@gmail.com', 'superadmin'),
(4, 'admin', 'martadinata III', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'zaelani99@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama_karyawan`, `perusahaan`, `username`, `password`, `email`) VALUES
(1, 'imam ghozali', 'cipta husada', 'imam_ghozalo', 'eaccb8ea6090a40a98aa28c071810371', 'imamghozali@gmail.com'),
(2, 'adi saputra', 'cipta husada II', 'adi_saputra', 'c46335eb267e2e1cde5b017acb4cd799', 'adisaputra@gmail.com'),
(4, 'zaelani', 'cipta husada', 'zaelani12', 'be6459a7fd4032689aedd4adad189197', 'zaelani99@gmail.com'),
(5, 'nada nadifah', 'cipta husada II', 'nada_nadifah', 'a77b4f006a4994d245a12247b8e4082c', 'nadanadifah@gmail.com'),
(7, 'ami', 'cipta husada', 'ami666', 'a80f3b0dd7572691f2a748f9311906f8', 'amianjelina@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_surat`
--

INSERT INTO `kategori_surat` (`id`, `nama_kategori`, `keterangan`, `gambar`, `status`) VALUES
(1, 'Semua Surat', '', '', 'AKTIF'),
(2, 'Surat Hilang', '', '', 'AKTIF'),
(3, 'Surat Property', '', '', 'AKTIF'),
(6, 'Surat Legal Perusahaan', '', '', 'AKTIF'),
(7, 'Surat Berharga', '', '', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_surat_asli_kembali`
--

CREATE TABLE `konfirmasi_surat_asli_kembali` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi_surat_asli_kembali`
--

INSERT INTO `konfirmasi_surat_asli_kembali` (`id`, `no_pinjam`, `nama`, `tanggal_pinjam`, `tanggal_konfirmasi`, `tanggal_kembali`, `status`) VALUES
(1, '0001231', 'imam ghozali', '2020-08-05', '2020-08-06', '2020-08-08', 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_surat_asli_pinjam`
--

CREATE TABLE `konfirmasi_surat_asli_pinjam` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_surat_kembali`
--

CREATE TABLE `konfirmasi_surat_kembali` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_surat_pinjam`
--

CREATE TABLE `konfirmasi_surat_pinjam` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfirmasi_surat_pinjam`
--

INSERT INTO `konfirmasi_surat_pinjam` (`id`, `no_pinjam`, `nama`, `email`, `tanggal_pinjam`, `keterangan`, `status`) VALUES
(1, '0013', 'imam ghozali', 'imamghozali@gmail.com', '2020-08-01', 'surat', 'Menunggu Konfirmasi'),
(2, '0014', 'adi saputra', 'adisaputra@gmail.com', '2020-08-02', 'surat', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `alamat_perusahaan`, `no_telp`, `email`) VALUES
(1, 'PT Aji Mandiri', 'tegal', '0283-445720', 'ajimandiri23@gmail.com'),
(2, 'Lestari corp', 'brebes', '0283-443620', 'lestaricorp@gmail.com'),
(6, 'indata', 'pagiyanten', '0283-557201', 'email');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(10) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `kategori_surat` varchar(50) NOT NULL,
  `ketersediaan` varchar(50) NOT NULL,
  `status_fisik` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `no_surat`, `nama_surat`, `kategori_surat`, `ketersediaan`, `status_fisik`, `perusahaan`) VALUES
(7, '100/1', 'surat 001', 'semua surat, surat property', '10', 'Tersedia', 'Aji Mandiri'),
(8, '100/2', 'surat 002', 'semua surat, surat property', '13', 'Tidak Tersedia', 'Sawahlunto'),
(9, '100/3', 'surat 003', 'semua surat, surat property, surat hilang', '15', 'Tersedia', 'Padangpanjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_asli_kembali`
--

CREATE TABLE `surat_asli_kembali` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_asli_kembali`
--

INSERT INTO `surat_asli_kembali` (`id`, `no_pinjam`, `nama`, `email`, `tanggal_pinjam`, `tanggal_konfirmasi`, `tanggal_kembali`, `status`) VALUES
(1, '0001231', 'imam ghozali', 'imamghozali@gmail.com', '2020-08-06', '2020-08-07', '2020-08-14', 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_asli_pinjam`
--

CREATE TABLE `surat_asli_pinjam` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_asli_pinjam`
--

INSERT INTO `surat_asli_pinjam` (`id`, `no_pinjam`, `nama`, `email`, `tanggal_pinjam`, `tanggal_konfirmasi`, `tanggal_kembali`, `status`) VALUES
(1, '0001231df', 'ijalll', 'ijall12@gmail.com', '2020-08-01', '2020-08-02', '2020-08-04', 'dibawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_perusahaan` int(10) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlah_surat` varchar(11) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `id_surat`, `id_perusahaan`, `tanggal_keluar`, `jumlah_surat`, `tujuan`) VALUES
(5, 7, 2, '2020-08-02', '1', 'Lawles Jakarta'),
(6, 8, 1, '2020-08-01', '1', 'B project'),
(8, 9, 1, '2020-08-01', '1', 'Lawles Jakartaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kembali`
--

CREATE TABLE `surat_kembali` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_kembali`
--

INSERT INTO `surat_kembali` (`id`, `no_pinjam`, `nama`, `email`, `tanggal_pinjam`, `tanggal_konfirmasi`, `tanggal_kembali`, `status`) VALUES
(1, 'LB01234', 'farhan', 'maurizaf10@gmail.com', '2020-08-03', '2020-08-04', '2020-08-06', 'Sudah Kembali'),
(2, 'LB0124', 'Fadli Indrawan', 'fadz123@gmail.com', '2020-08-05', '2020-08-06', '2020-08-07', 'Sudah Kembali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_perusahaan` int(10) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `jumlah_surat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `id_surat`, `id_perusahaan`, `tanggal_terima`, `jumlah_surat`) VALUES
(4, 7, 2, '2020-08-07', '1'),
(5, 7, 2, '2020-08-06', '1'),
(10, 7, 2, '2020-08-06', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pinjam`
--

CREATE TABLE `surat_pinjam` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_konfirmasi` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_pinjam`
--

INSERT INTO `surat_pinjam` (`id`, `no_pinjam`, `nama`, `email`, `tanggal_pinjam`, `tanggal_konfirmasi`, `tanggal_kembali`, `status`) VALUES
(1, '0013', 'osas saha', 'osassaha52@gmail.com', '2020-08-05', '2020-08-06', '2020-08-07', 'Menunggu Konfirmasi'),
(2, '0016', 'Fadli Indrawan', 'fadlifad@gmail.com', '2020-08-05', '2020-08-06', '2020-08-09', 'Sudah Kembali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_surat_asli_kembali`
--
ALTER TABLE `konfirmasi_surat_asli_kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_surat_asli_pinjam`
--
ALTER TABLE `konfirmasi_surat_asli_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_surat_kembali`
--
ALTER TABLE `konfirmasi_surat_kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfirmasi_surat_pinjam`
--
ALTER TABLE `konfirmasi_surat_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_asli_kembali`
--
ALTER TABLE `surat_asli_kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_asli_pinjam`
--
ALTER TABLE `surat_asli_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_perusahaan_2` (`id_perusahaan`),
  ADD KEY `id_perusahaan_3` (`id_perusahaan`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `surat_kembali`
--
ALTER TABLE `surat_kembali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indeks untuk tabel `surat_pinjam`
--
ALTER TABLE `surat_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kategori_surat`
--
ALTER TABLE `kategori_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_surat_asli_kembali`
--
ALTER TABLE `konfirmasi_surat_asli_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_surat_asli_pinjam`
--
ALTER TABLE `konfirmasi_surat_asli_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_surat_kembali`
--
ALTER TABLE `konfirmasi_surat_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi_surat_pinjam`
--
ALTER TABLE `konfirmasi_surat_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_asli_kembali`
--
ALTER TABLE `surat_asli_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_asli_pinjam`
--
ALTER TABLE `surat_asli_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_kembali`
--
ALTER TABLE `surat_kembali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_pinjam`
--
ALTER TABLE `surat_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_3` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
