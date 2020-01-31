#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$filename = fopen("/var/run/utmpx", "r");
while ($utmpx = fread($filename, 628))
{
    $unpackedata = unpack("s001/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $filename);
    if ($unpackedata["type"] == 7)
	{
		$user[$unpackedata["line"]] = array("user" => $unpackedata["user"], "time" => $unpackedata["time1"]);
	}
}
ksort($user);
foreach($user as $line => $data)
{
	printf("% -7s  % -7s  %s \n", $data["user"], $line, date("M  j H:i", $data["time"]));
}
?>