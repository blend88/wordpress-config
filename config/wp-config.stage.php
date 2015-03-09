<?php

/** Staging Environment Settings */

/** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// Used to override the wp_options and 
// dynamically set the site for this environment
// http://codex.wordpress.org/Editing_wp-config.php
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME']);
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

// Used to determine environment from easily accessible constant
define('WP_ENVIRONMENT', 'stage');

// Prevent search engines from displaying any pages from this site
header("X-Robots-Tag: noindex, nofollow", true); 