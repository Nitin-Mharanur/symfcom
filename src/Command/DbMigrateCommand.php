<?php
namespace App\Command;

use App\Migration\MigrationRunner;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'db:migrate', description: 'Run all pending SQL migrations')]
class DbMigrateCommand extends Command
{
    public function __construct(private MigrationRunner $runner)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->runner->run();
        $output->writeln("<info>✔ All migrations executed</info>");
        return Command::SUCCESS;
    }
}
