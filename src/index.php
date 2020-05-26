<?php
    namespace Project;

    require __DIR__ . '/../vendor/autoload.php';

    use Symfony\Component\Console\Application;


    $application = new Application();

    $commands = [
        'Designer',
        'CanDesigner',

        'CanManager',
        'Manager',

        'Programmer',
        'CanProgrammer',

        'Tester',
        'CanTester',
    ];

    foreach($commands as $command) {
        eval((string) '$application->add(new \Project\Command\\' . (string) $command . '());');
    }
    /*
     * Registers all the commands listed in variable $commands.
     * Probably, Symfony\Component\ClassLoader\ClassMapGenerator
     * could be used, but it's not necessary, so if you need to
     * register new command, you should register it in the array
     */

    $application->run();