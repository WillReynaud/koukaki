document.querySelectorAll('h2').forEach((h2) => {
    const text = h2.textContent;
    h2.innerHTML = `<span>${text}</span>`;
});

document.addEventListener("DOMContentLoaded", function () {
    // Sélectionne tous les titres que tu veux animer
    const titles = document.querySelectorAll("h2 span");

    // Crée un observateur avec Intersection Observer
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                // Ajoute la classe d'animation si l'élément est visible dans le viewport
                entry.target.classList.add("animate");
                        }
            else {entry.target.classList.remove("animate"); }
        });
    });

    // Observe chaque titre
    titles.forEach((title) => observer.observe(title));
});


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('scroll', function () {
    const title = document.querySelector('.parallax-title');
    const scrollPosition = window.scrollY;
        title.style.transform = `translateY(${scrollPosition * 0.15}px)`;
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener("scroll", function () {
    const clouds = document.querySelector(".clouds");
    
    // Récupère la position du nuage par rapport à la fenêtre visible
    const rect = clouds.getBoundingClientRect();
    
    // Hauteur totale du viewport
    const viewportHeight = window.innerHeight;

    if (rect.top < viewportHeight && rect.bottom > 0) {
        // Appliquer l'animation qui suit

        // Distance de scroll depuis que le nuage est visible
        const scrollSinceVisible = Math.max(0, viewportHeight - rect.top);

        // Facteur de déplacement
        const factor = 0.5;

        // Déplacement max fixé à 300px
        const maxAmplitude = 300;

        // Calcul du déplacement proportionnel, limité à `maxAmplitude`
        const displacement = Math.min(scrollSinceVisible * factor, maxAmplitude);

        // Appliquer le déplacement en X
        clouds.style.transform = `translateX(${-displacement}px)`;
    } // Ajout de l'accolade fermante ici
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.querySelector('.burger-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menuItems = document.querySelectorAll('.menu-overlay ul li'); // Sélection des éléments <li> dans le menu
    const body = document.body;
    
    // Ajoute un événement clic pour afficher/masquer le menu
    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.toggle('active');
        menuOverlay.classList.toggle('active');
        body.classList.toggle('no-scroll'); //désative le scroll à l'ouverture
    });
    // Ferme le menu overlay quand un élément de menu est cliqué
    menuItems.forEach(item => {
        item.addEventListener('click', () => {

            menuOverlay.classList.remove('active'); // Enlève la classe active pour fermer le menu
            burgerMenu.classList.remove('active');  // Ferme également le burger
            body.classList.remove('no-scroll');  // Réactive le scroll après fermeture
        });
    });
});