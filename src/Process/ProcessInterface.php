<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Process;

use VirCom\ApachePDFBox\Command\Result\CommandResult;

interface ProcessInterface
{
    public function run(): CommandResult;
}
