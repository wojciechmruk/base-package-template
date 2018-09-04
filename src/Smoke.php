<?php

namespace WojciechMruk\Smoke;

class Smoke
{

    public function pass($attr)
    {
        return $attr === 'ok' ? true : false;
    }
}