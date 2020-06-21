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

<body id="join" class="SCDS">
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
                <h1>Join</h1>

                <img src="<?php echo $root ?>img/piqsels-faqta-600.png" title="picture of clinic tech (CC0) from piqsels.com" alt="picture of clinic tech (CC0) from piqsels.com" class="main-body-pic" />

                <p>The project is open to all clinicians (including trainees). You will need to register your consent and allow session cookies on your device.</p>

                <p>The time commitment can be very small, but can flex to allow greater input if you wish. And you can contribute when you have the time to spare. All interaction studies can be done via mobile, tablet or desktop computer.</p>
                
                <p>We will need your email address, clinical role and specialty. And (optionally) we'd be interested in how long you've been practising.</p>

                <?php //include("page-content/body-home.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->

                <?php //if ($_SESSION['loggedin']) { ?>
                    <p>&nbsp;</p>
                <?php //} else { ?>
                    <p>&nbsp;</p>
                <?php ///}; ?>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>
            
            <section class="threecol col2">
                <?php //include("page-content/side-a-home.php"); ?>
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <div class="link-box">
                    <span class="RHlink" ><a href="sign-up.php" title="sign-up">sign up</a></span>
                </div>                
                <?php //include("page-content/side-b-home.php"); ?>
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
