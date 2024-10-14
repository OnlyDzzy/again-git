// слайдер 
const block = document.querySelector(".job_image");
const leftB = document.getElementById("left");
const rightB = document.getElementById("right");
const imagE = Array.from(block.querySelectorAll("img"))
const Scount = imagE.length;
let Sindex = 0;
rightB.addEventListener("click",backSlide);
leftB.addEventListener("click",nextSlide);
//функция определения слайда на экране 
function backSlide(){
    Sindex = (Sindex - 1 + Scount)% Scount;
    updateSlider();
};
function nextSlide(){
    Sindex = (Sindex + 1 )% Scount;
    updateSlider();
};
// слайдер показывает слайд и скрывает стальные 
function updateSlider() {
    imagE.forEach((slide, index) => {
      if (index === Sindex) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
    });
  }
  //отобразить первый слайд и настроить слайдер для начала работы.
  updateSlider();
  
  // Код для второго проекта (аналогичный)

  const block2 = document.querySelector(".job_image2");
  const leftB2 = document.getElementById("left2");
  const rightB2 = document.getElementById("right2");
  const imagE2 = Array.from(block2.querySelectorAll("img"))
  const Scount2 = imagE2.length;
  let Sindex2 = 0;
  rightB2.addEventListener("click",backSlide2);
leftB2.addEventListener("click",nextSlide2);
//функция определения слайда на экране 
function backSlide2(){
    Sindex2 = (Sindex2 - 1 + Scount2)% Scount2;
    updateSlider2();
};
function nextSlide2(){
    Sindex2 = (Sindex2 + 1 )% Scount2;
    updateSlider2();
};
// слайдер показывает слайд и скрывает стальные 
function updateSlider2() {
    imagE2.forEach((slide, index) => {
      if (index === Sindex2) {
        slide.style.display = 'block';
      } else {
        slide.style.display = 'none';
      }
    });
  }
  //отобразить первый слайд и настроить слайдер для начала работы.
  updateSlider2();