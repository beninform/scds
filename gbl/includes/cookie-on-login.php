<?php
$cookie_name = "cookie_acceptance";
$cookie_value = "9ShSEXlhzLHiPVJ1IfQLm5kfOp2f3Yx";
//if ($_SESSION["loggedin"]) {
if (1==0) {
    setcookie($cookie_name, $cookie_value, null, '/'); 
    //, time() + (86400 * 30), "/"); // 86400 = 1 day
}
 
?>
