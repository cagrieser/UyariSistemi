<html>
    <head>
        <body>
        <button id="button">Konumumu Bul</button>
<div id="result"></div>

<script>
    // butonu seçelim
    let GPRS = document.getElementById('GPRS');
    
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
let Bolge = `${position.coords.latitude}:${position.coords.longitude}`;
                            
FetchLog(Bolge);
                            
  
                            

//const Logs = document.getElementById("Giris-Yap");
//Logs.addEventListener("click", FetchLog );          
        
    }
    let Konum_Gelen;
    function FetchLog(Konum_Gelen){
        const formData = new FormData();
      formData.append('Konum', Konum_Gelen);
      
      
      fetch('http://127.0.0.1/Uyari_Sistemi/konum.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.text())
      .then(data => {
        console.log=data; // Sunucudan dönen yanıt
      })
      .catch(error => {
        console.error(error); // Hata durumunda konsola yazdırma
      });
          };
    
</script>
<?php 

$Konum=@$_POST["Konum"];
file_put_contents("abc.txt",$Konum);

?>
    </body>
</head>
</html>