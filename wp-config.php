<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '+;bWcnnT`6rc?d_,^uMMSx|Oc?x%8dG|$QJl(F@xATcpCjp/pO|mJzui:WGH&]=l' );
define( 'SECURE_AUTH_KEY',  '-HAUMfV6r>6Ox_%io<KCxzh;P_5kOcHiPgx}@,+x9QEg8&yR:,sOUzu`Q8iNC3MK' );
define( 'LOGGED_IN_KEY',    'Q*YYO7k?jHj7q%bRM9^kmzu4d:0D+TEk*[4O{wsh(LdIrwX8=le#V-yA#3nNG_y ' );
define( 'NONCE_KEY',        's3DWG&n2F#`$uh/fI6R;yDi$P?kea]Uj.C,<Fr#WaaUVMO8#`LL/ZAn;T1^u.b4p' );
define( 'AUTH_SALT',        'yPd3)h_Y,1TFgo;I1^L8$l+P``7g60@>4GxtYlkxjQBjKo:PIq(*<FJ):nF?s.F*' );
define( 'SECURE_AUTH_SALT', '$zR#MT$Sx=,oV[JrC9[8tf+2Iz0ymZ~e@3G[nc>:*hf(`k&~Pa~bi*{fF<;<Slqq' );
define( 'LOGGED_IN_SALT',   'sa5r<1~~/XIoo1JyL0yi9GwZ`;({UnCj7 ^|uj}+W3c>Fr&_N_jb>(D9NVtJn=;j' );
define( 'NONCE_SALT',       'cIM^VQw^Y8JkWE!p.H,I2BBlI,d~(fz9QOL@_RG:zoN3z-V9AF@yoL{rh^B}{X/f' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
