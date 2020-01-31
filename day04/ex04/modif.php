<?php
$array = array();
if (!($_POST['oldpw']) || !($_POST['newpw']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
{  
  echo "ERROR\n";
  ?>
        <p>
        <a href="modif.html">Doesn't complite</a>
        <?php
}
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
      ?>
      <p>
      <a href="index.html">Let's start</a>
      <?php
    }
    else
      {
        echo "ERROR\n";
        ?>
        <p>
        <a href="modif.html">psw doesn't correct -> go back</a>
        <?php
      }
  }
  else
    {
      echo "ERROR\n";
      ?>
        <p>
        <a href="modif.html">user doesn't correct -> go back</a>
        <?php
    }
}
    ?>