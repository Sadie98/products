# Products
Сайт, позволяющий хранить информацию о товарах. Доступен функционал просмотра, редактирования, удаления, добавления записей.

# Requirements
* Apache PHP 7.4
* Redis 5.0.5
* MariaDB 10.3.8

# Database structure


## Table structure for table `products`


CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `url_picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

## Indexes for table `products`

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

## AUTO_INCREMENT for table `products`

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

# Config
Данные MariaDB и базы данных прописать в config/mysql.php:
```php
define('DB_HOST', '');
define('DB_NAME', "");
define('DB_USER', '');
define('DB_PASS', '');
```
Unix-socket Redis прописать в файле config\redis.php:
```php
self::$instance->connect('/home/u228065/redis.socket');
```
  
