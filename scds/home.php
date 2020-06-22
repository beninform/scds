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

<body id="home" class="SCDS">
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
                <h1>Swansea Clinical Decision Support</h1>

                <img src="<?php echo $root ?>img/piqsels-zbdpz-600.png" title="picture of clinic tech (CC0) from piqsels.com"  alt="picture of clinic tech (CC0) from piqsels.com"class="main-body-pic" />

                <h2>Trust in AI for Clinical Decision Support:<br />
                <em>An Empirical Study to Explore Interaction Design Concepts that Enhance Combined Human-Machine Decisions</em></h2>

                <p>Artificial Intelligence (AI), big data, machine learning, smart systems and predictive analytics are already having an impact on clinical practice (<a id="1-t" href="#1-r" class="blue">Ahmed et al, 2020</a>). As the IMIA report in 2019 argued, "Commitment to rigorous initial and ongoing evaluation will be critical to ensuring the safe and effective integration of AI in complex sociotechnical settings" (<a id="2-t" href="#2-r" class="blue">Magrabi et al, 2019</a>). This project aims to take forward that commitment.</p>

                <p>Many clinicians will be concerned that current clinical IT systems routinely fall short of expectation (<a id="3-t" href="#3-r" class="blue">Wachter 2015</a>, <a id="4-t" href="#4-r" class="blue">Wachter & Howell 2018</a>, <a id="5-t" href="#5-r" class="blue">Gawande 2018</a>). So much so that the wider development of AI in this context may look like it threatens to place further technical complexity and cognitive burden in the way of good clinical practice.</p>

                <p>The current phase of this project (summer 2020) is looking at how AI-driven decision support tools are seen by clinicians. Specifically,  it aims to investigate the influence of key interaction characteristics on the trust that clinicians place in such tools.</p>


                <h2>References</h2>

                <div class="bibliog">

                    <p id="1-r"><a href="#1-t" class="blue" title="mention in text">&#8593;</a>Ahmed, Z et al (2020) “Artificial intelligence with multi-functional machine learning platform development for better healthcare and precision medicine.” Database : the journal of biological databases and curation vol. 2020,  baaa010. doi:10.1093/database/baaa010</p>

                    <p id="2-r"><a href="#2-t" class="blue" title="mention in text">&#8593;</a>Magrabi, F et al (2019) “Artificial Intelligence in Clinical Decision Support: Challenges for Evaluating AI and Practical Implications.” Yearbook of Medical Informatics 28, 128 - 134.</p>

                    <p id="3-r"><a href="#3-t" class="blue" title="mention in text">&#8593;</a>Wachter RM (2015) The Digital Doctor: Hope, Hype, and Harm at the Dawn of Medicine's Computer Age; The Digital Doctor: Hope, Hype, and Harm at the Dawn of Medicine's Computer Age. McGraw-Hill Education</p>

                    <p id="4-r"><a href="#4-t" class="blue" title="mention in text">&#8593;</a>Wachter RM, Howell MD (2018) Resolving the Productivity Paradox of Health Information Technology: A Time for Optimism. JAMA 320(1), 25–26. doi:10.1001/jama.2018.5605</p>

                    <p id="5-r"><a href="#5-t" class="blue" title="mention in text">&#8593;</a>Gawande A (2018) Annals of medicine: why doctors hate their computers, The New Yorker, November 2018</p>

                <?php //include("page-content/body-home.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->

                </div>
                <?php //if ($_SESSION['loggedin']) { ?>
                    <p>&nbsp;</p>
                <?php //} else { ?>
                    <p>&nbsp;</p>
                <?php //}; ?>
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
