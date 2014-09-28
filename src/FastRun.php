<?php
namespace Etki\InlineFunctionsBenchmark;

class FastRun
{
    public $ready = true;
    public function exec()
    {
        if (!$this->ready) {
            throw new \RuntimeException('Not ready yet');
        }
        $result = 0;
        for ($i = 0; $i < 10; $i++) {
            $result += $i;
        }
        return $result;
    }
}
