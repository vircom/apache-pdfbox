<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\PDFSplitCommand;

class PDFSplitCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $password = 'password';
    private int $split = 1;
    private int $startPage = 1;
    private int $endPage = 100;
    private string $outputPrefix = 'output prefix';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            'PDFSplit',
            $pdfSplitCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $pdfSplitCommand->getInputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $pdfSplitCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setPassword($this->password);
        $pdfSplitCommand->unsetPassword();

        $this->assertNull(
            $pdfSplitCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->unsetPassword()
        );
    }

    public function testThatSetSplitSetsPassedValueAndGetSplitReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setSplit($this->split);

        $this->assertSame(
            $this->split,
            $pdfSplitCommand->getSplit()
        );
    }

    public function testThatSetSplitReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->setSplit($this->split)
        );
    }

    public function testThatUnsetSplitUnsetsExpectedOptionValue(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setSplit($this->split);
        $pdfSplitCommand->unsetSplit();

        $this->assertNull(
            $pdfSplitCommand->getSplit()
        );
    }

    public function testThatUnsetSplitReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->unsetSplit()
        );
    }

    public function testThatSetStartPageSetsPassedValueAndGetStartPageReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setStartPage($this->startPage);

        $this->assertSame(
            $this->startPage,
            $pdfSplitCommand->getStartPage()
        );
    }

    public function testThatSetStartPageReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->setStartPage($this->startPage)
        );
    }

    public function testThatUnsetStartPageUnsetsExpectedOptionValue(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setStartPage($this->startPage);
        $pdfSplitCommand->unsetStartPage();

        $this->assertNull(
            $pdfSplitCommand->getStartPage()
        );
    }

    public function testThatUnsetStartPageReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->unsetStartPage()
        );
    }

    public function testThatSetEndPageSetsPassedValueAndGetEndPageReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setEndPage($this->endPage);

        $this->assertSame(
            $this->endPage,
            $pdfSplitCommand->getEndPage()
        );
    }

    public function testThatSetEndPageReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->setEndPage($this->endPage)
        );
    }

    public function testThatUnsetEndPageUnsetsExpectedOptionValue(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setEndPage($this->endPage);
        $pdfSplitCommand->unsetEndPage();

        $this->assertNull(
            $pdfSplitCommand->getEndPage()
        );
    }

    public function testThatUnsetEndPageReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->unsetEndPage()
        );
    }



    public function testThatSetOutputPrefixSetsPassedValueAndGetOutputPrefixReturnsExpectedResult(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setOutputPrefix($this->outputPrefix);

        $this->assertSame(
            $this->outputPrefix,
            $pdfSplitCommand->getOutputPrefix()
        );
    }

    public function testThatSetOutputPrefixReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->setOutputPrefix($this->outputPrefix)
        );
    }

    public function testThatUnsetOutputPrefixUnsetsExpectedOptionValue(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);
        $pdfSplitCommand->setOutputPrefix($this->outputPrefix);
        $pdfSplitCommand->unsetOutputPrefix();

        $this->assertNull(
            $pdfSplitCommand->getOutputPrefix()
        );
    }

    public function testThatUnsetOutputPrefixReturnsSelfReference(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            $pdfSplitCommand,
            $pdfSplitCommand->unsetOutputPrefix()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $pdfSplitCommand = new PDFSplitCommand($this->inputFilePath);

        $this->assertSame(
            [
                'PDFSplit',
                $this->inputFilePath,
            ],
            $pdfSplitCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $pdfSplitCommand = (new PDFSplitCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setSplit($this->split)
            ->setStartPage($this->startPage)
            ->setEndPage($this->endPage)
            ->setOutputPrefix($this->outputPrefix);

        $this->assertSame(
            [
                'PDFSplit',
                '-password',
                $this->password,
                '-split',
                $this->split,
                '-startPage',
                $this->startPage,
                '-endPage',
                $this->endPage,
                '-outputPrefix',
                $this->outputPrefix,
                $this->inputFilePath,
            ],
            $pdfSplitCommand->getArguments()
        );
    }
}
