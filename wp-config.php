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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpaquarel' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C:b_-:U]<mP:]?eFx?@+K% opw xIB2(b>cKEf~aRs_#1zd(_MMP`+6iwhISBSJ$' );
define( 'SECURE_AUTH_KEY',  '@HF4@ltdt6v`uh3D%Id#D9BwQ]w?9oIYVlh%a*RF]U>DP9=uz]X !6_ug<{3+2$8' );
define( 'LOGGED_IN_KEY',    ' j>,-P,}Zx+$8<xtD<zg3J%]~16WMT|sByl9T^E#2w75u!0K9Z6emL6H^FwoHcdR' );
define( 'NONCE_KEY',        'hZ>8Esfx`Paa27u;o{tR*Z/vE1`w-n1yl=&Png( DP+j;j+{I-,.sgUrXBcn7<u6' );
define( 'AUTH_SALT',        'BwCC],u3fMkpzv7svJDu/X:nfT-x,W2x3X8TC-F;cJUDMJY+r=0vmA#&?DZ=z5vw' );
define( 'SECURE_AUTH_SALT', '?[Vjgz6MVm,lEll9MiRP%Y./Iy#LT/KW:}3Y^~2L N%Zo*;~CIw}3Mg[Su}ZXavq' );
define( 'LOGGED_IN_SALT',   '4zmiV|-|=p%V&]VHg~ATIuU/y-&c}k>OPshP2TstqAOI_sbl~h_*]6rzS4&]#Z+e' );
define( 'NONCE_SALT',       'Wa~26Ogy6b=,>oQg2r;y{Ff+oVktPPZ{-x9 F}](LO6a)8i^UQaG?f[ZV*eW42~U' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
