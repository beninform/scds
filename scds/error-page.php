<?php
session_start();
include('folder_settings.php');  // provides $root variable 
include($root . 'gbl/includes/cookie-on-login.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include($root."scds/includes/html-head.php");?>
</head>

<body id="error" class="SCDS">
    <div id="pagecontainer">

        <div class="skip">
            <a href="#maincontent">Skip to content</a>
        </div>

        <div id="topcontainer">
            <?php include($root."scds/includes/nav.php"); ?>
        </div>
      

        <div id="maincontainer">
        <div class="threecol colmask">
        <div class="threecol colmid">
        <div class="threecol colleft">
            
            <section class="threecol col1">
                <h1>Oops!</h1>

                <img src="<?php echo $root ?>img/piqsels-sjsqa-600.png" title="lost user (CC0) from https://www.piqsels.com/" class="main-body-pic" />
                
                <h2>Page not found</h2>

                <p>If that's our bad, please let us know.</p>
                

                <?php //include("page-content/body-error.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->
                
                <?php //if ($_SESSION['loggedin']) { ?>
                    <p>&nbsp;</p>
                <?php //} else { ?>
                    <p>&nbsp;</p>
                <?php //}; ?>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>
            
            <section class="threecol col2">
                <?php //include("page-content/side-a-error.php"); ?>
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <div class="link-box">
                </div>                
                <?php //include("page-content/side-b-error.php"); ?>
                <p>&nbsp;</p>
            </section>
    
        </div>
        </div>
        </div>
        </div>
        <?php include($root."scds/includes/footer.php"); ?>
    </div>
</body>
</html>