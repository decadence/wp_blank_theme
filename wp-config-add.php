<?

// добавить содержимое этого файла в перенесенный в корень wp-config.php

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
define('WP_DEFAULT_THEME', 'main');
define('WPLANG', 'ru_RU');


// просматриваем ли мы сайт с локального компьютера
define("LOCALHOST", $_SERVER["REMOTE_ADDR"] == "127.0.0.1");
define("WP_DEBUG", LOCALHOST);

// активируем MySQLi
define("WP_USE_EXT_MYSQL", false);



