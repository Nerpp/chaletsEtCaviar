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
define( 'DB_NAME', 'chaletsetcaviar' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r>u.PQzwmG=1JcxFu+Z)KED:O%~u>f&e&].AHOk^S%3h9%hi1Y&<Mly=+A6&.&n&' );
define( 'SECURE_AUTH_KEY',  ')[I$>=5(/8kpT pu[V: zR%>yx`IprF$[FFAp%?nHp!X)wm2Em8l:tLw<WJdR9;{' );
define( 'LOGGED_IN_KEY',    ';F}@>~X4!eFEIg<.-l:-K$9lT[fs9p#]GkTM#,H~.46.d2wLp25+y$2vnYOu82<+' );
define( 'NONCE_KEY',        'z)Ga>[L5u2`vED^b%hm.y6++%@=3qS1UP4jlJy5P[Ng7L)NR>i)3^.qy1V:m3y0R' );
define( 'AUTH_SALT',        'ssCBPK~-N7Jyd47|GAf&[7M.3B7<uw#&{wg0:]UN 4#G=V,Wc$QKo3N+:GBg#{gU' );
define( 'SECURE_AUTH_SALT', '|#t;aeH,i T(?8~$38+dQs}dr?06[PRd%t8P#]sv=|_JOewD|tJW>Rz3Iq3P(R^$' );
define( 'LOGGED_IN_SALT',   '_.tov_iH;E;K_xV%y)y=E)%SUYX4)1L?S7y]R8?mS0vYxivT|G~0)=q|G]Q[_U)G' );
define( 'NONCE_SALT',       'Q+.owk[@1;YWXgWT&~UYU8e&Yv|$#kb^6zL[VD~+<V`#y3$E{(Ip!npU+5Nfnm)j' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Qs784_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
