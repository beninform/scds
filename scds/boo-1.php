<?php
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
		<p><?php echo $current_file_name; ?></p>
	</body>
</html>