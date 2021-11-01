<?php

class Mahasiswa_model
{
  // private $mhs = [
  //   [
  //     "nama" => "Hari Santoso",
  //     "nrp" => "12061668",
  //     "email" => "santoso.hr@yahoo.com",
  //     "jurusan" => "Sistem Informasi"
  //   ],
  //   [
  //     "nama" => "Arif Gunawan",
  //     "nrp" => "12061661",
  //     "email" => "arifgunawan@yahoo.com",
  //     "jurusan" => "Teknik Informasi"
  //   ],
  //   [
  //     "nama" => "zay",
  //     "nrp" => "12061669",
  //     "email" => "zay@yahoo.com",
  //     "jurusan" => "Management Informasi"
  //   ]
  // ];

  private $dbh; //database hendler
  private $stmt; //statement

  public function __construct()
  {
    // data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
