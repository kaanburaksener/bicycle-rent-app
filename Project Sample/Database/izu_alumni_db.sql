
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2014 at 01:28 PM
-- Server version: 10.0.12-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `izu_alumni_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `place` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `status`, `title`, `description`, `place`, `date`) VALUES
(2, 1, 'İzmir Üniversitesi Yılbaşı Balosu', 'Öğrencilerimiz ve Mezunlarımız için Yılbaşı balosu etkinliği düzenlenmektedir . Katılım için okula başvurmak zorunludur .\r\nBalo detayları;\r\n6 Saat Sürecek Kesintisiz Eğlence, Muhteşem Yılbaşı Yemeği, \r\n\r\nPiyanist Ruşen Özben ‘in Sihirli Parmaklarından 70’ler ve 80’ler\r\nDr. Alper Demir Fasıl Ekibi ile “Meydan Faslı”\r\nBuzuki Niko ve Orkestra Siga Siga Eşliğinde Sahne Gösterileri\r\nGeleneksel Yılbaşı Oryantal Gösterisi\r\nTürkçe Dj. Performans ile Işık – Lazer Gösterileri\r\nOyunlar ve Yılbaşı Hediyeleri.\r\n\r\nOrganizasyon Saatleri: 20:00 / 02:00\r\nKarşılama Kokteyli: 19:30 / 20:30\r\nMasa Sayısı: 50\r\nMasa Oturma Düzeni: 10’ar Kişilik', 'Kaya Termal Otel', '2015-01-01 10:00:00'),
(16, 0, 'İZÜ Bahar Şenliği', 'İzmir Üniversitesi Bahar Şenliği etkinliklerini siz seçiyorsunuz .', NULL, NULL),
(3, 1, 'Geleneksel 3. Mezunlar Buluşması', 'İzmir Üniversiteleri arkadaşları karşılaştırmak, kaynaştırmak, mezunu olduğumuz okulumuzun havasını soluyarak eski günleri ve anıları tazelemek, her alanda ve konuda İzmir Üniversiteleri daha ileriye taşımak için, hizmet kapılarının açık olduğunun farkına varmak amacı ile bu yıl da;  "Geleneksel" Mezunlar buluşmamız, 31 Ocak Cumartesi günü saat 12:00 ile 17:00 arasında gerçekleştirilecektir.\r\n\r\n ', 'İzmir Üniversitesi', '2015-01-31 20:00:00'),
(15, 0, 'Mezunlar Balosu', '2015 Yılının Haziran ayında düzenlenecek olan Mezunlar Balosunun nasıl olacağını siz seçiyorsunuz.', NULL, NULL),
(14, 1, 'Yazılım ve Teknoloji Zirvesi', 'Elektrik ve Elektronik Mühendisleri Enstitüsü (IEEE) İzmir Üniversitesi Öğrenci Kulübü tarafından her sene başarıyla düzenlenen etkinliklere bu yıl bir yenisi daha ekleniyor.\r\n\r\nElektrik ve Elektronik Mühendisleri Enstitüsü (IEEE) İzmir Üniversitesi Öğrenci Kulübü tarafından her sene başarıyla düzenlenen etkinliklere bu yıl bir yenisi daha ekleniyor.\r\n\r\nIEEE İzmir Üniversitesi Öğrenci Kulübü alt takımlarından Computer Society tarafından düzenlenen “Yazılım ve Teknoloji Zirvesi”, 4-5 Aralık tarihlerinde İzmir Üniversitesi Konferans Salonu’nda düzenlenecek. Öğrencilere hitap eden halka açık ücretsiz bir etkinlik olan Yazılım ve Teknoloji Zirvesi, 11 oturumdan oluşacak.\r\n\r\nYazılım ve bilişim sektöründe öncü firma ve kamu kuruluşlarını, girişimcileri ve tanınmış isimleri öğrencilerle bir araya getirecek olan bu organizasyon, öğrencilerin giderek daha da büyüyen yazılım ve teknoloji sektörleri hakkında bilgi edinmelerini, yazılım ve teknoloji ile ilgili teknik çalışma ve araştırma çalıştırmaları için zemin oluşturmasını sağlayarak öğrencilerde kariyer bilincinin gelişmesine katkı sağlayacak.\r\n\r\nYazılım ve Teknoloji Zirvesi kapsamında firma temsilcileri ve sektörün önemli isimleri tarafından verilecek olan seminerlerde öğrenciler, yazılım dünyasında önemli yerlere sahip “Programlama Dilleri”, “Akıllı Televizyon”, “Bulut Teknolojisi”, “Mobil Uygulama”, “Oyun Programcılığı”, “Sosyal Medya”, “Sanal Pazarlama”, “3D Printing” ve “Girişimcilik” gibi pek çok sektör hakkında bilgi edinme şansı bulacak. Bu çalıştaylar ile konuşmacılar ve katılımcılar arasında bilgi ve fikir alışverişi gerçekleşmesi amaçlanıyor.\r\n\r\nOdak noktasında öğrencilerin yer aldığı bu etkinlikte, öğrenciler fuaye alanını aktif olarak kullanarak katılımcı firmalarla birebir görüşme ve kafalarındaki sorulara cevap bulma şansı yakalayacak. Ayrıca katılımcılar, seminer ve workshop aralarında fuaye alanına kurulan çeşitli platformlarla eğlenme ve dinlenme şansı da bulacak.', 'İzmir Üniversitesi Konferans Salonu', '2015-01-16 02:00:00'),
(17, 0, 'Mezunlar Buluşması', 'Geleneksel Mezunlar Buluşmasının detaylarını belirliyoruz .', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `status` smallint(1) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `status`, `title`, `content`, `date`) VALUES
(20, 0, 'Mimarlık Öğrencilerimizden Birincilik Ödülü', '<img src="http://www.izmir.edu.tr/tr/plugins/content/mavikthumbnails/thumbnails/600x402-images-stories-haberler-mim-MimYar1.jpg" alt="">\r\n\r\n<p>Mimarlık Fakültesi, Mimarlık Bölümü 3. Sınıf öğrencilerimizden Berk KIRMIZI ve Işıl Melisa IŞIK, Cemer Ulusal Tasarım Yarışması – Yeni Nesil Oyuncaklar adlı yarışmada,  Park Oyuncakları kategorisinde “Bulut” adlı proje ile 1.lik Ödülüne layık görülmüşler ve 15000 TL para ödülü ve yurtdışı fuarı gezisi ile ödüllendirilmişler. 18 Ekim 2014 tarihinde yapılan ödül töreni ile 1.lik ödülleri İzmir Büyükşehir Belediye Başkanı Aziz Kocaoğlu tarafından kendilerini takdim edilmiştir.</p>', '2014-12-09 10:50:00'),
(22, 0, 'İzmir Üniversitesi Educaturk İzmir’de tanıtıldı', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/2014-12-05_izu_educaturk.jpg" alt="">\r\n\r\n<p>İzmir Üniversitesi, 45 üniversite ile İzmir ve çevresinden 180 lisenin 8 bin öğrencisini buluşturan Educaturk Eğitim Fuarında tanıtıldı. Rektör Prof. Dr. Kayhan Erciyeş ve Rektör Yardımcısı Prof. Dr. Selma Çetiner’in de ziyaret ettiği fuarda, öğrenciler özellikle sağlık ve mühendislik bilimleri alanlarına ilgi gösterdi. Bugüne kadar Malatya, Bursa, Manisa ve Eskişehir’de düzenlenen eğitim fuarlarında İzmir Üniversitesi’ni temsil eden tanıtım birimi, katılacağı 8 fuar ile birlikte toplam 50 bin öğrenciye ulaşmayı hedefliyor.</p>', '2014-12-09 13:36:12'),
(23, 1, 'Üniversitemizde Yedinci Akademik Yıl', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/izu_Akademik_Yil_Acilis_Toreni.jpg" alt="">\r\n\r\n<p>Eğitim vermeye 2008-2009 akademik yılında başlayan İzmir Üniversitesi, 7’inci akademik yılına düzenlenen tören ile başladı. Törende açılış dersini Dokuz Eylül Üniversitesi Sosyal Bilimler Enstitüsü Avrupa Birliği (AB) Anabilim Dalı Başkanı Prof. Dr. Canan Balkır verdi. Mütevelli Heyet Başkanı Ali Rıza Doğanata, Rektör Prof. Dr. Kayhan Erciyeş’in açılış konuşmalarını yaptığı törene Mütevelli Heyet Başkan Yardımcısı ve Doğanata Eğitim ve Kültür Vakfı Başkanı Selim Doğanata, Mütevelli Heyet Üyesi Doç. Dr. Erol Tokşen, Kâtip Çelebi Üniversitesi Rektör Yrd. Prof. Dr. Tancan Uysal, Karşıyaka Kaymakamı Saadettin Yücel ile dekanlar, akademisyenler ve öğrenciler katıldı. Prof. Dr. Balkır açılış dersinde, “Avrupa, kriz sonrası kimlik bunalımına girdi, İslamofobi olağanüstü gelişmiş durumda. Bu yeni senaryo ile AB’nin Türkiye’ye uzunca bir süre tam üyelik teklif etmesi hayal. 2018 yılına kadar böyle bir adaylık beklenmemesi gerektiği düşüncesindeyim. Türkiye, gündemde tam üyeliğin olmadığını ciddi olarak fark edip kendi gündemini belirleyebilir” dedi.</p>\r\n\r\n<p><strong>"Üniversiteler de demokratik cumhuriyetlerin en önemli kurumlarındandır"</strong></p>\r\n\r\n<p>Yaklaşan Cumhuriyet Bayramı’nı kutlayarak sözlerine başlayan Mütevelli Heyet Başkanı Ali Rıza Doğanata, “Atatürk’ün hedeflediği yönetim tarzı demokratik cumhuriyettir. Üniversiteler de demokratik cumhuriyetlerin en önemli kurumlarındandır” dedi. İzmir Üniversitesi kurucusu, rahmetli Necdet Doğanata’nın hoşgörülü olmayı öğretirken Voltair’in “Düşüncelerinize katılmıyorum ancak onları ifade etme özgürlüğünüzü ölümüne savunurum” sözünü aktardığını hatırlatan Ali Rıza Doğanata, “Bu üniversitenin varlık amacı olan Atatürk’ün gösterdiği çağdaş medeniyet seviyesine ulaşabilmek için çok çalışmak, aklımızı kullanmak ve her alanda önemli başarılara imza atmak zorundayız. Türkiye, stratejik olarak zor bir coğrafi konumda yer alıyor. Gelecek günlerde Türkiye’nin kaotik bir ortama gireceğini algılıyoruz. Bu nedenle aklını kullanan kişilere ihtiyacımız var. Demokrasimiz güçlendikçe refahımız artacaktır” diyerek sözlerini sürdürdü.</p>\r\n\r\n<p><strong>"Geleceği sizler belirleyeceksiniz"</strong></p>\r\n\r\n<p>Konuşmasında, 2014-2015 yılında İzmir Üniversitesi’nde her iki öğrenciden birinin eğitimine burslu olarak başladığını hatırlatan Rektör Erciyeş, “Türkiye’nin burslu öğrenci oranı en yüksek üniversitelerinde biriyiz. Tüm öğrencilere bakıldığında yüzde 39’u burslu eğitim alıyor” dedi. Dünyanın çok hızlı bir değişim yaşadığını ve bu süreçte üretilen büyük veriyi insanlık yaranına değerlendirecek ve kullanacak kişilere ihtiyaç duyulduğunu hatırlatan Rektör Erciyeş, “Sizler, dünyayı değiştirme yeteneğine sahip olacak kişilersiniz ve sizlerin alacağı kararlar geçmiş nesillerinkinden çok daha önemli, sizden sonraki nesillerin geleceğini belirleyecek kararlar olacak” dedi.</p>', '2014-12-09 13:38:11'),
(24, 1, 'Yüksek Lisans Eğitimine Burs', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/2014-11-28_izu_Burslu_Ogrenci_ziyaret.jpg" alt="">\r\n\r\n<p>Öğrenci başarılarını burslar ile destekleyen İzmir Üniversitesi, Mühendislik ve Fen Bilimleri Enstitüsü Bilgisayar Mühendisliği Programında eğitim alan tüm yüksek lisans öğrencilerine burslu eğitim olanağı sundu.</p>\r\n \r\n<p>Ön lisans, lisans ve yüksek lisans eğitiminde her yıl daha fazla öğrenciye burslu eğitim veren İzmir Üniversitesi, bu yıl Mühendislik ve Fen Bilimleri Enstitüsü Bilgisayar Mühendisliği yüksek lisans programında eğitim almaya başlayan tüm öğrencilerine burslu eğitim şansı sundu. Aralarında İzmir Üniversitesi Matematik-Bilgisayar ve Bilgisayar Mühendisliği bölümlerinden de mezunların bulunduğu öğrenciler, Rektör Prof. Dr. Kayhan Erciyeş’i ziyaret etti. Enstitü Müdürü ve Matematik-Bilgisayar Bölümü Başkanı Prof. Dr. Alemdar Hasanoğlu, Bilgisayar Mühendisliği Bölümü Başkanı Prof. Dr. Aydın Öztürk ve Enstitü Müdür Yardımcısı Doç. Dr. Gözde Ulutagay eşliğinde ziyarette bulunan öğrencilerle deneyimlerini paylaşan Rektör Erciyeş, “Basit yazılım uygulamaları yerine derin ve uzun soluklu konulara yoğunlaşın ve alanınızda iyi birer akademisyen olmak için çaba sarf edin” temennisinde bulundu. Rektör Erciyeş, İzmir Üniversitesi’nde başarıların burslar ile her zaman desteklendiğini, amaçlarının her yıl daha fazla öğrenciye burslu lisansüstü eğitim verebilmek olduğunu söyledi. Bazı öğrencilerin çalışmalarının TÜBİTAK tarafından da desteklendiğini hatırlatan Prof. Dr. Alemdar Hasanoğlu, “Öğrencilerimiz aldıkları eğitimle gelecekleri için sağlam bir zemin hazırlıyorlar” dedi.</p>', '2014-12-09 13:39:12'),
(26, 1, 'Üstün Dökmen Üniversitemizde', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/izu_Ustun_Dokmen_3.jpg" alt="">\r\n\r\n<p>Kitapları, oyunları ve televizyon programları ile kitleleri konferanslarında bir araya getiren Prof. Dr. Üstün Dökmen İzmir Üniversitesi öğrencileri ile “Kendimizi ve Dünyayı İnşa Etmek” başlıklı söyleşide buluştu.</p>\r\n \r\n<p>Vergiden, ekonomik kriz döneminde insan ve toplum psikolojisine, stresle başa çıkma yollarından ilişkilerde iletişim becerilerinin önemine kadar geniş bir yelpazede yaptığı çalışmaları ile kitleleri konferanslarında buluşturan bilim adamı, iletişimci, psikolog, şair ve televizyon programcısı Prof. Üstün Dökmen, İzmir Üniversitesi öğrencileri ile buluştu. “Kendimizi ve Dünyayı İnşa Etmek” başlıklı söyleşisi öncesinde Rektör Prof. Dr. Kayhan Erciyeş ile bir araya gelen Dökmen, meslek seçiminden evliliğe, kriz yönetiminden kadın-erkek eşitsizliğine kadar hayata dair görüşlerini öğrenciler ile paylaştı. Söyleşisi sonunda öğrencilerin sorularını yanıtlayan ve bol bol kitap imzalayan Prof. Dr. Dökmen’e İzmir Üniversitesi adına teşekkür plaketini Rektör Yardımcısı Prof. Dr. Selma Çetiner takdim etti.</p>\r\n \r\n<p><strong>Hayatı Nasıl Yaşadığınız Önemli</strong></p>\r\n\r\n<p>Hayatı ve dünyayı inşa etmeye kişinin ancak kendini ve yeteneklerini keşfederek başlayabileceğini belirten Prof. Dr. Üstün Dökmen sözlerine, “IQ değil, yeteneğinizin ne olduğunu keşfetmeniz önemli” diyerek başladı. Hayata gelmenin değil onun nasıl yaşandığının önemli olduğunu vurgulayan Dökmen, “Her durumda mutlu olamazsınız ancak güçlü olmak zorundasınız. Bir Atatürk ya da Shakespeare olmanız gerekmiyor. Su içemediği için yaz aylarında böbrek yetmezliğinden hayatını kaybedecek bir köpeğin ölümünü engelleyen kişi olabilirsiniz. İnsan, hayatın monoton, kendisinin de ölümlü olduğunu bilerek yaşayabilen tek canlıdır. Hayatınızı renklendirmek sizin elinizde” dedi.</p>', '2014-12-09 13:41:35'),
(27, 1, 'Levent Haseki Üniversitemizde', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/izu_Levent_Haseki_3.jpg" alt="">\r\n\r\n<p>Iron Man 3, Kaptan Amerika, Dracula, Thor, Guardians of Galaxy gibi ses getiren filmlerde kompozitör olarak görev alan İzmirli efekt uzmanı Levent Haseki, İzmir Üniversitesi öğrencileri ile bir araya geldi.</p>\r\n \r\n<p>Iron Man 3, Kaptan Amerika, Dracula, Thor, Guardians of Galaxy gibi son dönemin ses getiren Hollywood yapımlarında kompozitör olarak çalışan İzmirli görsel efekt uzmanı ve kompozitör Levent Haseki, İzmir Üniversitesi Güzel Sanatlar Fakültesi (GSF) Sinema Kulübü’nün etkinliği çerçevesinde öğrencilerle bir araya geldi. Haseki söyleşi sırasında kariyeri ve çalıştığı filmler hakkında bilgi verirken öğrencilerin sorularını da yanıtladı. Söyleşi sonunda İzmir Üniversitesi adına Haseki’ye teşekkür plaketini GSF Dekanı Prof. Dr. Ulufer Teker takdim etti.</p>\r\n\r\n<p>Lisans eğitiminin ardından Avustralya ve İngiltere’de çeşitli görsel efekt stüdyolarında çalıştığını belirten Haseki, çalıştığı filmlerden örnekler eşliğinde kısa ve uzun metrajlı yapımlarda görsel efektlerin nasıl uygulandığı, görsel efektlerin Hollywood Sineması açısından öneminden bahsetti. Öğrencileri, dünya çapında çalışmalar içinde yer almaları için yüreklendiren Haseki, “Gelişen teknoloji görsel efektlerin kullanımı için geliştiği kadar iletişim için de gelişmiş durumda. Artık internet aracılığı ile pek çok programın nasıl kullanıldığını öğrenmek ve uygulamalar yaparak pratik geliştirmek kolay. Yabancı dilinizi geliştirin, uzmanlığınızı geliştirin ve uluslararası projelerde yer almak için girişimlerde bulunun” dedi.</p>\r\n \r\n<p>Görsel efekt oyunun parçası oldu\r\nSöyleşi sırasında verdiği örneklerle sinemada oyunculuk, dekor, kurgu kadar görsel efektlerin de “oyunun bir parçası” haline geldiğinden bahseden Haseki özellikle Doğu Avrupa’nın görsel efekt sektöründe giderek geliştiğini ve Türkiye’nin de gelecekte bu alanda söz sahibi olabileceğini belirtti.</p>', '2014-12-09 13:42:52'),
(28, 1, 'Hedef, Daha Çok Yabancı Öğrenci', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/2014-12-01_izu_ICEF_Berlin.jpg" alt="">\r\n\r\n<p>İzmir Üniversitesi Berlin’de düzenlenen ve dünyanın dört bir yanından eğitim çalışanları ve acenteleri bir araya getirerek yeni işbirliklerine zemin hazırlayan International Consultants for Education and Fairs’e (ICEF) katıldı. Başta Tıp Fakültesi olmak üzere İzmir Üniversitesi’nin tüm bölümlerine ilginin yoğun olduğunu belirten Uluslararası İlişkiler Ofisi Sorumlusu Aslı Tanrıöğen, uluslararasılaşma hedefi çerçevesinde, tam zamanlı yabancı öğrenci sayısını artırmayı hedeflediklerini söyledi. Yaklaşık 100 ajansla bir araya gelen Uluslararası İlişkiler Ofisi Sorumluları Aslı Tanrıöğen ve Saniye Dulkadir, İzmir Üniversitesi’nin öğrencilerine sunduğu sosyal olanaklar ve etkinliklerinin tanıtımını yaptı.</p>', '2014-12-09 13:44:16'),
(33, 1, 'Tire’deki tarihi eserler', '<img src="http://www.izmir.edu.tr/tr/images/stories/Basin_Danismanligi/izuTirede_Tarihi_Adimlar_1.jpg" alt="">\r\n\r\n<p>Tire’deki tarihi eserlerin insanın ve zamanın kötü etkilerinden korunabilmesi, onarımı, envanterinin çıkarılması, projelendirilmesi ve restorasyonu için İzmir Üniversitesi tarafından dört yıldır sürdürülen çalışmalar, İzmir Valiliği, üniversiteler ve konu ile ilgili desteği olabilecek tüm kurumları harekete geçirdi.</p>\r\n \r\n<p>İzmir Üniversitesi tarafından düzenlenen toplantıda Vali Mustafa Toprak, Tire Belediye Başkanı Tayfur Çiçek, Tire Kaymakamı Mehmet Usta, İl Kültür ve Turizm Müdürü Abdülaziz Ediz, İl Vakıflar Bölge Müdürü Kenan İba, Rölöve ve Anıtlar Kurulu Bölge Müdürü Cemil Karabayram, Kültür Varlıklarını Koruma Kurulu Müdürü Galip Kılınç ile İzmir Üniversitesi Mütevelli Heyet Başkanı Ali Rıza Doğanata, Rektör Prof. Dr. Kayhan Erciyeş, Mimarlık Fakültesi Dekanı Prof. Dr. Cemal Arkon, İzmir Üniversiteleri Platformu Dönem Başkanı ve Kâtip Çelebi Üniversitesi Rektörü Prof. Dr. Galip Akhan, Ege Üniversitesi Rektörü Prof. Dr. Candeğer Yılmaz, Dokuz Eylül Üniversitesi Rektörü Prof. Dr. Mehmet Füzün, İzmir Ekonomi Üniversitesi Rektörü Prof. Dr. Oğuz Esen, Yaşar Üniversitesi Rektörü Prof. Dr. Murat Barkan, Gediz Üniversitesi Rektör Yardımcısı Prof. Dr. Mustafa Güneş, İzmir Yüksek Teknoloji Enstitüsü Rektörü Prof. Dr. Mustafa Güden ve İzmir Üniversitesi Tire’deki Tarihi Eserleri Koruma Komisyonu Başkanı Yrd. Doç. Dr. Meltem Öztürk bir araya geldi. Toplantı öncesi Tire’de restorasyonu süren Bedesteni ziyaret eden rektörler, çalışmalar hakkında bilgi aldı.</p>', '2014-12-29 11:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE IF NOT EXISTS `survey_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eventId` int(11) NOT NULL,
  `question` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`id`, `eventId`, `question`) VALUES
(35, 4, 'O güne ait hatıra eşyaları yaptırılsın mı ?  '),
(34, 4, 'Kumru günü nasıl bir eğlence ilginize çeker ? '),
(33, 11, 'Sohbet günü hangi yemek türü ilginizi çeker ?'),
(32, 11, 'Sohbet günü nasıl bir eğlence düzenlenmeli ?'),
(30, 1, 'Üniversitemizin etkinlikleri sizce ne kadar kaliteye sahip ? '),
(31, 11, 'Sohbet günü nerede düzenlenmeli ? '),
(37, 15, 'Mezunlar Balosu Nerede Yapılmalı ?'),
(38, 15, 'Hangi sanatçının gelmesini istersiniz ?'),
(39, 15, 'Mezuniyet balosu yemekli mi olsun ?'),
(40, 16, 'Bahar Şenliğimiz Nerede Olsun ?'),
(41, 16, 'Bahar şenliğinde hangi sanatçının gelmesini istersiniz ?'),
(42, 17, 'Mezunlar buluşması nerede olmalı ?'),
(43, 17, 'Mezunlar Buluşmasının içeriği nasıl olmalı'),
(44, 17, 'Hangi Ay Olmalı ?'),
(45, 16, 'Hangi Etlinliklerin olmasını istersiniz ?'),
(46, 16, 'Hangi ülke mutfaklarının yiyecek standında açılmasını istersiniz ?'),
(47, 16, 'Hangi Dj''in gelmesini istersiniz ?');

-- --------------------------------------------------------

--
-- Table structure for table `survey_question_choice`
--

CREATE TABLE IF NOT EXISTS `survey_question_choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=99 ;

