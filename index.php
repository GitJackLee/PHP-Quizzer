<?php include "database.php" ?>
<?php
  /*
  * Get total number of questions
  */
  $query = "SELECT * FROM questions";
  //Get results
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;
?>

  <?php include "partials/header.php"; ?>

  <main>
    <div class="container" id="maincontainer">
      <h2>Test Your PHP Knowledge</h2>
      <p>This is a multiple choice quiz ot test your knowledge of PHP</p>
      <ul>
        <li><strong>Number of Questions: </strong><?php echo $total; ?></li>
        <li><strong>Type: </strong>Multiple Choice</li>
        <li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
      </ul>
      <a href="question.php?n=1" class="start">Start Quiz</a>
    </div>
  </main>

  <?php include "partials/footer.php"; ?>
