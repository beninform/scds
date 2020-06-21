<div id="cookieBar" class="no-print">
	<a id="cookieButton" class="no-print">Okay!</a>

	<?php
	$login_implies_consent_msg='';
	if ($_SERVER["PHP_SELF"]=='/pages/login-page.php') {
	    $login_implies_consent_msg = 'By logging in or registering, you consent to the use of cookies. You also consent to the storage of the data you submit.<br />';
	} ?>
	<div><?php echo $login_implies_consent_msg; ?> This&nbsp;website is&nbsp;using cookies. <a class="SCDSlink" id="ckInfo">show details</a>
    </div>
</div>


<div id="cookieOverlay"> <!-- overlay div 100% -->

    <span onclick="document.getElementById('cookieOverlay').style.display='none'" class="close" title="Close Modal">&times;</span>

    <div id="cookieOverlayText"> <!-- text 50% -->

        <h4>Our use of cookies</h4>

        <p>We use strictly necessary cookies only.</p>

        <p>By default, we don't set any cookie that is saved beyond your browser session (session cookie). Closing the browser will clear any default cookie.</p>

        <p>Clicking the 'okay' button on the cookie bar below will set an acceptance cookie on your device so that it knows not to ask you about cookies again for the rest of the session.</p>

        <p>If you have cookies disabled in your browser, then no cookies will be set but login will not then be available.</p>

        <p>For more detailed information, see our <a class="scdslink" href="<?php echo $root; ?>gbl/data-protection-scds.php" target="_blank">website data protection statement</a> (opens in new tab).</p>

    </div>

</div>

<script>
/////////////////  Cookie bar script BEGIN ///////////////////////

document.addEventListener('DOMContentLoaded', function() {
  //document ready

    var ckbtn = document.getElementById("cookieButton");
    var ckbar = document.getElementById("cookieBar");
    var ckinf = document.getElementById("ckInfo");
    var ckovr = document.getElementById("cookieOverlay");

    // prep button to set named cookie with expiry and hide banner
    ckbtn.addEventListener("click",function(e){
        console.log('button clicked - cookie being set');
		var expire=new Date();
		expire=new Date(expire.getTime()+7776000000);
		expire=null;
		document.cookie="cookie_acceptance=fQLm5kfOp2f3Yx9ShSEXlhzLHiPVJ1I; expires="+expire+";path=/";

        ckbar.style.display='none';
        console.log('expiry: ' + expire);
    },false);

    // prep link to show overlay
    ckinf.addEventListener("click",function(e){
        console.log('link clicked - overlay being activated');
        ckovr.style.display='block';
        console.log('overlay shown');
    },false);

    // When the user clicks anywhere outside of the modal text,
    // close the modal
    window.onclick = function(event) {
      if (event.target == ckovr) {
        ckovr.style.display = "none";
      }
    }

    // on-load, check for valid named cookie
	testCookie('cookie_acceptance');

	// fn to test for valid cookie
    function testCookie(name){
		var visit=GetCookie(name);
		if (visit==null){
		   ckbar.style.display='block';  //fadeIn(400);	// Show warning
		   console.log('test-cookie no valid cookie')
	   } else {
			// Already accepted
		   console.log('test-cookie valid cookie found')
	   }
    }

    // fn to get cookie from document
    function GetCookie(name) {
      console.log('get-cookie being run')
      var arg=name+"=";
      var alen=arg.length;
      var clen=document.cookie.length;
      var i=0;
      while (i<clen) {
    	var j=i+alen;
    	if (document.cookie.substring(i,j)==arg)
    	  return "here";
    	i=document.cookie.indexOf(" ",i)+1;
    	if (i==0) break;
      }
      return null;
    }
    // end of cookie bar script


})

</script>
