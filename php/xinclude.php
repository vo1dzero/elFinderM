<?php


if(isset($_GET["ntheme"])) {
setcookie("cthm", $_GET["ntheme"], time() + (86400 * 9930), "/");
header("refresh: 0; url = ./"); 
exit;
}



function isMobile() {
	return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


if(isMobile()) {
$cssglob = "['css/theme.css']";
} else if(!isset($_COOKIE["cthm"])) {
$cssglob = "['css/theme.css']";
} else if($_COOKIE["cthm"] == "0") {
$cssglob = "['css/theme.css']";
} else {
$cssglob = "['themes/" . $_COOKIE["cthm"] . "/css/theme.min.css']";
}







?>