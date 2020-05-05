<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Command;

use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\EncryptCommand;

class EncryptCommandTest extends TestCase
{
    private string $inputFilePath = '/path/to/input/file.pdf';
    private string $outputFilePath = '/path/to/output/file.pdf';
    private string $certFilePath = '/path/to/certfile/file.pdf';
    private string $userPassword = 'user password';
    private string $ownerPassword = 'owner password';
    private int $keyLength = 128;

    public function testThatGetNameReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            'Encrypt',
            $encryptCommand->getName()
        );
    }

    public function testThatGetInputFileReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $this->inputFilePath,
            $encryptCommand->getInputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsNullResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertNull(
            $encryptCommand->getOutputFile()
        );
    }

    public function testThatGetOutputFilePathReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            $this->outputFilePath,
            $encryptCommand->getOutputFile()
        );
    }

    public function testThatSetUserPasswordSetsPassedValueAndGetUserPasswordReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setUserPassword($this->userPassword);

        $this->assertSame(
            $this->userPassword,
            $encryptCommand->getUserPassword()
        );
    }

    public function testThatSetUserPasswordReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setUserPassword($this->userPassword)
        );
    }

    public function testThatUnsetUserPasswordUnsetsExpectedOptionValue(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setUserPassword($this->userPassword);
        $encryptCommand->unsetUserPassword();

        $this->assertNull(
            $encryptCommand->getUserPassword()
        );
    }

    public function testThatUnsetUserPasswordReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetUserPassword()
        );
    }

    public function testThatSetOwnerPasswordSetsPassedValueAndGetUserPasswordReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setOwnerPassword($this->ownerPassword);

        $this->assertSame(
            $this->ownerPassword,
            $encryptCommand->getOwnerPassword()
        );
    }

    public function testThatSetOwnerPasswordReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setOwnerPassword($this->ownerPassword)
        );
    }

    public function testThatUnsetOwnerPasswordUnsetsExpectedOptionValue(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setOwnerPassword($this->ownerPassword);
        $encryptCommand->unsetOwnerPassword();

        $this->assertNull(
            $encryptCommand->getOwnerPassword()
        );
    }

    public function testThatUnsetOwnerPasswordReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetOwnerPassword()
        );
    }

    public function testThatSetCertFileSetsPassedValueAndGetCertFileReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCertFile($this->certFilePath);

        $this->assertSame(
            $this->certFilePath,
            $encryptCommand->getCertFile()
        );
    }

    public function testThatSetCertFileReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCertFile($this->certFilePath)
        );
    }

    public function testThatUnsetCertFileUnsetsExpectedOptionValue(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCertFile($this->certFilePath);
        $encryptCommand->unsetCertFile();

        $this->assertNull(
            $encryptCommand->getCertFile()
        );
    }

    public function testThatUnsetCertFileReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCertFile()
        );
    }

    public function testThatCanAssembleReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canAssemble()
        );
    }

    public function testThatSetCanAssembleReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanAssemble();

        $this->assertTrue(
            $encryptCommand->canAssemble()
        );
    }

    public function testThatSetCanAssembleReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanAssemble()
        );
    }

    public function testThatUnsetCanAssembleReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanAssemble();

        $this->assertFalse(
            $encryptCommand->canAssemble()
        );
    }

    public function testThatUnsetCanAssembleReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanAssemble()
        );
    }

    public function testThatCanExtractContentReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canExtractContent()
        );
    }

    public function testThatSetCanExtractContentReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanExtractContent();

        $this->assertTrue(
            $encryptCommand->canExtractContent()
        );
    }

    public function testThatSetCanExtractContentReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanExtractContent()
        );
    }

    public function testThatUnsetCanExtractContentReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanExtractContent();

        $this->assertFalse(
            $encryptCommand->canExtractContent()
        );
    }

    public function testThatUnsetCanExtractContentReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanExtractContent()
        );
    }

    public function testThatCanExtractForAccessibilityReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canExtractForAccessibility()
        );
    }

    public function testThatSetCanExtractForAccessibilityReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanExtractForAccessibility();

        $this->assertTrue(
            $encryptCommand->canExtractForAccessibility()
        );
    }

    public function testThatSetCanExtractForAccessibilityReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanExtractForAccessibility()
        );
    }

    public function testThatUnsetCanExtractForAccessibilityReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanExtractForAccessibility();

        $this->assertFalse(
            $encryptCommand->canExtractForAccessibility()
        );
    }

    public function testThatUnsetCanExtractForAccessibilityReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanExtractForAccessibility()
        );
    }

    public function testThatCanFillInFormReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canFillInForm()
        );
    }

    public function testThatSetCanFillInFormReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanFillInForm();

        $this->assertTrue(
            $encryptCommand->canFillInForm()
        );
    }

    public function testThatSetCanFillInFormReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanFillInForm()
        );
    }

    public function testThatUnsetCanFillInFormReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanFillInForm();

        $this->assertFalse(
            $encryptCommand->canFillInForm()
        );
    }

    public function testThatUnsetCanFillInFormReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanFillInForm()
        );
    }

    public function testThatCanModifyReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canModify()
        );
    }

    public function testThatSetCanModifyReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanModify();

        $this->assertTrue(
            $encryptCommand->canModify()
        );
    }

    public function testThatSetCanModifyReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanModify()
        );
    }

    public function testThatUnsetCanModifyReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanModify();

        $this->assertFalse(
            $encryptCommand->canModify()
        );
    }

    public function testThatUnsetCanModifyReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanModify()
        );
    }

    public function testThatCanModifyAnnotationsReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canModifyAnnotations()
        );
    }

    public function testThatSetCanModifyAnnotationsReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanModifyAnnotations();

        $this->assertTrue(
            $encryptCommand->canModifyAnnotations()
        );
    }

    public function testThatSetCanModifyAnnotationsReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanModifyAnnotations()
        );
    }

    public function testThatUnsetCanModifyAnnotationsReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanModifyAnnotations();

        $this->assertFalse(
            $encryptCommand->canModifyAnnotations()
        );
    }

    public function testThatUnsetCanModifyAnnotationsReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanModifyAnnotations()
        );
    }

    public function testThatCanPrintReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canPrint()
        );
    }

    public function testThatSetCanPrintReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanPrint();

        $this->assertTrue(
            $encryptCommand->canPrint()
        );
    }

    public function testThatSetCanPrintReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanPrint()
        );
    }

    public function testThatUnsetCanPrintReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanPrint();

        $this->assertFalse(
            $encryptCommand->canPrint()
        );
    }

    public function testThatUnsetCanPrintReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanPrint()
        );
    }

    public function testThatCanPrintDegradedReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertTrue(
            $encryptCommand->canPrintDegraded()
        );
    }

    public function testThatSetCanPrintDegradedReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setCanPrintDegraded();

        $this->assertTrue(
            $encryptCommand->canPrintDegraded()
        );
    }

    public function testThatSetCanPrintDegradedReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setCanPrintDegraded()
        );
    }

    public function testThatUnsetCanPrintDegradedReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->unsetCanPrintDegraded();

        $this->assertFalse(
            $encryptCommand->canPrintDegraded()
        );
    }

    public function testThatUnsetCanPrintDegradedReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetCanPrintDegraded()
        );
    }

    public function testThatSetKeyLengthSetsPassedValueAndGetKeyLengthReturnsExpectedResult(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setKeyLength($this->keyLength);

        $this->assertSame(
            $this->keyLength,
            $encryptCommand->getKeyLength()
        );
    }

    public function testThatSetKeyLengthReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->setKeyLength($this->keyLength)
        );
    }

    public function testThatUnsetKeyLengthUnsetsExpectedOptionValue(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);
        $encryptCommand->setKeyLength($this->keyLength);
        $encryptCommand->unsetKeyLength();

        $this->assertNull(
            $encryptCommand->getKeyLength()
        );
    }

    public function testThatUnsetKeyLengthReturnsSelfReference(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            $encryptCommand,
            $encryptCommand->unsetKeyLength()
        );
    }

    public function testThatGetArgumentsReturnsOnlyInputFileNameWhenNoOptionsAndOutputFileName(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath);

        $this->assertSame(
            [
                'Encrypt',
                $this->inputFilePath,
            ],
            $encryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputFileNameAndOptionsWhenNoOutputFileName(): void
    {
        $encryptCommand = (new EncryptCommand($this->inputFilePath))
            ->setOwnerPassword($this->ownerPassword)
            ->setUserPassword($this->userPassword)
            ->setCertFile($this->certFilePath)
            ->unsetCanAssemble()
            ->unsetCanExtractContent()
            ->unsetCanExtractForAccessibility()
            ->unsetCanFillInForm()
            ->unsetCanModify()
            ->unsetCanModifyAnnotations()
            ->unsetCanPrint()
            ->unsetCanPrintDegraded()
            ->setKeyLength($this->keyLength);

        $this->assertSame(
            [
                'Encrypt',
                '-O',
                $this->ownerPassword,
                '-U',
                $this->userPassword,
                '-certFile',
                $this->certFilePath,
                '-canAssemble',
                '-canExtractContent',
                '-canExtractForAccessibility',
                '-canFillInForm',
                '-canModify',
                '-canModifyAnnotations',
                '-canPrint',
                '-canPrintDegraded',
                '-keyLength',
                $this->keyLength,
                $this->inputFilePath,
            ],
            $encryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWhenNoOptions(): void
    {
        $encryptCommand = new EncryptCommand($this->inputFilePath, $this->outputFilePath);

        $this->assertSame(
            [
                'Encrypt',
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $encryptCommand->getArguments()
        );
    }

    public function testThatGetArgumentsReturnsInputAndOutputFileNamesWithOptions(): void
    {
        $encryptCommand = (new EncryptCommand($this->inputFilePath, $this->outputFilePath))
            ->setOwnerPassword($this->ownerPassword)
            ->setUserPassword($this->userPassword)
            ->setCertFile($this->certFilePath)
            ->unsetCanAssemble()
            ->unsetCanExtractContent()
            ->unsetCanExtractForAccessibility()
            ->unsetCanFillInForm()
            ->unsetCanModify()
            ->unsetCanModifyAnnotations()
            ->unsetCanPrint()
            ->unsetCanPrintDegraded()
            ->setKeyLength($this->keyLength);

        $this->assertSame(
            [
                'Encrypt',
                '-O',
                $this->ownerPassword,
                '-U',
                $this->userPassword,
                '-certFile',
                $this->certFilePath,
                '-canAssemble',
                '-canExtractContent',
                '-canExtractForAccessibility',
                '-canFillInForm',
                '-canModify',
                '-canModifyAnnotations',
                '-canPrint',
                '-canPrintDegraded',
                '-keyLength',
                $this->keyLength,
                $this->inputFilePath,
                $this->outputFilePath,
            ],
            $encryptCommand->getArguments()
        );
    }
}
