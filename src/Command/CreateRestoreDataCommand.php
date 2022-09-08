<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateRestoreDataCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected static $defaultName = 'app:store-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create A MysqlDump SQL dump into the test database for acceptance testing in Codeception';

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // the value returned by someMethod() can be an iterator (https://secure.php.net/iterator)
        // that generates and returns the messages with the 'yield' PHP keyword

        // outputs a message followed by a "\n"
        $output->writeln('Whoa!');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('You are about to ');
        $output->write('create a user.');

        return Command::SUCCESS;
    }
}
