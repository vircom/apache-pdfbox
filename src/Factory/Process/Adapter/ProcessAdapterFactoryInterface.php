<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Factory\Process\Adapter;

use VirCom\ApachePDFBox\Process\ProcessInterface;

interface ProcessAdapterFactoryInterface
{
    /**
     * @param string[] $arguments
     */
    public function createProcess(array $arguments): ProcessInterface;
}
