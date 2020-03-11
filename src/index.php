<?php 

namespace spaceo\HelloSpaceo;

class Index
{
    public function show($text = "Hello Spaceo")
    {
        return $text;
    }

    public function plus($a = 0,$b = 0)
    {
        return $a + $b;
    }
}