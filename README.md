# wkhtmltopdf docker
This is a docker micro-service which has a simple api to generate PDFs.

## To set up the server
```
docker build -t wkhtmltopdf .
docker run -d -p 80:80 -v $(pwd)/api:/var/www/html wkhtmltopdf
```

## To put in a PHP project

```php
require_once "vendor/autoload.php";

use GuzzleHttp\Client;
use PDFGenerator\PDFGenerator;
use PDFGenerator\Implementation\RemotePDF;

$client = new Client(['base_uri' => 'http://192.168.0.1:8080']);
$generator = new PDFGenerator(new RemotePDF($client));

header("Content-type:application/pdf");

echo $generator->fromURL('http://www.google.co.uk');
```
