<?php
$a=array(
    array(
        'id' => 5698,
        'frist_name'  => 'Peter',
        'last_name' =>'Griffin',
    ),
    array(
        'id' => 4767,
        'frist_name' => 'Ben',
        'last_name' =>'Smith',
    ),
    array(
        'id' => 3809,
        'frist_name' =>'Joe',
        'last_nme' =>'Doe',

    )
);

$last_names = array_column($a,'last_name');
print_r($last_names);

?>
