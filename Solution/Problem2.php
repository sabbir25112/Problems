<?php require_once '../vendor/autoload.php';

Class Person {
    public function __construct($firstname, $lastname, $father = null) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->father = $father;
    }
}

$person1 = new Person("Nazrul", "Islam");
$person2 = new Person("Sabbir", "Ahmed", $person1);

$data = [
    'level_1' => '1',
    'level_1_a' => '2',
    'level_1_b' => [
        'level_2' => '3',
        'level_2_a' => '4',
        'level_2_b' => [
            'level_3' => 'll',
            'user' => $person2
        ]
    ],
    'level_1_c' => '5',
    'level_1_d' => '6'
];

printDepth($data);
