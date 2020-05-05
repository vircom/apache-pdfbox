<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class ExtractTextCommand extends AbstractCommand
{
    private const NAME = 'ExtractText';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_ENCODING = '-encoding';
    private const OPTIONS_CONSOLE = '-console';
    private const OPTIONS_HTML = '-html';
    private const OPTIONS_SORT = '-sort';
    private const OPTIONS_IGNORE_BEADS = '-ignoreBeads';
    private const OPTIONS_DEBUG = '-debug';
    private const OPTIONS_START_PAGE = '-startPage';
    private const OPTIONS_END_PAGE = '-endPage';

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

    public function getEncoding(): ?string
    {
        return $this->getOption(self::OPTIONS_ENCODING);
    }

    public function setEncoding(
        string $encoding
    ): self {
        $this->setOption(
            self::OPTIONS_ENCODING,
            $encoding
        );

        return $this;
    }

    public function unsetEncoding(): self
    {
        $this->unsetOption(self::OPTIONS_ENCODING);

        return $this;
    }

    public function isConsole(): bool
    {
        return $this->hasOption(self::OPTIONS_CONSOLE);
    }

    public function setConsole(): self
    {
        $this->setOption(self::OPTIONS_CONSOLE);

        return $this;
    }

    public function unsetConsole(): self
    {
        $this->unsetOption(self::OPTIONS_CONSOLE);

        return $this;
    }

    public function isHtml(): bool
    {
        return $this->hasOption(self::OPTIONS_HTML);
    }

    public function setHtml(): self
    {
        $this->setOption(self::OPTIONS_HTML);

        return $this;
    }

    public function unsetHtml(): self
    {
        $this->unsetOption(self::OPTIONS_HTML);

        return $this;
    }

    public function isSort(): bool
    {
        return $this->hasOption(self::OPTIONS_SORT);
    }

    public function setSort(): self
    {
        $this->setOption(self::OPTIONS_SORT);

        return $this;
    }

    public function unsetSort(): self
    {
        $this->unsetOption(self::OPTIONS_SORT);

        return $this;
    }

    public function isIgnoreBeads(): bool
    {
        return $this->hasOption(self::OPTIONS_IGNORE_BEADS);
    }

    public function setIgnoreBeads(): self
    {
        $this->setOption(self::OPTIONS_IGNORE_BEADS);

        return $this;
    }

    public function unsetIgnoreBeads(): self
    {
        $this->unsetOption(self::OPTIONS_IGNORE_BEADS);

        return $this;
    }

    public function isDebug(): bool
    {
        return $this->hasOption(self::OPTIONS_DEBUG);
    }

    public function setDebug(): self
    {
        $this->setOption(self::OPTIONS_DEBUG);

        return $this;
    }

    public function unsetDebug(): self
    {
        $this->unsetOption(self::OPTIONS_DEBUG);

        return $this;
    }

    public function getStartPage(): ?int
    {
        return $this->getOption(self::OPTIONS_START_PAGE);
    }

    public function setStartPage(
        int $startPage
    ): self {
        $this->setOption(
            self::OPTIONS_START_PAGE,
            $startPage
        );

        return $this;
    }

    public function unsetStartPage(): self
    {
        $this->unsetOption(self::OPTIONS_START_PAGE);

        return $this;
    }

    public function getEndPage(): ?int
    {
        return $this->getOption(self::OPTIONS_END_PAGE);
    }

    public function setEndPage(
        int $endPage
    ): self {
        $this->setOption(
            self::OPTIONS_END_PAGE,
            $endPage
        );

        return $this;
    }

    public function unsetEndPage(): self
    {
        $this->unsetOption(self::OPTIONS_END_PAGE);

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
