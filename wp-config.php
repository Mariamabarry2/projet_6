<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet_6_planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+H|s5oSP7h#__yf1QTKGxrkC7&MRQ^o [X]%TKv5rtFMh(.`)zp0DznnQvIAr?{o' );
define( 'SECURE_AUTH_KEY',  'T8W6F)8d)Lf<w~r_k$FoWWL9D7A+axa<S5Y^0KM1-uVTdcmFacHnp5yJz,Qd[Ox>' );
define( 'LOGGED_IN_KEY',    'XP&-8&iXd2;[XnUww$AcT~_5m/DF,}-d;2yuxG4#J(!Kx$#Ud35}<)Sm]:xiJ5v+' );
define( 'NONCE_KEY',        'U^%A|puZ/{u%uTsaN1)&[=CdMx}@^4}{ysc@:zqj3EKwJW)6^vy-)h828 2iy=>:' );
define( 'AUTH_SALT',        'f,7zm~mRv`-$)<A,u:mPh{1DV^QqdDt!RG[cZ Nzz>40b)t<fd7Lkg,tqADbYqCw' );
define( 'SECURE_AUTH_SALT', 'lj>vkV9*]F<cYb?M7Oi:zK5<N{K8)SSf~b#hvbkr&XLj_C!v(<st5*bV6,!jV1(`' );
define( 'LOGGED_IN_SALT',   'dOh8Jki7DHtuR:fHT:z^X:]M.,pWo>^Ia-59Et(4LG1<! hi=Lmp!A4y#MTyh-!U' );
define( 'NONCE_SALT',       'kQ&]-n)$;H2{v!{C/NblL5i8IfOOQ.<`7k<{/?jqRSjBG$hGLT)KQf<:?+py<1))' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
