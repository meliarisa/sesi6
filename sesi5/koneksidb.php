<?php
    include("konfigurasi.php");

  //  echo "host: " . DBHOST;
  $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        echo "koneksi sukses";
        $sql1 = "CREATE DATABASE " . DBNAME;
    
        $hasil = mysqli_query($cnn, $sql1);

        if($hasil){
            echo "Dabase" . DBNAME . "BERHASIL DIBUAT";
        }else{
            echo  "Database" . DBNAME . "GAGAL DIBUAT";
        }
    }else{
        echo "koneksi gagal<br>" . mysqli_connect_error();
    }