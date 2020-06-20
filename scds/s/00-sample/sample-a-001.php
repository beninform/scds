<?php
session_start();
include('folder_settings.php');  // provides $root variable 
include($root . 'gbl/includes/cookie-on-login.php');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta charset="euc-kr">
    <?php include($root."scds/includes/html-head.php");?>
</head>

<body id="sample-a-001" class="SCDS">
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
                <h1>Sample scenario</h1>

                <img src="<?php echo $root ?>img/piqsels-jiiny-600.png" title="blue abstract (CC0) from https://www.piqsels.com/" class="main-body-pic" />

                <p>A 42-year-old male presents with dry cough, fever, and rapidly worsening fatigue. The patient reports having been in good health six days before. His temperature is 38.8°C, blood pressure 100/60 mm Hg, heart rate 112 bpm, resp rate 25 bpm and O2 sats 90% on room air. On examination, he appears well, and lung sounds are clear. White-cell count is well above LLN.</p>
                
                <p>The patient attends with his adult daughter. Review of systems is negative for conjunctivitis, nasal congestion, sinusitis, anosmia, abdominal pain, bloating, diarrhea, light-headedness, dizziness, chest pain, and edema. The vaccination status for flu and any pneumococcal prophylaxis is unknown. His medical history is notable for hypertension, diabetes mellitus, atrial fibrillation, and sleep apnea.</p>
                
                <p>He works as a part-time haulage driver with no known adverse exposures. He has never smoked, has low alcohol intake and no drug abuse. His family history includes coronary artery disease in multiple relatives; but no history of pulmonary disease.</p>

                <p>Chest CT, without iv contrast, reveals small (1 to 1.5 cm diameter), rounded central and peripheral ground-glass opacities in both lungs.</p>
                
                <p>The most recent ECG available is one month old and shows normal function.</p>
                
                <p>The differential diagnosis includes cardiogenic pulmonary edema, multifocal pneumonia, and acute respiratory distress syndrome (ARDS).</p>
                
                <p>The AI diagnostic system is able to access uninterrupted lab results, radiology reports, primary and secondary care records (all for the last two years) and the history just taken. It ingests the CT images and report.</p>
                
                <hr />
                
                <p>The diagnostic system predicts acute respiratory distress syndrome caused by Covid-19 (with confidence 70%). Multifocal pneumonia (18%). Cardiogenic pulmonary edema (12%).</p>
                
                <?php //include("page-content/body-_.php"); ?>
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
                <?php //include("page-content/side-a-_.php"); ?>
                <p>&nbsp;</p>
            </section>
	
            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <?php //include 'includes/side-bar-head.php';?>
                <div class="link-box">
                    <!--span class="RHlink" ><a href="sign-up.php" title="sign-up">sign up</a></span-->
                </div>                
                <?php //include("page-content/side-b-_.php"); ?>
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