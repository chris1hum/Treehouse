<?php
$list[] = array(
  'title' => 'Laundry',
  'priority' => 2,
  'due' => '',
  'complete' => true,
);

$list[] = array(
  'title' => 'Clean out the refrigerator',
  'priority' => 3,
  'due' => '07/30/2016',
  'complete' => false,
);

//$list = array($task1, $task2);
var_dump($list);
echo $list[0]['title'];
?>