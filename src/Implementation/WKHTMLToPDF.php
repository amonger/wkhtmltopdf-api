<?php

namespace PDFGenerator\Implementation;

use PDFGenerator\PDFGeneratorInterface;
use Knp\Snappy\Pdf;

class WKHTMLToPDF implements PDFGeneratorInterface
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function fromURL($url)
    {
        return $this->pdf->getOutput($url);
    }
}
