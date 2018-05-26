<?php

/** nome do banco*/
define('DB_NAME', 'bd_tcc');

/** usuário do MySQL */
define('DB_USER', 'root');

/** senha do usuário do MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/sistema/');

/** arquivo do banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

/** arquivo do banco da tabela departamento **/
if ( !defined('DBDEP') )
	define('DBDEP', ABSPATH . 'departamento/database.php');

/** arquivo do banco da tabela docente **/
if ( !defined('DBDOC') )
	define('DBDOC', ABSPATH . 'docente/database.php');

/** arquivo do banco da tabela fonte de fomento **/
if ( !defined('DBFON') )
	define('DBFON', ABSPATH . 'fonte/database.php');

/** arquivo do banco da tabela programa/modalidade **/
if ( !defined('DBPRO') )
	define('DBPRO', ABSPATH . 'programa/database.php');

/** arquivo do banco da tabela discente **/
if ( !defined('DBDIS') )
	define('DBDIS', ABSPATH . 'discente/database.php');

/** arquivo do banco da tabela iniciacao **/
if ( !defined('DBINI') )
	define('DBINI', ABSPATH . 'iniciacao/database.php');


/** caminho dos arquivos: header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');