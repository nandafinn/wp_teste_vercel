<?php
define( 'WP_CACHE', true );
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'tecnologia_teste' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WgZ7Of{r)?kjkdHFb)2v4Nf$pOUesE ,oNmO&7ZeT7HYd7]G=6k{2YObP6gm3)Bu' );
define( 'SECURE_AUTH_KEY',  'wR$oaU_.{`p{nL8Y,@Kkj?MsS|V+zO4q(9VM?7RnTKJHchE2g]S5`J#ct:L0I<Vf' );
define( 'LOGGED_IN_KEY',    '&=G*GMbyX}71@v6GtnO{Cj%n4(c=8PJINgw-.&3zO|TZ-ODVKL,^g}eJb@B5U&/I' );
define( 'NONCE_KEY',        '{<}a4ViZp9?psI>kMpwXS9#)/UQ] ahy#z|mezxeW@m_@Up^sK)<G03HGS*WofpF' );
define( 'AUTH_SALT',        '.QEv,X~y/N} ,]ZU#oEkqX<wv7] #+63KshijgS)` +daQNk]>yQF.7q2_h+2pGS' );
define( 'SECURE_AUTH_SALT', ':ra}J%f[3j/o0Ap]E@_F&]5vv`iK4*=]3nZ8OU81IU%rc[G/TE#EmX,YsLX=lkLJ' );
define( 'LOGGED_IN_SALT',   ';w}9C[J]q9qH>SBEHrwt>WSj[^TfdpJN&cRn*pl;@|4YvghDFmOP`CCW+zDPpLG?' );
define( 'NONCE_SALT',       'FK-MFGUpXDfYNlZ/v_U+HwB,r#A3(@OLN,Hp<9%.IPR<+N,}#C|G[;_fW3R%/B+*' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
