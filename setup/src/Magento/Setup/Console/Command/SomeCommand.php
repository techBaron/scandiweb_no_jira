<?php

namespace Magento\Setup\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;


class SomeCommand extends Command
{
    protected function configure()
    {
        $this->setName('scandiweb:command');
        $this->setDescription('This is my first console command.');
        $this->addArgument('color', InputArgument::REQUIRED, __('Type a color HEX without #'));
        $this->addArgument('id', InputArgument::REQUIRED, __('Type a id of button'));
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($input->getArgument('color'));
        $output->writeln($input->getArgument('id'));
    }
}