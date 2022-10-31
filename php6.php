<html>
  <head>
    <title>Belajar PHP</title>
  </head>
  <body>

    <h1>Array PHP</h1>
    
    <?php

      // $angka = [5,10,2,1,6];
      // $hewan = array('ayam','kuda','buaya', 'biawak');
      // $nama  = ['Sebastian', 'Jody', 'Elroy'];

      //print_r($hewan);
      //echo $nama[2];

      //sort($angka);
      //print_r($angka);

      //echo count($nama);

      //-----Assosiative Array-----
      //key =>isi

      //$data = array( "nama" => "Yunisa",
      //               "umur" => 20,
      //               "kerja"=> "Mahasiswa"
      //        );
    
      //$data2 = array( "Alamat" => "Singosari",
      //                "laptop" => "ACER",
      //         );

      //print_r($data);
      //$data['nama'] = "Sebastian Jody Elroy";
      //echo "Nama adalah ", $data['nama'];

      //-----Metode Associative Array-----
      //print_r(array_values($data));

      //-----Multi Dimensi Array-----

      $data = array( 
                array("Progammer", "25","males"),
                array("Asisten", "25", "rajin"),
                array("UI/UX Design", "35", "males banget"),
              );

      $data[2][0] = "Data Analist";
      echo $data[2][0];
    ?>

  </body>
</html>