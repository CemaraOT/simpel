-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 11:35 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`username`, `password`) VALUES
('superadmin', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `gambar`) VALUES
(1, '1.jpg'),
(2, '2.jpg\r\n'),
(3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konten`
--

CREATE TABLE `tbl_konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_konten`
--

INSERT INTO `tbl_konten` (`id_konten`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Cinta Brontosaurus by Raditya Dika.', 'Dika (Raditya Dika) adalah seorang penulis yang baru saja putus cinta dengan Nina (Pamela Bowie), pacarnya setelah sekian lama. Semenjak putus cinta ini, dia percaya bahwa cinta bisa kedaluwarsa. Kosasih (Soleh Solihun), agen naskah Dika, mencoba untuk membuat Dika yakin terhadap cinta kembali, seperti Kosasih yakin dengan istrinyanya Wanda (Tyas Mirasih). Usaha ini, membawa Dika ke dalam serangkaian perkenalan absurd.', '1.jpg'),
(2, 'The Fault in Our Stars. One Sick Love Story', 'The Fault in Our Stars merupakan sebuah film Amerika Serikat yang dirilis pada tahun 2014 Film yang disutradarai oleh Josh Boone ini pemainnya antara lain oleh Shailene Woodley, Ansel Elgort, dan masih banyak lagi. Tanggal rilisnya pada 16 Mei 2014.', '2.jpg'),
(3, 'Short Romantic Love Story.', 'Romance are romantic love stories recorded in visual media for broadcast in theaters and on cinema that focus on passion, emotion, and the affectionate romantic involvement of the main characters and the journey that their genuinely strong, true and pure romantic love takes them through dating, courtship or marriage.', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_novel`
--

CREATE TABLE `tbl_novel` (
  `id_novel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_novel`
--

INSERT INTO `tbl_novel` (`id_novel`, `judul`, `deskripsi`, `penulis`, `gambar`, `stok`) VALUES
(1, 'Marriage Material', 'Her first love.\r\nHe cheated.\r\nHe broke her heart.\r\nShe went to Paris.\r\n\r\nLacey McLauren thought Paris would be the best place to console a broken heart, yet five years later the young fashion designer finds herself still single. Now her old flame, Rodney Rochester, the most eligible bachelor in London, sends Lacey a first-class ticket to her old home, saying he needs to see her.\r\n\r\nYet rather than reigniting love, Lacey finds herself making Rodney’s new fiancé’s wedding dress. Thrown into the mayhem of London high society, Lacey finally realises Rodney didn’t ever consider her marriage material.\r\n\r\nLacey meets charismatic private detective Mick Vermont, who seems to like her, yet can’t leave his movie-star girlfriend. Although the world seems to love Rodney Rochester, Mick thinks otherwise and makes Rodney his own private case.\r\n\r\nIs Lacey ever going to be marriage material?', 'Alicia Airey', '1-1.jpg', 1),
(2, 'Lovebirds', 'How to live with the one you love.\r\n\r\nOne of the biggest mistakes we make, Trevor Silvester says, is to treat other people as if they are just like us. I am a Harley Street therapist, and over nearly twenty years I have been helping couples improve their lives together, and one thing is clear to me: most couples do not flounder through lack of love, but through a lack of understanding.\r\n\r\nLOVEBIRDS includes a multiple choice test so that you can discover which type you - and your partner - belong to.\r\n\r\nThen there is a description of each type - what makes them tick, their likes and dislikes, how they tend to behave, their body language, what they tend to look like, the line of work and hobbies they are likely to choose, their hopes and fears. So in this section you can read about yourself - and your partner.\r\n\r\nThe final section looks at all the different possible compatibility combinations between the types, showing how misunderstandings can arise and giving advice on how to keep love between the different types of birds going and growing.', 'Prilia Miley, dkk', '1-2.jpg', 0),
(3, 'Si Sampah Berlilih', 'Kisah Cinta dua anak manusia dari dua Kehidupan berbeda, dengan segala tembok perbedaan yang menyekat hubungan cinta mereka. Si Sampah bernama Aryo yang memperjuangkan nasib cintanya dengan gadis pujaannya Sastri. Aryo seorang dari keluarga miskin yang tinggal di kawasan kumuh. kehidupan mencap dia sampah masyarakat. Sedangkan Sastri wanita dari keluarga pejabat dan kaya raya. Seperti Bumi dan Langit ribuan perbedaan diantara mereka menjadi letupan-letupan kisah, dan konflik batin menggugah hati. Perjuangan keyakinan cinta dua anak manusia, yang tersaji dalam alur cerita yang menarik, dengan setting lukisan realita Peradaban Jakarta. Hingga akhirnya takdir suci mempersatuakan cinta mereka, Aryo berhasil memperjuangkan cintanya dan keluar dari jurang kemiskinan, mencapai kesuksesan sejati“from zero to hero”.', 'Gatot Aryo', '1-3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_novel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_peminjaman`, `id_novel`, `id_user`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 1, 1, '2016-12-14', '2016-12-14'),
(2, 2, 1, '2016-12-14', NULL),
(3, 3, 1, '2016-12-01', NULL),
(4, 3, 2, '2016-12-14', NULL),
(7, 1, 1, '2016-12-14', NULL),
(8, 1, 4, '2016-12-14', '2016-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
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
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `alamat`, `email`, `no_telp`, `jenis_kelamin`) VALUES
(1, 'testing1', 'TEST', 'test@mail.com', '08999999999', '0'),
(2, 'testing2', 'TEST', 'test@mail.com', '089999999999', '1'),
(4, 'lala', 'lala', 'lala@mail.com', '08123719237', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `tbl_konten`
--
ALTER TABLE `tbl_konten`
  ADD PRIMARY KEY (`id_konten`);

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
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_konten`
--
ALTER TABLE `tbl_konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_novel`
--
ALTER TABLE `tbl_novel`
  MODIFY `id_novel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
