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
define('DB_NAME', 'softvel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'O_:/[aJlPX/+MK_R;%dRG8w vEZ_EhZvXyGWWs|c#0Nx.<H%P/O>RkoQz|+X1kjo');
define('SECURE_AUTH_KEY',  ')I4 cV($)($6u#7jCww9FzmZb>%toGoRWEmuq5^TZkJ/?vuwYp^0ChY]PF<RO;:a');
define('LOGGED_IN_KEY',    'Ks%!$#vw+ jj$P[:&f9Q<#p].?}b2Eq}N3PbCYkk!d*ppL8xSLDee&&1V(m53L&`');
define('NONCE_KEY',        '0BO2$g}B.)^L6La+QB-g#5ozMd`H1Jm`l/06$xXo:y,RTNzlX#i]Y< {O{ +DF&,');
define('AUTH_SALT',        'lFYGg4zBBzJT.UP)jf[=.pfGB|o}1X,STbmi05^z<bHe]e.hNp!,nqn!|OuBHqO/');
define('SECURE_AUTH_SALT', 'kYU@n0?+Lx+X_IO$E]!XC472(79I<{C#alT3b3s>CbU9K21@M9lnSc95ZM]V4UxW');
define('LOGGED_IN_SALT',   'echs/:KTP24] o}7ke8.6Y34Y(5>}Ti3J$~UVlX#VyZMpZbRgJ]O{.TTwSdeVHwf');
define('NONCE_SALT',       'JU6PWIPi~{8yP?cv!g7d0/00Dxb*u@djGP<Snc};8|nx>j8njv=~0/!%zUJ,N.~v');

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
