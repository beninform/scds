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

<body id="about" class="SCDS">
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
                
                <h1>About the project</h1>

                <img src="<?php echo $root ?>img/piqsels-svvxr-600.png" title="picture of clinic tech (CC0) from piqsels.com" alt="picture of clinic tech (CC0) from piqsels.com" class="main-body-pic" />

                <p>This project aims to study the way clinicians interact with artificial intelligence decision support tools.</p>

                <p>What characteristics tend to lead to a decrease or increase in user-confidence? Are these variable across clinicians and across clinical teams? Are there ways to overcome the tendencies? What can be done to increase confidence where it's well-founded and raise doubt where it's appropriate?</p>
                
                <p>The studies each take a set of clinical decision scenarios and provide a mock-up of what an AI-driven decision support tool might suggest. The clinical user is invited to report which tool they'd be most likely to find useful.</p>

                <?php //include("page-content/body-about.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>
            
            <section class="threecol col2">
                <?php //include("page-content/side-a-about.php"); ?>
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <div class="link-box">
                    <span class="RHlink"><a href='participant-info.php'>participant info</a></span>
                    <span class="RHlink"><a href="<?php echo $root; ?>gbl/data-protection-scds.php">data protection</a></span>
                    <span class="RHlink"><a href='supervision.php'>supervision</a></span>
                    <span class="RHlink"><a href='contact.php'>contact</a></span>
                </div>
                <?php //include("page-content/side-b-about.php"); ?>
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
