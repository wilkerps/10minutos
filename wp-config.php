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
define( 'DB_NAME', '10minutos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'D(%xE]*m`O7/@^t,Xax7#{q(ZULYJRb0<N!FXPFL<Qz%~@_t74,L>n1S[(>KMed8' );
define( 'SECURE_AUTH_KEY',  '|TSz^#p8xC*Q7)G`gh` ybPiO!0#;ZXJdz|/0`K=$9KF:{B|C#l sm*o6>+c~q:-' );
define( 'LOGGED_IN_KEY',    'b4`2~__kD5hc~ 4ygBQ~MQ>+mFqgHQ{[c$42&pSzv6b+sFGx Q2#A>I1?bHRgnVT' );
define( 'NONCE_KEY',        'W_R(Jeet5&(-:Te<_8?BY_~eCnI*0hx3ha+hxE<?eV Kb@BL2/n6]rF.;Yl(DO`M' );
define( 'AUTH_SALT',        'fdw0Aashp^%n2Rqp@$4EhtxL3,[aQ9z6@!LWqUi3%n:O}b-1PRAwUBMEm9eMJ=F`' );
define( 'SECURE_AUTH_SALT', 'Z!I`eY;NUh8/t)Eiwc 9zXme((UgjXhyY0pL/|!+u6^qL/_p/^7Y3O}M>mDHY=TB' );
define( 'LOGGED_IN_SALT',   '&ejI6{g19(~+erDxirsL^38299Gq=ZRtu*Hu}%bv<?@1<PwOrcn`2eL~y4kXDZ;i' );
define( 'NONCE_SALT',       'u{<Pqw!eGx!v[&6=Tse@~Z=_f2,GHga$DoCK`:s I ~W9Q8uf xP!>=YW@a^_0;F' );

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
