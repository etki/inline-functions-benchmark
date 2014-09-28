<?php
namespace Etki\InlineFunctionsBenchmark;

class FastCalc
{
    public function getAverageDiff()
    {
        $numbers = range(1, 10);
        $average = array_sum($numbers) / sizeof($numbers);
        $temp = array();
        foreach ($numbers as $number) {
            $temp[] = $number * $number;
        }
        $rms = sqrt(array_sum($temp) / sizeof($temp));
        return abs($average - $rms);
    }
}
 