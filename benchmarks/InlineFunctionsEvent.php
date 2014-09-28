<?php

namespace Etki\InlineFunctionsBenchmark\Benchmarks;

use Athletic\AthleticEvent;
use Etki\InlineFunctionsBenchmark\FastRun;
use Etki\InlineFunctionsBenchmark\SlowRun;
use Etki\InlineFunctionsBenchmark\FastCalc;
use Etki\InlineFunctionsBenchmark\SlowCalc;

class InlineFunctionsEvent extends AthleticEvent
{
    /**
     * @type SlowRun
     */
    protected $slowAssertRun;
    /**
     * @type FastRun
     */
    protected $fastAssertRun;
    /**
     * @type SlowRun
     */
    protected $eSlowRun;
    /**
     * @type FastRun
     */
    protected $eFastRun;
    /**
     * @type SlowCalc
     */
    protected $slowCalc;
    /**
     * @type FastCalc
     */
    protected $fastCalc;
    
    public function setup()
    {
        $this->fastAssertRun = new FastRun;
        $this->slowAssertRun = new SlowRun;
        $this->eFastRun = new FastRun;
        $this->eSlowRun = new SlowRun;
        $this->eFastRun->ready = false;
        $this->eSlowRun->ready = false;
        $this->fastCalc = new FastCalc;
        $this->slowCalc = new SlowCalc;
    }
    /**
     * @iterations 10000
     * @group assert
     */
    public function slowAssertRun()
    {
        $this->slowAssertRun->exec();
    }
    /**
     * @iterations 10000
     * @group assert
     */
    public function fastAssertRun()
    {
        $this->fastAssertRun->exec();
    }
    /**
     * @iterations 10000
     * @group exception
     */
    public function slowExceptionRun()
    {
        try {
            $this->eSlowRun->exec();
        } catch (\Exception $e) {
            // ffu
        }
    }
    /**
     * @iterations 10000
     * @group exception
     */
    public function fastExceptionRun()
    {
        try {
            $this->eFastRun->exec();
        } catch (\Exception $e) {
            // ffu
        }
    }
    /**
     * @iterations 10000
     * @group calculation
     */
    public function slowCalculation()
    {
        $this->slowCalc->getAverageDiff();
    }
    /**
     * @iterations 10000
     * @group calculation
     */
    public function fastCalculation()
    {
        $this->fastCalc->getAverageDiff();
    }
}
