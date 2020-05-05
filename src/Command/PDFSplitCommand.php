<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class PDFSplitCommand extends AbstractCommand
{
    private const NAME = 'PDFSplit';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_SPLIT = '-split';
    private const OPTIONS_START_PAGE = '-startPage';
    private const OPTIONS_END_PAGE = '-endPage';
    private const OPTIONS_OUTPUT_PREFIX = '-outputPrefix';

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

    public function getSplit(): ?int
    {
        return $this->getOption(self::OPTIONS_SPLIT);
    }

    public function setSplit(
        int $split
    ): self {
        $this->setOption(
            self::OPTIONS_SPLIT,
            $split
        );

        return $this;
    }

    public function unsetSplit(): self
    {
        $this->unsetOption(self::OPTIONS_SPLIT);

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

    public function getOutputPrefix(): ?string
    {
        return $this->getOption(self::OPTIONS_OUTPUT_PREFIX);
    }

    public function setOutputPrefix(
        string $outputPrefix
    ): self {
        $this->setOption(
            self::OPTIONS_OUTPUT_PREFIX,
            $outputPrefix
        );

        return $this;
    }

    public function unsetOutputPrefix(): self
    {
        $this->unsetOption(self::OPTIONS_OUTPUT_PREFIX);

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
            ],
            fn ($value) => $value !== null
        );
    }
}
