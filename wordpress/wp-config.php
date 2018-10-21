<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 's_p_f');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1vczw;r`1G|8)F9XXmcAhH8I0bB&h3n$}p2X>7]D|2-M-=C<|B6_ Sl:XPNGzT5A');
define('SECURE_AUTH_KEY', '^qAQ$vrgk#/ZL>/?[OcYB27VFj2V9x>2BI?G. O*)KX/gT/[x$Z)%rbc@^A~&4w,');
define('LOGGED_IN_KEY', 'l)2KFDCl8&^q<l0aeQL:CpEuiknsy,8_(XFEB1Y41y?pr?2z{U@.pP1EVbT& ^XY');
define('NONCE_KEY', 't+Hee#}VeMg,WrwB[, tp0,X^bzSw_}5lW_5jDt6OD#C<qp2C~G!kf--r[cQI1-;');
define('AUTH_SALT', 'l&5ELcQ4[#<m>9ma4h#M<M;%|J.{m= 1Od&:w9v]p.2/V~%mF8]#=satnSG$pB/T');
define('SECURE_AUTH_SALT', ';y1Nz39Y>BOFvx*25.;zTnK|KDcqba<tk.C9gx:bG00!3nd#u O_iFRa!T$;t/(i');
define('LOGGED_IN_SALT', '(t|`a`X;EcMbw5`@V~D5P$@39azGg(@I5y?$7EK9|DRO^T;cRlE V%0zz%XT$h!>');
define('NONCE_SALT', '.g%k?q$HvP(L;|A_~jqFf67.ku di=5.}#hsl|trm:SzT843LnhZ4`F>A}V2)~__');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

