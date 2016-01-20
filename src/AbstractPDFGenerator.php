<?php

namespace PDFGenerator;

abstract class AbstractPDFGenerator implements PDFGeneratorInterface
{
    protected $generator;

    public function __construct(PDFGeneratorInterface $generator)
    {
        $this->generator = $generator;
    }
}
