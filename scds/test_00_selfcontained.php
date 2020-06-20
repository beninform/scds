<?php 
	// Set namespace (works only with PHP 5.3)
	namespace scds;

?>
<html>
	<head>
		<style>
		body {
		font-family: verdana, Arial, helvetica, "sans serif", sans-serif;
		}
		</style>
	</head>
	<body>
	<p>See content of file to understand these messages</p>

	<?php echo '<p>'; // opening tag ?>

<?php



	///////////////////// FUNCTIONS ///////////////////////////////////////////

	// Really simple basic test function
	function test_function_magic_constant() {
		echo "This is from '" . __FUNCTION__ . "' function.</p><p>";
	}
	
	// Really simple class for testing magic constants
	class TestMagicConstants {
		// Prints class name
		public function printClassName() {
			echo "This is " . __CLASS__ . " class.</p><p>";
		}

		// Prints class and method name
		public function printMethodName() {
			echo "This is " . __METHOD__ . " method.</p><p>";
		}

		// Prints function name
		public function printFunction() {
			echo "This is function '" . __FUNCTION__ . "' inside class.</p><p>";
		}

		// Prints namespace name (works only with PHP 5.3)
		public function printNamespace() {
			echo "Namespace name is '" . __NAMESPACE__ . "'.</p><p>";
		}
	}
	
	/////////////// PRINTING ///////////////////////////////////////////////////////

	
	// print file full path and name
	echo "This file full path and file name is '" . __FILE__ . "'.</p><p>";

	// print file full path, without file name
	echo "This file full path is '" . __DIR__ . "'.</p><p>";

	// print current line number on file
	echo "This is line number " . __LINE__ . ".</p><p>";

	// print from inside really simple function and used namespace
	test_function_magic_constant();

	// print using SERVER array constant
	echo 'document root is '.$_SERVER["DOCUMENT_ROOT"].'</p><p>';

	// Instantiate new TestMagicConstants object
	$test_magic_constants = new TestMagicConstants;

	// print class name and used namespace using object method
	$test_magic_constants->printClassName();

	// print method name and used namespace using object method
	$test_magic_constants->printMethodName();

	// print function name inside class and used namespace
	// same as method name, but without class
	$test_magic_constants->printFunction();

	// print namespace name (works only with PHP >5.3)
	$test_magic_constants->printNamespace();

?>

<?php
	// print name of parent directory
	echo dirname("c:/fictionaldir/fictionalsubdir/home.php") . " #1</p><p>";

	// print name of parent of parent directory (ie, number of levels upward is supposed to be 2)
	echo dirname("c:/fictionaldir/fictionalsubdir/home.php", 2) . " #2</p><p>";

	// print name of parent of parent directory with hack-around
	echo dirname( dirname("c:/fictionaldir/fictionalsubdir/home.php")) . " #3</p><p>";

?>

<?php
	//namespace \scds;
	//use scds as boo;
	
	//include('boo');
?>

<b>Defining base directory from a fixed-level config file:</b></p><p>

<?php
	// NB. only defines wrt grandparent of current file. So is not flexible on levels.
	if ($_SERVER['DOCUMENT_ROOT']=='E:/XAMPP/htdocs')
	{
		define("DIR_BASE",      dirname( __FILE__ , 2) . '/');
		define('DIR_SYSTEM',    DIR_BASE . 'system/');
		define('DIR_VIEWS',     DIR_SYSTEM . 'views/');
		define('DIR_CTLS',      DIR_SYSTEM . 'ctls/');
		define('DIR_MDLS',      DIR_SYSTEM . 'mdls/');
	} 
	else if ($_SERVER['DOCUMENT_ROOT']=='/srv/www/htdocs-cs')
	{
		define("DIR_BASE",      dirname( __FILE__ , 2) . '/');
		define('DIR_SYSTEM',    DIR_BASE . 'system/');
		define('DIR_VIEWS',     DIR_SYSTEM . 'views/');
		define('DIR_CTLS',      DIR_SYSTEM . 'ctls/');
		define('DIR_MDLS',      DIR_SYSTEM . 'mdls/');
	} 
	else 
	{
		define("DIR_BASE",      __FILE__ .' FILE - ERROR ON LINE '. __LINE__);
		define("DIR_SYSTEM",    __FILE__ .' FILE - ERROR ON LINE '. __LINE__);
	}
	echo dirname(__FILE__);
	echo '</p><p>';
	echo dirname(dirname(__FILE__));
	echo '</p><p>';
	echo dirname(__FILE__, 2);
	echo '</p><p>';
	echo constant("DIR_BASE");
	echo '</p><p>';
	echo DIR_BASE;
	echo '</p><p>';
	echo DIR_SYSTEM;
	echo '</p><p>';
?>

Test link with querystring <a href="http://www.example.com/file.php?foo=1&bar=2%27;">http://www.example.com/file.php?foo=1&bar=2%27;</a></p><p>

<b>Detecting OS:</b></p><p>

<?php
	//By default, we assume that PHP is NOT running on windows.
	$isWindows = false;

	//If the first three characters PHP_OS are equal to "WIN",
	//then PHP is running on a Windows operating system.
	if(strtoupper(substr(PHP_OS, 0, 3)) == 'WIN'){
		$isWindows = true;
	}

	//If $isWindows is TRUE, then print out a message saying so.
	if($isWindows){
		echo 'This operating system is Windows (using PHP_OS)!';
		echo '</p><p>';
	} else {
		echo 'Not windows OS (using PHP_OS)';
		echo '</p><p>';
	}
?>


<?php
	//By default, we assume that PHP is NOT running on windows.
	$isWindows2 = false;

	// PHP_OS_FAMILY is listed as a core predefined (reserved) constant
	// But it doesn't work on the QiQ apache server...!
	if(PHP_OS_FAMILY == 'Windows'){
		$isWindows2 = true;
	}

	//If $isWindows is TRUE, then print out a message saying so.
	if($isWindows2){
		echo 'This operating system is Windows (using PHP_OS_FAMILY)!';
		echo '</p><p>';
	} else {
		echo 'Not windows OS (using PHP_OS_FAMILY)';
		echo '</p><p>';
	}
?>


<?php
	echo 'OS:<br />';
	echo '$_SERVER["SERVER_SOFTWARE"]: ' . $_SERVER["SERVER_SOFTWARE"] . '<br />';
	echo 'PHP_OS: ' . PHP_OS . '<br />';
	echo 'PHP_OS_FAMILY: ' . PHP_OS_FAMILY . '<br />';
	echo 'php_uname(): ' . php_uname() ;
	echo '</p><p>';
	echo 'OS directory and path separators (and shared library suffix):<br />';
	echo 'DIRECTORY_SEPARATOR: ' . DIRECTORY_SEPARATOR . '<br />'; //   /   or  \
	echo 'PHP_SHLIB_SUFFIX: '    . PHP_SHLIB_SUFFIX .    '<br />'; //   so  or  dll
	echo 'PATH_SEPARATOR: '      . PATH_SEPARATOR .      '<br />'; //   :   or  ;
	echo '</p><p>';
?>

<?php
	echo 'phpversion():    '    . phpversion();    // Gets the current PHP version
	echo '</p><p>';
	echo 'php_sapi_name(): ' . php_sapi_name(); // Returns the type of interface between web server and PHP
	echo '</p><p>';
?>
	
	<?php echo '</p>'; // closing tag ?>
	
<?php 
	echo 'phpinfo():<br />';
	echo  phpinfo();
?>
	</body>
</html>