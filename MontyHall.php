<?php
    $DOORS_COUNT = 3;

    $auto = array($DOORS_COUNT);
    $win1Count = 0;
    $win2Count = 0;
    $gamesCount = 100000;

    for ($i = 0; $i < $gamesCount; $i++)
    {
        for ($j = 0; $j < $DOORS_COUNT; $j++)
            $auto[$j] = false;
        $auto[intval(round(rand(0, $DOORS_COUNT - 1)))] = true;

        if ($auto[intval(round(rand(0, $DOORS_COUNT - 1)))])
        {
            $win1Count++;
            continue;
        }

        $win2Count++;
    }

    $result  = "Number of doors: ".$DOORS_COUNT."<br/>\n";

    $percent = 100 / $gamesCount * $win1Count;
    $result .= $gamesCount." games played, ".$win1Count;
    $result .= " times won the car without changing the door ";
    $result .= "(".round($percent, 2).")<br/>\n";

    $percent = 100 / $gamesCount * $win2Count;
    $result .= $gamesCount." games played, ".$win2Count;
    $result .= " times won the car by changing the door ";
    $result .= "(".round($percent, 2).")<br/>\n";

    echo $result;
