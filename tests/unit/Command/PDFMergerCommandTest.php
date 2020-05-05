<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\PDFMergerCommand;

class PDFMergerCommandTest extends TestCase
{
    private array $inputFilePaths = [
        '/path/to/input/file1.pdf',
        '/path/to/input/file2.pdf',
    ];
    private string $outputFilePath = '/path/to/output/file.pdf';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $pdfMergerCommand = new PDFMergerCommand(
            $this->inputFilePaths,
            $this->outputFilePath
        );

        $this->assertSame(
            'PDFMerger',
            $pdfMergerCommand->getName()
        );
    }

    public function testThatGetInputFilesReturnsExpectedResult(): void
    {
        $pdfMergerCommand = new PDFMergerCommand(
            $this->inputFilePaths,
            $this->outputFilePath
        );

        $this->assertSame(
            $this->inputFilePaths,
            $pdfMergerCommand->getInputFiles()
        );
    }

    public function testThatGetOutputFileReturnsExpectedResult(): void
    {
        $pdfMergerCommand = new PDFMergerCommand(
            $this->inputFilePaths,
            $this->outputFilePath
        );

        $this->assertSame(
            $this->outputFilePath,
            $pdfMergerCommand->getOutputFile()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNamesOutputFileName(): void
    {
        $pdfMergerCommand = new PDFMergerCommand(
            $this->inputFilePaths,
            $this->outputFilePath
        );

        $this->assertSame(
            [
                'PDFMerger',
                ...$this->inputFilePaths,
                $this->outputFilePath,
            ],
            $pdfMergerCommand->getArguments()
        );
    }
}
