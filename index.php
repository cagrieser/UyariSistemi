<!DOCTYPE html>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<html>
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
  <head>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alarm Sistemi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./css/resim.css">
    <!-- JavaScript -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- https://fontawesome.com/icons/ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


   <style>::-webkit-scrollbar {
  display: none;
  }</style>

<link rel="stylesheet" href="./css/pure.css">



<body>
<!-- Photo Buton -->
<div class="popup">
<div class="top-bar">
</div>
<span class="close-btn"></span>
<img class="large-image">
</div>
<!-- Photo Buton -->
<audio id="myAudio" src="./audio/x.mp3"></audio>

<div class="columns">
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID1,'id_1');" id="id_1_voice"></i>
  <i class="fa-solid fa-photo-film" id="cam_id_1" path="a"></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_1_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/6.png">
</figure>
</div>
<i class="fa-solid fa-user"></i> Çağrı Eser </br>
      Etkileşim Zamanı : <label id="time_id_00001">Bekleniyor...</label><br> <!-- Burada ki ID numaralarına aşığıda erişim sağlanarak değer güncellenir -->
      Konum : <label id="gprs_id_00001">Bekleniyor...</label><br>
      Durum : <label id="status_id_00001">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID2,'id_2');" id="id_2_voice"></i> <!-- Voice ID2,"id_2 " Parametreleri Fonksiyona göderilir.-->
  <i class="fa-solid fa-photo-film" id="cam_id_2" path=""></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_2_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/3.png">
</figure>
</div>
<i class="fa-solid fa-user">
 </i> Dz. Kuv.Mehmet Ata </br>
Etkileşim Zamanı : <label id="time_id_00002">Bekleniyor...</label><br>
      Konum : <label id="gprs_id_00002">Bekleniyor...</label><br>
      Durum : <label id="status_id_00002">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID3,'id_3');" id="id_3_voice"></i>
  <i class="fa-solid fa-photo-film" id="cam_id_3" path=""></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_3_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/4.png">
</figure>
</div>
<i class="fa-solid fa-user"></i> Half Life Komutan </br>
Etkileşim Zamanı : <label id="time_id_00003">Bekleniyor...</label><br>
      Konum : <label id="gprs_id_00003">Bekleniyor...</label><br>
      Durum : <label id="status_id_00003">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
</div>

<div class="columns">
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID4,'id_4');" id="id_4_voice"></i>
  <i class="fa-solid fa-photo-film" id="cam_id_4" path=""></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_4_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/5.png">
</figure>
</div>
<i class="fa-solid fa-user"></i> SAS Agent John </br>
Etkileşim Zamanı : <label id="time_id_00004">Bekleniyor...</label><br>
      Konum : <label id="gprs_id_00004">Bekleniyor...</label><br>
      Durum : <label id="status_id_00004">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID5,'id_5');" id="id_5_voice"></i>
  <i class="fa-solid fa-photo-film" id="cam_id_5" path=""></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_5_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/2.png">
</figure>
</div>
<i class="fa-solid fa-user"></i> Tuğg.Niyaz Büyükata </br>
Etkileşim Zamanı : <label id="time_id_00005">Bekleniyor...</label><br>
      Konum : <label id="gprs_id_00005">Bekleniyor...</label><br>
      Durum : <label id="status_id_00005">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
  <div class="column">
  <div class="card" >
  <i class="fa-solid fa-radio" onclick="AudioIDMessage(VoiceID6,'id_6');" id="id_6_voice"></i>
  <i class="fa-solid fa-photo-film" id="cam_id_6" path=""></i>
    <div class="has-text-white">
    <div class="has-background-dark" id="id_6_alarm">
  <div class="card-content">
    <div class="content">
    <div class="columns is-mobile is-multiline is-centered">
    <figure class="image is-128x128">
  <img class="is-rounded" src="./img/1.png">
