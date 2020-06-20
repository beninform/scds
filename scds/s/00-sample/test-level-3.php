<?php
// finding config_server.php at the root level...
// On cs, you cannot use DOCUMENT_ROOT: 
//  '/srv/www/htdocs-cs/'; 
// On cs, you cannot use __FILE__ parent on a root file:
//  '/compsci/partition3/scds/'; 
// Relative paths only work if you know where you are!
// SCRIPT_NAME comes to the rescue:
//  '/~scds/'  -- but this doesn't work directly. You have to count back.
///////$root = str_repeat('../',(substr_count($_SERVER['SCRIPT_NAME'],'/')-1))
// ...and it won't work if you're already in webroot location
$current_file_dir  =  $_SERVER['SCRIPT_NAME'];
$steps = substr_count($current_file_dir, '/', 1)-1;
$root = str_repeat('../',($steps));
include_once $root.'config_server.php';
$current_file_name = basename($_SERVER['SCRIPT_NAME']);
?>
<html>
	<head>
		<style>
		body {
		font-family: verdana, Arial, helvetica, "sans serif", sans-serif;
		background-color: #CFD;
		}
		</style>
	</head>
	<body>
	<h1><?php echo $current_file_name; ?></h1>

	<b>Printing test outputs:</b></p><p>
	
<?php
	$boofile = 'boo.php';
	$path = '';
	
	echo '@1<br />';
	echo 'sibling file?: ' . $path . $boofile . '<br />';
	include $path . $boofile; // sibling
	//$path .= '/';
	//include $path . $boofile; // webroot
	
	echo '@2<br />';
	$path2 = '/opt/lampp/htdocs/';
	echo $path2 . '<br />';
	include $path2 . $boofile; // xampp abs path ??
	
	// trying different paths for cs abs path
	echo '@3<br />';
	$path3 = '/compsci/partition3/scds/';
	echo 'root dir from __FILE__ in root file: ' . $path3 . '<br />';
	include $path3 . $boofile; // cs __FILE__ directory ??
	
	echo '@4<br />';
	$path4 = '/srv/www/htdocs-cs/';
	echo 'root dir from DOCUMENT_ROOT in root file: ' . $path4 . '<br />';
	include $path4 . $boofile; // cs DOCUMENT_ROOT ??
	
	echo '@5<br />';
	$path5 = '/~scds/';
	echo 'root dir from PHP_SELF in root file: ' . $path5 . '<br />';
	include $path5 . $boofile; // cs alias path ??
	
	echo '@6<br />';
	echo $_SERVER['SCRIPT_NAME'] . '<br />';
	$path6 = str_repeat('../',(substr_count($_SERVER['SCRIPT_NAME'],'/')-1));
	echo 'from SCRIPT_NAME: '.$path6."boo.php<br />";
	include($path6."boo.php");
	
	echo '@7<br />';
	echo 'from SCRIPT_FILENAME: '.$_SERVER['SCRIPT_FILENAME'] . '<br />';
	$path7 = str_repeat('../',(substr_count($_SERVER['SCRIPT_FILENAME'],'/')-1));
	echo $path7."boo.php<br />";
	include($path7."boo.php");
	
	echo '@8<br />';
	echo 'parent dir of SCRIPT_NAME: ' . dirname($_SERVER['SCRIPT_NAME']) . '<br />';
	$dir8 = dirname($_SERVER['SCRIPT_NAME']);
	$path8 = str_repeat('../',(substr_count($dir8,'/')-1));
	include($path8."boo.php");
	
	echo '@9<br />';
	echo 'parent dir of SCRIPT_FILENAME: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '<br />';
	$dir8 = dirname($_SERVER['SCRIPT_FILENAME']);
	$path8 = str_repeat('../',(substr_count($dir8,'/')-1));
	include($path8."boo.php");
	
	
	//////////////////////////////////////////////////////////
	echo "<hr />";
	
	// print the variable DIR_BASE
	echo "<p>DIR_BASE is '<em>" . DIR_BASE . "</em>'.</p>";

	// print current file with path
	echo "<p>This file is '<em>" . __FILE__ . "</em>'.</p>";
	
	echo "<p>PHP_SELF here is '<em>" . $_SERVER['PHP_SELF'] . "</em>.</p>";
	
	
	// Instantiate new tout (test output) object
	$tout = new TestOutput;
	
	// print file full path and name
	echo 'Tout file details:<br />';
	$tout->printFile();
	
	// print constant defined in host-specific config file
	$tout->printDirBase();


	// print using SERVER array constant DOCUMENT_ROOT
	$tout->printDocRoot();



	// print namespace name (works only with PHP >5.3)
	$tout->printNamespace();
	
	
	
?>



	</body>
</html>