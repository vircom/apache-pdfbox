<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class ExtractImagesCommand extends AbstractCommand
{
    private const NAME = 'ExtractImages';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_PREFIX = '-prefix';
    private const OPTIONS_DIRECT_JPEG = '-directJPEG';

    private string $inputFile;

    public function __construct(
        string $inputFile
    ) {
        $this->inputFile = $inputFile;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getInputFile(): string
    {
        return $this->inputFile;
    }

    public function getPassword(): ?string
    {
        return $this->getOption(self::OPTIONS_PASSWORD);
    }

    public function setPassword(
        string $password
    ): self {
        $this->setOption(
            self::OPTIONS_PASSWORD,
            $password
        );

        return $this;
    }

    public function unsetPassword(): self
    {
        $this->unsetOption(self::OPTIONS_PASSWORD);

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->getOption(self::OPTIONS_PREFIX);
    }

    public function setPrefix(
        string $prefix
    ): self {
        $this->setOption(
            self::OPTIONS_PREFIX,
            $prefix
        );

        return $this;
    }

    public function unsetPrefix(): self
    {
        $this->unsetOption(self::OPTIONS_PREFIX);

        return $this;
    }

    public function isDirectJPEG(): bool
    {
        return $this->hasOption(self::OPTIONS_DIRECT_JPEG);
    }

    public function setDirectJPEG(): self
    {
        $this->setOption(self::OPTIONS_DIRECT_JPEG);

        return $this;
    }

    public function unsetDirectJPEG(): self
    {
        $this->unsetOption(self::OPTIONS_DIRECT_JPEG);

        return $this;
    }

    /**
     * @return array|mixed[]
     */
    public function getArguments(): array
    {
        return [
            $this->getName(),
            ...$this->getFlattenOptions(),
            $this->getInputFile(),
        ];
    }
}
