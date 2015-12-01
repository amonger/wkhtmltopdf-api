<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/url/', function () use ($app) {
    echo "test";
});

$app->get('/', function () use ($app) {
    $pdf = new \Knp\Snappy\Pdf('xvfb-run -a -s "-screen 0 640x480x16" wkhtmltopdf');
    echo base64_encode($pdf->getOutput('http://www.google.com'));
});
