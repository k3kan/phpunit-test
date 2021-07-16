<?php

namespace Phpunit\Test\Utils;

function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}