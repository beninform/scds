<?php
#######  This switch detects the calling page and if it matches the case,
#######  it sets the current page variable and the page title variable.
#######  The current page var isn't currently used (but is a nice short value).
#######  The page title is used in the includes/page-head.php file.


	switch ($_SERVER["SCRIPT_NAME"]) {

		case "/SCDS/home.php":
			$CURRENT_PAGE = "home"; 
			$PAGE_TITLE = "Home SCDS";
			break;

		case "/SCDS/about.php":
			$CURRENT_PAGE = "about"; 
			$PAGE_TITLE = "About SCDS";
			break;

		case "/SCDS/error-page.php":
			$CURRENT_PAGE = "error"; 
			$PAGE_TITLE = "Error Page";
			break;

		case "/SCDS/contact.php":
			$CURRENT_PAGE = "contact"; 
			$PAGE_TITLE = "Contact";
			break;

		case "/SCDS/data-protection.php":
			$CURRENT_PAGE = "data-protection"; 
			$PAGE_TITLE = "Data protection";
			break;


		default:
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "SCDS";

	}

?>