<?php


namespace App\Service\Client;


class Client
{
    /**
     * @param $url
     * @return array
     */
    public function getProviderData($url): array
    {
        try {
            $client = new \GuzzleHttp\Client([
                'base_uri' => $url
            ]);

            $result = $client->request('GET');
        }catch (\Exception $e) {
            die($e->getMessage());
        }

        return \GuzzleHttp\json_decode($result->getBody(), true);
    }

}
