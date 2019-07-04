<?php

namespace App\Traits;

trait HelloTrait
{
    public function hello($name)
    {
        return "Hello, $name!";
    }
}