</figure>
</div>
<i class="fa-solid fa-user"></i> Tümg.Sultan Sancar </br>
Etkileşim Zamanı : <label id="time_id_00006">Bekleniyor...</label><br>
      Konum : <label id="gprs_id_00006">Bekleniyor...</label><br>
      Durum : <label id="status_id_00006">Bekleniyor...</label><br>
    </div>
  </div>
</div></div></div>
  </div>
</div>

<div class="container">
<div class="columns is-mobile is-multiline is-centered">
<div class="column is-half">

<div id="loader-1">
		<span></span><span></span><span></span><span></span><span></span>
	</div>
  </div>
</div></div>
<h5 id="formats">
<div class="container">
  <div class="columns is-mobile is-centered">
    <div class="column">
      <div class="field is-grouped is-grouped-centered">
        <div class="control">
          <button class="button is-small is-fullwidth has-background-white-ter" onclick="Recoder_Voice_Stop_Alarm()" id="recordButton">Kayıt &nbsp<i class="fa-solid fa-microphone"></i></button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth has-background-white-ter" id="pauseButton" disabled>Durakla &nbsp<i class="fa-solid fa-circle-stop"></i></button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth has-background-white-ter" onclick="Recoder_Voice_Play_Alarm()" id="stopButton" disabled>Bitir &nbsp<i class="fa-solid fa-microphone-slash"></i></button>
        </div>
        <div class="control">
          <button class="button is-small is-fullwidth has-background-white-ter " id="gonderButton" >Gönder &nbsp<i class="fa-brands fa-soundcloud"></i></button>
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
<select id="voice_user" class="select is-small has-text-black has-background-white-ter" onchange="Selected_Voice_User_ID()">
  <option>İletişime Geç</option>
  <option value="id_1" >Çağrı Eser</option>
  <option value="id_2" >Dz. Kuv.Mehmet Ata</option>
  <option value="id_3">Half Life Komutan</option>
  <option value="id_4">SAS Agent John</option>
  <option value="id_5">Tuğg.Niyaz Büyükata</option>
  <option value="id_6">Tümg.Sultan Sancar</option>
  </select>
      </div>
    </div>
  </div>
</div>

<script src="./alert/DNDAlert.js"></script>
<script>
/*
alerting(); // Alerting fonksiyonu çağrılır
  function alerting() {
    const DNDALERT = new DNDAlert({
      title: "Test Alert",
      message:
        "Güvenlik Sistemleri Aktif",

      type: "info",
      html: false,
      buttons: [
        {
          text: "Ok",
          type: "primary",
          onClick: (bag) => {
			toggleFullScreen(); // Tam ekran yapmka için kullanılır
          },
        },
        {
          text: "Cancel",
          onClick: (bag) => {
            bag.CLOSE_MODAL();
          },
        },
      ],
      closeBackgroundClick: true,
      portalElement: document.querySelector("body"),
      portalOverflowHidden: true,
      textAlign: "center",
      theme: "dark",
      onOpen: (bag) => {
        console.log("Modal Opened");
        console.log(bag.PROPERTIES);
      },
      onClose: (bag) => {
        console.log("Modal Closed");
        console.log(bag);
      },
      opacity: 1,
      autoCloseDuration: 10000,
      draggable: true,
      animationStatus: true,
      closeIcon: false,
      sourceControlWarning: true,

    });
  }
function toggleFullScreen() {
    if ((document.fullScreenElement && document.fullScreenElement !== null) ||
        (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
            document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}
*/
</script>
<script type="text/javascript">
let VoiceUser,Select_Voice_User;
function Selected_Voice_User_ID(){
VoiceUser=document.getElementById("voice_user");
Select_Voice_User=VoiceUser.options[VoiceUser.selectedIndex].value;
}

console.log('%cÇağrı Eser Tarafından Oluşturulmuştur', 'font-size: 15px; font-weight: italic; color: #9e102f;');
console.log('%cDurum Bildirim Sistem Tasarımı Olarak Kullanılabilir', 'font-size: 15px; font-weight: italic; color: #9e102f;');
console.log('%c2023 - PHP & Javascript Projesi', 'font-size: 15px; font-weight: italic; color: #107b9e;');

