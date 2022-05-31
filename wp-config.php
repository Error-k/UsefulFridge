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
 * * Настройки MySQL
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
define( 'DB_NAME', 'fridge' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'fridge_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '{jxegjtcnm' );

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
define( 'AUTH_KEY',         'cd~pdaT~9n;4Z ]66)i.dxn]pazkWdh.L_G)U[qN,BJ*pdmho|<9G$2[#RLI7o1D' );
define( 'SECURE_AUTH_KEY',  'm{#]T@ ga^u4!;1DHDUx}RP(:bHCIiR.j19]eAY,uI@w&[)-CU#}. }_5N(wYX&2' );
define( 'LOGGED_IN_KEY',    'Ey@4NNX|9If9VKS9>vhr1rPH@k(vJSnpDp??I-0yj3fbk[z3,(PFWCp?_AYU&2ZR' );
define( 'NONCE_KEY',        'q*uE%)%5AaE?+8FrSiBLJff&ognVpg<3E> (Zaltd-[LVqsV?ghIW^sK,)<}{t~@' );
define( 'AUTH_SALT',        '$o[tpQmjNG=De,8Mm/380G[)xS5H3kkD*od#xDk-O8u4<eNc7x;wl4DEO(*ti0gr' );
define( 'SECURE_AUTH_SALT', 'Z+?-2 )jzlNPtnC)QNpP$fhW}-Qj~RSpAp^P*fEc#T%sZSdcmWk|G|=%l2=QV3`I' );
define( 'LOGGED_IN_SALT',   '4+SAcwnNZK{g+U^D,BhO(~g_VA,l>]r?aVD?;h%2Izo*t?X?LV1)hf6Ue,WN2;Gb' );
define( 'NONCE_SALT',       '!!>3OHP39,_gK&g.H7V==%:_dvJ;z@4inbO)Jf@D)zdnQ +D`:SCO(%9>l+LS  (' );

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
