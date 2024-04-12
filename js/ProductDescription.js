var MainImg =document.getElementById("MainImg");
var SmallImg =document.getElementsByClassName("small-img");

for (let index = 0; index <3; index++) {
    SmallImg[index].onclick = function(){
        MainImg.src = SmallImg[index].src;
    }
    
}

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
  bar.addEventListener('click',function() {
    nav.classList.add('active');
  });
}

if (close) {
  close.addEventListener('click',function() {
    nav.classList.remove('active');
  });
}
