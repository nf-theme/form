<?php

namespace NightFury\Form\Facades;

use Illuminate\Support\Facades\Facade;
use NightFury\Form\FormBuilder;

class Form extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new FormBuilder;
    }
}
