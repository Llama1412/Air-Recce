<?php
    $selection = array();
    $targno = rand(0, sizeof($_SESSION["planes"])-1);
    $selection[] = $targno;
    while (sizeof($selection) != 4) {
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


    $currentpic = "planes/".$_SESSION["planes"][$targno].".jpg";
    
    
    ?>

