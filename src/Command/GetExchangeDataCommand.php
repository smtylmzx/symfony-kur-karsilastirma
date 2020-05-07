<?php

namespace App\Command;

use App\Controller\ExchangeAPIController;
use App\Util\KurInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetExchangeDataCommand extends Command
{
    protected static $defaultName = 'app:get-exchange-data';
    private $apiController;

    /**
     * GetExchangeDataCommand constructor.
     * @param $apiController
     */
    public function __construct(ExchangeAPIController $apiController)
    {
        $this->apiController = $apiController;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Get Exchange Data.')
            ->setHelp('Get Exchange Data and Compare Other Providers...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('getting exchange data and compare other providers.....');

        $this->apiController->index();
        $output->write('Status: OK!');
    }
}