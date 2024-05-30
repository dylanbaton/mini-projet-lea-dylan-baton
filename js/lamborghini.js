const slide2 = ["lb-lamborghini-1.jpg", "lb-lamborghini-2.jpg", "lb-lamborghini-3.jpg", "lb-lamborghini-4.jpg", "lb-lamborghini-5.jpg", 
"lb-lamborghini-6.jpg", "lb-lamborghini-7.jpg", "lb-lamborghini-8.jpg", "lb-lamborghini-9.jpg", "lb-lamborghini-10.jpg"];
let numero2 = 0;

function ChangeSlide2(sens) {
    numero2 = numero2 + sens;
    if (numero2 < 0)
        numero2 = slide2.length - 1;
    if (numero2 > slide2.length - 1)
        numero2 = 0;
    document.getElementById("slide2").src = "images/liberty-work/lamborghini/" + slide2[numero];
}