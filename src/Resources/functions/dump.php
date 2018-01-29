<?php

use RivenG\VarDumper\Dumper;


if (!function_exists('d')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     */
    function d()
    {
        array_map(function ($x) { (new Dumper())->dump($x); }, func_get_args());
    }
}

if (!function_exists('dd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     */
    function dd()
    {
        array_map(function ($x) { (new Dumper())->dump($x); }, func_get_args());

        die(1);
    }
}