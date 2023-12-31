<?php

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $word = trim(fgets(STDIN));

    if (strlen($word) > 10) {
        $abbreviation = $word[0] . (strlen($word) - 2) . $word[strlen($word) - 1];
        echo $abbreviation . PHP_EOL;
    } else {
        echo $word . PHP_EOL;
    }
}

?>
