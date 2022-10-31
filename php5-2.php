<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      $angka = [5,10,2,1,6];
      $hewan = array('kucing','sapi','babi', 'kambing');
      $nama  = ['Sebastian', 'Jody', 'Elroy'];

      //print_r($hewan);
      //echo $nama[2];

      sort($angka);
      print_r($angka);

      //echo count($nama);

    ?>

  </body>
</html>