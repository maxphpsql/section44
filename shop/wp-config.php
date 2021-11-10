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
define( 'DB_NAME', 'shopV01' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*9UM,ffBp-2RE+}Qxng@},KipCF9m!4p6//<5$c(.kxacW+^E@TsWjw!V:>c>m4+' );
define( 'SECURE_AUTH_KEY',  'fR3y1JpZsokl ~&&V,82j$K`6?zudwFuBCQp4-/vN9f &Sp`qLDj1E+EKzhpI^A^' );
define( 'LOGGED_IN_KEY',    'VK9&P?8PU.]EEDz%pg~6?~.Acb@Z.Ey~^+yo?nMKgT q>_t`hzx_BXqH1&]L@lYM' );
define( 'NONCE_KEY',        'a/VC{hJiR,_O?}V|r,!_26U`-d,q6$X-|OMx>rRu6B?DJto4i#c(>(?qS=lYoH&M' );
define( 'AUTH_SALT',        'VYW!kmC%5B@x;~j)^9:$t^g~B$I`fb zq3@=n(z4zKH9 78MS_>l?az{Xp{#2}1m' );
define( 'SECURE_AUTH_SALT', 'ZMGO/T%%%vK&As` 06%~vH7[^Uz44<pSBV1`h<q9%cgGQcBZ H6=1;5jCArkCjf6' );
define( 'LOGGED_IN_SALT',   'if%:~L_7Hs@kd/|Vo%mY3R[;&DVOojE[[m3~kNLK,$|^KH}:nn6uO*weOb i9XWy' );
define( 'NONCE_SALT',       '-fZerS+0!%-$ZtGKJQlAWy8bL_n5!P;T;B.92k+Wd5^ w[>|WBBM:~!7H<X/XZfZ' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'shop_';

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
