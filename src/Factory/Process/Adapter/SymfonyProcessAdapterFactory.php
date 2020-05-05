<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Factory\Process\Adapter;

use Symfony\Component\Process\Process;
use VirCom\ApachePDFBox\Process\Adapter\SymfonyProcessAdapter;
use VirCom\ApachePDFBox\Process\ProcessInterface;

class SymfonyProcessAdapterFactory implements ProcessAdapterFactoryInterface
{
    private string $javaPath;
    private string $jarPath;

    public function __construct(
        string $javaPath,
        string $jarPath
    ) {
        $this->javaPath = $javaPath;
        $this->jarPath = $jarPath;
    }

    /**
     * @param string[] $arguments
     */
    public function createProcess(
        array $arguments
    ): ProcessInterface {
        return new SymfonyProcessAdapter(
            new Process(
                $this->buildArgumentsList($arguments)
            )
        );
    }

    /**
     * @param string[] $arguments
     * @return string[]
     */
    private function buildArgumentsList(
        array $arguments
    ): array {
        return [
            $this->javaPath,
            '-jar',
            $this->jarPath,
            ...$arguments,
        ];
    }
}
