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

<body id="studies" class="SCDS">
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
                <h1>Studies</h1>

                <img src="<?php echo $root ?>img/piqsels-zbjuu-600.png" title="picture of clinic tech (CC0) from piqsels.com" alt="picture of clinic tech (CC0) from piqsels.com" class="main-body-pic" />
                
                <p>The current study involves interacting with three different designs.</p>
                
                <p>Try a sample study scenario using the 'sample' button on this page.</p>

                <?php //include("page-content/body-studies.php"); ?>
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
                <?php //include("page-content/side-a-studies.php"); ?>
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <div class="link-box">
                    <span class="RHlink" ><a href="<?php echo $root; ?>scds/s/00-sample/sample-a-001.php" title="sample">sample</a></span>
                </div>                
                <?php //include("page-content/side-b-studies.php"); ?>
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
