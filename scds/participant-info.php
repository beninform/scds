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

<body id="participant" class="SCDS">
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

                <h1>Participant Information Sheet</h1>

                <p>(Version 1.0, Date: 12/06/2020)</p>

                <h3>Project Title:</h3>

                <p>Trust in AI for Clinical Decision Support:<br />
                  <em>An Empirical Study to Explore Interaction Design Concepts that Enhance Combined Human-Machine Decisions</em></p>

                <h3>Contact Details:</h3>

                <p>Ben Wilson, CDT – b.j.wilson.1915417 [at] swansea.ac.uk</p>

                <h3>1. Invitation to Participate</h3>

                <p>We would like your help to study the different ways that clinicians respond to decision support tools that are driven by Artificial Intelligence (AI). In this phase, we have two main areas to study. We want to know how well the characteristics of our mock-up support tool fit clinical expectations. But we also want to know whether there are stronger levels of confidence inspired by certain characteristics over others.</p>

                <p>There is a growing expectation that AI-driven support tools will increasingly become available for a variety of different clinical tasks. There is important and continuing research focusing on increasing the performance of Machine Learning (ML) so that metrics such as positive and negative predictive value are maximised. And these improvements help raise both public and clinical confidence in AI-driven decision support. But appropriate assurance will depend on more than these important, but narrow, metrics.</p>

                <h3>2. Purpose of the study</h3>

                <p>Our project aims to explore how user-interaction and tool characteristics can improve both the experience and the judged assurance for clinical users.</p>

                <h3>3. Why have I been chosen?</h3>

                <p>You have been approached because we, or someone we know, think you will have useful insight into what will make useful characteristics of a clinical decision support tool. But we are also interested in any new questions that may arise from your participation. What are some of the limitations we may not have considered? Taking part is entirely voluntary and you can withdraw at any time if you wish. But you’ll be doing us a great service if you can join in by providing responses. And you’ll be helping us succeed in an important clinical tool desgin and user-interaction project – making clinical software that’s clinician-centred.</p>

                <h3>4. What will happen to me if I take part?</h3>

                <p>The first stage involves filling out a short questionnaire. We expect this to take only a couple of minutes.</p>

                <p>The second stage, if you’re happy to proceed, involves using our online scenario prompts followed by answering a small number of questions on each. The time commitment is expected to be about 15 minutes on each of five days which can be spread over several weeks. You choose the schedule of sessions. We will then send you requests by email that will link to the scenarios and questions.</p>

                <p>A follow-on third stage that would be particularly helpful is a review discussion about your experience and another short questionnaire. This can be by video-conference, visit or telephone.</p>

                <p>We expect the third stage to take no more than half an hour in total.</p>

                <p>A fourth and fifth stage, if you’re willing, involve a repeat of the second and third stage after we’ve made updates to the scenarios. Again, we expect these to take up five short sessions of 15 minutes that you schedule – plus a review of no more than half an hour.</p>

                <h3>5. What are the possible disadvantages of taking part?</h3>

                <p>We know of no direct risks or discomforts involved in the study. But we’re open to learning and adapting aspects of the work to accommodate needs or concerns.</p>

                <h3>6. What are the possible benefits of taking part?</h3>

                <p>There are no direct benefits of taking part. We are likely to offer you early access to the results, if you’re interested.</p>

                <h3>7. Will my taking part in the study be kept confidential?</h3>

                <p>We need to collect your contact details and details of your clinical role and experience. Any contact details stored electronically will be stored only using our project servers. Contact detail files will not be kept beyond the end of the project, which is on or before 31-Sep-2023. Anonymised results will be kept by the College of Science.</p>

                <h3>8. What if I have any questions?</h3>

                <p>Further information can be obtained from the contact stated above.</p>

                <?php //include("page-content/body-participant.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>

            <section class="threecol col2">
                <?php //include("page-content/side-a-participant.php"); ?>
                <p>&nbsp;</p>
            </section>

            <section class="threecol col3">
                <?php include($root."scds/includes/side-bar-head.php"); ?>
                <div class="link-box">
                    <span class="RHlink"><a href='participant-info.php'>participant info</a></span>
                    <span class="RHlink"><a href="<?php echo $root; ?>/gbl/data-protection-scds.php">data protection</a></span>
                    <span class="RHlink"><a href='supervision.php'>supervision</a></span>
                    <span class="RHlink"><a href='contact.php'>contact</a></span>
                </div>
                <?php //include("page-content/side-b-participant.php"); ?>
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
