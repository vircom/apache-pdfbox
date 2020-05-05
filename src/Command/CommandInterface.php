<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

interface CommandInterface
{
    /**
     * @return array|mixed[]
     */
    public function getArguments(): array;
}
