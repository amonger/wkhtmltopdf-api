<?php

namespace PDFGenerator\Implementation;

use PDFGenerator\PDFGeneratorInterface;
use GuzzleHttp\Client;

class RemotePDF implements PDFGeneratorInterface
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function fromURL($url)
    {
        $res = $this->client->post('/url', [
            'query'=> [
                'url' => $url
            ]
        ]);

        return base64_decode($res->getBody());
    }

    public function fromHTML($html)
    {
        $request = new \GuzzleHttp\Psr7\Request('POST', '/html', [], base64_encode($html));
        $res = $this->client->send($request);

        return base64_decode($res->getBody()->getContents());
    }
}