--
-- Dumping data for table `survey_question_choice`
--

INSERT INTO `survey_question_choice` (`id`, `content`, `question_id`) VALUES
(41, 'Gün içerisinde çeşitli etkinlik/turnuvalar', 32),
(40, 'Karaoke', 32),
(39, 'Mini konser', 32),
(38, 'Restoran', 31),
(37, 'Otel', 31),
(36, 'Üniversite', 31),
(35, 'Yetersiz kaliteye sahip', 30),
(34, 'Yeterli kaliteye sahip', 30),
(33, 'Yüksek kaliteye sahip', 30),
(42, 'Pizza', 33),
(43, 'World Cuisine', 33),
(44, 'Japanese Cuisine', 33),
(45, 'Turkish Cuisine', 33),
(46, 'Seafood', 33),
(47, 'Konser', 34),
(48, 'Yarışmalar', 34),
(49, 'Her ikisi de ', 34),
(50, 'Evet', 35),
(51, 'Hayır', 35),
(53, 'ikinci', 36),
(54, 'ucuncu', 36),
(55, 'İzmir Üniversitesi', 37),
(56, 'Kaya Termal Otel', 37),
(57, 'Alsancak', 37),
(58, 'Çeşme Sheraton', 37),
(59, 'Teoman', 38),
(60, 'Athena', 38),
(61, 'Duman', 38),
(62, 'Murat Dalkılıç', 38),
(63, 'Atiye', 38),
(64, 'Hadise', 38),
(65, 'Evet', 39),
(66, 'Hayır', 39),
(67, 'İzmir Üniversitesi', 40),
(68, 'Kaya Termal Otel', 40),
(69, 'Ege Park', 40),
(70, 'Alsancak', 40),
(71, 'Çeşme', 40),
(72, 'Sezen Aksu', 41),
(73, 'Mustafa Sandal', 41),
(74, 'Mustafa Ceceli', 41),
(75, 'Sıla', 41),
(76, 'Mor Ve Ötesi', 41),
(77, 'İzmir Üniversitesinde', 42),
(78, 'Güzelyalı', 42),
(79, 'Alsancak', 42),
(80, 'Tavuk-Pilav', 43),
(81, 'Kumru Günü', 43),
(82, 'Koktely', 43),
(83, 'Şubat', 44),
(84, 'Mart', 44),
(85, 'Nisan', 44),
(86, 'Haziran', 44),
(87, 'Langırt Turnuvası', 45),
(88, 'Sokak Basketbolu Turnuvası', 45),
(89, 'Minyatür Kale Futbol Turnuvası', 45),
(90, 'Masa Tenisi Turnuvası', 45),
(91, 'Meksika', 46),
(92, 'Çin', 46),
(93, 'İtalyan', 46),
(94, 'Hindistan', 46),
(95, 'Japonya', 46),
(96, 'Emrah Türken', 47),
(97, 'Ece Toprak', 47),
(98, 'Erdem Kınay', 47);

