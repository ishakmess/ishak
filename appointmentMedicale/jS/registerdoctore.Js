document.addEventListener("DOMContentLoaded", function() {
  // Sélectionner le bouton "Skip"
  var readMoreBtn = document.getElementById("readMoreBtn");
  
  // Sélectionner le texte à afficher/masquer
  var moreText = document.querySelector(".more");

  // Gérer l'événement de clic sur le bouton "Skip"
  readMoreBtn.addEventListener("click", function() {
    // Vérifier si le texte est caché
    if (moreText.style.display === "none" || moreText.style.display === "") {
      // Afficher le texte
      moreText.style.display = "block";
      // Changer le texte du bouton en "Read Less"
      readMoreBtn.textContent = "Read Less";
    } else {
      // Masquer le texte
      moreText.style.display = "none";
      // Changer le texte du bouton en "Read More"
      readMoreBtn.textContent = "Read More";
    }
  });
});
