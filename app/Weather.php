<?php

namespace App;

class Weather
{
    public function __construct(public string $keyApi) {}
    public function isSunny()
    {
        return false;
    }
}
