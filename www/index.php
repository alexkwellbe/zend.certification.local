<?php

define("FOO",     "что-то");
define("FOO2",    "что-то ещё");
define("FOO_BAR", "что-то большее");

const BAR = ['foo', 'bar', 'baz'][1];

if (true) {
    //const BAZ = 'Константа BAR';
}

define("FOO_BAZ", ['foo', 'bar', 'baz']);

echo constant('FOo');

// $quex = ['foo' => 1000, 'bar'=>2000, 'baz' => 3000];
// echo $quex[baz];