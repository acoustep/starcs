<?php
namespace Acoustep;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Starcs extends Command
{
    protected function configure()
    {
        $this
            ->setName('generate:model')
            ->setDescription('Generate a new model')
            ->addArgument(
                'model',
                InputArgument::REQUIRED,
                'What is the name of the model you want to create?'
            )
            ->addOption(
                'columns',
                'c',
                InputOption::VALUE_OPTIONAL | InputOption::VALUE_IS_ARRAY, 
                'What are the names of the columns for the model?'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('model');
        if($name)
            $text = 'Model: '.$name;
        else
            $text = 'Model:';

        if($columns = $input->getOption('columns'))
        {
            $text .= ' - Columns: ';
            if(is_array($columns))
                $text .= implode(', ', $columns);         
            else
                $text .= $columns;
        }

            $output->writeln($text);
    }
}
