<?php

namespace PDFGenerator;

class PDFGenerator extends AbstractPDFGenerator
{
    public function fromURL($url)
    {
        return $this->generator->fromURL($url);
    }

    public function fromHTML($html)
    {
        return $this->generator->fromHTML($html);
    }
}
