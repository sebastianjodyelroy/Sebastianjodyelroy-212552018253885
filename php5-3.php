<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      // $angka = [5,10,2,1,6];
      // $hewan = array('ayam','kuda','lumba', 'gajah');
      // $nama  = ['Sebastian', 'Jody', 'Elroy'];

      //print_r($kotak);
      //echo $nama[2];

      //sort($angka);
      //print_r($angka);

      //echo count($nama);

      //key =>isi

      $data = array( "nama" => "Sebastian",
                     "umur" => 20,
                     "kerja"=> "Mahasiswa"
                   );

      //print_r($data);

      $data['nama'] = "Sebastian Jody Elroy";

      echo "Nama adalah ", $data['nama'];

    ?>

  </body>
</html>