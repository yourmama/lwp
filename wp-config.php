<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'architect');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#z3I4*p$$QoVggtDVWc4Ie&E<cV_JtDCx[~baIR)gk]i1T<-c^HBDOk69hi$Wq(c');
define('SECURE_AUTH_KEY',  '`|J*-D>aWg}d!j7z>OYt$YvH&zL^1E<F]XgIkpA#FpJ)Ke`zt]pc*K8Z|Pg~Ni!S');
define('LOGGED_IN_KEY',    ':g&jw*w37tk%bYF5a90+[%PFaFuq,kA:Cu12W0yQog<-9QyQO*tJg_CgK2*Uaz@L');
define('NONCE_KEY',        '`6FKMNw5EOtT[.&p^ucuihkQ7t=uN7akN,Ip{4+.dWf.dV1}k-,(<Lpj]p!{~pwt');
define('AUTH_SALT',        'RltELYb|M>#xT_S}N>SPX)N%DB>N>:~WmiZv}1W{q:leVUx|{_0*[_&30[:EN3q|');
define('SECURE_AUTH_SALT', 'W}t<Ayw5:|3=pfEm b4=${c8;01pKo##(4^rPSB>re$d>xc3N!%@sVGx$VeP|uY:');
define('LOGGED_IN_SALT',   '9XBbfH-XhO*N+/y;jeU>SktC|0@<7FMCT}F;0w)X8}VId ~odv2i;:=*>kxMrtXf');
define('NONCE_SALT',       'UkGrw:%h$ZT^J~H(t_6L>s},XR,:@!M1mp?RHglr9R?6. f~A3L_H nxXPOZVIDa');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';
/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
