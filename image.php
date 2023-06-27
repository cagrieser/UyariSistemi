<?php
$ID_X=$_POST["id"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
date_default_timezone_set('Europe/Istanbul');
$Time = date("H:i:s");
$json = file_get_contents('./user/data.json'); // JSON Verisini Çeker
$data = json_decode($json, true); // Decode işlemi yaparak arraye atar
foreach ($data as $id => &$items) { // Array id ve items olarak parçalanır
  if ($id == $ID_X) { // ID Giriş yapıldığında değişkene atandığı için ( ID_X) eğere eşit olduğunda zamanı günceller.
    foreach ($items as &$item) {
      $item["time"] = $Time; // Zaman değişkeni yukarıda tanımlanmıştır.
      $item["camera_status"] = "empty"; // Kamera boş olarak tanımlanır.
	  file_put_contents('./user/data.json', json_encode($data));
    }
  }
};


}else{

header("Location: ./index.php ") ;
};
?>
