<?php
$array = array();
if (!($_POST['oldpw']) || !($_POST['newpw']) || !($_POST['login']) || !($_POST['submit'] == 'OK'))
{  
  ?>
        <p>
        <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
        <a href="modif.html" style="font-family: Courier New">Doesn't complite</a>
</div>
        <?php
}
else
  {
    $array = unserialize(file_get_contents("database/private/passwd"));
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
      file_put_contents("database/private/passwd", serialize($array));
      ?>
      <p>
      <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
      <a href="index.html" style="font-family: Courier New">Let's start</a>
      </div>
      <?php
    }
    else
      {
        ?>
        <p>
        <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
        <a href="modif.html" style="font-family: Courier New">psw doesn't correct -> go back</a>
      </div>
        <?php
      }
  }
  else
    {
      ?>
        <p>
        <link rel="stylesheet" href="StorageStyle.css">
               <div class=head>
        <a href="modif.html" style="font-family: Courier New">user doesn't correct -> go back</a>
    </div>
        <?php
    }
}
    ?>