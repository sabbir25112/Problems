<?php require_once '../vendor/autoload.php';


$data = [
    'level_1' => '1',
    'level_1_a' => '2',
    'level_1_b' => [
        'level_2' => '3',
        'level_2_a' => '4',
        'level_2_b' => [
            'level_3' => 'll',
        ]
    ],
    'level_1_c' => '5',
    'level_1_d' => '6'
];

function printDepth($data)
{
    $arr = [];
    (new DepthChecker())->calculate_depth($arr, $data);

    $length = count($arr);
    for ($i=0; $i < $length; $i++) {
        echo $arr[$i]['key'] . ' ' . $arr[$i]['depth'] . '<br>';
    }
}

printDepth($data);