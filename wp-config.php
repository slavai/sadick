<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u488234236_grib');

/** Имя пользователя MySQL */
define('DB_USER', 'u488234236_grib');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234!!!!');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[J~5eA>LVxj$i-*j(/,D(=k}z0*m`h Zj+]jctbnOvn7l,ak]RnU}Z|NuA}lquaE');
define('SECURE_AUTH_KEY',  'wL-X{M&9$ZdHJ-fK3{Cv+.iZ[2uV-si;u&[(5,UWG.LCgY*0ye7=/54qZ5v/v~Wj');
define('LOGGED_IN_KEY',    'H/3-9n1YBoP!X +Y[nKi9$(3!>:2q.k^@3?W=%Nk4B5 UY7GBwKa]07-k)l_|Q[K');
define('NONCE_KEY',        'v;+`.,b=GZ/1SM8+ed|W}`=*,,Mpc5Y3(&?C+D3R4Zx4+e/)]z7$b$4_e_R=+F3(');
define('AUTH_SALT',        '!_QjDu2{euQA(=?b@Y,61&Zpgk8-8P@YA+pJ]Tc3Wa|mlg}Gxp<V/t5kbp;p6A5h');
define('SECURE_AUTH_SALT', ']2yd..P+<>TO;YEa&Y%WDlcblgv9$lmo$SZwx0|w]{Cxs_@lV)X3@|>~#oC6:#++');
define('LOGGED_IN_SALT',   '^[ }6VJ*;=17b.BruV)5#1,(eCJ =WoU$=8Y2}>e0/EDR1dL!F|z)=hzV<k8PdB<');
define('NONCE_SALT',       'ip?B2^b!`pPgv+QK.;}[<fpsYv;P#S#2{#bE4,IA|<O9d-qe|[?#R/ J1(]O[C%w');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
