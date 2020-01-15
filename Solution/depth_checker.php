<?php

function calculate_depth(&$keys, $input, $depth = 1)
{
    if (is_object($input)) {
        $input = (array) $input;
    }
    if (!is_array($input)) return ;

    foreach ($input as $key => $value) {
        $keys[] = [
            'key' => $key,
            'depth' => $depth
        ];
        calculate_depth($keys, $value, $depth + 1);
    }
}

function printDepth($data)
{
    $arr = [];
    calculate_depth($arr, $data);

    $length = count($arr);
    for ($i=0; $i < $length; $i++) {
        echo $arr[$i]['key'] . ' ' . $arr[$i]['depth'] . '<br>';
    }
}