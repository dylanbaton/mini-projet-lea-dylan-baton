const slide = ["lb-ferrari-1.jpg", "lb-ferrari-2.jpg", "lb-ferrari-3.jpg", "lb-ferrari-4.jpg", "lb-ferrari-5.jpg", "lb-ferrari-6.jpg",
"lb-ferrari-7.jpg", "lb-ferrari-8.jpg", "lb-ferrari-9.jpg", "lb-ferrari-10.jpg"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = "images/liberty-work/ferrari/" + slide[numero];
}