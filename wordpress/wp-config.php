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
define( 'DB_NAME', 'exowordpress' );

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
define( 'AUTH_KEY',         '$!eKl6;5re!b3B&0|SzDDV_EdIS1b&-G~<*m}-9,O6>hj=9Gn_Tuo+P/!9=L8ZRq' );
define( 'SECURE_AUTH_KEY',  'CP_n3/3v5>6G%Rtp:tr5BlnI?~:8#|iO%Im6tfb]@lQY,iQo<{ZWTRO,l_7LAe!?' );
define( 'LOGGED_IN_KEY',    'rQG1e/,L_m2{Z7*cgc*t}q9St4OVb/$EI5r#4YG:)d=nx1&N!ya{Gg`%=No(bd-#' );
define( 'NONCE_KEY',        'O7J!ooG!7xQaY:}34e=$M9{@c}hKf]f]@`i]nHh;B)JbF49Az^?A9(|;Ca?jm/#;' );
define( 'AUTH_SALT',        '?P[%M:1H&C2.Jh]iG$p[OE[n@avZwQDENjz09tL(5/,=4?:X4bKr120V~pNxQ&`w' );
define( 'SECURE_AUTH_SALT', 'tpL+Y04pNId<Lzf[_ekh67KiBXzF-$$(C[TJ,o`:VDDBv55{jYg[0.6KTAR~3CN[' );
define( 'LOGGED_IN_SALT',   'ha]T[6V/~x sg6HNb&QMZ4db+%k]KcmnNyXfrOmZmV@HEZ%%gMP5XdfAIAx$B<Tg' );
define( 'NONCE_SALT',       '?#yLNrE3DHuI6 VG[Mg=F=#.qj-m|PfCN?O,%EXZ5J6OmS-89^GM-1GYJ=`3Drf#' );
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
