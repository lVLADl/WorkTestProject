<?php


namespace Project\Model;


use Project\Model\Action\Base\Painting;
use Project\Model\Action\Base\SpeakToManager;

/**
 * Class Designer
 * Can paint and speak to a manager
 * @package work_test_project
 */
class Designer implements SpeakToManager, Painting
{
    use BaseWorker;
    public function paint()
    {
        // TODO: Implement paint() method.
    }

    public function speak()
    {
        // TODO: Implement speak() method.
    }
}