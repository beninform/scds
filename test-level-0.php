<?php
//On cs, you cannot use DOCUMENT_ROOT as it's different from application root
//include('/compsci/partition3/scds/public_html/config_server.php'); 
//Relative paths always work (if you know where you are!)
include 'config_server.php';
$current_file_name = basename($_SERVER['PHP_SELF']);
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