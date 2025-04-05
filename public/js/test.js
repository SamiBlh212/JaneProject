document.addEventListener("DOMContentLoaded", function(){
  // Récupérer l'introduction, le formulaire, et le bouton de démarrage
  const intro = document.getElementById('intro');
  const testForm = document.getElementById('testForm');
  const startTestBtn = document.querySelector('.start-test');

  // Lors du clic sur "COMMENCER LE TEST"
  if(startTestBtn) {
    startTestBtn.addEventListener('click', function(){
      if(intro) {
        intro.style.display = 'none';
      }
      if(testForm) {
        testForm.style.display = 'flex';
        // Activer le premier step : l'insertion de l'email (id "q1")
        const emailStep = document.getElementById('q1');
        if(emailStep) {
          emailStep.classList.add('active');
          // Désactiver le bouton "Suivant" par défaut
          const emailNextBtn = emailStep.querySelector('.next-btn');
          if(emailNextBtn) {
            emailNextBtn.disabled = true;
          }
        }
      }
    });
  }

  // Vérification du champ email dans l'étape email
  const emailInput = document.getElementById("user-email");
  if(emailInput) {
    emailInput.addEventListener('input', function(){
      // Récupérer le bouton "Suivant" de cette étape
      const emailStep = this.closest('.question');
      const emailNextBtn = emailStep.querySelector('.next-btn');
      if(emailInput.validity.valid) {
        emailNextBtn.disabled = false;
      } else {
        emailNextBtn.disabled = true;
      }
    });
  }

  // Gestion des clics sur les boutons "Suivant"
  const nextButtons = document.querySelectorAll('.next-btn');
  nextButtons.forEach(button => {
    button.addEventListener('click', function(){
      let currentQuestion = this.closest('.question');
      let nextId = this.getAttribute('data-next');
      let nextQuestion = document.getElementById(nextId);
      if(nextQuestion) {
        currentQuestion.classList.remove('active');
        nextQuestion.classList.add('active');
      }
    });
  });

  // Gestion des clics sur les boutons "Précédent"
  const prevButtons = document.querySelectorAll('.prev-btn');
  prevButtons.forEach(button => {
    button.addEventListener('click', function(){
      let currentQuestion = this.closest('.question');
      let prevId = this.getAttribute('data-prev');
      let prevQuestion = document.getElementById(prevId);
      if(prevQuestion) {
        currentQuestion.classList.remove('active');
        prevQuestion.classList.add('active');
      }
    });
  });
});
