<?php
/**
 * Global settings
 */
require_once 'global.defines.php';

/**
 * Session settings
 */
require_once 'global.session.php';

/**
 * Datamap settings
 */
require_once 'global.datamap.php';

/**
 * Message settings
 */
require_once 'global.message.php';

/**
 * Database settings
 */
require_once 'database.mysql.php';

/**
 * App definitions
 */
define('__APP_NAME', 'myServer');
define('__APP_VERSION', '1.0');

/**
 * URL relative constants
 */
define('__HOST_SERVER', 'http://192.168.9.55:8001');

/**
 * MVC url mapping ini file
 */
define('__MAP_INI_FILE', realpath(__ETC . '/app.mapping.ini'));

/**
 * Logic libraries
 */
define('__LIB_PATH_CLI', realpath(__LIB_DIR . '/Demos/Cli'));
define('__LIB_PATH_SERVER', realpath(__LIB_DIR . '/Demos/App/Server'));

/**
 * Data dir settings
 */
define('__DAT_LOG_DIR', realpath(__DAT_DIR . '/log'));
define('__DAT_CACHE_DIR', realpath(__DAT_DIR . '/cache'));
