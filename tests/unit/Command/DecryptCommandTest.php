<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\DecryptCommand;

class DecryptCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $alias = 'alias';
    private string $keyStoreFilePath = '/path/to/keystore/file.pdf';
    private string $password = 'password';

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            'Decrypt',
            $decryptCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $decryptCommand->getInputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsNullResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertNull(
            $decryptCommand->getOutputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            $this->outputFilePath,
            $decryptCommand->getOutputFile()
        );
    }

    public function testThatSetPasswordSetsPassedValueAndGetPasswordReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setPassword($this->password);

        $this->assertSame(
            $this->password,
            $decryptCommand->getPassword()
        );
    }

    public function testThatSetPasswordReturnsSelfReference(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $decryptCommand,
            $decryptCommand->setPassword($this->password)
        );
    }

    public function testThatUnsetPasswordUnsetsExpectedOptionValue(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setPassword($this->password);
        $decryptCommand->unsetPassword();

        $this->assertNull(
            $decryptCommand->getPassword()
        );
    }

    public function testThatUnsetPasswordReturnsSelfReference(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $decryptCommand,
            $decryptCommand->unsetPassword()
        );
    }

    public function testThatSetKeyStoreSetsPassedValueAndGetKeyStoreReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setKeyStore($this->keyStoreFilePath);

        $this->assertSame(
            $this->keyStoreFilePath,
            $decryptCommand->getKeyStore()
        );
    }

    public function testThatSetKeyStoreReturnsSelfReference(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $decryptCommand,
            $decryptCommand->setKeyStore($this->keyStoreFilePath)
        );
    }

    public function testThatUnsetKeyStoreUnsetsExpectedOptionValue(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setKeyStore($this->keyStoreFilePath);
        $decryptCommand->unsetKeyStore();

        $this->assertNull(
            $decryptCommand->getKeyStore()
        );
    }

    public function testThatUnsetKeyStoreReturnsSelfReference(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $decryptCommand,
            $decryptCommand->unsetKeyStore()
        );
    }

    public function testThatGetAliasReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setAlias($this->alias);

        $this->assertSame(
            $this->alias,
            $decryptCommand->getAlias()
        );
    }

    public function testThatSetAliasSetsPassedValueAndGetAliasReturnsExpectedResult(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setAlias($this->alias);

        $this->assertSame(
            $this->alias,
            $decryptCommand->getAlias()
        );
    }

    public function testThatUnsetAliasUnsetsExpectedOptionValue(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);
        $decryptCommand->setAlias($this->alias);
        $decryptCommand->unsetAlias();

        $this->assertNull(
            $decryptCommand->getAlias()
        );
    }

    public function testThatUnsetAliasReturnsSelfReference(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            $decryptCommand,
            $decryptCommand->unsetAlias()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath);

        $this->assertSame(
            [
                'Decrypt',
                $this->inputFilePath,
            ],
            $decryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $decryptCommand = (new DecryptCommand($this->inputFilePath))
            ->setPassword($this->password)
            ->setAlias($this->alias)
            ->setKeyStore($this->keyStoreFilePath);

        $this->assertSame(
            [
                'Decrypt',
                '-password',
                $this->password,
                '-alias',
                $this->alias,
                '-keyStore',
                $this->keyStoreFilePath,
                $this->inputFilePath,
            ],
            $decryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWhenNoOptions(): void
    {
        $decryptCommand = new DecryptCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            [
                'Decrypt',
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $decryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWithOptions(): void
    {
        $decryptCommand = (new DecryptCommand($this->inputFilePath, $this->outputFilePath))
            ->setPassword($this->password)
            ->setAlias($this->alias)
            ->setKeyStore($this->keyStoreFilePath);

        $this->assertSame(
            [
                'Decrypt',
                '-password',
                $this->password,
                '-alias',
                $this->alias,
                '-keyStore',
                $this->keyStoreFilePath,
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $decryptCommand->getArguments()
        );
    }
}
