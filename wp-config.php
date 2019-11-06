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
define( 'DB_NAME', 'boostcontore' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'boostcontore' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'dotazxc' );

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
define( 'AUTH_KEY',         'Ep [[(8odLcpj<!j^_xPZvMt?<{d$Pulg4TGwd#K1k8all(8novqfWGAabGQM{qH' );
define( 'SECURE_AUTH_KEY',  'T>:.rN<<)rd~g0ijhGWS~4PVS(@7}qKkIu59$P1t5];xFEDs_+p )xqHB~,g=MTS' );
define( 'LOGGED_IN_KEY',    'ByZcwk6:)(gM2kAe*ZdH)eSSiZua!o FM]e1SYC3(Y]G,r]^;Vs-gu<7A~G0-WW@' );
define( 'NONCE_KEY',        'L?R!O}PLrG523cTg.Ck5(rq$ciX!`7<=#9|/T{).&UG=(I+:{be>~22?przG6{B|' );
define( 'AUTH_SALT',        '`,Y][EHy4<]:XQ9*;~GonF):JRE30H0%bBUbk&tRvJGgg]PXZ7p*4t+RP6b@P|c$' );
define( 'SECURE_AUTH_SALT', 'W+>dd7ggy@~L9JWAY6 @,,>7tmxxO+&uJe~:2=wR,aciNbcw+F&j$a*OyLfZKJ3.' );
define( 'LOGGED_IN_SALT',   'aDk%?.~qB,B^64-5WH,f6=42t!tF%RGQFaB Pk=VM!Omp&F^t;Ybis!oSy#@A~]:' );
define( 'NONCE_SALT',       'b~BMVBy~GY0;eWt5^T`YtQV@=AEcPRYPDcM`0oQsOg)v:@{.)[dOh-;8F_K-A`VR' );

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
