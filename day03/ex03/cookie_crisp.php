<?php
if ($_GET["action"] == set)
    setcookie($_GET["name"], $_GET["value"], time() + 3600); 
elseif ($_GET["action"] == get && $_COOKIE[$_GET["name"]] !== NULL)
    echo $_COOKIE[$_GET["name"]] . "\n";
elseif ($_GET["action"] == del)
    setcookie($_GET["name"], NULL, - 3600);




//curl -c cook.txt 'localhost:8080/cookie_crisp.php?action=set&name=plat&value=choucroute'
//curl -b cook.txt 'localhost:8080/cookie_crisp.php?action=get&name=plat'
//curl -c cook.txt 'localhost:8080/cookie_crisp.php?action=del&name=plat'
//curl -b cook.txt 'localhost:8080/cookie_crisp.php?action=get&name=plat'
?>