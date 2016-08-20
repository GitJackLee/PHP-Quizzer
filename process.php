<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
  //Check if the score is set
  if(!isset($_SESSION["score"])){ //isset is a php function to see if some value is set. $_SESSION is a superglobal
    $_SESSION["score"] = 0; //if the score session is not set, set it to zero.
  }

  if($_POST){
    $number = $_POST["number"];
    $selected_choice = $_POST["choice"];
    $next = $number+1;

    //Get total
    $query = "SELECT * FROM questions";
    //Get result
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;

    //Get correct choice
    $query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";

    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    //Get row
    $row = $result->fetch_assoc();

    //Set correct choice
    $correct_choice = $row["id"];

    //Compare
    if($correct_choice == $selected_choice){
      //Answer is correct
      $_SESSION["score"]++;
    }

    //Check if last question
    if($number == $total){
      header("Location: final.php"); //header function
      exit();
    } else {
      header("Location: question.php?n=".$next);
    }
  }
?>
