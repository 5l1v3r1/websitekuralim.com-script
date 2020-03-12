-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 Ağu 2015, 10:45:53
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `site_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_mesaj`
--

CREATE TABLE IF NOT EXISTS `anasayfa_mesaj` (
  `id` int(11) NOT NULL,
  `icerik` text NOT NULL,
  `mesaj_onay` int(11) NOT NULL DEFAULT '2',
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `anasayfa_mesaj`
--

INSERT INTO `anasayfa_mesaj` (`id`, `icerik`, `mesaj_onay`, `tarih`) VALUES
(6, 'Anasayfa Mesaj Örnek <b>aaa</b>', 2, '2015-08-21 19:38:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `site_id` int(11) NOT NULL,
  `site_url` varchar(250) NOT NULL,
  `site_baslik` varchar(250) NOT NULL,
  `site_desc` varchar(300) NOT NULL,
  `site_keyw` varchar(300) NOT NULL,
  `site_tema` varchar(150) NOT NULL,
  `site_durum` int(11) NOT NULL,
  `site_mail` varchar(255) NOT NULL,
  `site_telefon` varchar(255) NOT NULL,
  `site_bakim_mesaj` text NOT NULL,
  `site_footer_icerik` text NOT NULL,
  `site_logo_url` text NOT NULL,
  `site_favicon_url` text NOT NULL,
  `site_author` text NOT NULL,
  `site_publisher` text NOT NULL,
  `site_google_kod` text NOT NULL,
  `site_alexa_kod` text NOT NULL,
  `site_hakkimizda` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`site_id`, `site_url`, `site_baslik`, `site_desc`, `site_keyw`, `site_tema`, `site_durum`, `site_mail`, `site_telefon`, `site_bakim_mesaj`, `site_footer_icerik`, `site_logo_url`, `site_favicon_url`, `site_author`, `site_publisher`, `site_google_kod`, `site_alexa_kod`, `site_hakkimizda`) VALUES
(1, 'http://localhost', 'WebSiteKuralım', 'Website Kuralım kurumların ve diğer işletmelerin hızlı bir şekilde website sahibi olmasını sağlamaktadır.', 'website, website kur, website kuralım, web tasarım, web kodlama, hızlı website, ucuz site, ucuz website', 'default', 1, 'bilgi@websitekuralim.com', '0541 737 35 32', 'Sitemiz şuan bakımdadır. En kısa zamanda aktif olacaktır, teşekürler. WebSiteKuralım.com', 'Tüm Haklarımız Sakldırı © 2015', 'http://localhost/uploads/logo2.png', 'http://localhost/tema/default/assets/img/favicon.ico', 'GOOGLE+ AUTHOR KOD', 'GOOGLE+ PUBLISHER KOD', 'GOOGLE WEBMAS. ONAY KOD', 'ALEXA ONAY KOD', '<span style="color:red;font-weight:bold">WebSiteKuralım olarak ; </span>\r\n<br/><br/>\r\n			\r\n			İstanbul''da hizmet vermekteyiz.Şuan için bu iki kişilik olan ekip kendi alanlarında profesyonel kendini bu işe adamış uzun yıllar yazılım web tasarım grafik işleriyle uğraşmış meraklı yaptığı işten keyif alan üretmeyi seven kişilerdir. <br/><br/>\r\n			<strong>Sağladığımız hizmetlerimiz;</strong> Web Tasarım, SEO Optimizisyonu, Grafik Tasarım, Masaüstü Programlama ve Sosyal Medya Tanıtım bu alanlarda hizmet vermektedir. <br/><br/> \r\n			Yapılan işlerin tamamı bizler için her zaman önemlidir iki tarafında memnuniyetle ayrılmasını en kaliteli şekilde tasarlanıp kodlanmasını kolay kullanım sunulmasını amaç edinmekteyiz. <br/><br/> \r\n			\r\n			Yapılan tasarımlarda yazılımlarda oluşabilecek eksiklerin hataların giderilmesi konusunda her zaman  sorumluluk almaktayız.\r\n<br/><br/>\r\n<strong>Misyonumuz:</strong>\r\nMüşterilerimizin internet ortamında geçiş süreçlerinde rekabet güçlerini artıracak, kaliteli, gelişmiş çözümler ve projeler üreten bir bilişim firması olmak.\r\n<br/><br/>\r\n<strong>Vizyonumuz:</strong>\r\nTürkiyenin web tasarım sektöründe, global bir marka olmak.\r\n<br/><br/>\r\n<strong>Müşteri memnuniyeti:</strong>\r\nMüşteri ihtiyaçlarına bağlı olarak çeşitli çözümler ve öneriler sunar, müşterilerinin koşulsuz memnuniyeti için her türlü çabayı göstermeyi taahhüt eden bir hizmet anlayışı ile hizmet vermekteyiz.\r\n<br/><br/>\r\n<strong>Standart fiyat anlayışı:</strong>\r\nHizmet verdiği kuruluşların farklı ihtiyaçlarına yönelik standart paket çözümleri hazırlamıştır. Standart ve şeffaf fiyat politikamız gereği her müşteriye aynı fiyat yaklaşımıyla hizmet etmekteyiz.\r\n<br/><br/>\r\n<strong>Profesyonel Yaklaşım:</strong>\r\nBizim için öncelikli olan sizi değil, hedef kitlenizi etkilemektir.\r\n<br/><br/>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgiler`
--

CREATE TABLE IF NOT EXISTS `bilgiler` (
  `site_facebook` text NOT NULL,
  `site_twitter` text NOT NULL,
  `site_youtube` text NOT NULL,
  `site_google` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `bilgiler`
--

INSERT INTO `bilgiler` (`site_facebook`, `site_twitter`, `site_youtube`, `site_google`) VALUES
('a', 'a', 'https://www.youtube.com', 'aa');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim_kutusu`
--

CREATE TABLE IF NOT EXISTS `iletisim_kutusu` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_adsoyad` varchar(255) NOT NULL,
  `iletisim_konu` varchar(255) NOT NULL,
  `iletisim_telefon` varchar(255) NOT NULL,
  `iletisim_eposta` varchar(255) NOT NULL,
  `iletisim_icerik` text NOT NULL,
  `iletisim_durumu` int(11) NOT NULL DEFAULT '0',
  `iletisim_ip` varchar(255) NOT NULL,
  `iletisim_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE IF NOT EXISTS `referanslar` (
  `ref_id` int(11) NOT NULL,
  `ref_adi` text NOT NULL,
  `ref_resim` text NOT NULL,
  `ref_site` text NOT NULL,
  `ref_onay` int(11) NOT NULL DEFAULT '2',
  `ref_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`ref_id`, `ref_adi`, `ref_resim`, `ref_site`, `ref_onay`, `ref_tarih`) VALUES
(4, 'Osman Yavuz', 'http://hatosbilisim.com/upload/haticecelil.com.png', 'http://hatosbilisim.com/', 1, '2015-08-30 14:36:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliderlar`
--

CREATE TABLE IF NOT EXISTS `sliderlar` (
  `slider_id` int(11) NOT NULL,
  `slider_resim` text NOT NULL,
  `slider_onay` int(11) NOT NULL DEFAULT '2',
  `slider_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sliderlar`
--

INSERT INTO `sliderlar` (`slider_id`, `slider_resim`, `slider_onay`, `slider_tarih`) VALUES
(5, 'http://localhost/uploads/slider2.png', 1, '2015-08-31 08:01:59'),
(6, 'http://localhost/uploads/slider3.png', 1, '2015-08-31 08:02:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_adi` varchar(255) NOT NULL,
  `uye_kadi` varchar(255) NOT NULL,
  `uye_link` varchar(255) NOT NULL,
  `uye_eposta` varchar(255) NOT NULL,
  `uye_sifre` varchar(255) NOT NULL,
  `uye_avatar` text NOT NULL,
  `uye_cinsiyet` int(11) NOT NULL DEFAULT '1',
  `uye_hakkinda` text NOT NULL,
  `uye_website` varchar(255) NOT NULL,
  `uye_rutbe` int(11) NOT NULL DEFAULT '2',
  `uye_onay` int(11) NOT NULL DEFAULT '0',
  `uye_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_adi`, `uye_kadi`, `uye_link`, `uye_eposta`, `uye_sifre`, `uye_avatar`, `uye_cinsiyet`, `uye_hakkinda`, `uye_website`, `uye_rutbe`, `uye_onay`, `uye_tarih`) VALUES
(24, 'Osman Yavuz', 'admin', 'admin', 'dangerousman32@gmail.com', '251304fd1cc6de4bcb2503ab5ff38fa3', '', 1, 'Web Developer', 'http://hatosbilisim.com', 1, 1, '2015-06-22 08:49:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE IF NOT EXISTS `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_sahibi` text NOT NULL,
  `yorum_icerik` text NOT NULL,
  `yorum_site` text NOT NULL,
  `yorum_onay` int(11) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa_mesaj`
--
ALTER TABLE `anasayfa_mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`site_id`);

--
-- Tablo için indeksler `iletisim_kutusu`
--
ALTER TABLE `iletisim_kutusu`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`ref_id`);

--
-- Tablo için indeksler `sliderlar`
--
ALTER TABLE `sliderlar`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa_mesaj`
--
ALTER TABLE `anasayfa_mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim_kutusu`
--
ALTER TABLE `iletisim_kutusu`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `sliderlar`
--
ALTER TABLE `sliderlar`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
