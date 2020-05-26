<?php


namespace Project\Model;


use Project\Model\Action\TestingAndSpeak;
use Project\Model\Action\Base\Coding;

/**
 * Class Programmer
 * Can code, test and speak to a manager
 * @package work_test_project
 */
class Programmer implements Coding, TestingAndSpeak
{
    use BaseWorker;
    public function code()
    {
        // TODO: Implement code() method.
    }

    public function speak()
    {
        // TODO: Implement speak() method.
    }

    public function test()
    {
        // TODO: Implement test() method.
    }
}