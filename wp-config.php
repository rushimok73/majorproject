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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y0p/tz|l}~V-Dy{XiQX8+v@jK^JIA`K9X}df1f]~acL9zWnpdIQ214i*T_,u|b~0' );
define( 'SECURE_AUTH_KEY',  'K+{p1p80-LmEWh?dRG&%YSOh3J$0].SYlkY~:+JmL%`#RC%seZZpZh_z]$N?{#9<' );
define( 'LOGGED_IN_KEY',    '6)IB@$};4Rp{!5ZXh#>AX$V,Id 5@%IKK[s{(C!wHB@.s]%nS*+|w#xiFWXQhL{V' );
define( 'NONCE_KEY',        '@V4I?*|*8I$#L;)gU0t+@}4Eo`X[}c1gBjKfpYbGZ{zzKh:)~Zuh<-Qt$N3BKT5-' );
define( 'AUTH_SALT',        'GjDdW.cz$p/.Z4QCOB[!4#$|uL9Y3C@(Qk68WhizTv*A7yO2eDv_R1L(SLo`<Z&<' );
define( 'SECURE_AUTH_SALT', 'H5 +=Xu[s*Lyx[9F_;y^Y:#/<TOzV<khG{S M( [x@O J5Gi(=#.t$Tx(OTil*FP' );
define( 'LOGGED_IN_SALT',   ' /SJO`^zXU,^wN:Jyq</9,#en&-MFGwH0B.Z%Y!c?kduAF$Pm89P,E]jtwngWrEQ' );
define( 'NONCE_SALT',       'VthH-V#dX9j2*@i;cQXe=NMsa>8gGp[YL<UU1(&1 poOG+:vW5o~Y nB7 0yV19`' );

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
