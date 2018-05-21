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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'franquias-novo');

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
define('AUTH_KEY',         'e!y{4OK{h.(jdAD@faQl6ru A,^T(q!T9Yk^`_x9Sm Tp~;[DgI)qidgZze_AI7I');
define('SECURE_AUTH_KEY',  'YelY^rT9J^XD1.{$d50bAC_j53d)R^5+d9gC6T38D,nT,#AU-z@BM=GR?0J=M=DZ');
define('LOGGED_IN_KEY',    'c):+mu^O!Wu&~MzQI[&g/jN9Hx@_A3WT$Y@[`Whoj-9[8?C)fm5 nB7@(2(U0BG*');
define('NONCE_KEY',        'z]t: mTy<kV%6$^@Xf+O/~4z!_*0^%Y*>7+j*`8{k@nxy5e}9L~sz5Utqam_ExZa');
define('AUTH_SALT',        'lGrtSJ+6&:xQ^G%`D/b|H~;p/~M0Kll/,`&aHZ yT:@{H1F6Tm2Cjfl3`*0:9h_Y');
define('SECURE_AUTH_SALT', 'i@L #^x0t.&p#etA/w/3HbUGrR=(v~psMk3QHte3|6qa+$GVW~nLpGvTNB&>%2Mz');
define('LOGGED_IN_SALT',   ']/X0Cy,r1_42g+< eM)n!H!m>9@hCi;pMR;e,`6rE]60@m/@Y!b7|YC6,x{ch[eW');
define('NONCE_SALT',       '=_O6G|:hO*)4&ICCrQR&=]Wd+B~Hh%cR0aSk+<H.fSX~iZJp1kAoGdTx|EPrjV{u');

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
