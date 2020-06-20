<?php 
$pth = $root.'scds/';
?>

<div id="navbar" class="topnav">
  <a class="home" href="<?php echo $pth; ?>home.php">Home</a>
  <a class="studies" href="<?php echo $pth; ?>studies.php">Studies</a>
  <a class="join" href="<?php echo $pth; ?>join.php">Join</a>
  <a class="about" href="<?php echo $pth; ?>about.php">About</a>
  <span class="login-button">
        <?php 
        //if ($_SESSION['loggedin']) {
		if(1==0) {	
            echo '<a href="'.$pth.'logout.php">Logout</a>';
        } else {
            echo '<a href="'.$pth.'login-page.php">Login</a>';
        }
        ?>
  </span>
</div>

<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="<?php echo $pth; ?>home.php">Home</a>
    <a href="<?php echo $pth; ?>studies.php">Studies</a>
    <a href="<?php echo $pth; ?>join.php">Join</a>
    <a href="<?php echo $pth; ?>about.php">About</a>
    <?php 
	//if ($_SESSION['loggedin']) {
	if(1==0) {	
        echo '<a href="'.$pth.'logout.php">Logout</a>';
	} else {
	    echo '<a href="'.$pth.'login-page.php">Login</a>';
	}
    ?>
  </div>

</div>

<div id="o-bar" class="o-nav"><span onclick="openNav()">menu</span></div>

