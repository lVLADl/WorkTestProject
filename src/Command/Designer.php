<?php


namespace Project\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ProgrammerCommand
 * @package Project\Command
 */
class Designer extends Command
{
    protected static $defaultName = 'user:designer';
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $instance = new \Project\Model\Designer();
        $output->writeln($instance->getInfo());
        return 0;
    }
}