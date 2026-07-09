<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'word_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/.l}!T,sxR6e+pA^bI)&KlEP=8OLs9Uk41y^.XZ^_&DV~7JYbKK`n&#NRoAwl0 h' );
define( 'SECURE_AUTH_KEY',  '=-`1Rz7MKh{bIytjWH)z+h3o7CVIkq7HjLE4*vrwb48K2|%huW_Tx;1p#27GmsV{' );
define( 'LOGGED_IN_KEY',    'RV[C]V+ T1@/*Zj2B-wHv%Neml7#pogVy=^k{?0W9SHE<C*`;YEq[1$`f+d,#/I:' );
define( 'NONCE_KEY',        '~8*+O gsuT~WH[&qT7x4JHInuVLp{vTC?K(8{[eImj6vx}kH~_XYtHl}6DPozrSo' );
define( 'AUTH_SALT',        'YlXa |*O9-e>SX|?TS4D B|>#o{ sz+S/U P(iY&&b{yfOywl#i{2;VF186Lyu1Y' );
define( 'SECURE_AUTH_SALT', 'Cj}Y(,@Gf=ZjB;6YB&Al+V&6[-5S:ShQ>m$4-@MNl[=#ZO7PbTfd0,r<0eZJ!9tE' );
define( 'LOGGED_IN_SALT',   'yMdRy9qY5+NXgW#6NtP{tDxu-Cxp*Y@3NBDdh)@4x8(/(E$ccl/g2(%ffo-zFk,x' );
define( 'NONCE_SALT',       'CPX7T^:(H?m),L4!Kg3msFW^]u+sXF|4L4y)PdW#)pe|Js83g_CM2RL=W]cjcS S' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
