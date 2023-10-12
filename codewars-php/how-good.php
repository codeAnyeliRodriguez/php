<?php
$classPoints = 80;
$yourPoints = 100;

function betterThanAverage($classPoints, $yourPoints){
  return array_sum($classPoints) / count($classPoints) < $yourPoints;
}

betterThanAverage($classPoints, $yourPoints);
?>