document.addEventListener("DOMContentLoaded", function(){
  // Récupérer l'introduction, le formulaire, et le bouton de démarrage
  const intro = document.getElementById('intro');
  const testForm = document.getElementById('testForm');
  const startTestBtn = document.querySelector('.start-test');

  // Au clic sur "COMMENCER LE TEST", masquer l'intro et afficher le formulaire
  if(startTestBtn) {
    startTestBtn.addEventListener('click', function(){
      if(intro) {
        intro.style.display = 'none';
      }
      if(testForm) {
        testForm.style.display = 'flex';
        // Activer la première question
        const firstQuestion = document.getElementById('q1');
        if(firstQuestion) {
          firstQuestion.classList.add('active');
        }
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
