<?php //include("/scds/includes/a_config.php");?>
<?php 
$CURRENT_PAGE = "xxx";

if ($CURRENT_PAGE == "home") { ?>

	<meta name="description" content="Information about Swansea Clinical Decision Support Project" />

	<meta name="keywords" content="CDS AI decision support HCI" /> 

<?php } ?>

<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title><?php //echo $PAGE_TITLE;?>SCDS</title>

<link rel="icon" 
      type="image/png" 
      href="<?php echo $root; ?>img/elements/favicon.png" />
	  
<?php
echo "
<link rel='stylesheet' type='text/css' href='$root/css/scds06.css' />
<link rel='stylesheet' media='print' href='$root/css/print.css' />

<script src='$root/jsc/overlay-menu.js'></script> 
<script src='$root/jsc/navbar-hide-scroll.js'></script>
"
?>