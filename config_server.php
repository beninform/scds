<?php
echo 'Host-specific config_server file included ok<br /><br />';
//echo 'config_server is located in ' . dirname($_SERVER['SCRIPT_NAME']) . '<br />';

	if ($_SERVER['DOCUMENT_ROOT']=='/opt/lampp/htdocs')
	{
		define("DIR_BASE",   dirname( $_SERVER['SCRIPT_NAME'] ) . '/');
		define('DIR_CSS',    DIR_BASE . 'css/');
		define('DIR_GBL',    DIR_BASE . 'gbl/');
		define('DIR_IMG',    DIR_BASE . 'img/');
		define('DIR_JSC',    DIR_BASE . 'jsc/');
		define('DIR_SCDS',   DIR_BASE . 'scds/');
	} 
	else if ($_SERVER['DOCUMENT_ROOT']=='/srv/www/htdocs-cs')
	{
		define("DIR_BASE",   dirname( $_SERVER['SCRIPT_NAME'] ) . '/');
		define('DIR_CSS',    DIR_BASE . 'css/');
		define('DIR_GBL',    DIR_BASE . 'gbl/');
		define('DIR_IMG',    DIR_BASE . 'img/');
		define('DIR_JSC',    DIR_BASE . 'jsc/');
		define('DIR_SCDS',   DIR_BASE . 'scds/');
	} 
	else if ($_SERVER['DOCUMENT_ROOT']=='/viabliou')
	{
		define("DIR_BASE",   dirname( $_SERVER['SCRIPT_NAME'] ) . '/');
		define('DIR_CSS',    DIR_BASE . 'css/');
		define('DIR_GBL',    DIR_BASE . 'gbl/');
		define('DIR_IMG',    DIR_BASE . 'img/');
		define('DIR_JSC',    DIR_BASE . 'jsc/');
		define('DIR_SCDS',   DIR_BASE . 'scds/');
	} 
	else 
	{
		define("DIR_BASE",   'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
		define('DIR_CSS',    'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
		define('DIR_GBL',    'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
		define('DIR_IMG',    'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
		define('DIR_JSC',    'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
		define('DIR_SCDS',   'ERROR IN ' . __FILE__ .' ON LINE '. __LINE__);
	}

include('tout.php');
