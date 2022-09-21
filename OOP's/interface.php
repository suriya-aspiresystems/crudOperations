<?php

interface User
{
    public function firstName();
}
class Name implements User
{
    public function firstName()
    {
        echo "Suriya Narayan";
    }
}

$user = new Name();
$user->firstName();
