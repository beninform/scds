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

<body id="cookies" class="SCDS">
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


                <?php //include("page-content/body-cookies.php"); ?>
                <!--?php include("includes/dbconnect.php"); ?-->
                <h1>SCDS Project website<br />
                Data protection notice</h1>

                <h2>How information about you will be used</h2>

                <p>Other than outlined below, this project and website will not share your information with third parties - nor will it sell your information to any person or organisation.</p>

                <p>Sections of our records containing data you provide may be looked at by responsible individuals from Swansea University or from the regulatory authorities where it is relevant to the governance of the research.</p>

                <p>Contact detail files will not be kept beyond the end of the project, which is on or before 31-Sep-2023. Anonymised results will be kept by the College of Science.</p>

                <h2>How the website is run</h2>

                <p>This project website has no resources of its own. It is run by a researcher and generates no income. Communication with the site administrator will be by email.</p>

                <h3>Website cookies</h3>

                <p>Technical cookies allow the proper operation of the website. Technical cookies can be of two types:</p>

                <ul>
                    <li><strong>Persistent</strong>: Persistent cookies are not destroyed once you close your browser, but remain for a preset period before expiration.</li>
                    <li><strong>Session</strong>: Session cookies are destroyed every time the browser is closed.</li>
                </ul>


                <p>Cookies we set are always sent from the website's own domain (<?php echo $_SERVER['HTTP_HOST']; ?>). No third parties are involved. Technical cookies are required to view the login-only pages of the website and provide security features where information is provided to you. The cookies are used only to enable proper operation of the site, but we must always seek your consent and periodically renew that consent. The cookie warning banner acts to remind you that we operate this process.</p>

                <p>If you choose to block cookies, you will still be able to access the public pages. But you will not be able to login and hence you will not have access to the login-only pages.</p>

<table class="cookie-info">
  <thead>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Type</th>
      <th>Duration</th>
      <th>Usage</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>PHPSESSID</td>
      <td>Technical</td>
      <td>Session</td>
      <td>Until you close the browser</td>
      <td>The PHPSESSID cookie allows the website to store session state data. It is created as a random string of characters and contains no information, but acts as an identifier for the session between your device and the website server. Since the PHPSESSID cookie does not have a persist-until date, it disappears when you close your browser.</td>
    </tr>
    <tr>
      <td>cookie_acceptance</td>
      <td>Technical</td>
      <td>Session</td>
      <td>Until you close the browser</td>
      <td>The cookie_acceptance cookie stores your acknowledgment of the use of cookies and hides the cookie consent banner for the rest of the session. It is created as a random string of characters and contains no information, but acts as an identifier for the session between your device and the website server. Since the cookie_acceptance cookie does not have a persist-until date, it disappears when you close your browse</td>
    </tr>
  </tbody>
</table>
<!-- Generated at CSSPortal.com -->


                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </section>

            <section class="threecol col2">
                <?php //include("page-content/side-a-cookies.php"); ?>
                <p>&nbsp;</p>
            </section>

            <section class="threecol col3">
                <!--?php include 'includes/side-bar-head.php';?-->
                <!-- Quick Nav Buttons -->
                <div class="link-box">

                </div>
                <?php //include("page-content/side-b-cookies.php"); ?>
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
