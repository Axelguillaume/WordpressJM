<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'jacqueline-&-michelle');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9dk39rY&,3,kU< hli#NVh `M_zQhPJ$McIH]I7]y_U.XL_,U!Dp`P*_UeUa6LnQ');
define('SECURE_AUTH_KEY',  'o>XeM>T|qLTW+VL Q8r<G/X]^;I4UFu&q%rXkek_xL{{Eo}($Q]_rgn?/uZ!^[aH');
define('LOGGED_IN_KEY',    'm;d`wC^KlP0aRDP?fx5pMu6NB`o&PP[+1|Zsp.XSV 2>$:q*)g;mo|)6Pd KCgm]');
define('NONCE_KEY',        '&S#B*x`G=Wi/o}Q+MjU>R,! )j3(}cC)#Q:Q)V.^?9=M?{I^47&jz*d3l)K/Po&1');
define('AUTH_SALT',        'W`-fYY<Kcap{ 32np3Ko/>;[0b&a!bO2K/SGU[9mm_o kqH#Dc}(|Ew$Tz_8w#<a');
define('SECURE_AUTH_SALT', '~-i|U:w- sX%M_|)48VvI9=rBw9H<1 2yKH8a7iJDvDr4iU8lw4g=nZhF|S@JFpt');
define('LOGGED_IN_SALT',   'a=8R3 1lPl^Kh_|r*?w}Pr9U3Q]FdfDN2&g}zl?-,Mr1IFT{7o8tk9K_-Z!/7{GA');
define('NONCE_SALT',       '7D_,p9kYFC>;n+U%{gt(J,P}YR$Y6]kt+$Ow,husV]Z(itKmfi+Wj*q_x-0LdT]6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');