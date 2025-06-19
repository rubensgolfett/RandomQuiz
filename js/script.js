// Initialize if not set
if (!localStorage.getItem('score')) {
     localStorage.setItem('score', JSON.stringify({ correct: 0, wrong: 0 }));
}

// Update score based on result
function updateScore(isCorrect) {
     const score = JSON.parse(localStorage.getItem('score'));
     if (isCorrect) {
     score.correct += 1;
     } else {
     score.wrong += 1;
     }
     localStorage.setItem('score', JSON.stringify(score));
}

// Render score table
function showScoreTable() {
     const score = JSON.parse(localStorage.getItem('score'));
     const table = `
     <table class="table mt-4">
          <thead>
          <tr>
               <th>Correct</th>
               <th>Wrong</th>
               <th>Total</th>
          </tr>
          </thead>
          <tbody>
          <tr>
               <td>${score.correct}</td>
               <td>${score.wrong}</td>
               <td>${score.correct + score.wrong}</td>
          </tr>
          </tbody>
     </table>
     `;
     document.getElementById('score-table').innerHTML = table;
}

// Reset score (optional function)
function resetScore() {
     let sure = false;
     if (confirm("Are you sure you want to reset the score?")) {
          sure = true;
     } 

     if(sure) {
          localStorage.setItem('score', JSON.stringify({ correct: 0, wrong: 0 }));
          showScoreTable();
     }
}
