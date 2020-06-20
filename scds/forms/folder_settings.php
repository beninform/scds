<?php
echo '<br /><br /><br />';
$DocRoot = $_SERVER['DOCUMENT_ROOT'];
if ($DocRoot=='/opt/lampp/htdocs') {
	$cnt = 0;
	//echo 'xampp host<br />';
} else if ($DocRoot=='/srv/www/htdocs-cs') {
	$cnt = -1;
	//echo 'cs host<br />';
} else if ($DocRoot=='/viabliou') {
	$cnt = 0;
	//echo 'viablio host<br />';
} else {
	$cnt = 0;
	//echo 'host not detected!<br />';
}
// finding config_server.php which is at the webroot level...
// On cs, you cannot use DOCUMENT_ROOT: 
//  '/srv/www/htdocs-cs/'; 
// On cs, you cannot use __FILE__ parent on a root file:
//  '/compsci/partition3/scds/'; 
// Relative paths only work if you know where you are
// SCRIPT_NAME comes to the rescue since it has a close path length:
//  '/~scds/...'  -- Note it doesn't work directly. You have to count back.
$current_file_dir  =  $_SERVER['SCRIPT_NAME']; // gives path of current file
//echo '<br />'.$current_file_dir.'<br />';
$steps = substr_count($current_file_dir, '/', 1)+$cnt; // level adjusted for host
//echo $steps.'<br />';
$root = str_repeat('../',($steps)).''; // path prefix to get to root
//echo 'folder settings says root is: '.$root.'<br />';
?>