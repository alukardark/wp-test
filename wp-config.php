<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'wp-test');

/** Имя пользователя MySQL */
define('DB_USER', 'user_wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'pass_17x19x');

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
define('AUTH_KEY',         '%GD0+.RgpOq +|qqs5|WAXU`!W,~%eBf@JX*@uY${;$ax2Ipwy?S^5wJ_]y~Fuhn');
define('SECURE_AUTH_KEY',  'lG[I~|?]cpH`;@1j$%?Q~&C.MHrh7sTwu>%m86R}F]G,lhFe&yrRIOBG*i$jO7 j');
define('LOGGED_IN_KEY',    '-#F[cY$ivmaGkr!!0z9?R2iGKp,i[yNImNk%b~XBA&^Myi%AC>:3,XJbz@[x!{:h');
define('NONCE_KEY',        '>Xehe>uRQQlp iY[wx*lkbwAh/%u-B5gdR.r5(/}mqG_x$3tCQ|&NlP:r|TY aex');
define('AUTH_SALT',        'g[#Wh3F?vCo7ahYmKu`m@]:iY*pL gQ Vv3H|r,C-:Ltrdt:niWm qF(f[|TvH~S');
define('SECURE_AUTH_SALT', '1$2{~&hlI^W~b&*s$jIa}]0v:Zu&ck|2D%9yat3O.}tQ|p)P[d=7BSI_YG<v3~!T');
define('LOGGED_IN_SALT',   '!o^f_6|CTEM74GCVp0jmYs2+:%Z!4I]}njC#{^0ejYae/(%SFaX%wKG@84A9yXjn');
define('NONCE_SALT',       'Xq0=Ub)#wqdbuW>]p2:&V5F2f2+d%!e56DDjp6nT].6F@!JzM(61_!eu|!5dW:L6');

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
