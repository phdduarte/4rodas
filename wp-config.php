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
define('DB_PASSWORD', 'A123456');

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
define('AUTH_KEY',         '~ICZ}96Fd{K]Soe#w=e<I:SE|cV^?:;V2%(;/F6sQ6u1brFDxt#XW,[w,{$dfTXH');
define('SECURE_AUTH_KEY',  'b)$L(B3I#KS*+ yu{tT^P9cHJs%LKC}S03tp%Ny<7OV<[t&AFLK;!uiW]Hl_nHx9');
define('LOGGED_IN_KEY',    '|{>Q8ikaa<>b->O|:FOXQK11`+bh4|jDRrX46{=72jOqzCq{zc6D/h6xH^[Ygt1q');
define('NONCE_KEY',        ' aIffwj9E/AEk;.&_gyI~f 0|3);9mx:Vq0c^T:)^1(A~^$hmJ^A?*vb}EE K:;-');
define('AUTH_SALT',        'F=nTGg69Ua1i|a^jC5Khf*fdUi*ULYjf:DZ)$uVg_FwdDd~X.o;St~&UX`--0:aj');
define('SECURE_AUTH_SALT', 'I@^K5rpY9u^rOx$!/k(J+#`!kB6o)uZ|{mD*OCtux&KP[rEBB*=^1VCT1*.xUrP`');
define('LOGGED_IN_SALT',   'D`R-s{m>]K]gLLO`iG!BF{8FX=]^&f~[}CrFqsnAU;@8rmm=5,*^(2~m~-MwC])L');
define('NONCE_SALT',       '~^0!zu5f&v!(lV!f3;C-fpp]T-=0z~&?=JluhA7 ^A$ro&P`mA=j$EAR73ew`R7,');

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
