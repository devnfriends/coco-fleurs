<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'coco-fleurs' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'AtVzrJ2pLwOgY2X7UZIQ oPa3hD@N!s*S_v_/XSqt0V>LwSw=f2lO{U$05eA}{@J' );
define( 'SECURE_AUTH_KEY',  'awC^kEd*e)|*c-j!VRGT*6Fq]J#.`65G4{{XLUa}DKCn*sXm3`xZ4ZZ#XK%Uo.hO' );
define( 'LOGGED_IN_KEY',    '$^&MPKw7}=z](K2megNy06~q)]m9y:(| ~MB=,=<%}:v,:wsIoyt|8*IfJO7k6mT' );
define( 'NONCE_KEY',        'W]fT e`w<9fugq>qdyV|vNRk1~9>&!eD&!Oo*RJ%SCG8{muT  |F,A!@fj0:SimX' );
define( 'AUTH_SALT',        'e5_2[FUGSs=SU,),kOn#A/;F`l`~jOCFPKXTTmv?4dW& `?[S[T93h4y9H;|@0Wd' );
define( 'SECURE_AUTH_SALT', 'oSwjH|-#l4Pmy+?1.x+rp,}Ol2EKR4(}h0PW%M{2Q6[:,6S4!K~$;@4eIh0Q=av5' );
define( 'LOGGED_IN_SALT',   'k>M/gm7K@TPA<>ZSoSC}.fGGRWDM22=<pE?VoB2CYUS~!Y>lyH8t9E6nglYDtw_i' );
define( 'NONCE_SALT',       'n*Koc@Nl-ff)`7t4`;MGPA`{w{IL4A.m 8OMG=K4!*kfu&Z*_?PW=}D_BX0JTq2V' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
