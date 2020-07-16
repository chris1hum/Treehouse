<?php
include 'list.php';

$field = 'priority';
$status = false;
$filter = array();
foreach ($list as $originalkey => $item) {
  if ($status === 'all' || $item['complete'] == $status) {
    if (isset($field) && isset($item[$field])) {
      $filter[$originalkey] = $item[$field];
    } else {
    $filter[$originalkey] = $item['priority']+12;
    }
  }
}
asort($filter);
//echo '<pre>';
//var_dump($filter);
//var_dump($status, boolval('all'), $status === 'all');
//var_dump($filter, $list);
//echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';
foreach ($filter as $id => $value) {
    echo '<tr>';
    echo '<td>' . $list[$id]['title'] . "</td>\n";
    echo '<td>' . $list[$id]['priority'] . "</td>\n";
    echo '<td>' . $list[$id]['due'] . "</td>\n";
    echo '<td>';
    if($list[$id]['complete']) {
     echo 'Yes';
    } else {
      echo 'No';
    }
    echo "</td>\n";
    echo '</tr>';
}
echo '</table>';

//$list = array($task1, $task2);
//var_dump($list);
//echo $list[0]['title'];
?>