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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id8789332_wp_7f8ab69271e2c5b3b5ab7e470497f755' );

/** MySQL database username */
define( 'DB_USER', 'id8789332_wp_7f8ab69271e2c5b3b5ab7e470497f755' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a7bdd323abf1998bbdbee196c755e3f04462517d' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '!H26mEa |0x.*,J+cD+J}VB%H`L-lsn&[{>fO&sYiPg0at{i^,)yk<FEV-hX%;uJ' );
define( 'SECURE_AUTH_KEY',   'K0IKL%=>sOX<=rYR80JsfbE^VAI7$xL@6H7jd$Dyd!Yk27&wq#1 ezZ39HSI`q2e' );
define( 'LOGGED_IN_KEY',     'J1ja#gh)LKynh#3cS<|dC1-(vs~7(f#IZCBYn+]!wELqbBpCD,q|9[`En l(eQKP' );
define( 'NONCE_KEY',         '72jK$W3_9:*tV#8ppT!#no9^lsuqj[3Sj0io;,*PsNBQV1,!{ }oV}HQ]7$9F!tr' );
define( 'AUTH_SALT',         '~P62@9yh;EysR*0]>p`A[Am:m7`-=J#w1c6/D5)%t0{ I>u3%l 7)T^-[[FW]sA_' );
define( 'SECURE_AUTH_SALT',  'wQ-NQnL9_yi4BV UOP-0qOQ(gP]05=#&d?(_In*G@oGb |h/~T+}]{O_d5p()e`K' );
define( 'LOGGED_IN_SALT',    '*XO8Ae>&`QM:QP0p!|aVZ(V]2)nE$xj9A>]5V#iF#0m02e=K%sshAVr;ov!9.K%T' );
define( 'NONCE_SALT',        'd2/:sWI,L%jT0pT({;rl2J)1*lv!5S4Ptjb;#U{40^(.;pNDo>wVDqc{yXEX6|nZ' );
define( 'WP_CACHE_KEY_SALT', '+D!Hzhn<Ugz(BeD5&E3JknUrJ@Fb)xBdNi`O^$MfMDVueuHs+d=`#MjMr8-zq_Vv' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
