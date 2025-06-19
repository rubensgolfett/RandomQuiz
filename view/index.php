<?php include('../php/load_question.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>QuizRandom</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../css/style.css">
</head>
<body class="green">
     <div class="container">
     <div class="card p-4">
          <h2 class="mb-4 text-center">🎯 QuizRandom</h2>
          <form action="../php/result.php" method="post">
          <p class="fw-bold"><?= $question ?></p>
          <?php foreach ($options as $option): ?>
               <div class="form-check mb-2">
               <input class="form-check-input" type="radio" name="answer" value="<?= $option ?>" required>
               <label class="form-check-label"><?= $option ?></label>
               </div>
          <?php endforeach; ?>
          <input type="hidden" name="correct" value="<?= $correct ?>">
          <button type="submit" class="btn btn-primary mt-3">Submit Answer</button>
          </form>
     </div>
     </div>

     <script src="../js/script.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
