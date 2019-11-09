<?php

// {{ ansible_managed }}

define('DB_TYPE', "pgsql");
define('DB_HOST', "127.0.0.1");
define('DB_USER', "{{ ttrss_db_user }}");
define('DB_PASS', "{{ ttrss_db_password }}");
define('DB_NAME', "ttrss");
define('DB_PORT', '');
define('MYSQL_CHARSET', 'UTF8');

define('SELF_URL_PATH', 'http://{{ ttrss_domain }}/');
define('SINGLE_USER_MODE', true);
define('SIMPLE_UPDATE_MODE', false);
define('PHP_EXECUTABLE', '/usr/bin/php');
define('LOCK_DIRECTORY', 'lock');
define('CACHE_DIR', 'cache');
define('ICONS_DIR', "feed-icons");
define('ICONS_URL', "feed-icons");
define('AUTH_AUTO_CREATE', true);
define('AUTH_AUTO_LOGIN', true);
define('FORCE_ARTICLE_PURGE', 0);
define('SPHINX_SERVER', 'localhost:9312');
define('SPHINX_INDEX', 'ttrss, delta');
define('ENABLE_REGISTRATION', false);
define('REG_NOTIFY_ADDRESS', 'user@{{ ttrss_url }}');
define('REG_MAX_USERS', 10);
define('SESSION_COOKIE_LIFETIME', 86400);
define('SMTP_FROM_NAME', 'Tiny Tiny RSS');
define('SMTP_FROM_ADDRESS', 'noreply@{{ ttrss_url }}');
define('DIGEST_SUBJECT', '[tt-rss] New headlines for last 24 hours');
define('CHECK_FOR_UPDATES', true);
define('ENABLE_GZIP_OUTPUT', false);
define('PLUGINS', 'auth_internal, note');
define('LOG_DESTINATION', 'sql');
define('CONFIG_VERSION', 26);
