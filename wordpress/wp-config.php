<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'omt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XHyz`,&$3C g]Y42J,lt2X;*G9u-4+-UK#r)(V bSmpyR7cAcwi?3&uj~bk_2j{_' );
define( 'SECURE_AUTH_KEY',  'Mxf[GO>9A}u=c=#hJ(wC-z;t/#m7f-tx`&_c1B`4,M6IhnYGd;NK5`gB;:;iF4r:' );
define( 'LOGGED_IN_KEY',    'zIU,nx/fm_hU59fa4sqJt>m|-$vSR%(4~Ci&<2>KYYD.-n=u &5/w7!wn%.c^EO0' );
define( 'NONCE_KEY',        'HCihJhOan+2(9.TJ#ur8rTco)8i32]E:1vDdHb*l,Aj-LteFmr85&&H}rGB0]/<&' );
define( 'AUTH_SALT',        ',Q{(N4#h>}d[Vfe*&g`nYL3vke^(Z2=h`Zjcf_K+fY{drI`Y6=sx$r~:[Wkb9YyZ' );
define( 'SECURE_AUTH_SALT', 'h}hsoWR8^y#2[i Bx;<t@?MiSjDkPJzlo.dacMXy3O hM&j]nyg Rv:R4^:mM3c[' );
define( 'LOGGED_IN_SALT',   'I;/`DBl~f8waQV}&!Set/cD]|&n}`a)Ux Xx?mMsl,}-Aj5CT-PFZ=]N^q,>;)_>' );
define( 'NONCE_SALT',       'ol>w.bI[}^l906yLKle ps[wIa9ielQ_Z,PpC#yDF$C*oEPoJ2L<7)SY1#qK$ch7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
