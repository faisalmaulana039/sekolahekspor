<?php 

$data = [
    'nama' => 'Faisal Maulana Akbar',
    'email' => 'Faisalmaulanaakbar14@gmail.com',
    'ttl' => 'Surabaya, 14 Mei 2001',
    'umur' => '21 Tahun',
    'asal universitas' => 'Universitas Dinamika Surabaya',
    'program studi' => 'S1 Sistem Informasi',
    'organisasi' => 'Badan Eksekutif Mahasiswa',
    'nomor' => '081326442460',
    'media sosial' => ['ig' => '@faisalmau_', 'linkedin' => 'Faisal Maulana Akbar']
  ];
  
  echo '<br>';
  echo 'Nama : '.$data['nama'];
  echo '<br>';
  echo 'Email : '.$data['email'];
  echo '<br>';
  echo 'TTL : '.$data['ttl'];
  echo '<br>';
  echo 'Umur : '.$data['umur'];
  echo '<br>';
  echo 'Asal Universitas : '.$data['asal universitas'];
  echo '<br>';
  echo 'Program Studi : '.$data['program studi'];
  echo '<br>';
  echo 'Organisasi : '.$data['organisasi'];
  echo '<br>';
  echo 'Nomor : '.$data['nomor'];
  echo '<br>';
  echo 'Media Sosial : '.'Instagram '.$data['media sosial']['ig'].' & '.'Linkedin '.$data['media sosial']['linkedin'];
  

?>
