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
define( 'DB_NAME', 'media_education' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^S;},5y8Oi559,:iG>=luc,MY*Lrs>w<*kG1L87MH!+zEZn;|&ay#iWmEkM_m47|' );
define( 'SECURE_AUTH_KEY',  'E(ZJeNJpsPj(veZxo53FBzW{T-<v_qZH4]i9UA5KB5><tcO}&!=~ozU9+VOFN[|Q' );
define( 'LOGGED_IN_KEY',    'ayzbl@zRB-z<*I7*I5-8k[CMR{F5KQ{QQR(0}39S^LCxe7GE#Xe^X>,W,KaV|iyk' );
define( 'NONCE_KEY',        '7 i:|5}%ps3 n,X6Jb-BdVn#_Mjvw$ZV.l#7Tn~poi t330v:I>-E]xes2D(}Gf_' );
define( 'AUTH_SALT',        'hy*3guCzJE<M9PZ.m*2Kg(}z_1hS7xf?8Wdp71h@GSm#I*4i-Gx#ucFG/3@PT]Iv' );
define( 'SECURE_AUTH_SALT', 'BK4UwrRn(2mN<50%$+$pjWTP9m$_<h!,ConlZgT}*TA{Nj,a=;@$;V%&jjaCq:1o' );
define( 'LOGGED_IN_SALT',   'doJ)F6=N?eewgutatomU!Q]F?NG:Be]q?@mW*0X^:-C-sb[)qfz.m58mwy<>aYm#' );
define( 'NONCE_SALT',       '#h(>UvVqXyi @)A/+x&J#s.v6rvq_XPii7$Yq6; -1v01jl}G(lqk^qot6`rS-6P' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
