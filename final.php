<?php session_start(); ?>

    <?php include "partials/header.php"; ?>

    <main>
      <div class="container" id="maincontainer">
        <h2>You're done!</h2>
        <p>Congratulations! You have completed the test!</p>
        <p>Final Score: <?php echo $_SESSION["score"]; ?></p>
        <form action="destroy_session.php">
          <input type="submit" value="Start Again" class="start">
        </form>
      </div>
    </main>

    <?php include "partials/footer.php"; ?>
