<?php
declare(strict_types=1);
# 1141D
$start = microtime(true);
[$itemsCount] = fscanf(STDIN, '%u');
 
$pairs = [];
$result = 0;
$leftItems = $rightItems = [
    'a' => [],'b' => [],'c' => [],'d' => [],'e' => [],'f' => [],'g' => [],'h' => [],'i' => [],'j' => [],'k' => [],
    'l' => [],'m' => [],'n' => [],'o' => [],'p' => [],'q' => [],'r' => [],'s' => [],'t' => [],'u' => [],'v' => [],
    'w' => [],'x' => [],'y' => [],'z' => [], '?' => [],
];
$keys = array_keys($leftItems);
 
$left = fgets(STDIN);
$right = fgets(STDIN);
for ($i = 0, $j = 1; $i < $itemsCount; $i++, $j++) {
    $leftItems[$left[$i]][] = $j;
    $rightItems[$right[$i]][] = $j;
}
unset($left, $right);
 
foreach ($keys as $key) {
    while ($leftItems[$key] !== [] && $rightItems[$key] !== []) {
        $result++;
        $pairs[] = array_pop($leftItems[$key]) . ' ' . array_pop($rightItems[$key]);
    }
    while ($leftItems[$key] !== [] && $rightItems['?'] !== []) {
        $result++;
        $pairs[] = array_pop($leftItems[$key]) . ' ' . array_pop($rightItems['?']);
    }
    while ($leftItems['?'] !== [] && $rightItems[$key] !== []) {
        $result++;
        $pairs[] = array_pop($leftItems['?']) . ' ' . array_pop($rightItems[$key]);
    }
}
print $result . PHP_EOL . implode(PHP_EOL, $pairs);