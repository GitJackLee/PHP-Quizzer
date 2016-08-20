<?php include "database.php"; ?>
<?php session_start(); ?>

<?php
  //Get the number of the question. Use super global called "GET"
  $number = (int) $_GET['n'];


  //Get total
  $query = "SELECT * FROM questions";
  //Get result
  $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
  $total = $results->num_rows;

  /*
  * Get Question
  */
  $query = "SELECT * FROM questions WHERE question_number = $number";

  //Get result
  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

  $question = $result->fetch_assoc();

  /*
  * Get Choices
  */
  $query = "SELECT * FROM choices WHERE question_number = $number";

  //Get results
  $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
?>

    <?php include "partials/header.php"; ?>

    <main>
      <div class="container" id="maincontainer">
        <div class="current">Question <?php echo $question["question_number"]; ?> of <?php echo $total ?></div>
        <p class="question"><?php echo $question["text"]; ?></p>
        <form method="POST" action="process.php">
          <ul class="choices">
            <?php while($row = $choices->fetch_assoc()): //while there are still records for the query ?>
              <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
            <?php endwhile; ?>
          </ul>
          <input type="submit" value="Submit">
          <input type="hidden" name="number" value="<?php echo $number; ?>">
        </form>
      </div>
    </main>

    <?php include "partials/footer.php"; ?>
