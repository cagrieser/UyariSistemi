<!DOCTYPE html>
<?php
$user_credentials = array(
  'user1' => 'pass1',
  'user2' => 'pass2',
  'user3' => 'pass3',
  'user4' => 'pass4',
  'user5' => 'pass5',
  'user6' => 'pass6'
);

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
  !array_key_exists($_SERVER['PHP_AUTH_USER'], $user_credentials) ||
  $user_credentials[$_SERVER['PHP_AUTH_USER']] != $_SERVER['PHP_AUTH_PW']) {
  header('WWW-Authenticate: Basic realm="My Realm"'); // WWW-Authenticate olarak login yapılmaktadır.
  header('HTTP/1.0 401 Unauthorized');
  echo 'Erişim yetkiniz yok.';
  exit;
}
if ($_SERVER['PHP_AUTH_USER'] == 'user1') {
  $json_user = 'id_1';
  }else if($_SERVER['PHP_AUTH_USER'] == 'user2'){
    $json_user = 'id_2';
  }else if($_SERVER['PHP_AUTH_USER'] == 'user3'){
    $json_user = 'id_3';
  }else if($_SERVER['PHP_AUTH_USER'] == 'user4'){
    $json_user = 'id_4';
  }else if($_SERVER['PHP_AUTH_USER'] == 'user5'){
    $json_user = 'id_5';
  }else if($_SERVER['PHP_AUTH_USER'] == 'user6'){
    $json_user = 'id_6';
  };
?>
<html>
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alarm Sistemi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <!-- JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- https://fontawesome.com/icons/ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


<style>
    #video {
      border: 1px solid #f14668; /* bir çerçeve etrafında video oynatıcısı */
      border-radius: 30px; /* kenar yuvarlama */
      box-shadow: 0px 0px 10px #f14668; /* hafif bir gölge ekleme */
      margin: 10px; /* dış boşluk */
      object-fit: cover; /* video boyutunu ölçeklendirme */
      filter: grayscale(100%);
    }

    ::-webkit-scrollbar {
      display: none;
    }

    #durum {
  border: 1px solid #f14668;
  background-color: #f14668;
  color: white;
  box-shadow: 0px 0px 5px #f14668;
}
  </style>


<link rel="stylesheet" href="./css/pure.css">



<body>

<br><br><div class="has-text-warning has-text-black-bis"><div class="content"><h5 id="formats"></h5></div></div>
<div class="container">
  <div class="columns is-mobile is-centered">
    <div class="column">
      <div class="field is-grouped is-grouped-centered">
        <div class="control">
        <video id="video" width="340" height="180" autoplay></video>
    <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
    <div class="control buttons are-small field is-grouped is-grouped-centered">
          <button class="button is-small is-fullwidth is-danger is-outlined" id="btnCapture" >Fotoğraf Çek</button>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="columns is-mobile is-centered">
    <div class="column">
      <div class="field is-grouped is-grouped-centered">
        <div class="control">
          <button class="button is-small is-fullwidth is-danger is-outlined" id="recordButton">Kayıt&nbsp<i class="fa-solid fa-satellite-dish"></i></button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth is-danger is-outlined" id="pauseButton" disabled>Durakla</button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth is-danger is-outlined" id="stopButton" disabled>Bitir</button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth is-danger is-outlined" id="gonderButton" >Gönder</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
<div class="columns is-mobile is-multiline is-centered">
<div class="column is-half">
<div class="select is-small has-text-danger">
  <select id="durum" onchange="selected_status()">
  <option value="x" >Durum Seçimi</option>
  <option value="a" >Yardıma İhtiyacı Var</option>
  <option value="b">Kendini İyi Hissetmiyor</option>
  <option value="c">Saldırı Altında</option>
  <option value="d">Tehlikeli Bölge</option>
  <option value="e">İyi</option>
  </select>
  </div>
</div>
</div>
</div>
</div><br>

<div class="container">
<div class="columns is-mobile is-multiline is-centered">
<div class="column is-half">
<button class="button is-small is-responsive is-danger is-outlined" onclick="durum_guncelle();" id="durum_guncelle" >Durumu Gönder</button>


