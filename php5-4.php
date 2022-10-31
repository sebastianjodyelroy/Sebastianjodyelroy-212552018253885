<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      // $angka = [5,10,2,1,6];
      // $hewan = array('ayam','kuda','gajah', 'burung');
      // $nama  = ['Sebastian', 'Jody', 'Elroy'];
      //print_r($hewan);
      //echo $nama[2];

      //sort($angka);
      //print_r($angka);

      //echo count($nama);

      //-----Assosiative Array-----
      //key =>isi

      $data = array( "nama" => "Sebastian",
                     "umur" => 20,
                     "kerja"=> "Mahasiswa"
                   );

      $data2 = array( "Alamat" => "Singosari",
                     "Semester" => "5",
                   );

      //print_r($data);
      //$data['nama'] = "Sebastian Jody Elroy";
      //echo "Nama adalah ", $data['nama'];

      //-----Metode Associative Array-----
      print_r(array_values($data));

    ?>

  </body>
</html>