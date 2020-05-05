<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\PDFToImageCommand;

class PDFToImageCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $password = 'password';
    private string $format = 'format';
    private string $prefix = 'prefix';
    private int $page = 0;
    private int $startPage = 0;
    private int $endPage = 100;
    private string $color = 'color';
    private int $dpi = 0;
    private string $cropbox = '0 0 100 100';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            'PDFToImage',
            $pdfToImageCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $pdfToImageCommand->getInputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $pdfToImageCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPassword($this->password);
        $pdfToImageCommand->unsetPassword();

        $this->assertNull(
            $pdfToImageCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetPassword()
        );
    }

    public function testThatSetFormatSetsPassedValueAndGetFormatReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setFormat($this->format);

        $this->assertSame(
            $this->format,
            $pdfToImageCommand->getFormat()
        );
    }

    public function testThatSetFormatReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setFormat($this->format)
        );
    }

    public function testThatUnsetFormatUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setFormat($this->password);
        $pdfToImageCommand->unsetFormat();

        $this->assertNull(
            $pdfToImageCommand->getFormat()
        );
    }

    public function testThatUnsetFormatReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetFormat()
        );
    }

    public function testThatSetPrefixSetsPassedValueAndGetPrefixReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPrefix($this->prefix);

        $this->assertSame(
            $this->prefix,
            $pdfToImageCommand->getPrefix()
        );
    }

    public function testThatSetPrefixReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setPrefix($this->prefix)
        );
    }

    public function testThatUnsetPrefixUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPrefix($this->password);
        $pdfToImageCommand->unsetPrefix();

        $this->assertNull(
            $pdfToImageCommand->getPrefix()
        );
    }

    public function testThatUnsetPrefixReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetPrefix()
        );
    }

    public function testThatSetPageSetsPassedValueAndGetPageReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPage($this->page);

        $this->assertSame(
            $this->page,
            $pdfToImageCommand->getPage()
        );
    }

    public function testThatSetPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setPage($this->page)
        );
    }

    public function testThatUnsetPageUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setPage($this->page);
        $pdfToImageCommand->unsetPage();

        $this->assertNull(
            $pdfToImageCommand->getPage()
        );
    }

    public function testThatUnsetPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetPage()
        );
    }

    public function testThatSetStartPageSetsPassedValueAndGetStartPageReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setStartPage($this->startPage);

        $this->assertSame(
            $this->startPage,
            $pdfToImageCommand->getStartPage()
        );
    }

    public function testThatSetStartPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setStartPage($this->startPage)
        );
    }

    public function testThatUnsetStartPageUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setStartPage($this->startPage);
        $pdfToImageCommand->unsetStartPage();

        $this->assertNull(
            $pdfToImageCommand->getStartPage()
        );
    }

    public function testThatUnsetStartPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetStartPage()
        );
    }

    public function testThatSetEndPageSetsPassedValueAndGetEndPageReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setEndPage($this->endPage);

        $this->assertSame(
            $this->endPage,
            $pdfToImageCommand->getEndPage()
        );
    }

    public function testThatSetEndPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setEndPage($this->endPage)
        );
    }

    public function testThatUnsetEndPageUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setEndPage($this->endPage);
        $pdfToImageCommand->unsetEndPage();

        $this->assertNull(
            $pdfToImageCommand->getEndPage()
        );
    }

    public function testThatUnsetEndPageReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetEndPage()
        );
    }

    public function testThatSetColorSetsPassedValueAndGetColorReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setColor($this->color);

        $this->assertSame(
            $this->color,
            $pdfToImageCommand->getColor()
        );
    }

    public function testThatSetColorReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setColor($this->color)
        );
    }

    public function testThatUnsetColorUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setColor($this->color);
        $pdfToImageCommand->unsetColor();

        $this->assertNull(
            $pdfToImageCommand->getColor()
        );
    }

    public function testThatUnsetColorReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetColor()
        );
    }

    public function testThatSetDpiSetsPassedValueAndGetDpiReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setDpi($this->dpi);

        $this->assertSame(
            $this->dpi,
            $pdfToImageCommand->getDpi()
        );
    }

    public function testThatSetDpiReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setDpi($this->dpi)
        );
    }

    public function testThatUnsetDpiUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setDpi($this->dpi);
        $pdfToImageCommand->unsetDpi();

        $this->assertNull(
            $pdfToImageCommand->getDpi()
        );
    }

    public function testThatUnsetDpiReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetDpi()
        );
    }

    public function testThatSetCropboxSetsPassedValueAndGetCropboxReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setCropbox($this->cropbox);

        $this->assertSame(
            $this->cropbox,
            $pdfToImageCommand->getCropbox()
        );
    }

    public function testThatSetCropboxReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setCropbox($this->cropbox)
        );
    }

    public function testThatUnsetCropboxUnsetsExpectedOptionValue(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setCropbox($this->cropbox);
        $pdfToImageCommand->unsetCropbox();

        $this->assertNull(
            $pdfToImageCommand->getCropbox()
        );
    }

    public function testThatUnsetCropboxReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetCropbox()
        );
    }

    public function testThatIsTimeReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertFalse(
            $pdfToImageCommand->isTime()
        );
    }

    public function testThatSetTimeReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->setTime();

        $this->assertTrue(
            $pdfToImageCommand->isTime()
        );
    }

    public function testThatSetTimeReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->setTime()
        );
    }

    public function testThatUnsetTimeReturnsExpectedResult(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);
        $pdfToImageCommand->unsetTime();

        $this->assertFalse(
            $pdfToImageCommand->isTime()
        );
    }

    public function testThatUnsetTimeReturnsSelfReference(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            $pdfToImageCommand,
            $pdfToImageCommand->unsetTime()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $pdfToImageCommand = new PDFToImageCommand($this->inputFilePath);

        $this->assertSame(
            [
                'PDFToImage',
                $this->inputFilePath,
            ],
            $pdfToImageCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $pdfToImageCommand = (new PDFToImageCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setFormat($this->format)
            ->setPrefix($this->prefix)
            ->setPage($this->page)
            ->setStartPage($this->startPage)
            ->setEndPage($this->endPage)
            ->setColor($this->color)
            ->setDpi($this->dpi)
            ->setCropbox($this->cropbox)
            ->setTime();

        $this->assertSame(
            [
                'PDFToImage',
                '-password',
                $this->password,
                '-format',
                $this->format,
                '-prefix',
                $this->prefix,
                '-page',
                $this->page,
                '-startPage',
                $this->startPage,
                '-endPage',
                $this->endPage,
                '-color',
                $this->color,
                '-dpi',
                $this->dpi,
                '-cropbox',
                $this->cropbox,
                '-time',
                $this->inputFilePath,
            ],
            $pdfToImageCommand->getArguments()
        );
    }
}
