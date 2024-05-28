const slide = ["image-banniere.jpg", "spy.jpg", "image-banniere-jujutsu.jpg", "image-banniere-naruto.jpg"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = "images/manga/" + slide[numero];
}