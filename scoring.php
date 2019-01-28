<?php
    session_start();
    if (!isset($_SESSION["score"])) {
        $_SESSION["score"] = 0;
        $_SESSION["total"] = 0;
    };
    if (!isset($_SESSION["total"])) {
        $_SESSION["score"] = 0;
        $_SESSION["total"] = 0;
    };
    
    function enterAnswer($answer) {
        if ($_SESSION["correctanswer"] == $answer) {
            correctAnswer();
        } else {
            wrongAnswer();
        };
    };
    
    function correctAnswer() {
        $_SESSION["score"] = $_SESSION["score"] + 1;
        $_SESSION["total"] = $_SESSION["total"] + 1;
    };

    function wrongAnswer() {
        echo "<script>alert('Wrong answer!   Correct answer was: ".$_SESSION["correctanswer"]."')</script>";
        $_SESSION["total"] = $_SESSION["total"] + 1;
    };
    ?>