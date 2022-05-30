<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class MainTemplatePart extends Modifier
{
    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value)
    {
        return preg_replace('/^templates\/(.*?)(\/.*)$/', '\\1', $value);
    }
}
