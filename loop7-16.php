<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    $hewan = ['anjing','kumbang','tokek','laba laba'];

    for($i=0; $i < count($hewan) -1; $i++)
      {
        echo "-----------";
        echo $hewan [$i];
        echo "-----------<br>";
      }
    foreach($hewan as $h)
      {
        echo "-----------";
        echo $h;
        echo "-----------<br>";
      }

?>
  </body>
</html>