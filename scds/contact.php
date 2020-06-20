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

<body id="contact" class="SCDS">
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
                
                
                <!--?php include("page-content/body-contact.php"); ?--->
                <h1>Contact</h1>
                <h2>postal address:</h2>
                <div class="users">
                    <p>Swansea Clinical Decision Support Project<br />
                    c/o Centre for Doctoral Training<br />
                    The Computational Foundry<br />
                    Swansea University<br />
                    SA1 8EN<br />
                    Wales, UK
                    </p>
                </div>
                <h2>email addresses:</h2>
                <div class="users">
                    <h3>admin</h3>
                    <p><a href="mailto:admin@viablio.uk">admin@viablio.uk</a><br />
                </div>
                <!--?php include("includes/dbconnect.php"); ?-->
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>
            
            <section class="threecol col2">
                <!--?php include("page-content/side-a-contact.php"); ?-->
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <!--?php include("page-content/side-b-contact.php"); ?-->
                <!-- Quick Nav Buttons -->
                <div class="link-box">
                    <span class="RHlink"><a href='participant-info.php'>participant info</a></span>
                    <span class="RHlink"><a href="<?php echo $root; ?>gbl/data-protection-scds.php">data protection</a></span>
                    <span class="RHlink"><a href='supervision.php'>supervision</a></span>
                    <span class="RHlink"><a href='contact.php'>contact</a></span>
                </div>
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