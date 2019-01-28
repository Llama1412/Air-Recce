<?php
    session_start();
    if (!isset($_SESSION["score"])) {
        $_SESSION["score"] = 0;
    }
    
    function enterAnswer($answer) {
        if ($_SESSION["correctanswer"] == $answer) {
            correctAnswer();
        }
    }
    
    function correctAnswer() {
        $_SESSION["score"] = $_SESSION["score"] + 1;
    }
    
    
    ?>