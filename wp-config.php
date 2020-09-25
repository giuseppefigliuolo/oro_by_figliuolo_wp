<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'orobyfigliuolo-wp' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u[zRjceR 74lC,[;1AgFfNT9MQGIazG!kzO^%iZ^M/wR35E<O`nLmD!_p}Cqxo=Q' );
define( 'SECURE_AUTH_KEY',  '`<p1E2Jh-U]h6P]]hsny-0NxB#LOjZz^A*-bx$^vD:mE!__Lfx~BY;9]2>]d%8XA' );
define( 'LOGGED_IN_KEY',    'eEVNzIvS#zy//$~ef7A<VPA6hl,#9Jl7X/@n%&<pjP{[1iR}wYiWgO:e]^8 t__E' );
define( 'NONCE_KEY',        '|Cq}~gBM^ue]u0O|rC _EH~meB-ERRE$.@uAap%#OSzs&@Cp>5s^:3vE^3=GYwmf' );
define( 'AUTH_SALT',        'lOy2T-<NE!)_~pY$.B#h7w)XfIq#xjT8gH,<#J6.F*X/nZSpW*<cjU6HKQU5c,2,' );
define( 'SECURE_AUTH_SALT', '^>F{*b )gz%LTi,ewsKlS4uTg~Ls$se9_1ke{TIx=6:zCl`~6TYs`!0Z*VJ fpd7' );
define( 'LOGGED_IN_SALT',   'S^%HB5A ,_}f@g0+nJ}1bw/;$xK[1R)ckL^}u! `o%I8@rwF2gxzc.q1$k]Vu5cs' );
define( 'NONCE_SALT',       '4X$hFNy~O7t-o.R<&0q]aF0ZTa=0$.Wj&TraL|_{$P^!9~p8=C+l/htG*;CM&F-*' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * define a constant to recognize a staging environment
 * remember to turn this to false in the real website
 */
define( 'OBF_IS_STAGING', true );

/**
 * define useful paths based on a staging or production environment
 */
define( 'OBF_URL', ( OBF_IS_STAGING ? 'http://localhost/orobyfigliuolo_wp/' : 'https://orobyfigliuolo.com/' ) );
define( 'OBF_INCLUDES', OBF_URL.'wp-content/themes/orobyfigliuolo/dist/' );


/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
