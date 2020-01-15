<?php

function lca(Node $node1, Node $node2)
{
    list($node1, $node2) = makeSameHeight($node1, $node2);
    $ancestor_node = getAncestorNode($node1, $node2);
    return $ancestor_node->getValue();
}

function getHeight(Node $node)
{
    $height = 1;
    while(!is_null($node->getParent())) {
        $height++;
        $node = $node->getParent();
    }
    return $height;
}

function makeSameHeight(Node $node1, Node $node2)
{
    $height_of_node1 = getHeight($node1);
    $height_of_node2 = getHeight($node2);
    if ($height_of_node2 > $height_of_node1) {
        $temp = $node1;
        $node1 = $node2;
        $node2 = $temp;

        $temp = $height_of_node1;
        $height_of_node1 = $height_of_node2;
        $height_of_node2 = $temp;
    }
    $height_difference = $height_of_node1 - $height_of_node2;

    for ($i=1; $i<=$height_difference; $i++) {
        $node1 = $node1->getParent();
    }
    return [$node1, $node2];
}

function getAncestorNode(Node $node1, Node $node2)
{
    while($node1 != $node2) {
        $node1 = $node1->getParent();
        $node2 = $node2->getParent();
    }
    return $node1;
}