<?php
namespace Etki\InlineFunctionsBenchmark;

class SlowRun
{
    public $ready = true;
    public function exec()
    {
        $this->assertReady();
        $result = 0;
        for ($i = 0; $i < 10; $i++) {
            $result += $i;
        }
        return $result;
    }
    protected function assertReady()
    {
        if (!$this->ready) {
            throw new \RuntimeException('Not ready yet');
        }
    }
}