</div>
</div>
</div>

<div class="container">
<div class="columns is-mobile is-multiline is-centered">
<div class="column is-half">

<button class="button is-small is-responsive is-danger is-outlined" id="GPRS" >Konum Gönder  </button>

</div>
</div>
</div>
<div class="container">
  <div class="columns is-mobile is-multiline is-centered">
    <div class="column is-full-mobile is-half-tablet">
<button class="button is-small is-responsive is-danger is-outlined" id="Acil-Durum">


<?php
$json = file_get_contents('./user/data.json');
$decode_data = json_decode($json,true);
$warning=$decode_data[$json_user][0]["warning"];
if($warning == "etkin"){
  echo "Acil Durum Butonu Aktif Edildi";
}else{
  echo "Acil Durum Butonu Pasif Edildi";
};

?>
&nbsp<i class="fa-solid fa-bell"></i></button>
</div>
</div>
</div>
<div class="container">
  <div class="columns is-mobile is-multiline is-centered">
    <div class="column is-full-mobile is-half-tablet">
<button class="button is-small is-responsive is-danger is-outlined" id="voice_play" onclick="PlayNotificationAudio()" user="<?php echo $json_user;?>">&nbsp Bildirim Kontrol Ediliyor... &nbsp<i class="fa-solid fa-spinner"></i></button>
</div>
</div>
</div>
<script type="text/javascript">
let Voice_ID,User_ID,StatusVoice;
let notificationMP3="./audio/notification.mp3";
let NotiMP3=new Audio(notificationMP3);
User_ID=document.querySelector("#voice_play").getAttributeNode("user").nodeValue;

let VoiceCon=setInterval(VoiceControl,5000);
function VoiceControl() {
    fetch("./user/data.json", {
            cache: 'no-cache' // Her istek yeni bir istektir önbellekten alıntı yapılmaz
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(User) {

        switch(User_ID){
          case "id_1":Voice_ID=User.id_1[0].voice_admin;StatusVoice=User.id_1[0].voice_admin_status;
          break;
          case "id_2":Voice_ID=User.id_2[0].voice_admin;StatusVoice=User.id_2[0].voice_admin_status;
          break;
          case "id_3":Voice_ID=User.id_3[0].voice_admin;StatusVoice=User.id_3[0].voice_admin_status;
          break;
          case "id_4":Voice_ID=User.id_4[0].voice_admin;StatusVoice=User.id_4[0].voice_admin_status;
          break;
          case "id_5":Voice_ID=User.id_5[0].voice_admin;StatusVoice=User.id_5[0].voice_admin_status;
          break;
          case "id_6":Voice_ID=User.id_6[0].voice_admin;StatusVoice=User.id_6[0].voice_admin_status;
          break;
        }

        let StatusAudioVoice="loaded";
        if(StatusVoice == StatusAudioVoice ){
          document.querySelector("#voice_play").innerHTML="Sesli Bildiriminiz Var &nbsp"+"<i class='fa-solid fa-circle-exclamation'></i>";
          PlayNotificationMP3();
          navigator.vibrate([100,30,100,30,100,100,30,100,30,100,100,30,100,30,100]);
        }else{
          document.querySelector("#voice_play").innerHTML="Bildirim Yok &nbsp"+"<i class='fa-solid fa-bell-slash'></i>";
        }
        //alert(User.id_1[0].voice_admin);
        })};

  function PlayNotificationMP3(){
  NotiMP3.play();
  //case "puase": NotiMP3.pause();

  }
  function PlayNotificationAudio(){
    let DirVoice="./voice/admin/"+User_ID+"/"+Voice_ID;
    let AudioP=new Audio(DirVoice);
    AudioP.play();
    VoiceReset();
  }

  function VoiceReset(){
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "./voiceSender.php"); // Aşağıdada olabilir.
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {

      }
  };
  var data = "voice_status=Reset&id_voice="+User_ID // gönderilecek veriler
  xhr.send(data);
  }
    // Camera Event Listener

    let ButonCap=document.getElementById("btnCapture");
    ButonCap.addEventListener("click",function(){
      ButonCap.innerHTML="Fotoğraf Sisteme İletildi";
  setTimeout(function(){
    ButonCap.innerHTML="Fotoğraf Çek";
  },2000);
    })


    // butonu seçelim

    let GPRS = document.getElementById('GPRS'); // GPRS butonuna ulaşır 10 saniyede bir tıklar
    setInterval(function() {
    GPRS.click();
    }, 10000);

    // butona tıklandığında bunu yakalayalım
    GPRS.onclick = function(){

        // tarayıcının destekleyip desteklemediğine bakalım
        if (navigator.geolocation) {

            // Eğer kullanıcı izin vermiş ise showPosition fonksiyonu çalışacak
            navigator.geolocation.getCurrentPosition(showPosition);

        } else {
            x.innerHTML = "Geolocation tarayıcınızda desteklenmiyor.";
        }

    };

    // position ile gönderilen datayı alıyoruz
    function showPosition(position){

        // sonuçları göstereceğimiz etiketi seçtik

        // sonuçları etiketimizin içinde gösteriyoruz
let Bolge = `${position.coords.latitude} ${position.coords.longitude}`;

FetchLog(Bolge); // Bölge alınır




//const Logs = document.getElementById("Giris-Yap");
//Logs.addEventListener("click", FetchLog );

    }
    let Konum_Gelen;
    function FetchLog(Konum_Gelen){ // Bolge buraya atılır
        const formData = new FormData();
      formData.append('Konum', Konum_Gelen); // Konum=GPRS Verisi Eklenir


      fetch('./UserPanel.php', { // FETCH API ile POST verisi gönderilir.
        method: 'POST',
        body: formData // FormData yukarıda Append ile verildi
      })/*
      .then(response => response.text())
      .then(data => {
        console.log=data; // Sunucudan dönen yanıt
      })
      .catch(error => {
        console.error(error); // Hata durumunda konsola yazdırma
      });*/ // Hataya Sebep veriyor console.log  + gereksiz kod
          };

          let Data_Post;
