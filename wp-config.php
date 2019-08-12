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
define( 'DB_NAME', 'natjus' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '0.0.0.0' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '#k?HQ)7a|@VZ^6$jCm>Wq{KpC}N>}$Sz=/[T`2CaCJ*0WNSil^kfVMNJmYa+D.NC' );
define( 'SECURE_AUTH_KEY',  '!i03S&k7#fyxd(a))4:S.sByD@J>qpyl#5h==*iZ4-t?.*8GSnk9!*m!beWSIPtD' );
define( 'LOGGED_IN_KEY',    ':kv8}p#GAwdmZ?t){UU!8,;@R]f,*m7#8g`1R/Pm:A:UH@/JYAOrBSNtZh#8^z^;' );
define( 'NONCE_KEY',        '=z?b^bnpd{:^9*w=FcJGrV~oJo~)H}0=Ld?ymrq/G,ZC)S?|U37@mjm zsS/e+Uf' );
define( 'AUTH_SALT',        '(9`}^hBHs.Rrgj6%c]Qb;jpx;;xETL#E~09%wY4E#H(;cD_hJePVQcvGjs @n>H%' );
define( 'SECURE_AUTH_SALT', ')V1B2m3I>*z,o O6/tY35R3YtLW|}5wt_m-U~1B<NqE*vn`+l`N;3B6Necd_l87K' );
define( 'LOGGED_IN_SALT',   '0AnLJ&Ga/2C0a@N{o%SP=&}Z>iq!{AL~doiO[yxmGs.>`,@ef&=P|hs>z.AX8RpY' );
define( 'NONCE_SALT',       '!Yf}l;rn/eKMSFX)0_C7=+?2-YYfp]}ovcBYti$7B#(o-N_kx:^LeVbqj2pi)b`K' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
