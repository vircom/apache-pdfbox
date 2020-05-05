<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\TextToPDFCommand;

class TextToPDFCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $standardFont = 'standard font';
    private string $ttf = '/path/to/ttf/file.pdf';
    private int $fontSize = 10;
    private string $pageSize = 'page size';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            'TextToPDF',
            $textToPDFCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $this->inputFilePath,
            $textToPDFCommand->getInputFile()
        );
    }

    public function testThatGetOutputFileReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $this->outputFilePath,
            $textToPDFCommand->getOutputFile()
        );
    }

    public function testThatSetStandardFontSetsPassedValueAndGetStandardFontReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setStandardFont($this->standardFont);

        $this->assertSame(
            $this->standardFont,
            $textToPDFCommand->getStandardFont()
        );
    }

    public function testThatSetStandardFontReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->setStandardFont($this->standardFont)
        );
    }

    public function testThatUnsetStandardFontUnsetsExpectedOptionValue(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setStandardFont($this->standardFont);
        $textToPDFCommand->unsetStandardFont();

        $this->assertNull(
            $textToPDFCommand->getStandardFont()
        );
    }

    public function testThatUnsetStandardFontReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->unsetStandardFont()
        );
    }

    public function testThatSetTtfSetsPassedValueAndGetTtfReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setTtf($this->ttf);

        $this->assertSame(
            $this->ttf,
            $textToPDFCommand->getTtf()
        );
    }

    public function testThatSetTtfReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->setTtf($this->ttf)
        );
    }

    public function testThatUnsetTtfUnsetsExpectedOptionValue(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setTtf($this->ttf);
        $textToPDFCommand->unsetTtf();

        $this->assertNull(
            $textToPDFCommand->getTtf()
        );
    }

    public function testThatUnsetTtfReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->unsetTtf()
        );
    }

    public function testThatSetFontSizeSetsPassedValueAndGetFontSizeReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setFontSize($this->fontSize);

        $this->assertSame(
            $this->fontSize,
            $textToPDFCommand->getFontSize()
        );
    }

    public function testThatSetFontSizeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->setFontSize($this->fontSize)
        );
    }

    public function testThatUnsetFontSizeUnsetsExpectedOptionValue(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setFontSize($this->fontSize);
        $textToPDFCommand->unsetFontSize();

        $this->assertNull(
            $textToPDFCommand->getFontSize()
        );
    }

    public function testThatUnsetFontSizeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->unsetFontSize()
        );
    }

    public function testThatSetPageSizeSetsPassedValueAndGetPageSizeReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setPageSize($this->pageSize);

        $this->assertSame(
            $this->pageSize,
            $textToPDFCommand->getPageSize()
        );
    }

    public function testThatSetPageSizeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->setPageSize($this->pageSize)
        );
    }

    public function testThatUnsetPageSizeUnsetsExpectedOptionValue(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setPageSize($this->pageSize);
        $textToPDFCommand->unsetPageSize();

        $this->assertNull(
            $textToPDFCommand->getPageSize()
        );
    }

    public function testThatUnsetPageSizeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->unsetPageSize()
        );
    }

    public function testThatIsLandscapeReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertFalse(
            $textToPDFCommand->isLandscape()
        );
    }

    public function testThatSetLandscapeReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->setLandscape();

        $this->assertTrue(
            $textToPDFCommand->isLandscape()
        );
    }

    public function testThatSetLandscapeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->setLandscape()
        );
    }

    public function testThatUnsetLandscapeReturnsExpectedResult(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );
        $textToPDFCommand->unsetLandscape();

        $this->assertFalse(
            $textToPDFCommand->isLandscape()
        );
    }

    public function testThatUnsetLandscapeReturnsSelfReference(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            $textToPDFCommand,
            $textToPDFCommand->unsetLandscape()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWhenNoOptions(): void
    {
        $textToPDFCommand = new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        );

        $this->assertSame(
            [
                'TextToPDF',
                $this->outputFilePath,
                $this->inputFilePath,
            ],
            $textToPDFCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputWithOptions(): void
    {
        $textToPDFCommand = (new TextToPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath
        ))
            ->setStandardFont($this->standardFont)
            ->setTtf($this->ttf)
            ->setFontSize($this->fontSize)
            ->setPageSize($this->pageSize)
            ->setLandscape();

        $this->assertSame(
            [
                'TextToPDF',
                '-standardFont',
                $this->standardFont,
                '-ttf',
                $this->ttf,
                '-fontSize',
                $this->fontSize,
                '-pageSize',
                $this->pageSize,
                '-landscape',
                $this->outputFilePath,
                $this->inputFilePath,
            ],
            $textToPDFCommand->getArguments()
        );
    }
}
