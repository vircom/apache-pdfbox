<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\OverlayPDFCommand;

class OverlayPDFCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $overlayFilePath = '/path/to/overlay/file.pdf';
    private string $oddFilePath = '/path/to/odd/file.pdf';
    private string $evenFilePath = '/path/to/even/file.pdf';
    private string $firstFilePath = '/path/to/first/file.pdf';
    private string $lastFilePath = '/path/to/last/file.pdf';
    private string $useAllPagesFilePath = '/path/to/use-all/file.pdf';
    private string $page = '1 /path/to/page/file.pdf';
    private string $position = 'position';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            'OverlayPDF',
            $overlayPDFCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $this->inputFilePath,
            $overlayPDFCommand->getInputFile()
        );
    }

    public function testThatGetOutputFileReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $this->outputFilePath,
            $overlayPDFCommand->getOutputFile()
        );
    }

    public function testThatGetOverlayFileReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $this->overlayFilePath,
            $overlayPDFCommand->getOverlayFile()
        );
    }

    public function testThatSetOddSetsPassedValueAndGetOddReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setOdd($this->oddFilePath);

        $this->assertSame(
            $this->oddFilePath,
            $overlayPDFCommand->getOdd()
        );
    }

    public function testThatSetOddReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setOdd($this->oddFilePath)
        );
    }

    public function testThatUnsetOddUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setOdd($this->oddFilePath);
        $overlayPDFCommand->unsetOdd();

        $this->assertNull(
            $overlayPDFCommand->getOdd()
        );
    }

    public function testThatUnsetOddReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetOdd()
        );
    }

    public function testThatSetEvenSetsPassedValueAndGetEvenReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setEven($this->evenFilePath);

        $this->assertSame(
            $this->evenFilePath,
            $overlayPDFCommand->getEven()
        );
    }

    public function testThatSetEvenReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setEven($this->evenFilePath)
        );
    }

    public function testThatUnsetEvenUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setEven($this->evenFilePath);
        $overlayPDFCommand->unsetEven();

        $this->assertNull(
            $overlayPDFCommand->getEven()
        );
    }

    public function testThatUnsetEvenReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetEven()
        );
    }

    public function testThatSetFirstSetsPassedValueAndGetFirstReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setFirst($this->firstFilePath);

        $this->assertSame(
            $this->firstFilePath,
            $overlayPDFCommand->getFirst()
        );
    }

    public function testThatSetFirstReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setFirst($this->firstFilePath)
        );
    }

    public function testThatUnsetFirstUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setFirst($this->firstFilePath);
        $overlayPDFCommand->unsetFirst();

        $this->assertNull(
            $overlayPDFCommand->getFirst()
        );
    }

    public function testThatUnsetFirstReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetFirst()
        );
    }

    public function testThatSetLastSetsPassedValueAndGetLastReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setLast($this->lastFilePath);

        $this->assertSame(
            $this->lastFilePath,
            $overlayPDFCommand->getLast()
        );
    }

    public function testThatSetLastReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setLast($this->lastFilePath)
        );
    }

    public function testThatUnsetLastUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setLast($this->lastFilePath);
        $overlayPDFCommand->unsetLast();

        $this->assertNull(
            $overlayPDFCommand->getLast()
        );
    }

    public function testThatUnsetLastReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetLast()
        );
    }

    public function testThatSetUseAllPagesSetsPassedValueAndGetUseAllPagesReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setUseAllPages($this->useAllPagesFilePath);

        $this->assertSame(
            $this->useAllPagesFilePath,
            $overlayPDFCommand->getUseAllPages()
        );
    }

    public function testThatSetUseAllPagesReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setUseAllPages($this->useAllPagesFilePath)
        );
    }

    public function testThatUnsetUseAllPagesUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setUseAllPages($this->useAllPagesFilePath);
        $overlayPDFCommand->unsetUseAllPages();

        $this->assertNull(
            $overlayPDFCommand->getUseAllPages()
        );
    }

    public function testThatUnsetUseAllPagesReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetUseAllPages()
        );
    }

    public function testThatSetPageSetsPassedValueAndGetPageReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setPage($this->page);

        $this->assertSame(
            $this->page,
            $overlayPDFCommand->getPage()
        );
    }

    public function testThatSetPageReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setPage($this->page)
        );
    }

    public function testThatUnsetPageUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setPage($this->page);
        $overlayPDFCommand->unsetPage();

        $this->assertNull(
            $overlayPDFCommand->getPage()
        );
    }

    public function testThatUnsetPageReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetPage()
        );
    }

    public function testThatSetPositionSetsPassedValueAndGetPositionReturnsExpectedResult(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setPosition($this->position);

        $this->assertSame(
            $this->position,
            $overlayPDFCommand->getPosition()
        );
    }

    public function testThatSetPositionReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->setPosition($this->position)
        );
    }

    public function testThatUnsetPositionUnsetsExpectedOptionValue(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );
        $overlayPDFCommand->setPosition($this->position);
        $overlayPDFCommand->unsetPosition();

        $this->assertNull(
            $overlayPDFCommand->getPosition()
        );
    }

    public function testThatUnsetPositionReturnsSelfReference(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            $overlayPDFCommand,
            $overlayPDFCommand->unsetPosition()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameOutputFileNameAndOverlayFileNameWhenNoOptions(): void
    {
        $overlayPDFCommand = new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        );

        $this->assertSame(
            [
                'OverlayPDF',
                $this->inputFilePath,
                $this->overlayFilePath,
                $this->outputFilePath,
            ],
            $overlayPDFCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameOutputFileNameAndOverlayFileNameWithOptions(): void
    {
        $overlayPDFCommand = (new OverlayPDFCommand(
            $this->inputFilePath,
            $this->outputFilePath,
            $this->overlayFilePath
        ))
            ->setOdd($this->oddFilePath)
            ->setEven($this->evenFilePath)
            ->setFirst($this->firstFilePath)
            ->setLast($this->lastFilePath)
            ->setUseAllPages($this->useAllPagesFilePath)
            ->setPage($this->page)
            ->setPosition($this->position);

        $this->assertSame(
            [
                'OverlayPDF',
                $this->inputFilePath,
                $this->overlayFilePath,
                '-odd',
                $this->oddFilePath,
                '-even',
                $this->evenFilePath,
                '-first',
                $this->firstFilePath,
                '-last',
                $this->lastFilePath,
                '-useAllPages',
                $this->useAllPagesFilePath,
                '-page',
                $this->page,
                '-position',
                $this->position,
                $this->outputFilePath,
            ],
            $overlayPDFCommand->getArguments()
        );
    }
}
