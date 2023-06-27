<?php
$json = file_get_contents('./user/data.json');
$data = json_decode($json, true);

$Voice_ID=@$_POST["id_voice"];
$Voice_Status=@$_POST["voice_status"];

if(!empty($_FILES['audio_data'])){
  @$sizeVoice = $_FILES['audio_data']['size'];
  @$inputVoice = $_FILES['audio_data']['tmp_name'];
  $hashed = uniqid();
  $output = md5($hashed).".wav";
  $Dir_Voice = "./voice/admin/".$Voice_ID."/".$output;

  move_uploaded_file($inputVoice, $Dir_Voice); // Dosya Yükleme


  foreach ($data as $id => &$items) {
    if ($id == $Voice_ID) {
      foreach ($items as &$item) {

        $item["voice_admin"] = $output;
        $item["voice_admin_status"] = "loaded";
      }
    }
  };
  file_put_contents('./user/data.json', json_encode($data));
  };

  if(isset($Voice_Status) && $Voice_Status == "Reset"){
    foreach ($data as $id => &$items) {
        if ($id == $Voice_ID) {
          foreach ($items as &$item) {
            $Time = date("H:i:s");
            $item["time"] = $Time;
            $item["voice_admin_status"] = "empty";
            echo "Sıfırlandı";
          }
        }
      }
      file_put_contents('./user/data.json', json_encode($data));
      };

?>
