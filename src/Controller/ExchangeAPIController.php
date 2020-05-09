<?php

namespace App\Controller;

use App\Entity\ProviderExchange;
use App\Service\KurFacadeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExchangeAPIController extends AbstractController
{
    /**
     * @Route("/api")
     * @return Response
     */
    public function index()
    {
        //doviz degerlerine varsayilan olarak yuksek TL degerleri girilmistir
        $tempDolar = 99;
        $tempEuro = 99;
        $tempSterlin = 99;

        //add-on mantigi olusturmak uzere providerlar bir json listede tutulmaktadir
        //burada provider listesi alinip decode edilmektedir
        $path = __DIR__.'/../../src/Providers/provider_list.json';
        $content = file_get_contents($path);
        $jsonArray = json_decode($content, true);

        //Providerlarin ortak noktasi olan servisten nesne turetilmistir
        //Bu nesne uzerinden tum providerlara erisim mumkundur
        $kurService = new KurFacadeService();

        //buradaki foreach dongusunde providerlarin tanimlanan ozellikleri okunmaktadir
        foreach ($jsonArray["name"] as $row) {
            //Provider pathleri ayarlandi
            $className = 'App\Providers\\' . $row;
            //Service uzerinden sisteme bagli providerlara erisilmektedir
            //Provider bilgileri degiskene aktarilmaktadir
            $newProvider = $kurService->providerRegister(new $className());
            //Providerin verileri kullanilarak verileri almak uzere servera istek atilmaktadir.
            $responseSwap = $this->requestHttpClient($newProvider->getProviderURL());

            //Eger donen deger 1 e esitse bir ust key e sahip oldugu anlasilmaktadir. Orn: result or name
            //Ust key algilandiginda bir alt dizine ilerlenmektedir
            if (count($responseSwap) == 1) {
                $iter = array_keys($responseSwap);
                $responseSwap = $responseSwap[$iter[0]];
            }

            //Burada dolar, euro, sterlin verileri sıra ile alınabilirdi ve daha kisa bir yapi olusturulabilirdi
            //Karsi API de herhangi bir para birimindeki yer degisikligi yanlis sonuclar getirecekti
            //Bu nedenle sisteme ek olarak Provider classlarda tanımlanan doviz karsiliklari kontrol edilerek islem yapilmaktadir
            //if kosullarindaki ikinci kisimlarda ise Providerlar arasi en uygun kurlar bulunmaktadir
            foreach ($responseSwap as $item){
                if($item[$newProvider->getSymbolName()]==$newProvider->getDolar() && $tempDolar>$item[$newProvider->getAmountName()]){
                    $tempDolar=$item[$newProvider->getAmountName()];
                }elseif($item[$newProvider->getSymbolName()]==$newProvider->getEuro() && $tempEuro>$item[$newProvider->getAmountName()]){
                    $tempEuro=$item[$newProvider->getAmountName()];
                }elseif($item[$newProvider->getSymbolName()]==$newProvider->getSterlin() && $tempSterlin>$item[$newProvider->getAmountName()]){
                    $tempSterlin=$item[$newProvider->getAmountName()];
                }
            }
        }

        //VERI TABANI GUNCELLEME ISLEMLERI

        $entityManager = $this->getDoctrine()->getManager();

        //bu kisimin calismasi icin veritabaninda id si 1 olan kayit oldugu varsayilmistir
        //id si 1 olan kayit istek geldikce guncellenmektedir
        $doviz = $entityManager->getRepository(ProviderExchange::class)->find(1);

        $doviz->setDOLAR($tempDolar);
        $doviz->setEURO($tempEuro);
        $doviz->setSTERLIN($tempSterlin);
        $entityManager->flush();

        return new Response("Status: OK!");
    }

    public function requestHttpClient($provider)
    {
        $httpClient = HttpClient::create();
        //Ilgili URL e GET methodu ile istek atildi
        $response = $httpClient->request('GET', $provider);
        //Donen degerler bir dizi olarak return edildi.
        return $response->toArray();
    }
}
