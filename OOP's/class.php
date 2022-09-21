<?php

class User
{
    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}

$object = new User("Suriya");
echo $object->getName();
