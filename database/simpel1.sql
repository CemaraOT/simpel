-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Des 2016 pada 17.10
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('superadmin', 'pengguna');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_novel`
--

CREATE TABLE `tbl_novel` (
  `id_novel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_novel`
--

INSERT INTO `tbl_novel` (`id_novel`, `judul`, `penulis`, `deskripsi`, `gambar`, `stok`) VALUES
(1, 'Marriage Material', 'Anita. K. Rustapa', 'Jika Anda sudah mendekati Bains Toko baru-baru ini, Anda akan dimaafkan untuk ragu-ragu untuk melakukannya. Sebuah jendela iklan terkemuka untuk sebuah bar cokelat dihentikan menunjukkan toko mungkin telah ditutup pada tahun 1994. jendela keamanan terjebak seperempat terbuka, menambah udara umum kebobrokan.', '1-1.jpg', 3),
(2, 'Lovebirds', 'N. Van Hichtum', 'Lovebird dipelihara untuk dinikmati keindahan bulu-bulunya dan dinikmati keindahan suaranya. Lovebird memiliki kelebihan pada kombinasi warna dan kemungkinan warna-warna baru yang muncul karena kegiatan penangkar untuk mengawinsilangkandiantara mereka. Hibrida-hibrida baru ini memiliki nilai jual sangat tinggi di kalangan penggemar burung hias di Indonesia. Salah satu hibrida yang paling populer adalah lutino, dengan harga bisa antara 1-3 juta rupiah perekor. Pemilik lovebird, baik itu sekedar hobby atau penangkar pasti menginginkan lovebird hasil tangkaran mereka menjuarai lomba, baik lomba keelokan bulu atau keindahan suaranya. Terlebih anakan dari lovebird juara memiliki nilai jual yang sangat tinggi. Karena itu buku ini akan membahas tentang rahasia bagaimana teknik menghasilkan Lovebird jawara yang dihadirkan untuk Anda yang ingin mencetak Lovebird Anda menjadi JAWARA LOMBA.', '1-2.jpg', 3),
(3, 'Si Sampah Berlirih', 'Gatotaryo', ' Kisah Cinta dua anak manusia dari dua Kehidupan berbeda, dengan segala tembok perbedaan yang menyekat hubungan cinta mereka. Si Sampah bernama Aryo yang memperjuangkan nasib cintanya dengan gadis pujaannya Sastri. Aryo seorang dari keluarga miskin yang tinggal di kawasan kumuh. kehidupan mencap dia sampah masyarakat. Sedangkan Sastri wanita dari keluarga pejabat dan kaya raya. Seperti Bumi dan Langit ribuan perbedaan diantara mereka menjadi letupan-letupan kisah, dan konflik batin menggugah hati. Perjuangan keyakinan cinta dua anak manusia, yang tersaji dalam alur cerita yang menarik, dengan setting lukisan realita Peradaban Jakarta. Hingga akhirnya takdir suci mempersatuakan cinta mereka, Aryo berhasil memperjuangkan cintanya dan keluar dari jurang kemiskinan, mencapai kesuksesan sejati“from zero to hero”.', '1-3.jpg', 3),
(4, 'Kisah Masa Kecil', 'Beby Haryanti Dewi', 'Aku rindu masa-masa kecil dulu. Masa-masa yang telah lama aku tinggalkan. Masa kecil yang penuh kenangan, menyenangkan, karena yang menyakitkan tak pernah mau ku kenang, atau memang sebenarnya tak ada yang menyakitkan. Ah… bagi ku sekarang, semua kisah masa kecil dulu menyenangkan. Masa-masa yang aku habiskan di “Omah Kulon” (sebutan rumah nenek yang dulu menjadi tempat tinggal ku, sebelum nenek meninggal, sebelum rumah baru ku dibangun, 100 meter di sebelahnya). Masa-masa yang aku habiskan bersama teman-teman, anak-anak kampung yang hanya kenal keceriaan itu. Ai… betapa indahnya.  Betapa besar anugerah Allah, anugerah pengalaman hidup yang begitu mengesankan itu.', '1-1.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_novel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_novel`, `id_user`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, 1, 1, '2016-12-14', '2016-12-15', '0'),
(2, 2, 1, '2016-12-14', '2016-12-16', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dikembalikan_pada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `alamat`, `email`, `no_telp`, `jenis_kelamin`) VALUES
(1, 'testing1', 'TEST', 'test@mail.com', '08999999999', '0'),
(2, 'testing2', 'TEST', 'test@mail.com', '089999999999', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_novel`
--
ALTER TABLE `tbl_novel`
  ADD PRIMARY KEY (`id_novel`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_novel` (`id_novel`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_novel`
--
ALTER TABLE `tbl_novel`
  MODIFY `id_novel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
