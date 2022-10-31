<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

    $hewan = ['anjing','kumbang','tokek','laba laba'];

    for($i=0; $i < count($hewan); $i++)
    {
        echo "-----------";
        echo $hewan [$i];
        echo "-----------<br>";
    }

?>
  </body>
</html>