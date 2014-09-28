<?php
namespace Etki\InlineFunctionsBenchmark;

class SlowCalc
{
    /**
     * @inline
     */
    public function average(array $numbers)
    {
        return array_sum($numbers) / sizeof($numbers);
    }

    /**
     * @inline
     */
    public function rootMeanSquare(array $numbers)
    {
        $temp = array();
        foreach ($numbers as $number) {
            $temp[] = $number * $number;
        }
        return sqrt(array_sum($temp) / sizeof($temp));
    }

    public function getAverageDiff()
    {
        $numbers = range(1, 10);
        $average = $this->average($numbers);
        $rms = $this->rootMeanSquare($numbers);
        return abs($average - $rms);
    }
}
 