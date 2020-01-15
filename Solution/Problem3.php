<?php require_once '../vendor/autoload.php';

$node_9 = new Node(9);
$node_8 = new Node(8);
$node_7 = new Node(7);
$node_6 = new Node(6);
$node_5 = new Node(5);
$node_4 = new Node(4);
$node_3 = new Node(3);
$node_2 = new Node(2);
$node_1 = new Node(1);

$node_9->setParent($node_4);
$node_8->setParent($node_4);
$node_4->setParent($node_2);
$node_5->setParent($node_2);
$node_6->setParent($node_3);
$node_7->setParent($node_3);
$node_2->setParent($node_1);
$node_3->setParent($node_1);

echo lca($node_6, $node_7);