/*window.addEventListener('DOMContentLoaded', function() {
  document.querySelector('button[type="submit"]').click();
});*/
let AlarmInt, AlarmInt2, Play;
let Deger = "etkin";
let Voice_Status_Val = "loaded"; // Global Val - All ID's
let Camera_Status_Value = "loaded" // Global Value - ALL ID Camera
let OtomatikKontrol = setInterval(getFet, 2000);
let VoiceID1, VoiceID2, VoiceID3, VoiceID4, VoiceID5, VoiceID6, text; // Voice Değişkenlerini Global kullanırız
let req = 0;

function getFet() {
    fetch("./user/data.json", {
            cache: 'no-cache' // Her istek yeni bir istektir önbellekten alıntı yapılmaz
        })
        .then(function(response) {
            return response.json(); // JSON olarak değerleri alırız
        })
        .then(function(text) { // Text atıp okuma yapabiliriz.
            req++;
            console.log('\x1b[32m%s', 'Sistem Aktif - Çalışıyor...' + "Request " + req); // Consola renkli yazdırmak için
            if (text.id_1[0].warning == Deger || text.id_2[0].warning == Deger || text.id_3[0].warning == Deger || text.id_4[0].warning == Deger || text.id_5[0].warning == Deger || text.id_6[0].warning == Deger) {
                navigator.vibrate([100,30,100,30,100]); // Titreşim
                playAudio();
            } else {
                //Alarm3();
                StopAudio()
                //setTimeout(playAudio, 5000)
            };

            if (text.id_1[0].warning == Deger) {
                AlarmColorRedDark(text.id_1[0].id + "_alarm");
            } else {
                Alarm3(text.id_1[0].id + "_alarm");
            };
            if (text.id_2[0].warning == Deger) {
                AlarmColorRedDark(text.id_2[0].id + "_alarm");
            } else {
                Alarm3(text.id_2[0].id + "_alarm");
            };
            if (text.id_3[0].warning == Deger) {
                AlarmColorRedDark(text.id_3[0].id + "_alarm");
            } else {
                Alarm3(text.id_3[0].id + "_alarm");
            };
            if (text.id_4[0].warning == Deger) {
                AlarmColorRedDark(text.id_4[0].id + "_alarm");
            } else {
                Alarm3(text.id_4[0].id + "_alarm");
            };
            if (text.id_5[0].warning == Deger) {
                AlarmColorRedDark(text.id_5[0].id + "_alarm");
            } else {
                Alarm3(text.id_5[0].id + "_alarm");
            }
            if (text.id_6[0].warning == Deger) {
                AlarmColorRedDark(text.id_6[0].id + "_alarm");
            } else {
                Alarm3(text.id_6[0].id + "_alarm");

            }




            if (text.id_1[0].voice_status == Voice_Status_Val) {
                Icon_True_1();
            } else {
                Icon_False_1();
            };
            if (text.id_2[0].voice_status == Voice_Status_Val) {
                Icon_True_2();
            } else {
                Icon_False_2();
            };
            if (text.id_3[0].voice_status == Voice_Status_Val) {
                Icon_True_3();
            } else {
                Icon_False_3();
            };
            if (text.id_4[0].voice_status == Voice_Status_Val) {
                Icon_True_4();
            } else {
                Icon_False_4();
            };
            if (text.id_5[0].voice_status == Voice_Status_Val) {
                Icon_True_5();
            } else {
                Icon_False_5();
            };
            if (text.id_6[0].voice_status == Voice_Status_Val) {
                Icon_True_6();
            } else {
                Icon_False_6();
            };
            VoiceID1 = text.id_1[0].voice;
            VoiceID2 = text.id_2[0].voice;
            VoiceID3 = text.id_3[0].voice;
            VoiceID4 = text.id_4[0].voice;
            VoiceID5 = text.id_5[0].voice;
            VoiceID6 = text.id_6[0].voice;

            //Time Guncelleme
            UpdateData("time_id_00001", text.id_1[0].time)
            UpdateData("time_id_00002", text.id_2[0].time)
            UpdateData("time_id_00003", text.id_3[0].time)
            UpdateData("time_id_00004", text.id_4[0].time)
            UpdateData("time_id_00005", text.id_5[0].time)
            UpdateData("time_id_00006", text.id_6[0].time)
            // Gprs
            UpdateData("gprs_id_00001", text.id_1[0].gprs)
            UpdateData("gprs_id_00002", text.id_2[0].gprs)
            UpdateData("gprs_id_00003", text.id_3[0].gprs)
            UpdateData("gprs_id_00004", text.id_4[0].gprs)
            UpdateData("gprs_id_00005", text.id_5[0].gprs)
            UpdateData("gprs_id_00006", text.id_6[0].gprs)
            // Status
            UpdateData("status_id_00001", text.id_1[0].status)
            UpdateData("status_id_00002", text.id_2[0].status)
            UpdateData("status_id_00003", text.id_3[0].status)
            UpdateData("status_id_00004", text.id_4[0].status)
            UpdateData("status_id_00005", text.id_5[0].status)
            UpdateData("status_id_00006", text.id_6[0].status)


            // Fonksiyon
            function UpdateData(id, value) {
                document.querySelector("#" + id).innerHTML = value;;
            }

            // Camera Status - Camera IMG
            document.querySelector("#cam_id_1").getAttributeNode("path").nodeValue = text.id_1[0].camera;
            document.querySelector("#cam_id_2").getAttributeNode("path").nodeValue = text.id_2[0].camera;
            document.querySelector("#cam_id_3").getAttributeNode("path").nodeValue = text.id_3[0].camera;
            document.querySelector("#cam_id_4").getAttributeNode("path").nodeValue = text.id_4[0].camera;
            document.querySelector("#cam_id_5").getAttributeNode("path").nodeValue = text.id_5[0].camera;
            document.querySelector("#cam_id_6").getAttributeNode("path").nodeValue = text.id_6[0].camera;

            if (text.id_1[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_1();
            } else {
                Photo_Ico_False_1();
            };
            if (text.id_2[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_2();
            } else {
                Photo_Ico_False_2();
            };
            if (text.id_3[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_3();
            } else {
                Photo_Ico_False_3();
            };
            if (text.id_4[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_4();
            } else {
                Photo_Ico_False_4();
            };
            if (text.id_5[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_5();
            } else {
                Photo_Ico_False_5();
            };
            if (text.id_6[0].camera_status == Camera_Status_Value) {
                Photo_Ico_True_6();
            } else {
                Photo_Ico_False_6();
            };

        })
};



function playAudio() {
    var audio = document.getElementById("myAudio");
    audio.play(); // Degere eşit var ise çalışır yoksa StopAudio() çalışmaktadır.
}

function StopAudio() {
    var audio = document.getElementById("myAudio");
    audio.pause();
}

// Alarmlar

function AlarmColorRedDark(getID_Alarm) { // Burada renk ayarı yapılır
    Alarm(getID_Alarm);
    Alarm2(getID_Alarm);
}

function Alarm(getID_Danger) {
    let ClassUlas = document.querySelector("#" + getID_Danger);
    ClassUlas.setAttribute("class", "has-background-danger")

}

function Alarm2(getID_Dark) {
    let ClassUlas = document.querySelector("#" + getID_Dark);

    setTimeout(function() {
        let ClassUlas = document.querySelector("#" + getID_Dark);
        ClassUlas.setAttribute("class", "has-background-dark");
    }, 500);

}

function Alarm3(id) { // Classname Eğer eşit değilse çalışsın
    let ClassUlas = document.querySelector("#" + id);
    if (ClassUlas && ClassUlas.className !== "has-background-dark") {
        ClassUlas.setAttribute("class", "has-background-dark");
    }
}

let TimeoutId, totalDuration;

function AudioIDMessage(VoiceID, UserID) { // Id alır
    let num_voice_id = "./voice/" + UserID + "/" + VoiceID;
    let PrintAudio = new Audio(num_voice_id)
    PrintAudio.play();
    // Ses dosyasını oynatmadan önce, dosyanın toplam süresini öğrenelim
    // PrintAudio = loadedmetadata yani dosya yüklendiğinde aşağıda ki işlem başlasın
    PrintAudio.addEventListener('loadedmetadata', function() {
        // Dosyanın toplam süresini öğrenelim
        totalDuration = PrintAudio.duration; // Toplam süre öğrenilir.

    });

    clearTimeout(TimeoutId); // Her çağırıldığında setTimeout atanır eğer bu kullanılmaz ise sıfırlama yapılamaz ve sürekli güncelleme alır istek hatası sorunu oluşur
    clearInterval(OtomatikKontrol);

    TimeoutId = setTimeout(function() {
        OtomatikKontrol = setInterval(getFet, 2000);
    }, totalDuration * 1000); // milisaniye cinsinden çarpılıp o kadar geç başlatılır.
};

   function Recoder_Voice_Stop_Alarm(){
    clearTimeout(TimeoutId);
    clearInterval(OtomatikKontrol);

};

function Recoder_Voice_Play_Alarm(){
OtomatikKontrol = setInterval(getFet, 2000);
};


let ico = document.querySelector("#id_1_voice");
let ico2 = document.querySelector("#id_2_voice");
let ico3 = document.querySelector("#id_3_voice");
let ico4 = document.querySelector("#id_4_voice");
let ico5 = document.querySelector("#id_5_voice");
let ico6 = document.querySelector("#id_6_voice");
/*const intervalId = setInterval(() => {
  fileExists("id_1.wav");
}, 1000);*/
let Bildirim, Bildirim2, Bildirim3, Bildirim4, Bildirim5, Bildirim6;
let Bildirim_Ico = {
    ID1: "InActive",
    ID2: "InActive",
    ID3: "InActive",
    ID4: "InActive",
    ID5: "InActive",
    ID6: "InActive",
}
// var ise kontrol eder ve alarm verir icon çalışır.


/*
---------------- Ses Kontrolü -------------------------------------------
İki Değer Döner Icon_True() ve Icon_False()

Eğer yukarıda koşul Icon_True() sağlanır ise; Önce Dark 0.250 ms sonra Danger olur
Bildirim_Ico default değeri InActive'dir ve if koşuluna girer değeri "Active" yapar önce fonksiyonu döngüye sokar
sonra ise tekrar eder.
Tekrar fonksiyona interval ile girince Active olduğunu görünce intervali tekrarlamaz.
else'ye gelir oda koşulu aynısını yapar çok gerekli değil.

Eğer Icon_False() dönerse;
setInterval'ı sıfırlar.
Icon'u Dark'a çevirir.
Bildirim_Ico'yu InActive yapar.Eğer burada InActive yapmaz ise geri tekrar true olduğunda
setInterval çalışmayacaktır.


 */



//---------------- Ses Kontrolü -------------------------------------------

ico.addEventListener("click", function() {
    StopIconAlarm("id_1")
})
ico2.addEventListener("click", function() {
    StopIconAlarm("id_2")
})
ico3.addEventListener("click", function() {
    StopIconAlarm("id_3")
})
ico4.addEventListener("click", function() {
    StopIconAlarm("id_4")
})
ico5.addEventListener("click", function() {
    StopIconAlarm("id_5")
})
ico6.addEventListener("click", function() {
    StopIconAlarm("id_6")
})



function StopIconAlarm(ID) {
    const formIconAlarm = new FormData();
    formIconAlarm.append('id', ID);
    fetch('./StopVoice.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams(formIconAlarm)
    })
};

// User 1 True - False - Voice

function Icon_True_1() {

    ico.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID1 === "InActive") {
        Bildirim = setInterval(Icon_True_1, 500);
        Bildirim_Ico.ID1 = "Active";
    } else {
        Bildirim_Ico.ID1 = "Active";
    }

};

function Icon_False_1() {
    clearInterval(Bildirim);
    ico.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID1 = "InActive";

}

// User 2 True - False - Voice

function Icon_True_2() {

    ico2.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico2.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID2 === "InActive") {
        Bildirim2 = setInterval(Icon_True_2, 500);
        Bildirim_Ico.ID2 = "Active";
    } else {
        Bildirim_Ico.ID2 = "Active";
    }

};

function Icon_False_2() {
    clearInterval(Bildirim2);
    ico2.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID2 = "InActive";

}

// User 3 True - False - Voice

function Icon_True_3() {

    ico3.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico3.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID3 === "InActive") {
        Bildirim3 = setInterval(Icon_True_3, 500);
        Bildirim_Ico.ID3 = "Active";
    } else {
        Bildirim_Ico.ID3 = "Active";
    }

};

function Icon_False_3() {
    clearInterval(Bildirim3);
    ico3.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID3 = "InActive";

}


// User 4 True - False - Voice

function Icon_True_4() {

    ico4.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico4.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID4 === "InActive") {
        Bildirim4 = setInterval(Icon_True_4, 500);
        Bildirim_Ico.ID4 = "Active";
    } else {
        Bildirim_Ico.ID4 = "Active";
    }

};

