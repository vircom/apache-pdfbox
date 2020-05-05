<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\ExtractTextCommand;

class ExtractTextCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $password = 'password';
    private string $encoding = 'encoding';
    private int $startPage = 1;
    private int $endPage = 100;

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            'ExtractText',
            $extractTextCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $extractTextCommand->getInputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsNullResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertNull(
            $extractTextCommand->getOutputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            $this->outputFilePath,
            $extractTextCommand->getOutputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $extractTextCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setPassword($this->password);
        $extractTextCommand->unsetPassword();

        $this->assertNull(
            $extractTextCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetPassword()
        );
    }

    public function testThatSetEncodingSetsPassedValueAndGetEncodingReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setEncoding($this->encoding);

        $this->assertSame(
            $this->encoding,
            $extractTextCommand->getEncoding()
        );
    }

    public function testThatSetEncodingReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setEncoding($this->encoding)
        );
    }

    public function testThatUnsetEncodingUnsetsExpectedOptionValue(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setEncoding($this->encoding);
        $extractTextCommand->unsetEncoding();

        $this->assertNull(
            $extractTextCommand->getEncoding()
        );
    }

    public function testThatUnsetEncodingReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetEncoding()
        );
    }

    public function testThatIsConsoleReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertFalse(
            $extractTextCommand->isConsole()
        );
    }

    public function testThatSetConsoleReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setConsole();

        $this->assertTrue(
            $extractTextCommand->isConsole()
        );
    }

    public function testThatSetConsoleReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setConsole()
        );
    }

    public function testThatUnsetConsoleReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->unsetConsole();

        $this->assertFalse(
            $extractTextCommand->isConsole()
        );
    }

    public function testThatUnsetConsoleReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetConsole()
        );
    }

    public function testThatIsHtmlReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertFalse(
            $extractTextCommand->isHtml()
        );
    }

    public function testThatSetHtmlReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setHtml();

        $this->assertTrue(
            $extractTextCommand->isHtml()
        );
    }

    public function testThatSetHtmlReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setHtml()
        );
    }

    public function testThatUnsetHtmlReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->unsetHtml();

        $this->assertFalse(
            $extractTextCommand->isHtml()
        );
    }

    public function testThatUnsetHtmlReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetHtml()
        );
    }

    public function testThatIsSortReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertFalse(
            $extractTextCommand->isSort()
        );
    }

    public function testThatSetSortReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setSort();

        $this->assertTrue(
            $extractTextCommand->isSort()
        );
    }

    public function testThatSetSortReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setSort()
        );
    }

    public function testThatUnsetSortReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->unsetSort();

        $this->assertFalse(
            $extractTextCommand->isSort()
        );
    }

    public function testThatUnsetSortReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetSort()
        );
    }

    public function testThatIsIgnoreBeadsReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertFalse(
            $extractTextCommand->isIgnoreBeads()
        );
    }

    public function testThatSetIgnoreBeadsReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setIgnoreBeads();

        $this->assertTrue(
            $extractTextCommand->isIgnoreBeads()
        );
    }

    public function testThatSetIgnoreBeadsReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setIgnoreBeads()
        );
    }

    public function testThatUnsetIgnoreBeadsReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->unsetIgnoreBeads();

        $this->assertFalse(
            $extractTextCommand->isIgnoreBeads()
        );
    }

    public function testThatUnsetIgnoreBeadsReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetIgnoreBeads()
        );
    }

    public function testThatIsDebugReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertFalse(
            $extractTextCommand->isDebug()
        );
    }

    public function testThatSetDebugReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setDebug();

        $this->assertTrue(
            $extractTextCommand->isDebug()
        );
    }

    public function testThatSetDebugReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setDebug()
        );
    }

    public function testThatUnsetDebugReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->unsetDebug();

        $this->assertFalse(
            $extractTextCommand->isDebug()
        );
    }

    public function testThatUnsetDebugReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetDebug()
        );
    }

    public function testThatSetStartPageSetsPassedValueAndGetStartPageReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setStartPage($this->startPage);

        $this->assertSame(
            $this->startPage,
            $extractTextCommand->getStartPage()
        );
    }

    public function testThatSetStartPageReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setStartPage($this->startPage)
        );
    }

    public function testThatUnsetStartPageUnsetsExpectedOptionValue(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setStartPage($this->startPage);
        $extractTextCommand->unsetStartPage();

        $this->assertNull(
            $extractTextCommand->getStartPage()
        );
    }

    public function testThatUnsetStartPageReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetStartPage()
        );
    }

    public function testThatSetEndPageSetsPassedValueAndGetStartEndReturnsExpectedResult(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setEndPage($this->endPage);

        $this->assertSame(
            $this->endPage,
            $extractTextCommand->getEndPage()
        );
    }

    public function testThatSetEndPageReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->setEndPage($this->endPage)
        );
    }

    public function testThatUnsetEndPageUnsetsExpectedOptionValue(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);
        $extractTextCommand->setEndPage($this->endPage);
        $extractTextCommand->unsetEndPage();

        $this->assertNull(
            $extractTextCommand->getEndPage()
        );
    }

    public function testThatUnsetEndPageReturnsSelfReference(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            $extractTextCommand,
            $extractTextCommand->unsetEndPage()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath);

        $this->assertSame(
            [
                'ExtractText',
                $this->inputFilePath,
            ],
            $extractTextCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $extractTextCommand = (new ExtractTextCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setEncoding($this->encoding)
            ->setConsole()
            ->setHtml()
            ->setSort()
            ->setIgnoreBeads()
            ->setDebug()
            ->setStartPage($this->startPage)
            ->setEndPage($this->endPage);

        $this->assertSame(
            [
                'ExtractText',
                '-password',
                $this->password,
                '-encoding',
                $this->encoding,
                '-console',
                '-html',
                '-sort',
                '-ignoreBeads',
                '-debug',
                '-startPage',
                $this->startPage,
                '-endPage',
                $this->endPage,
                $this->inputFilePath,
            ],
            $extractTextCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWhenNoOptions(): void
    {
        $extractTextCommand = new ExtractTextCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            [
                'ExtractText',
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $extractTextCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWithOptions(): void
    {
        $decryptCommand = (new ExtractTextCommand($this->inputFilePath, $this->outputFilePath))
            ->setPassword($this->password)
            ->setEncoding($this->encoding)
            ->setConsole()
            ->setHtml()
            ->setSort()
            ->setIgnoreBeads()
            ->setDebug()
            ->setStartPage($this->startPage)
            ->setEndPage($this->endPage);

        $this->assertSame(
            [
                'ExtractText',
                '-password',
                $this->password,
                '-encoding',
                $this->encoding,
                '-console',
                '-html',
                '-sort',
                '-ignoreBeads',
                '-debug',
                '-startPage',
                $this->startPage,
                '-endPage',
                $this->endPage,
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $decryptCommand->getArguments()
        );
    }
}
