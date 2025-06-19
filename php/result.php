
<?php
     $answer = $_POST["answer"];
     $correct = $_POST["correct"];
     $isCorrect = $answer === $correct;
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Result</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
</head>
<body class="blue">
     <div class="container">
     <div class="card p-4 text-center">
          <h2 class="mb-3"><?= $isCorrect ? "🎉 Correct!" : "❌ Incorrect!" ?></h2>
          <p><strong>Correct answer:</strong> <?= $correct ?></p>
          <p><strong>Your answer:</strong> <?= $answer ?></p>

          <div id="score-table"></div>

          <a href="../view/index.php" class="btn btn-success mt-3">Try Another</a>
          <button class="btn btn-outline-danger mt-3" onclick="resetScore()">Reset Score</button>
     </div>
     </div>

     <script src="../js/script.js"></script>
     <script>
          updateScore(<?= $isCorrect ? 'true' : 'false' ?>);
          showScoreTable();
     </script>
</body>
</html>
