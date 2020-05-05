<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\WriteDecodedDocCommand;

class WriteDecodedDocCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $password = 'password';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            'WriteDecodedDoc',
            $writeDecodedDocCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $writeDecodedDocCommand->getInputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsNullResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertNull(
            $writeDecodedDocCommand->getOutputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            $this->outputFilePath,
            $writeDecodedDocCommand->getOutputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);
        $writeDecodedDocCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $writeDecodedDocCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            $writeDecodedDocCommand,
            $writeDecodedDocCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);
        $writeDecodedDocCommand->setPassword($this->password);
        $writeDecodedDocCommand->unsetPassword();

        $this->assertNull(
            $writeDecodedDocCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            $writeDecodedDocCommand,
            $writeDecodedDocCommand->unsetPassword()
        );
    }

    public function testThatIsSkipImagesReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertFalse(
            $writeDecodedDocCommand->isSkipImages()
        );
    }

    public function testThatSetSkipImagesReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);
        $writeDecodedDocCommand->setSkipImages();

        $this->assertTrue(
            $writeDecodedDocCommand->isSkipImages()
        );
    }

    public function testThatSetSkipImagesReturnsSelfReference(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            $writeDecodedDocCommand,
            $writeDecodedDocCommand->setSkipImages()
        );
    }

    public function testThatUnsetSkipImagesReturnsExpectedResult(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);
        $writeDecodedDocCommand->unsetSkipImages();

        $this->assertFalse(
            $writeDecodedDocCommand->isSkipImages()
        );
    }

    public function testThatUnsetSkipImagesReturnsSelfReference(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            $writeDecodedDocCommand,
            $writeDecodedDocCommand->unsetSkipImages()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath);

        $this->assertSame(
            [
                'WriteDecodedDoc',
                $this->inputFilePath,
            ],
            $writeDecodedDocCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $writeDecodedDocCommand = (new WriteDecodedDocCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setSkipImages();

        $this->assertSame(
            [
                'WriteDecodedDoc',
                '-password',
                $this->password,
                '-skipImages',
                $this->inputFilePath,
            ],
            $writeDecodedDocCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWhenNoOptions(): void
    {
        $writeDecodedDocCommand = new WriteDecodedDocCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            [
                'WriteDecodedDoc',
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $writeDecodedDocCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWithOptions(): void
    {
        $writeDecodedDocCommand = (new WriteDecodedDocCommand($this->inputFilePath, $this->outputFilePath))
            ->setPassword($this->password)
            ->setSkipImages();

        $this->assertSame(
            [
                'WriteDecodedDoc',
                '-password',
                $this->password,
                '-skipImages',
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $writeDecodedDocCommand->getArguments()
        );
    }
}
