/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE bnkfowqf_krasivostudio;
CREATE TABLE IF NOT EXISTS `about` (
  `image` varchar(50) DEFAULT NULL,
  `headline` char(100) DEFAULT NULL,
  `desc` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `about` (`image`, `headline`, `desc`) VALUES('assets/img/about-img.svg', 'Stregthen your brand!', 'At Krasivo Studio, we are dedicated to strengthening brands for everyone by combining strategic insight with creative design. Whether you re a new business or an established company, our goal is to craft unique, memorable brand experiences that resonate with your audience. Through close collaboration and innovative solutions, we help your brand stand out and connect meaningfully across all platforms.');

CREATE TABLE IF NOT EXISTS `aboutdesc` (
  `icon` varchar(50) DEFAULT NULL,
  `head` varchar(50) DEFAULT NULL,
  `desc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `aboutdesc` (`icon`, `head`, `desc`) VALUES
	('bx bx-receipt', 'Our Vision', 'Our vision is to empower and strengthen brands for everyone. We believe that every brand, regardless of its size or industry, deserves to stand out, connect authentically, and thrive in today’s competitive market.\nBy merging creative design with strategic thinking, we aim to create brands that resonate with audiences and leave a lasting impact. Our vision is to ensure that every brand we work with reaches its fullest potential, creating meaningful connections and driving growth.'),
	('bx bx-cube-alt', 'Our Misson', 'Our mission at Krasivo Studio is to craft powerful and authentic brand experiences that elevate businesses and connect them with their audiences. We are committed to delivering creative solutions that not only reflect the unique essence of each brand but also drive growth and engagement across all platforms. Through collaboration, innovation, and attention to detail, we aim to strengthen every brand we work with, helping them stand out in a crowded marketplace.\n\n\n\n\n\n\n');

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
	(1, 'Shavalino Fayola Bertha Pangaribuan', 'duskfay@gmail.com', 'sdsfsdfsfd', 'aasdfasdf', '2024-10-23 07:14:37');

CREATE TABLE IF NOT EXISTS `home` (
  `headline` varchar(50) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `img` varchar(59) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `home` (`headline`, `desc`, `img`) VALUES
	('Krasivo Studio (Shavalino Fayola)', 'you want a better site for your business?? or you want to make your brand stronger than any other competitor?? Trust us!', 'assets/img/hero-img.svg');

CREATE TABLE IF NOT EXISTS `portfolio` (
  `img` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filtertype` varchar(50) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `desc` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `portfolio` (`img`, `filtertype`, `product`, `desc`) VALUES
	('assets/img/portfolio/niscala.jpg', 'filter-logo', 'Niscala', 'Niscala Studio is the company that create a video for real-estate'),
	('assets/img/portfolio/bertapak.jpg', 'filter-logo', 'Bertapak Bersama Group', 'Bertapak Bersama Group is the company that selling real-estate'),
	('assets/img/portfolio/ambulanscom.jpg', 'filter-web', 'Ambulans Dian', 'Jasa Ambulans di sekitar Tangerang Selatan'),
	('assets/img/portfolio/gregah.jpg', 'filter-photo', 'Gregah Coffee', 'High-quality coffee in town'),
	('assets/img/portfolio/krasivodrink.png', 'filter-logo', 'Krasivo Drink', 'Sweet Milky Fruity drink freshh ');

CREATE TABLE IF NOT EXISTS `services` (
  `icon` varchar(50) DEFAULT NULL,
  `head` varchar(100) DEFAULT NULL,
  `desc` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `services` (`icon`, `head`, `desc`) VALUES
	('bx bxl-dribbble', 'Dynamic Website', 'Creating stunning, user-friendly websites that reflect your brand’s identity.'),
	('bx bxl-dribbble', 'Strong Logo', 'Designing memorable logos that represent the essence of your brand.'),
	('bx bxl-dribbble', ' IG Feeds', 'Crafting cohesive and engaging content to build your brand presence on social media.'),
	('bx bxl-dribbble', 'Product Photography', 'Capturing high-quality images that showcase your products beautifully.');

CREATE TABLE IF NOT EXISTS `team` (
  `img` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `linkedIn` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `team` (`img`, `name`, `role`, `linkedIn`, `ig`) VALUES
	('assets/img/team/fay.jpg', 'Shavalino Fayola', 'Project Manager', 'https://www.linkedin.com/in/shavalino-fayola-bertha-pangaribuan-485a13260/', 'https://www.instagram.com/richfayoo/'),
	('assets/img/team/khrist.jpg', 'Khristian Suhendi', 'Head of Creative', 'https://www.linkedin.com/in/khristian-suhendi-9b06402b5', 'https://www.instagram.com/stories/krxviannn._/');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
