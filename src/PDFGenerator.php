<?php

namespace PDFGenerator;

class PDFGenerator extends AbstractPDFGenerator
{
    public function fromURL($url)
    {
        return $this->generator->fromURL($url);
    }
}
