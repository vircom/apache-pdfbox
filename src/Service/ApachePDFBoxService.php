<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Service;

use VirCom\ApachePDFBox\Command\CommandInterface;
use VirCom\ApachePDFBox\Command\Result\CommandResult;
use VirCom\ApachePDFBox\Factory\Process\Adapter\ProcessAdapterFactoryInterface;

class ApachePDFBoxService
{
    private ProcessAdapterFactoryInterface $processAdapterFactory;

    public function __construct(
        ProcessAdapterFactoryInterface $processAdapterFactory
    ) {
        $this->processAdapterFactory = $processAdapterFactory;
    }

    public function execute(
        CommandInterface $command
    ): CommandResult {
        $process = $this->processAdapterFactory->createProcess(
            $command->getArguments()
        );

        return $process->run();
    }
}
