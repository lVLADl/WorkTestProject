<?php


namespace Project\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;

abstract class CanBase extends Command
{
    protected function configure()
    {
        $this->addArgument('action', InputArgument::REQUIRED, 'The action you want to verify.');
    }
}