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
<body class="yellow">
     <div class="container">
     <div class="card p-4 text-center">
          <h2 class="mb-3"><?= $isCorrect ? "🎉 Correct!" : "❌ Incorrect!" ?></h2>
          <p>Correct answer: <strong><?= $correct ?></strong></p>
          <p>Your answer: <strong><?= $answer ?></strong></p>
          <a href="../view/index.php" class="btn btn-success mt-3">Try Another</a>
     </div>
     </div>
</body>
</html>
