<?php


namespace Project\Model;


use Project\Model\Action\TestingAndSpeak;
use Project\Model\Action\Base\SetGoals;

/**
 * Class Tester
 * Can test, speak to a manager and set goals
 * @package work_test_project
 */
class Tester implements TestingAndSpeak, SetGoals
{
    use BaseWorker;
    public function speak()
    {
        $this->actions[] = 'speak';
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public function setGoal()
    {
        // TODO: Implement setGoal() method.
    }
}