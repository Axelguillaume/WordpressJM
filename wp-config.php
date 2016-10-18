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
define('AUTH_KEY',         '%P2-t,qY+g<h]i&k[$a$d<t:rra g`XIe}y5zKaCE{/!/5,-/OCfkII*5k=yC!X^');
define('SECURE_AUTH_KEY',  'gWdQ_EVip2?*4@CbcH1t]AU/1[ J#27=|c1RdAJ~hpOyTsN?8cSt%q3lFI85|aS=');
define('LOGGED_IN_KEY',    'e2&#!,>P])2[OR-5[OcOn@^*Ld[o qPb`[Y(hZI6)MZC/~[[5$+^4J1Y,zqo0J&]');
define('NONCE_KEY',        'pXHzoxA.iJI}@59}!/&6wxSw4un]i2bXffz]Oo;S>wmY%A6P33~[A:G|xZ|:md;#');
define('AUTH_SALT',        'XQG+W~h;`t$8 ZB]T//*T7E^Tf%p3p:.7U3gPBqCb3kl`lN`+U^{j#JL9~N+GR}V');
define('SECURE_AUTH_SALT', '4zUyYX!%/aK*sf16ia& km^kgw=oiU-HMz=]s5jC<0; jx g1o/RCL(>^Jh6{Es>');
define('LOGGED_IN_SALT',   'R9pn{S1J6b,*Z$o,C/ML?+_/v|0[fmK?Rzr(,Qt#1Csh9k#Sx7jL<(09`@`7iBon');
define('NONCE_SALT',       'WCOMVpW{-v$1:p_Pxe84C:LN)ftug3}y)!M@>{^#|~6]_JxD)ymRIao~:@!VdL65');
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