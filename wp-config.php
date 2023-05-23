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
define('DB_NAME', 'tiradaextraDB');

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
define('AUTH_KEY', 'BR-*B#:sZYs[XxI^0e<Bi}A6.Pnsd<&sss9kF8.dG_N!k5#4A &QVx^{nYE/[xld');
define('SECURE_AUTH_KEY', ']U}xY?9-z5%;]3e]*BPm[_r+-D@!yvBKYKScY/d6IBlT]Z#_3)cvy6d(|KXTa J!');
define('LOGGED_IN_KEY', 'k#H(58no3Z)p[{sNCr4*)G4G:B6;U@0Mns72BHh4kp>DsBN5v).yFM6Vim+;MeTw');
define('NONCE_KEY', 'fN*n7BC=!Me2&{V#}*Ad9Un8g3kL&5h%Lk3$^K%^Cm/V_J<D`LVb2i$u>S}K4-5v');
define('AUTH_SALT', 'J&}0QX63Uk?Bb,1(k&Q[sU:kgA;2u3W-=,EE~!VOSpih9[?H56(5h`l83Dnq<uVd');
define('SECURE_AUTH_SALT', '!Dn9G7%-#]vXl<NKuyU6),)R0<0tB{DkZ_]]d3acfb/Bi!8{4M /KBr6Hx,]) =.');
define('LOGGED_IN_SALT', 'P6r:ni}]Wog?Ymay[r?_fK`1N5>EXkg(bJI;DIKYJ%8z]qJK(j>Iew)?>kZAqrN^');
define('NONCE_SALT', '|[pxzmmOvC<+4H1Hevh-~~T`|@z{B^G4SuHy?iE+1U46G?@`h<i&D7OS=3u .fb)');

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

