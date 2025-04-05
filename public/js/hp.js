document.addEventListener("DOMContentLoaded", function () {
    // Récupère les URLs d'images depuis l'attribut data-images du conteneur des dots
    const dotsContainer = document.querySelector('.dots-container');
    const images = JSON.parse(dotsContainer.getAttribute('data-images'));

    // Sélectionne le conteneur des images dans le slider
    const container = document.querySelector('.bento-container');
    // Récupère l'image principale déjà présente
    let currentImage = container.querySelector('.main-image');
    if (currentImage) {
        // Positionne l'image actuelle au centre
        currentImage.style.position = "absolute";
        currentImage.style.left = "50%";
        currentImage.style.transform = "translateX(0%)";
        currentImage.style.transition = "transform 1000s ease";
    }

    // Sélectionne tous les dots
    const dots = document.querySelectorAll('.dots-container li');
    let currentIndex = 0;
    const duration = 500; // Durée de la transition en ms

    function showSlide(index) {
        // Crée un nouvel élément image
        const newImage = document.createElement("img");
        newImage.className = "main-image";
        newImage.src = images[index];
        newImage.alt = "main-img";
        newImage.style.transition = "transform 0.5s ease";
        // Position initiale : hors écran à droite (transform calcule : 150% - 50% = 100% de décalage par rapport au centre)
        newImage.style.transform = "translateX(100%)";

        // Ajoute la nouvelle image dans le conteneur
        container.appendChild(newImage);

        // Forcer le reflow pour être sûr que le navigateur prend bien la position initiale
        newImage.getBoundingClientRect();

        // Lancer l'animation
        setTimeout(() => {
            // Nouvelle image glisse vers le centre (transform: translateX(-50%) permet de la centrer)
            newImage.style.transform = "translateX(-50%)";
            if (currentImage) {
                // L'ancienne image glisse vers la gauche hors écran (transform: translateX(-150%) la décalant de 100% vers la gauche par rapport au centre)
                currentImage.style.transform = "translateX(-100%)";
            }
        }, 20);

        // Une fois l'animation terminée, supprimer l'ancienne image et mettre à jour la référence
        setTimeout(() => {
            if (currentImage && container.contains(currentImage)) {
                container.removeChild(currentImage);
            }
            currentImage = newImage;
        }, duration + 20);

        // Met à jour l'état actif des dots
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    // Affiche la première image dès le chargement
    showSlide(currentIndex);

    // Changement automatique toutes les 5 secondes
    setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        showSlide(currentIndex);
    }, 5000);

    // Permet de cliquer sur les dots pour changer d'image
    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            currentIndex = i;
            showSlide(currentIndex);
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Masquer le loader après 2.5 secondes (2s + 0.5s de fade out)
    setTimeout(function () {
        const loader = document.querySelector('.loader');
        if (loader) {
            loader.style.display = 'none';
        }
    }, 2500);
});
