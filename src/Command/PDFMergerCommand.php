<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class PDFMergerCommand extends AbstractCommand
{
    private const NAME = 'PDFMerger';

    /**
     * @var string[]
     */
    private array $inputFiles = [];

    private string $outputFile;

    /**
     * @param string[] $inputFiles
     */
    public function __construct(
        array $inputFiles,
        string $outputFile
    ) {
        $this->inputFiles = $inputFiles;
        $this->outputFile = $outputFile;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @return string[]
     */
    public function getInputFiles(): array
    {
        return $this->inputFiles;
    }

    public function getOutputFile(): string
    {
        return $this->outputFile;
    }

    /**
     * @return array|mixed[]
     */
    public function getArguments(): array
    {
        return [
            $this->getName(),
            ...$this->getInputFiles(),
            $this->getOutputFile(),
        ];
    }
}
