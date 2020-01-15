<?php

class Node
{
    private $value;
    private $parent = null;

    public function __construct($value = null)
    {
        $this->value = $value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    public function getParent()
    {
        return $this->parent;
    }
}