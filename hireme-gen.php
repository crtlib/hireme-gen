<?php

$endDate = time();
$startDate = $endDate - 365 * 24 * 3600;

for ($i = $startDate; $i < $endDate; $i += 24*3600) {
    $weekDay = rand(0, 10);
    for ($j = 0; $j < $weekDay; $j++) {
        file_put_contents('CODE', rand(0, 1000000));
        shell_exec("git add ./CODE && git commit -m 'fixed #$i' --date " . date("Y-m-d", $i));
    }
}