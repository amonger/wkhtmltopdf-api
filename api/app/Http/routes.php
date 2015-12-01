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

use Illuminate\Http\Request;
use Knp\Snappy\Pdf;

$app->get('/', function() use ($app) {
    echo "Make a post request to either /html or /url";
});

$app->get('/html', function () use ($app) {
    echo "Use post with a base64 encoded html parameter";
});

$app->post('/html', function (Request $request) use ($app) {
    $pdf = new Pdf('xvfb-run -a -s "-screen 0 640x480x16" wkhtmltopdf');
    echo base64_encode($pdf->getOutputFromHtml(base64_decode($request->get('html'))));
});

$app->get('/url', function () use ($app) {
    echo "Use post with a url parameter";
});

$app->post('/url', function (Request $request) use ($app) {
    $pdf = new Pdf('xvfb-run -a -s "-screen 0 640x480x16" wkhtmltopdf');
    echo base64_encode($pdf->getOutput($request->get('url')));
});
