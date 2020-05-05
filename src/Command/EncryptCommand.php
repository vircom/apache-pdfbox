<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class EncryptCommand extends AbstractCommand
{
    private const NAME = 'Encrypt';

    private const OPTIONS_OWNER_PASSWORD = '-O';
    private const OPTIONS_USER_PASSWORD = '-U';
    private const OPTIONS_CERT_FILE = '-certFile';
    private const OPTIONS_CAN_ASSEMBLE = '-canAssemble';
    private const OPTIONS_CAN_EXTRACT_CONTENT = '-canExtractContent';
    private const OPTIONS_CAN_EXTRACT_FOR_ACCESSIBILITY = '-canExtractForAccessibility';
    private const OPTIONS_CAN_FILL_IN_FORM = '-canFillInForm';
    private const OPTIONS_CAN_MODIFY = '-canModify';
    private const OPTIONS_CAN_MODIFY_ANNOTATIONS = '-canModifyAnnotations';
    private const OPTIONS_CAN_PRINT = '-canPrint';
    private const OPTIONS_CAN_PRINT_DEGRADED = '-canPrintDegraded';
    private const OPTIONS_KEY_LENGTH = '-keyLength';

    private string $inputFile;
    private ?string $outputFile;

    public function __construct(
        string $inputFile,
        ?string $outputFile = null
    ) {
        $this->inputFile = $inputFile;
        $this->outputFile = $outputFile;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getInputFile(): string
    {
        return $this->inputFile;
    }

    public function getOutputFile(): ?string
    {
        return $this->outputFile;
    }

    public function getOwnerPassword(): ?string
    {
        return $this->getOption(self::OPTIONS_OWNER_PASSWORD);
    }

    public function setOwnerPassword(
        string $ownerPassword
    ): self {
        $this->setOption(
            self::OPTIONS_OWNER_PASSWORD,
            $ownerPassword
        );

        return $this;
    }

    public function unsetOwnerPassword(): self
    {
        $this->unsetOption(self::OPTIONS_OWNER_PASSWORD);

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->getOption(self::OPTIONS_USER_PASSWORD);
    }

    public function setUserPassword(
        string $userPassword
    ): self {
        $this->setOption(
            self::OPTIONS_USER_PASSWORD,
            $userPassword
        );

        return $this;
    }

    public function unsetUserPassword(): self
    {
        $this->unsetOption(self::OPTIONS_USER_PASSWORD);

        return $this;
    }

    public function getCertFile(): ?string
    {
        return $this->getOption(self::OPTIONS_CERT_FILE);
    }

    public function setCertFile(
        string $certFile
    ): self {
        $this->setOption(
            self::OPTIONS_CERT_FILE,
            $certFile
        );

        return $this;
    }

    public function unsetCertFile(): self
    {
        $this->unsetOption(self::OPTIONS_CERT_FILE);

        return $this;
    }

    public function canAssemble(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_ASSEMBLE);
    }

    public function setCanAssemble(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_ASSEMBLE);

        return $this;
    }

    public function unsetCanAssemble(): self
    {
        $this->setOption(self::OPTIONS_CAN_ASSEMBLE);

        return $this;
    }

    public function canExtractContent(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_EXTRACT_CONTENT);
    }

    public function setCanExtractContent(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_EXTRACT_CONTENT);

        return $this;
    }

    public function unsetCanExtractContent(): self
    {
        $this->setOption(self::OPTIONS_CAN_EXTRACT_CONTENT);

        return $this;
    }

    public function canExtractForAccessibility(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_EXTRACT_FOR_ACCESSIBILITY);
    }

    public function setCanExtractForAccessibility(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_EXTRACT_FOR_ACCESSIBILITY);

        return $this;
    }

    public function unsetCanExtractForAccessibility(): self
    {
        $this->setOption(self::OPTIONS_CAN_EXTRACT_FOR_ACCESSIBILITY);

        return $this;
    }

    public function canFillInForm(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_FILL_IN_FORM);
    }

    public function setCanFillInForm(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_FILL_IN_FORM);

        return $this;
    }

    public function unsetCanFillInForm(): self
    {
        $this->setOption(self::OPTIONS_CAN_FILL_IN_FORM);

        return $this;
    }

    public function canModify(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_MODIFY);
    }

    public function setCanModify(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_MODIFY);

        return $this;
    }

    public function unsetCanModify(): self
    {
        $this->setOption(self::OPTIONS_CAN_MODIFY);

        return $this;
    }

    public function canModifyAnnotations(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_MODIFY_ANNOTATIONS);
    }

    public function setCanModifyAnnotations(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_MODIFY_ANNOTATIONS);

        return $this;
    }

    public function unsetCanModifyAnnotations(): self
    {
        $this->setOption(self::OPTIONS_CAN_MODIFY_ANNOTATIONS);

        return $this;
    }

    public function canPrint(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_PRINT);
    }

    public function setCanPrint(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_PRINT);

        return $this;
    }

    public function unsetCanPrint(): self
    {
        $this->setOption(self::OPTIONS_CAN_PRINT);

        return $this;
    }

    public function canPrintDegraded(): bool
    {
        return ! $this->hasOption(self::OPTIONS_CAN_PRINT_DEGRADED);
    }

    public function setCanPrintDegraded(): self
    {
        $this->unsetOption(self::OPTIONS_CAN_PRINT_DEGRADED);

        return $this;
    }

    public function unsetCanPrintDegraded(): self
    {
        $this->setOption(self::OPTIONS_CAN_PRINT_DEGRADED);

        return $this;
    }

    public function getKeyLength(): ?int
    {
        return $this->getOption(self::OPTIONS_KEY_LENGTH);
    }

    public function setKeyLength(
        int $keyLength
    ): self {
        $this->setOption(
            self::OPTIONS_KEY_LENGTH,
            $keyLength
        );

        return $this;
    }

    public function unsetKeyLength(): self
    {
        $this->unsetOption(self::OPTIONS_KEY_LENGTH);

        return $this;
    }

    /**
     * @return array|mixed[]
     */
    public function getArguments(): array
    {
        return array_filter(
            [
                $this->getName(),
                ...$this->getFlattenOptions(),
                $this->getInputFile(),
                $this->getOutputFile(),
            ],
            fn ($value) => $value !== null
        );
    }
}
