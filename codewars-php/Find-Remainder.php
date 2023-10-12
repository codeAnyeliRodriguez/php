<?php
$a = 5;
$b= 17;

function remainder($a, $b) {
return min($a, $b) == 0 ? null : max($a, $b) % min($a, $b);
}

echo remainder($a, $b);
?>