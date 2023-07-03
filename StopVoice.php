<?php
$ID_X=$_POST["id"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
date_default_timezone_set('Europe/Istanbul');
$Time = date("H:i:s");
$json = file_get_contents('./user/data.json');
$data = json_decode($json, true);
foreach ($data as $id => &$items) {
  if ($id == $ID_X) {
    foreach ($items as &$item) {
      $item["time"] = $Time;
      $item["voice_status"] = "empty";
	  file_put_contents('./user/data.json', json_encode($data));
    }
  }
};


}else{

header("Location: ./index.php ") ;
};
?>
