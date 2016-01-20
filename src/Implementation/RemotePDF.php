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
      $res = $this->client->post('/html', [
          'query'=> [
              'html' => $html
          ]
      ]);

      return base64_decode($res->getBody());
    }
}
