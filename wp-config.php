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
define( 'DB_NAME', 'angel' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '1234' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'LTd&&Cg-w3L>6jZ12CF%?vRRa AB*OuaV?n8*<<Oebs5^d0P8v8l6? b|=>&m<]j' );
define( 'SECURE_AUTH_KEY',  'b!&=Kjg|)|)UsB]qZsDGJ7&uBGCC{D]hD2kW6vIZ*(0B;|ieZRbj%!hg}6CQD5qk' );
define( 'LOGGED_IN_KEY',    '|NP%x/NMKeuYeB#I!@A$6j5Ea-0D&-Brm(HqNKhtTc^~d{3QiFIr()c%Hy*j1%)^' );
define( 'NONCE_KEY',        'XGh8kZG#9ZxZ_LATrmrES5eyqb+;W,1+SY>|OHcT7nwP!_gJ6;beAI)o!p,Kqbuy' );
define( 'AUTH_SALT',        '|#u^U<`?T>A`j{O<+7Z/HLYJj|6%t#p1~WTe}:#-ree#Xc@cx>ZVQY}(liblif#h' );
define( 'SECURE_AUTH_SALT', 'GLw3W1E|8jxq=.9[b+iYZ-Si{pr22w}AR$5=C>te=iF}Ul*(gY,x |Jz6B+8|uWp' );
define( 'LOGGED_IN_SALT',   'Zmy*:EhTT|M#>CHm:a/g#-iN9 hf,Kbpjtzfl%ch-r pBxLZgNu=T_~mXiijrSpK' );
define( 'NONCE_SALT',       'ir=*H|v&VlZ<&5+dX;VaR^iXlG<c],.%c=9LO]}W:0lOHhp+fN>nq)?.pm;:?`8 ' );

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
