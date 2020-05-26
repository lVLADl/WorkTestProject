<?php


namespace Project\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ProgrammerCommand
 * @package Project\Command
 */
class Manager extends Command
{
    protected static $defaultName = 'user:manager';
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $instance = new \Project\Model\Manager();
        $output->writeln($instance->getInfo());
        return 0;
    }
}