function selected_status(){
  var SelectX = document.getElementById('durum');
		var SelectXvalue = SelectX.options[SelectX.selectedIndex].value; // Value Değeri gerek yok
		var SelectXtext = SelectX.options[SelectX.selectedIndex].text;
		Data_Post=SelectXtext
}
  function durum_guncelle(){
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "./UserPanel.php"); // Aşağıdada olabilir.
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          // İstek tamamlandı, yanıt alındı ve işleme başlayabiliriz
          //document.querySelector("#durum").value+=(this.responseText);
      }
  };
  var data = "status=" + Data_Post; // gönderilecek veriler
  xhr.send(data);
  let durum_guncelle=document.querySelector("#durum_guncelle");
  durum_guncelle.innerHTML=("Durum Gönderildi")
  setTimeout(function(){

    durum_guncelle.innerHTML=("Durumu Gönder")},3000
  )
}

GPRS.addEventListener("click",GPRSTimeText);
function GPRSTimeText(){
  GPRS.innerHTML="Konum Gönderildi";
  setTimeout(function(){
    GPRS.innerHTML=("Konum Gönder")},3000
  )}
// ACİL DURUM BUTONU AYARLANACAK
 let AcilButon=document.querySelector("#Acil-Durum");
 AcilButon.addEventListener("click",function(){
 Acil("<?php echo $json_user; ?>","<?php echo $warning;?>")});


    function Acil(Gelen_ID,Durum_Kodu){
        const formData = new FormData();
      formData.append('acil', Gelen_ID);
      formData.append('durum_kodu', Durum_Kodu);


      fetch('./UserPanel.php', {
        method: 'POST',
        body: formData
      })

    let ButtonText=document.getElementById("Acil-Durum").innerHTML;
    if(ButtonText.includes("Aktif")){
      ButtonText=" Acil Durum Butonu Pasif Edildi&nbsp;"+"<i class='fa-solid fa-bell'></i>";
    }else if(ButtonText.includes("Pasif")){
      ButtonText=" Acil Durum Butonu Aktif Edildi&nbsp;"+"<i class='fa-solid fa-bell'></i>";
    }
    document.getElementById("Acil-Durum").innerHTML = ButtonText;
    };



