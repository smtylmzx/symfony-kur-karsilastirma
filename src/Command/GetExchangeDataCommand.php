<?php

namespace App\Command;

use App\Entity\ProviderExchange;
use App\Service\ExchangeWrapper;
use App\Traits\EntityManagerTrait;
use App\Util\ProviderDataInterface;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GetExchangeDataCommand extends Command
{
    use EntityManagerTrait;
    use LockableTrait;

    protected static $defaultName = 'provider:exchange:update';

    /**
     * @var ExchangeWrapper $exchangeWrapper
     */
    private $exchangeWrapper;

    public function __construct(ExchangeWrapper $exchangeWrapper)
    {
        $this->exchangeWrapper = $exchangeWrapper;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Get Exchange Data.')
            ->setHelp('Get Exchange Data and Compare Other Providers...');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$this->lock()) {
            $output->writeln('The command is already running in another process.');
            return 0;
        }

        $output->writeln('Starting..');
        $output->writeln('Getting exchange data and compare other providers.....');

        $providersData = $this->exchangeWrapper->getProviderData();

        /** @var ProviderDataInterface $providerData */
        foreach($providersData as $providerData){
            $providerExchange = (new ProviderExchange())
                ->setProvider($providerData)
                ->setDollar($providerData[$providerData->dollar()])
                ->setEuro($providerData[$providerData->euro()])
                ->setSterling($providerData[$providerData->sterling()]);

            $this->getEntityManager()->persist($providerExchange);
        }
        $this->getEntityManager()->flush();
        $output->write('Status: OK!');
        $this->release();
        return 1;
    }
}