function Icon_False_4() {
    clearInterval(Bildirim4);
    ico4.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID4 = "InActive";

}

// User 5 True - False - Voice

function Icon_True_5() {

    ico5.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico5.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID5 === "InActive") {
        Bildirim5 = setInterval(Icon_True_5, 500);
        Bildirim_Ico.ID5 = "Active";
    } else {
        Bildirim_Ico.ID5 = "Active";
    }

};

function Icon_False_5() {
    clearInterval(Bildirim5);
    ico5.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID5 = "InActive";

}

// User 6 True - False - Voice

function Icon_True_6() {

    ico6.setAttribute("class", "fa-solid fa-radio");
    setTimeout(() => {
        ico6.setAttribute("class", "fa-solid fa-radio has-text-danger");
    }, 250);
    if (Bildirim_Ico.ID6 === "InActive") {
        Bildirim6 = setInterval(Icon_True_6, 500);
        Bildirim_Ico.ID6 = "Active";
    } else {
        Bildirim_Ico.ID6 = "Active";
    }

};

function Icon_False_6() {
    clearInterval(Bildirim6);
    ico6.setAttribute("class", "fa-solid fa-radio");
    Bildirim_Ico.ID6 = "InActive";

};

// ################## Fotoğraf Ico Control ##################

