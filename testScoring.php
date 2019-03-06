<?php
  // Starts a session and sets both score and total variables to zero
  session_start();
  if (!isset($_SESSION["score"]) OR !isset($_SESSION["total"]) ) {
      $_SESSION["score"] = 0;
      $_SESSION["total"] = 0;
  };

  // This function takes the answer entered and evaluates wether or no
  // it is correct. It then runs a function depending on if the answer was
  // correct or wrong.
  function enterAnswer($answer) {
      if ($_SESSION["correctanswer"] == $answer) {
          correctAnswer();
      } else {
          wrongAnswer();
      };
  };

  // The function adds one to the score and one to the total if the answer
  // is correct.
  function correctAnswer() {
      $_SESSION["score"] = $_SESSION["score"] + 1;
      $_SESSION["total"] = $_SESSION["total"] + 1;
  };

  // The function adds one to the total if the answer is wrong. It doesn't
  // add one to score, it outputs what the correct answer was to the user.
  function wrongAnswer() {
      echo "<script>alert('Wrong answer!   Correct answer was: ".$_SESSION["correctanswer"]."')</script>";
      $_SESSION["total"] = $_SESSION["total"] + 1;
  };
?>
