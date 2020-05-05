<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class TextToPDFCommand extends AbstractCommand
{
    private const NAME = 'TextToPDF';

    private const OPTIONS_STANDARD_FONT = '-standardFont';
    private const OPTIONS_TTF = '-ttf';
    private const OPTIONS_FONT_SIZE = '-fontSize';
    private const OPTIONS_PAGE_SIZE = '-pageSize';
    private const OPTIONS_LANDSCAPE = '-landscape';

    private string $inputFile;
    private string $outputFile;

    public function __construct(
        string $inputFile,
        string $outputFile
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

    public function getOutputFile(): string
    {
        return $this->outputFile;
    }

    public function getStandardFont(): ?string
    {
        return $this->getOption(self::OPTIONS_STANDARD_FONT);
    }

    public function setStandardFont(
        string $standardFont
    ): self {
        $this->setOption(
            self::OPTIONS_STANDARD_FONT,
            $standardFont
        );

        return $this;
    }

    public function unsetStandardFont(): self
    {
        $this->unsetOption(self::OPTIONS_STANDARD_FONT);

        return $this;
    }

    public function getTtf(): ?string
    {
        return $this->getOption(self::OPTIONS_TTF);
    }

    public function setTtf(
        string $ttf
    ): self {
        $this->setOption(
            self::OPTIONS_TTF,
            $ttf
        );

        return $this;
    }

    public function unsetTtf(): self
    {
        $this->unsetOption(self::OPTIONS_TTF);

        return $this;
    }

    public function getFontSize(): ?int
    {
        return $this->getOption(self::OPTIONS_FONT_SIZE);
    }

    public function setFontSize(
        int $fontSize
    ): self {
        $this->setOption(
            self::OPTIONS_FONT_SIZE,
            $fontSize
        );

        return $this;
    }

    public function unsetFontSize(): self
    {
        $this->unsetOption(self::OPTIONS_FONT_SIZE);

        return $this;
    }

    public function getPageSize(): ?string
    {
        return $this->getOption(self::OPTIONS_PAGE_SIZE);
    }

    public function setPageSize(
        string $pageSize
    ): self {
        $this->setOption(
            self::OPTIONS_PAGE_SIZE,
            $pageSize
        );

        return $this;
    }

    public function unsetPageSize(): self
    {
        $this->unsetOption(self::OPTIONS_PAGE_SIZE);

        return $this;
    }

    public function isLandscape(): bool
    {
        return $this->hasOption(self::OPTIONS_LANDSCAPE);
    }

    public function setLandscape(): self
    {
        $this->setOption(self::OPTIONS_LANDSCAPE);

        return $this;
    }

    public function unsetLandscape(): self
    {
        $this->unsetOption(self::OPTIONS_LANDSCAPE);

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
            $this->getOutputFile(),
            $this->getInputFile(),
        ];
    }
}
