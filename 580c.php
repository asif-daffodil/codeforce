<?php
//$file = fopen('input.in', 'r');
$file = STDIN;
list($n, $m) = explode(" ", trim(fgets($file)));
$cArray = explode(" ", trim(fgets($file)));
array_unshift($cArray, "T");
unset($cArray[0]);
$map = array();
for ($i = 1; $i < $n; $i++) {
    list($x, $y) = explode(" ", trim(fgets($file)));
    $map[$x][] = $y;
    $map[$y][] = $x;
}
$result = 0;
function solve($dest, $cur, $cN)
{
    global $result, $map, $m, $cArray;
    $c = count($map[$cur]);
    if ($cArray[$cur]) {
        $cN++;
        if ($cN>$m) {
            return;
        }
    }else{
        $cN = 0;
    }
    if ($c == 1 && $map[$cur][0] == $dest) {
        $result++;
        return;
    }
 
    for ($i = 0; $i < $c; $i++) {
        if ($map[$cur][$i] == $dest) {
            continue;
        }
        solve($cur, $map[$cur][$i], $cN);
    }
 
}
 
solve(0, 1, 0);
echo $result;