let cam_ico_1 = document.querySelector("#cam_id_1");
let cam_ico_2 = document.querySelector("#cam_id_2");
let cam_ico_3 = document.querySelector("#cam_id_3");
let cam_ico_4 = document.querySelector("#cam_id_4");
let cam_ico_5 = document.querySelector("#cam_id_5");
let cam_ico_6 = document.querySelector("#cam_id_6");

cam_ico_1.addEventListener("click", function() {
    IMGStopAlarm("id_1")
})
cam_ico_2.addEventListener("click", function() {
    IMGStopAlarm("id_2")
})
cam_ico_3.addEventListener("click", function() {
    IMGStopAlarm("id_3")
})
cam_ico_4.addEventListener("click", function() {
    IMGStopAlarm("id_4")
})
cam_ico_5.addEventListener("click", function() {
    IMGStopAlarm("id_5")
})
cam_ico_6.addEventListener("click", function() {
    IMGStopAlarm("id_6")
});

function IMGStopAlarm(ID) {
    const ImgIconAlarm = new FormData();
    ImgIconAlarm.append('id', ID);
    fetch('./StopCam.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams(ImgIconAlarm)
    })
};

let PhotoNotification1, PhotoNotification2, PhotoNotification3, PhotoNotification4, PhotoNotification5, PhotoNotification6;
let Photo_Ico = {
    ID1: "InActive",
    ID2: "InActive",
    ID3: "InActive",
    ID4: "InActive",
    ID5: "InActive",
    ID6: "InActive",
} // Burada ID'ler Global olarak değerleri verilmiştir.Fotoğraf bildirim güncelleme amaçlıdır.

