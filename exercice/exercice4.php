<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
$s = $args[0];
$tabval = str_split($s);
$i = 0;
$result = 0;
// Write an action using echo().
while ($i != count($tabval)) {
    if ($tabval[$i] == '0' || $tabval[$i] == '6' || $tabval[$i] == '9') {
        $result+=1;
    } else if ($tabval[$i] == '8') {
        $result+=2;
    }
    $i++;
}

echo($result);
