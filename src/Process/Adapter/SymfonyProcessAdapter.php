<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Process\Adapter;

use Symfony\Component\Process\Process;
use VirCom\ApachePDFBox\Command\Result\CommandResult;
use VirCom\ApachePDFBox\Process\ProcessInterface;

class SymfonyProcessAdapter implements ProcessInterface
{
    private Process $process;

    public function __construct(
        Process $process
    ) {
        $this->process = $process;
    }

    public function run(): CommandResult
    {
        $this->process->run();

        return new CommandResult(
            $this->process->getCommandLine(),
            $this->process->isSuccessful(),
            $this->process->getOutput(),
            $this->process->getErrorOutput(),
            (int) $this->process->getExitCode(),
            (string) $this->process->getExitCodeText()
        );
    }
}
