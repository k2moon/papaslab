실제로 라라벨에서 제공하는 여러 패키지는 심포니(Symphony) 프레임워크에서 제공하는 기능을 확장하거나 또는 그대로 차용한 것도 많이 있습니다.
http://symfony.com/projects/laravel 에서 라라벨이 사용하는 심포니 프레임워크의 컴포넌트를 확인할 수 있습니다.
 라라벨은 패키지 관리자로 컴포저(Composer)를 사용하므로 손쉽게 패키지간 의존성 관리를 할 수 있으며 http://packagist.org 같은 온라인 PHP 패키지 저장소에서 손쉽게 검색과 설치가 가능합니다.

CREATE TABLE `gettingstarted`.`sinfo` (
  `scode` VARCHAR(10) NOT NULL,
  `sname` VARCHAR(100) NOT NULL,
  `history` VARCHAR(1000) NULL,
  PRIMARY KEY (`scode`),
  UNIQUE INDEX `scode_UNIQUE` (`scode` ASC));


CREATE TABLE `gettingstarted`.`tsignal` (
  `idx` INT NOT NULL AUTO_INCREMENT,
  `scode` VARCHAR(10) NOT NULL,
  `tsignal_flag` CHAR(1) NULL,
  `tsignal_color` VARCHAR(10) NULL,
  `tsignal_price` INT NULL,
  `low_price` INT NULL,
  `tsignal_date` VARCHAR(20) NULL,
  `low_date` VARCHAR(20) NULL,
  PRIMARY KEY (`idx`));

CREATE TABLE `gettingstarted`.`buy_sell` (
  `idx` INT NOT NULL AUTO_INCREMENT,
  `tsignal_idx` INT NOT NULL,
  `buy_price` INT NULL,
  `sell_price` INT NULL,
  `buy_date` VARCHAR(20) NULL,
  `sell_date` VARCHAR(20) NULL,
  PRIMARY KEY (`idx`));