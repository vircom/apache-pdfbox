<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command\Result;

class CommandResult
{
    private string $commandLine;
    private bool $isSuccessful;
    private string $output;
    private string $errorOutput;
    private int $exitCode;
    private string $exitCodeText;

    public function __construct(
        string $commandLine,
        bool $isSuccessful,
        string $output,
        string $errorOutput,
        int $exitCode,
        string $exitCodeText
    ) {
        $this->commandLine = $commandLine;
        $this->isSuccessful = $isSuccessful;
        $this->output = $output;
        $this->errorOutput = $errorOutput;
        $this->exitCode = $exitCode;
        $this->exitCodeText = $exitCodeText;
    }

    public function getCommandLine(): string
    {
        return $this->commandLine;
    }

    public function isSuccessful(): bool
    {
        return $this->isSuccessful;
    }

    public function getOutput(): string
    {
        return $this->output;
    }

    public function getErrorOutput(): string
    {
        return $this->errorOutput;
    }

    public function getExitCode(): int
    {
        return $this->exitCode;
    }

    public function getExitCodeText(): string
    {
        return $this->exitCodeText;
    }
}
