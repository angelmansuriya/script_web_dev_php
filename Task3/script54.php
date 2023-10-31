<?php

$a = array(
  array(
    'id' => 1234,
    'first_name' => 'jay',
    'last_name' => 'khunt',
  ),
  array(
    'id' => 5678,
    'first_name' => 'harshil',
    'last_name' => 'limbasiya',
  ),
  array(
    'id' => 4567,
    'first_name' => 'vasu',
    'last_name' => 'mori',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>