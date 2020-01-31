<?php
if ($_SERVER["PHP_AUTH_USER"] === NULL)
    header("WWW-Authenticate: Basic realm=''Member area''");
$l = "zaz";
$p = "Ilovemylittleponey";
if ($_SERVER['PHP_AUTH_USER'] === $l && $_SERVER['PHP_AUTH_PW'] === $p){
    header($_SERVER['SERVER_PROTOCOL']." 401 Unauthorized");
    header("Content-type: text/html");
    $ima = file_get_contents("../img/42.png");
    $imag = base64_encode($ima);
?>
<html><body>
Hello Zaz<br />
<img src="data:image/png;base64,<?php echo $imag;?>">
</body></html>
<?php
}
else{
    header($_SERVER['SERVER_PROTOCOL']." 401 Unauthorized");
    header("Content-type: text/html"); 
?>
<html><body>That area is accessible for members only</body></html>
<?php
}
?>