<?php
    $selection = array();
    $targno = rand(0, sizeof($planes)-1);
    $selection[] = $targno;
    while (sizeof($selection) < 4) {
        $generated = rand(0, sizeof($planes));
        if ($generated != $targno) {
            if (in_array($planes[$generated], $selection)) {
                $selection[] = $generated;
            };
        };
    };
    var_dump($selection);
    shuffle($selection);
    $option1 = $planes[$selection[0]];
    $option2 = $planes[$selection[1]];
    $option3 = $planes[$selection[2]];
    $option4 = $planes[$selection[3]];

    $currentpic = "planes/".$entries[$targno];


?>