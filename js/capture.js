// Kamerayı aç
navigator.mediaDevices.getUserMedia({ video: true, audio: false })
.then(function(stream) {
  var video = document.querySelector('#video');
  video.srcObject = stream;
  video.play();
})
.catch(function(err) {
  alert("Kamera Aktif Değil");
  document.getElementById("btnCapture").innerHTML="Kamera Aktif Değil"
});

// Fotoğraf çekme butonuna tıklandığında çalışacak fonksiyon
document.querySelector('#btnCapture').addEventListener('click', function() {
  var video = document.querySelector('#video');
  var canvas = document.querySelector('#canvas');
  var context = canvas.getContext('2d');

  // Kameradan görüntüyü çek
  context.drawImage(video, 0, 0, canvas.width, canvas.height);

  // Base64 verisine çevir
  var dataURL = canvas.toDataURL();

  // AJAX ile sunucuya gönder
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'profil.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      //console.log(xhr.responseText);
      
    }
  };
  xhr.send('image=' + encodeURIComponent(dataURL));
});