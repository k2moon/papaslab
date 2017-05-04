실제로 라라벨에서 제공하는 여러 패키지는 심포니(Symphony) 프레임워크에서 제공하는 기능을 확장하거나 또는 그대로 차용한 것도 많이 있습니다.
http://symfony.com/projects/laravel 에서 라라벨이 사용하는 심포니 프레임워크의 컴포넌트를 확인할 수 있습니다.
 라라벨은 패키지 관리자로 컴포저(Composer)를 사용하므로 손쉽게 패키지간 의존성 관리를 할 수 있으며 http://packagist.org 같은 온라인 PHP 패키지 저장소에서 손쉽게 검색과 설치가 가능합니다.


CREATE TABLE `buynsells` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tsignal_id` int(11) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `buy_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sell_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tsignals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skind` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `history` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsignal_flag` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsignal_color` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsignal_price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tsignal_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `low_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