// User 1 True - False - Voice

function Photo_Ico_True_1() {

    cam_ico_1.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_1.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID1 === "InActive") {
        PhotoNotification1 = setInterval(Photo_Ico_True_1, 500);
        Photo_Ico.ID1 = "Active";
    } else {
        Photo_Ico.ID1 = "Active";
    }

};

function Photo_Ico_False_1() {
    clearInterval(PhotoNotification1);
    cam_ico_1.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID1 = "InActive";

}

// User 2 True - False - Voice

function Photo_Ico_True_2() {

    cam_ico_2.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_2.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID2 === "InActive") {
        PhotoNotification2 = setInterval(Photo_Ico_True_2, 500);
        Photo_Ico.ID2 = "Active";
    } else {
        Photo_Ico.ID2 = "Active";
    }

};

function Photo_Ico_False_2() {
    clearInterval(PhotoNotification2);
    cam_ico_2.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID2 = "InActive";

}

// User 3 True - False - Voice

function Photo_Ico_True_3() {

    cam_ico_3.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_3.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID3 === "InActive") {
        PhotoNotification3 = setInterval(Photo_Ico_True_3, 500);
        Photo_Ico.ID3 = "Active";
    } else {
        Photo_Ico.ID3 = "Active";
    }

};

