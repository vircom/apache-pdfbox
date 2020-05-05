<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class OverlayPDFCommand extends AbstractCommand
{
    private const NAME = 'OverlayPDF';

    private const OPTIONS_ODD = '-odd';
    private const OPTIONS_EVEN = '-even';
    private const OPTIONS_FIRST = '-first';
    private const OPTIONS_LAST = '-last';
    private const OPTIONS_USE_ALL_PAGES = '-useAllPages';
    private const OPTIONS_PAGE = '-page';
    private const OPTIONS_POSITION = '-position';

    private string $inputFile;
    private string $outputFile;
    private string $overlayFile;

    public function __construct(
        string $inputFile,
        string $outputFile,
        string $overlayFile
    ) {
        $this->inputFile = $inputFile;
        $this->outputFile = $outputFile;
        $this->overlayFile = $overlayFile;
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

    public function getOverlayFile(): string
    {
        return $this->overlayFile;
    }

    public function getOdd(): ?string
    {
        return $this->getOption(self::OPTIONS_ODD);
    }

    public function setOdd(
        string $odd
    ): self {
        $this->setOption(
            self::OPTIONS_ODD,
            $odd
        );

        return $this;
    }

    public function unsetOdd(): self
    {
        $this->unsetOption(self::OPTIONS_ODD);

        return $this;
    }

    public function getEven(): ?string
    {
        return $this->getOption(self::OPTIONS_EVEN);
    }

    public function setEven(
        string $even
    ): self {
        $this->setOption(
            self::OPTIONS_EVEN,
            $even
        );

        return $this;
    }

    public function unsetEven(): self
    {
        $this->unsetOption(self::OPTIONS_EVEN);

        return $this;
    }

    public function getFirst(): ?string
    {
        return $this->getOption(self::OPTIONS_FIRST);
    }

    public function setFirst(
        string $first
    ): self {
        $this->setOption(
            self::OPTIONS_FIRST,
            $first
        );

        return $this;
    }

    public function unsetFirst(): self
    {
        $this->unsetOption(self::OPTIONS_FIRST);

        return $this;
    }

    public function getLast(): ?string
    {
        return $this->getOption(self::OPTIONS_LAST);
    }

    public function setLast(
        string $last
    ): self {
        $this->setOption(
            self::OPTIONS_LAST,
            $last
        );

        return $this;
    }

    public function unsetLast(): self
    {
        $this->unsetOption(self::OPTIONS_LAST);

        return $this;
    }

    public function getUseAllPages(): ?string
    {
        return $this->getOption(self::OPTIONS_USE_ALL_PAGES);
    }

    public function setUseAllPages(
        string $useAllPages
    ): self {
        $this->setOption(
            self::OPTIONS_USE_ALL_PAGES,
            $useAllPages
        );

        return $this;
    }

    public function unsetUseAllPages(): self
    {
        $this->unsetOption(self::OPTIONS_USE_ALL_PAGES);

        return $this;
    }

    public function getPage(): ?string
    {
        return $this->getOption(self::OPTIONS_PAGE);
    }

    public function setPage(
        string $page
    ): self {
        $this->setOption(
            self::OPTIONS_PAGE,
            $page
        );

        return $this;
    }

    public function unsetPage(): self
    {
        $this->unsetOption(self::OPTIONS_PAGE);

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->getOption(self::OPTIONS_POSITION);
    }

    public function setPosition(
        string $position
    ): self {
        $this->setOption(
            self::OPTIONS_POSITION,
            $position
        );

        return $this;
    }

    public function unsetPosition(): self
    {
        $this->unsetOption(self::OPTIONS_POSITION);

        return $this;
    }

    /**
     * @return array|mixed[]
     */
    public function getArguments(): array
    {
        return [
            $this->getName(),
            $this->getInputFile(),
            $this->getOverlayFile(),
            ...$this->getFlattenOptions(),
            $this->getOutputFile(),
        ];
    }
}
