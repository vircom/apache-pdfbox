<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class WriteDecodedDocCommand extends AbstractCommand
{
    private const NAME = 'WriteDecodedDoc';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_SKIP_IMAGES = '-skipImages';

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

    public function isSkipImages(): bool
    {
        return $this->hasOption(self::OPTIONS_SKIP_IMAGES);
    }

    public function setSkipImages(): self
    {
        $this->setOption(self::OPTIONS_SKIP_IMAGES);

        return $this;
    }

    public function unsetSkipImages(): self
    {
        $this->unsetOption(self::OPTIONS_SKIP_IMAGES);

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
