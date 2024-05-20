document.addEventListener('DOMContentLoaded', function() {
    const carouselInner = document.querySelector('.carousel-inner');
    const items = document.querySelectorAll('.carousel-item');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0;
    let intervalId; // Variable pour stocker l'ID de l'intervalle

    function showSlide(index) {
        if (index >= items.length) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = items.length - 1;
        } else {
            currentIndex = index;
        }
        const offset = -currentIndex * 100;
        carouselInner.style.transform = `translateX(${offset}%)`;
    }

    function autoSlide() {
        intervalId = setInterval(function() {
            showSlide(currentIndex + 1);
        }, 5000); // Change d'image toutes les 5 secondes (5000 millisecondes)
    }

    function stopAutoSlide() {
        clearInterval(intervalId);
    }

    prevButton.addEventListener('click', function() {
        stopAutoSlide();
        showSlide(currentIndex - 1);
    });

    nextButton.addEventListener('click', function() {
        stopAutoSlide();
        showSlide(currentIndex + 1);
    });

    

    autoSlide(); // Démarre le défilement automatique dès le chargement de la page
    showSlide(currentIndex);
});
