<?php
    unset($selection);
    $selection = array();
    $targno = rand(0, sizeof($_SESSION["planes"])-1);
    $selection[] = $targno;
    while (sizeof($selection) != 8) {
        $generated = rand(0, sizeof($_SESSION["planes"])-1);
        if ($generated != $targno) {
            if (!in_array($generated, $selection)) {
                $selection[] = $generated;
            };
        };
    };
    shuffle($selection);
    $_SESSION["correctanswer"] = $_SESSION["planes"][$targno];
    $option1 = $_SESSION["planes"][$selection[0]];
    $option2 = $_SESSION["planes"][$selection[1]];
    $option3 = $_SESSION["planes"][$selection[2]];
    $option4 = $_SESSION["planes"][$selection[3]];
    $option5 = $_SESSION["planes"][$selection[4]];
    $option6 = $_SESSION["planes"][$selection[5]];
    $option7 = $_SESSION["planes"][$selection[6]];
    $option8 = $_SESSION["planes"][$selection[7]];



    $currentpic = "planes/".$_SESSION["planes"][$targno].".jpg";
    
    
    ?>