</script>

<?php
date_default_timezone_set('Europe/Istanbul');
$json = file_get_contents('./user/data.json');
$data = json_decode($json, true);
$Konum=@$_POST["Konum"];
if(isset($Konum)){
// JSON dosyasını oku
//$json = file_get_contents('./user/data.json');
$Time = date("H:i:s");
// JSON verisini diziye çevir
//$data = json_decode($json, true);

// Yalnızca "id_2" alanındaki "time" değerlerini güncelle
foreach ($data as $id => &$items) {
  if ($id == $json_user) {
    foreach ($items as &$item) {
      $item["time"] = $Time;
      $item["gprs"] = $Konum;
    }
  }
  file_put_contents('./user/data.json', json_encode($data));
};

// Güncellenmiş JSON verisini dosyaya yaz





  /*
file_put_contents("./user/id/00001/gprs",$Konum);
$Time = date("H:i:s");
file_put_contents("./user/id/00001/time",$Time);
*/
}
$Status=@$_POST["status"];
if(isset($Status)){
  // JSON dosyasını oku
  //$json = file_get_contents('./user/data.json');
  $Time = date("H:i:s");
  // JSON verisini diziye çevir
  //$data = json_decode($json, true);

  // Yalnızca "id_2" alanındaki "time" değerlerini güncelle
  foreach ($data as $id => &$items) {
    if ($id == $json_user) {
      foreach ($items as &$item) {
        $item["time"] = $Time;
        $item["status"] = $Status;
      }
    }
  }

  // Güncellenmiş JSON verisini dosyaya yaz
  file_put_contents('./user/data.json', json_encode($data));
};
// Voice Upload

if (!empty($_FILES['audio_data'])){
@$sizeVoice = $_FILES['audio_data']['size'];
@$inputVoice = $_FILES['audio_data']['tmp_name'];
$hashed = uniqid();
$output = md5($hashed).".wav";
$Dir_Voice = "./voice/".$json_user."/".$output;

move_uploaded_file($inputVoice, $Dir_Voice);
$Time = date("H:i:s");
foreach ($data as $id => &$items) {
  if ($id == $json_user) {
    foreach ($items as &$item) {
      $item["time"] = $Time;
      $item["voice"] = $output;
      $item["voice_status"] = "loaded";
    }
  }
}
file_put_contents('./user/data.json', json_encode($data));
};

@$Acil=$_POST["acil"];
@$Durum_Kodu=$_POST["durum_kodu"];
if(isset($Acil)){
foreach ($data as $id => &$items) {
  if ($id == $json_user) {
    if($warning == "pasif"){
    foreach ($items as &$item) {
      $Time = date("H:i:s");
      $item["time"] = $Time;
      $item["warning"] = "etkin";
      file_put_contents('./user/data.json', json_encode($data));
    }
  }else{
    foreach ($items as &$item) {
      $Time = date("H:i:s");
      $item["time"] = $Time;
      $item["warning"] = "pasif";
      file_put_contents('./user/data.json', json_encode($data));
  }}
}
}
};


if (@$_POST["image"] && $_SERVER['REQUEST_METHOD'] === 'POST') {
  $dataURL = $_POST['image'];
  $dataURL = str_replace('data:image/png;base64,', '', $dataURL);
  $dataURL = str_replace(' ', '+', $dataURL);
  $image = base64_decode($dataURL);
  $filename = './cam/' . uniqid() . '.png';
  file_put_contents($filename, $image);
  echo 'Fotoğraf kaydedildi: ' . $filename;
  $time = date("H:i:s");
  foreach ($data as $id => &$items) {
    if ($id == $json_user) {
      foreach ($items as &$item) {
        $item["time"] = $time;
        $item["camera"] = $filename;
        $item["camera_status"] = "loaded";
        file_put_contents('./user/data.json', json_encode($data));
      }
    }
  };

};
?>
<script src="js/recorder.js"></script>
  	<script src="js/app.js"></script>
    <script src="./js/capture.js"></script>
<body>

</head>
</html>
