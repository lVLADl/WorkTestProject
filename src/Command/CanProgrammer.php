<?php


namespace Project\Command;

use Project\Model\BaseWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ProgrammerCommand
 * @package Project\Command
 */
class CanProgrammer extends CanBase
{
    protected static $defaultName = 'can:programmer';
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $instance = new \Project\Model\Programmer();
        $action = $input->getArgument('action');
        $output->writeln($instance->checkAction($action) ? "True":"False");
        return 0;
    }
}