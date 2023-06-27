


function fileExists(url) {
  fetch(url, {
    cache: 'no-cache'
  })
    .then(response => {
      if (!response.ok) {
        throw new Error(response.statusText);
      }
      console.log("Dosya Var")
      Icon_True(); //console.log(url); deneme
    })
    .catch(error => {
      console.log("Dosya Yok");
    });
}