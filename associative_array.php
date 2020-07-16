<?php
$icecream = array(
  'Alena' => 'Black Cherry', 
  'Treasure' => 'Chocalate', 
  'Dave McFarland' => 'Cookies and Cream', 
  'Rialla' => 'Strawberry');
echo $icecream['Alena'];
$icecream['alena'] = 'Pistachio';
$icecream['Dave Thomas'] = 'Cookie and Cream';
$icecream['Andrew'] = true;
krsort($icecream);
asort($icecream);
var_dump($icecream);
//var_dump($icecream);

$keys = array(
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'
);

var_dump($keys);
?>