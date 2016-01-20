<?php

namespace PDFGenerator;

interface PDFGeneratorInterface
{
    /**
     *  Takes a url and returns a base64 encoded PDF
     */
    public function fromURL($url);

    /**
     *  Takes a base64 encoded string and returns a PDF
     */
    public function fromHTML($html);
}
