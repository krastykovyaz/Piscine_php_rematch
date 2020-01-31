<?php
$array = array();
if (!($_POST['oldpw']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
  echo "ERROR\n";
else
{
  $array = unserialize(file_get_contents("../private/passwd"));
  $i = FALSE;
  foreach ($array as $key => $value)
  { //$array[$key] == $value
    if ($value['login'] === $_POST['login'])
    {
      $i = TRUE;
      break;
    }
  }
  if ($i)
  {
    if ($value['passwd'] === hash("whirlpool", $_POST['oldpw']))
    {
      $array[$key] = array(
        "login" => $_POST['login'],
        'passwd' => hash("whirlpool", $_POST['newpw'])
      );
      file_put_contents("../private/passwd", serialize($array));
      echo"OK\n";
    }
    else
      echo "ERROR\n";
  }
  else
    echo "ERROR\n";
}
    ?>