function Photo_Ico_False_3() {
    clearInterval(PhotoNotification3);
    cam_ico_3.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID3 = "InActive";

}


// User 4 True - False - Voice

function Photo_Ico_True_4() {

    cam_ico_4.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_4.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID4 === "InActive") {
        PhotoNotification4 = setInterval(Photo_Ico_True_4, 500);
        Photo_Ico.ID4 = "Active";
    } else {
        Photo_Ico.ID4 = "Active";
    }

};

function Photo_Ico_False_4() {
    clearInterval(PhotoNotification4);
    cam_ico_4.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID4 = "InActive";

}

// User 5 True - False - Voice

function Photo_Ico_True_5() {

    cam_ico_5.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_5.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID5 === "InActive") {
        PhotoNotification5 = setInterval(Photo_Ico_True_5, 500);
        Photo_Ico.ID5 = "Active";
    } else {
        Photo_Ico.ID5 = "Active";
    }

};

function Photo_Ico_False_5() {
    clearInterval(PhotoNotification5);
    cam_ico_5.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID5 = "InActive";

}

// User 6 True - False - Voice

function Photo_Ico_True_6() {

    cam_ico_6.setAttribute("class", "fa-solid fa-photo-film");
    setTimeout(() => {
        cam_ico_6.setAttribute("class", "fa-solid fa-photo-film has-text-danger");
    }, 250);
    if (Photo_Ico.ID6 === "InActive") {
        PhotoNotification6 = setInterval(Photo_Ico_True_6, 500);
        Photo_Ico.ID6 = "Active";
    } else {
        Photo_Ico.ID6 = "Active";
    }

};

function Photo_Ico_False_6() {
    clearInterval(PhotoNotification6);
    cam_ico_6.setAttribute("class", "fa-solid fa-photo-film");
    Photo_Ico.ID6 = "InActive";

};

</script>
<script src="./js/resim.js"></script>
<script src="./js/app2.js"></script>
<script src="./js/recorder.js"></script>
</head>
</html>
