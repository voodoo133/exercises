<?php

function arrToString($arr)
{
    array_walk($arr, function(&$v, $k) {
        if (!is_array($v)) {
            $v = "{$k}: {$v}";
        } else {
            $v = "{$k}:\n" . arrToString($v);
        } 
    });

    return join("\n", $arr);
}

function test($param1, $param2)
{
    try {
        throw new Exception("Error");
    } catch (Exception $e) {
        $debugBacktrace = debug_backtrace()[0];

        $strDebugBackTrace = arrToString($debugBacktrace);

        echo $strDebugBackTrace . PHP_EOL;
    }
}

test("param1", "param2");