-- --------------------------------------------------------

--
-- Table structure for table `survey_responses`
--

CREATE TABLE IF NOT EXISTS `survey_responses` (
  `choice_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `survey_responses`
--

INSERT INTO `survey_responses` (`choice_id`, `question_id`, `user_id`) VALUES
(44, 33, 25),
(39, 32, 25),
(37, 31, 25),
(44, 33, 1),
(40, 32, 1),
(36, 31, 1),
(43, 33, 25),
(41, 32, 25),
(38, 31, 25),
(44, 33, 25),
(40, 32, 25),
(37, 31, 25),
(51, 35, 23),
(47, 34, 23),
(44, 33, 4),
(40, 32, 4),
(36, 31, 4),
(43, 33, 25),
(41, 32, 25),
(38, 31, 25),
(44, 33, 25),
(40, 32, 25),
(36, 31, 25),
(45, 33, 4),
(41, 32, 4),
(38, 31, 4),
(44, 33, 4),
(40, 32, 4),
(37, 31, 4),
(46, 33, 25),
(44, 33, 4),
(41, 32, 4),
(37, 31, 4),
(44, 33, 4),
(41, 32, 4),
(37, 31, 4),
(45, 33, 25),
(40, 32, 25),
(38, 31, 25),
(43, 33, 4),
(40, 32, 4),
(37, 31, 4),
(44, 33, 25),
(39, 32, 25),
(37, 31, 25),
(44, 33, 4),
(40, 32, 4),
(37, 31, 4),
(44, 33, 4),
(41, 32, 4),
(38, 31, 4),
(51, 35, 4),
(47, 34, 4),
(51, 35, 4),
(47, 34, 4),
(51, 35, 4),
(47, 34, 4),
(51, 35, 4),
(47, 34, 4),
(51, 35, 4),
(47, 34, 4),
(46, 33, 23),
(39, 32, 23),
(36, 31, 23),
(50, 35, 23),
(48, 34, 23),
(51, 35, 23),
(49, 34, 23),
(51, 35, 23),
(49, 34, 23),
(43, 33, 3),
(41, 32, 3),
(38, 31, 3),
(42, 33, 3),
(41, 32, 3),
(37, 31, 3),
(51, 35, 3),
(49, 34, 3),
(43, 33, 18),
(39, 32, 18),
(37, 31, 18),
(50, 35, 2),
(48, 34, 2),
(45, 33, 18),
(41, 32, 18),
(38, 31, 18),
(53, 36, 18),
(50, 35, 11),
(48, 34, 11),
(67, 40, 23),
(72, 41, 23),
(67, 40, 23),
(72, 41, 23),
(67, 40, 23),
(72, 41, 23),
(67, 40, 23),
(72, 41, 23),
(69, 40, 11),
(75, 41, 11),
(71, 40, 11),
(73, 41, 11),
(67, 40, 11),
(76, 41, 11),
(56, 37, 11),
(60, 38, 11),
(65, 39, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `user_role`) VALUES
(1, 'Ali', 'Uzun', 'aliuzun@gmail.com', 'aliuzun12', 3),
(2, 'Veli', 'Saygin', 'velisaygin@gmail.com', '123456', 2),
(3, 'Mehmet', 'Okdemir', 'mehmetokdemir@gmail.com', 'mehmetokdemir123', 3),
(4, 'Aslıhan', 'Özmen', 'aslihanozmen@gmail.com', 'aslihanozmen123', 0),
(10, 'Erdi', 'İzgi', 'erdiizgi@gmail.com', '123456', 3),
(11, 'Kaan Burak', 'Şener', 'kaanburaksener@gmail.com', '123456', 0),
(12, 'Görkem', 'Sağdaş', 'gorkemsagdas@gmail.com', '123456', 3),
(13, 'Şefik Yunus', 'Özcan', 'sefikyo@gmail.com', '123456', 2),
(17, 'Ali', 'Alioğlu', 'alialioglu@gmail.com', '123', 3),
(18, 'Esra', 'Cambaz', 'esracambazz@gmail.com', 'esra123', 3),
(20, 'Doğan', 'Arıkan', 'dogiarikan@gmail.com', 'dogan123', 0),
(24, 'Emrah', 'Orhun', 'emrahorhun@izmir.edu.tr', '12345', 0),
(26, 'Bahadir Can', 'Yildiz', 'bahadircyildiz@yandex.com', 'bahadircyildiz219', 3),
(25, 'Mohamed Amine', 'Amor', 'med@amine', 'medamine', 3),
(27, 'Ahmet Mert', 'İnanç', 'amertinac@gmail.com', 'amertinac01', 3),
(28, 'Barış', 'Kısır', 'bariskisir@gmail.com', 'sbk08080', 3),
(29, 'Sefa', 'Ozkan', 'sefaozkan@hotmail.com', 'sefa_35_sefa', 3),
(30, 'Zahid Emre', 'Akkirman', 'eakkirman@hotmail.com', 'cokgizlisifre', 3),
(31, 'Gozde Burcu', 'Yoruk', 'gbyoruk@hotmail.com', 'g34b45y1992', 3),
(32, 'Kaan', 'Kaymak', 'syberoyal@hotmail.com', 'buralarbenimdihep', 3),
(33, 'İsmail Oğuzhan', 'Ay', 'isocan35@yandex.com', '1213iso1993', 3),
(34, 'Oyku', 'Kirdiken', 'okirdiken@gmail.com', 'oykuoyku43', 3),
(35, 'Mehmet Hasan', 'Solmaz', 'solmazlarinmehmet@hotmail.com', '3475287528234', 3),
(36, 'Durmus', 'Kutuk', 'd.kutuk@gmail.com', 'durmus_durmus_32', 3),
(37, 'Sonmez', 'Reis', 'battalgazinintorunu@gmail.com', 'namidegervanku', 3),
(38, 'Batuhan', 'Yaman', 'yaman.batuhan@gmail.com', 'sifre.147272.batuhan', 3),
(39, 'Hilmi Tolga', 'Sahin', 'htolgasahin@gmail.com', 'eeksnidercomes', 3),
(50, 'Beste', 'Kaysı', 'bestekaysi@hotmail.com', '123456', 2),
(41, 'Muhammed Akif', 'Yenikaya', 'm-akif@gmail.com', 'm-akif54', 3),
(42, 'Alp', 'Barazi', 'barazi.alp@gmail.com', 'tengridaglari231', 3),
(43, 'Cem', 'Ozkan', 'xxozkancem@gmail.com', 'gdg435213', 3),
(44, 'Ozgun', 'Turkmen', 'ozgunturkmen90@hotmail.com', 'o.turkmen91', 3),
(45, 'Anil', 'Gundogan', 'aldenart@gmail.com', 'gundogan.anl_aldenar', 3),
(46, 'Beliz', 'Gursoy', 'gursoy.beliz_89@gmail.com', 'shinisama_xx', 3),
(47, 'Burak', 'Aybek', 'aybek_burak@yandex.com', '93ugzdj0394', 3),
(48, 'Ceren', 'Togay', 'deathprincess_91@gmail.com', 'c.togay.c', 3),
(49, 'Eren', 'Demir', 'demir.eren.43@gmail.com', 'tkmbjktbkd', 3),
(52, 'Oğulcan', 'Kamçı', 'ogulcan@hotmail.com', '123456', 2),
(53, 'Alper', 'Altun', 'alperaltun@hotmail.com', '123456', 2),
(54, 'Başak', 'Yıldız', 'basakyildiz@hotmail.com', '12345', 2),
(55, 'Orhan', 'Selen', 'orhanselen@hotmail.com', '12345', 2),
(56, 'Yasin', 'Çolak', 'yasincolak@hotmail.com', '12345', 2),
(57, 'Erdem', 'Alkan', 'erdemalkan@hotmail.com', '12345', 2),
(58, 'Metin', 'Kiper', 'metinkiper@hotmail.com', '123456', 2),
(59, 'Eren', 'Demir', 'erendemir@hotmail.com', '12345', 2),
(60, 'Deniz', 'Aydın', 'denizaydin@hotmail.com', '12345', 2),
(61, 'Mustafa', 'Haydar', 'mustafahaydar@hotmail.com', '12345', 2),
(62, 'Burak', 'Aybek', 'burakaybek@hotmail.com', '12345', 2),
(63, 'Tuğçe', 'Çağdaş', 'tugcecagdas@hotmail.com', '12345', 2),
(64, 'Berk', 'Sarı', 'berksari@hotmail.com', '12345', 2),
(65, 'Gizem', 'Geçmen', 'gizemgecmen@hotmail.com', '12345', 2),
(66, 'Nasibe', 'Deniz', 'nasibe@hotmail.com', '12345', 2),
(67, 'Ali', 'Canpeder', 'alicanpeder@hotmail.com', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`) VALUES
(0, 'administrator'),
(1, 'editor'),
(2, 'alumni'),
(3, 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
