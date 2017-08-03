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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', '4rodas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '`bE,)n;:0NWSKkoBEW HY932a[^+]Hz4lH~Tj<.gVmr#_e)l42&RnNWWvP t6`[h');
define('SECURE_AUTH_KEY',  '`gk-hYX0.Bjr^#j!iY{pixOv>ti`X.Z u1r.oVZd-O[.^]-cF|#Ll;X!)]1JT|Q(');
define('LOGGED_IN_KEY',    '=3U p;LiyG49>gSg,z#7K#ti7v$#/.a~7K.YL|y4k^va#pFg#Ze*jENIj~yJ(uO>');
define('NONCE_KEY',        '?:=> *?rJi-G^:zs-0,+h{&swZ7Hfp@Xe@-dKb7*lP+}MP4 h=x]h3]Yu5UwHW~9');
define('AUTH_SALT',        'wY]C8G~p:I3C.e~^hZM`tzXO5Y{NeDU?7_kVgu<jqp1K7I^,/kD&MD@o+6A[1~Nm');
define('SECURE_AUTH_SALT', 'srDQ4z>z_1#enz36+M3ar*5lJ7~-c0vR4%$qlUF;p| <NtHlurdgGwS=F>){_]h7');
define('LOGGED_IN_SALT',   'xtxc5 YY)dQ$>0 uspMUyJWt4]{2l8V>jicM)7@>^/S4z#]wd(o;0Guj*0P_=M<.');
define('NONCE_SALT',       'L&V&}bA%8sYk>3-mf<O}`fsd ^|Kb7Ry93sffwJYMU}7tt5xE-Dl$BM}I-QU=;I)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
