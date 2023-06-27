const resim1 = document.getElementById("cam_id_1");
const resim2 = document.getElementById("cam_id_2");
const resim3 = document.getElementById("cam_id_3");
const resim4 = document.getElementById("cam_id_4");
const resim5 = document.getElementById("cam_id_5");
const resim6 = document.getElementById("cam_id_6");

const popup = document.querySelector('.popup');
const closeBtn = document.querySelector('.close-btn');
const largeImage = document.querySelector('.large-image');
const imageIndex = document.querySelector('.index');

 resim1.addEventListener('click', () => {
        updateImage("cam_id_1");
        popup.classList.toggle('active');
    });
    resim2.addEventListener('click', () => {
        updateImage("cam_id_2");
        popup.classList.toggle('active');
    });
    resim3.addEventListener('click', () => {
        updateImage("cam_id_3");
        popup.classList.toggle('active');
    });
    resim4.addEventListener('click', () => {
        updateImage("cam_id_4");
        popup.classList.toggle('active');
    });
    resim5.addEventListener('click', () => {
        updateImage("cam_id_5");
        popup.classList.toggle('active');
    });
    resim6.addEventListener('click', () => {
        updateImage("cam_id_6");
        popup.classList.toggle('active');
    });


const updateImage = (id_image) => {
    let id_imagex=document.querySelector("#"+id_image).getAttributeNode("path").nodeValue;
    let path = `${id_imagex}`;
    largeImage.src = path;
}
closeBtn.addEventListener('click', () => {
    popup.classList.toggle('active');
})
