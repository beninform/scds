<html>
	<head>
		<style>
		body {
		font-family: verdana, Arial, helvetica, "sans serif", sans-serif;
		}
		</style>
	</head>
	<body>
	<p>Test 01</p>

	<?php //echo '<p>'; // opening tag ?>
<?php
//On cs, cannot use DOCUMENT_ROOT as it's different from application root
//include('/compsci/partition3/scds/public_html/config_server.php'); 
//Relative paths always work (if you know where you are!)
include '../config_server.php';

	/////////////// PRINTING TEST DIR LOCS ///////////////////////////////
	echo '<p>The base directory detected here is:<br />';
	echo DIR_BASE;
	echo '</p>';	

	//echo '<p>The base directory detected here is:<br />';
	//echo DIR_BASE;
	//echo '</p>';	
	
?>

<b>Printing test outputs (misc):</b></p><p>
<?php
	/////////////// PRINTING TEST OUTPUTS ////////////////////////////////
	
	// Instantiate new TestMagicConstants object
	$tout = new TestOutput;
	
	// print file full path and name
	echo 'first print method:<br />';
	$tout->printFile();

	// print file full path, without file name
	$tout->printDir();

	// print current line number on file
	$tout->printLineNo();

	// print using SERVER array constant DOCUMENT_ROOT
	$tout->printDocRoot();



	// print class name and used namespace using object method
	$tout->printClassName();

	// print method name and used namespace using object method
	$tout->printMethodName();

	// print function name inside class and used namespace
	// same as method name, but without class
	$tout->printFunction();

	// print namespace name (works only with PHP >5.3)
	$tout->printNamespace();

?>

<b>Defining base directory from a fixed-level config file?:</b></p><p>
<?php
	
	//echo dirname(__FILE__);
	//echo '</p><p>';
	echo 'These two should be equal if dirname() is working with 2 args:<br />';
	echo dirname(dirname(__FILE__));
	echo '<br />';
	echo dirname(__FILE__, 2);
	echo '</p><p>';
	//echo constant("DIR_BASE");
	//echo '</p><p>';

	//echo DIR_SYSTEM;
	//echo '</p><p>';
?>


<b>PHP config info:</b></p><p>


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