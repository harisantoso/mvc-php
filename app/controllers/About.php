<?php

class About
{
  public function index($nama = 'Santoto', $pekerjaan = 'Programming')
  {
    echo "Halo, nama saya $nama, saya seorang $pekerjaan";
  }

  public function page()
  {
    echo 'About/page';
  }
}