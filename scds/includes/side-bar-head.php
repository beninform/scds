<p style="font-size: 0.5em;">&nbsp;</p>
<p class="sml-txt">Funded by</p>
<div class="funder-logos">
    <a href="https://www.emrts.cymru/">
		<?php $emrts_pic = $root.'/img/EMRTS-logo.png'; ?>
		<img src="<?php echo $emrts_pic; ?>" title="EMRTS logo" width=100% />
		</a>
    <a href="https://epsrc.ukri.org">
		<?php $epsrc_pic = $root.'/img/EPSRC-logo.png'; ?>
		<img src="<?php echo $epsrc_pic; ?>" title="UKRI EPSRC logo" width=100% />
		</a>
</div>
<p class="sml-txt">through</p>
<div class="funder-logos">
    <a href="https://www.swansea.ac.uk/science/epsrc-centre-for-doctoral-training/">
		<?php $cofo_pic = $root.'/img/SU-CoFo-logo.png'; ?>
		<img src="<?php echo $cofo_pic; ?>" title="SU Computational Foundry logo" width=100% />
	</a>
</div>
    	

<?php 
$loggedinmsg='&nbsp;';
//if ($_SESSION["loggedin"]) {
if (1==0) {	
    $loggedinmsg='you are logged in as: <br />';
}
//if ($_SESSION["username"]) {
if (1==0) {	
    $loggedinusr=$_SESSION["username"];
} else {
    $loggedinusr='';
}
?>
<p>
	<span class="usrnm-label"><?php echo $loggedinmsg; ?></span>
	<span class="username"   ><?php echo $loggedinusr; ?></span>
</p>