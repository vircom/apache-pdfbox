<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\ExtractImagesCommand;

class ExtractImagesCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $password = 'password';
    private string $prefix = 'prefix';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            'ExtractImages',
            $extractImagesCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $extractImagesCommand->getInputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $extractImagesCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->setPassword($this->password);
        $extractImagesCommand->unsetPassword();

        $this->assertNull(
            $extractImagesCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->unsetPassword()
        );
    }

    public function testThatSetPrefixSetsPassedValueAndGetPrefixReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->setPrefix($this->prefix);

        $this->assertSame(
            $this->prefix,
            $extractImagesCommand->getPrefix()
        );
    }

    public function testThatSetPrefixReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->setPrefix($this->prefix)
        );
    }

    public function testThatUnsetPrefixUnsetsExpectedOptionValue(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->setPrefix($this->prefix);
        $extractImagesCommand->unsetPrefix();

        $this->assertNull(
            $extractImagesCommand->getPrefix()
        );
    }

    public function testThatUnsetPrefixReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->unsetPrefix()
        );
    }

    public function testThatIsDirectJPEGReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertFalse(
            $extractImagesCommand->isDirectJPEG()
        );
    }

    public function testThatSetDirectJPEGReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->setDirectJPEG();

        $this->assertTrue(
            $extractImagesCommand->isDirectJPEG()
        );
    }

    public function testThatSetDirectJPEGReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->setDirectJPEG()
        );
    }

    public function testThatUnsetDirectJPEGReturnsExpectedResult(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);
        $extractImagesCommand->unsetDirectJPEG();

        $this->assertFalse(
            $extractImagesCommand->isDirectJPEG()
        );
    }

    public function testThatUnsetDirectJPEGReturnsSelfReference(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            $extractImagesCommand,
            $extractImagesCommand->unsetDirectJPEG()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptions(): void
    {
        $extractImagesCommand = new ExtractImagesCommand($this->inputFilePath);

        $this->assertSame(
            [
                'ExtractImages',
                $this->inputFilePath,
            ],
            $extractImagesCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptions(): void
    {
        $extractImagesCommand = (new ExtractImagesCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setPrefix($this->prefix)
            ->setDirectJPEG();

        $this->assertSame(
            [
                'ExtractImages',
                '-password',
                $this->password,
                '-prefix',
                $this->prefix,
                '-directJPEG',
                $this->inputFilePath,
            ],
            $extractImagesCommand->getArguments()
        );
    }
}
