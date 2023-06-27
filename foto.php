<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $dataURL = $_POST['image'];
  $dataURL = str_replace('data:image/png;base64,', '', $dataURL);
  $dataURL = str_replace(' ', '+', $dataURL);
  $image = base64_decode($dataURL);
  $filename = './cam/' . uniqid() . '.png';
  file_put_contents($filename, $image);
  echo 'Fotoğraf kaydedildi: ' . $filename;
}?>