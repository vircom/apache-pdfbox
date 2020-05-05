<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class DecryptCommand extends AbstractCommand
{
    private const NAME = 'Decrypt';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_KEY_STORE = '-keyStore';
    private const OPTIONS_ALIAS = '-alias';

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

    public function getKeyStore(): ?string
    {
        return $this->getOption(self::OPTIONS_KEY_STORE);
    }

    public function setKeyStore(
        string $keyStore
    ): self {
        $this->setOption(
            self::OPTIONS_KEY_STORE,
            $keyStore
        );

        return $this;
    }

    public function unsetKeyStore(): self
    {
        $this->unsetOption(self::OPTIONS_KEY_STORE);

        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->getOption(self::OPTIONS_ALIAS);
    }

    public function setAlias(
        string $alias
    ): self {
        $this->setOption(
            self::OPTIONS_ALIAS,
            $alias
        );

        return $this;
    }

    public function unsetAlias(): self
    {
        $this->unsetOption(self::OPTIONS_ALIAS);

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
