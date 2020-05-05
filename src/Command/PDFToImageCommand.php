<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox\Command;

class PDFToImageCommand extends AbstractCommand
{
    private const NAME = 'PDFToImage';

    private const OPTIONS_PASSWORD = '-password';
    private const OPTIONS_FORMAT = '-format';
    private const OPTIONS_PREFIX = '-prefix';
    private const OPTIONS_PAGE = '-page';
    private const OPTIONS_START_PAGE = '-startPage';
    private const OPTIONS_END_PAGE = '-endPage';
    private const OPTIONS_COLOR = '-color';
    private const OPTIONS_DPI = '-dpi';
    private const OPTIONS_CROPBOX = '-cropbox';
    private const OPTIONS_TIME = '-time';

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

    public function getFormat(): ?string
    {
        return $this->getOption(self::OPTIONS_FORMAT);
    }

    public function setFormat(
        string $format
    ): self {
        $this->setOption(
            self::OPTIONS_FORMAT,
            $format
        );

        return $this;
    }

    public function unsetFormat(): self
    {
        $this->unsetOption(self::OPTIONS_FORMAT);

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

    public function getPage(): ?int
    {
        return $this->getOption(self::OPTIONS_PAGE);
    }

    public function setPage(
        int $page
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

    public function getColor(): ?string
    {
        return $this->getOption(self::OPTIONS_COLOR);
    }

    public function setColor(
        string $color
    ): self {
        $this->setOption(
            self::OPTIONS_COLOR,
            $color
        );

        return $this;
    }

    public function unsetColor(): self
    {
        $this->unsetOption(self::OPTIONS_COLOR);

        return $this;
    }

    public function getDpi(): ?int
    {
        return $this->getOption(self::OPTIONS_DPI);
    }

    public function setDpi(
        int $dpi
    ): self {
        $this->setOption(
            self::OPTIONS_DPI,
            $dpi
        );

        return $this;
    }

    public function unsetDpi(): self
    {
        $this->unsetOption(self::OPTIONS_DPI);

        return $this;
    }

    public function getCropbox(): ?string
    {
        return $this->getOption(self::OPTIONS_CROPBOX);
    }

    public function setCropbox(
        string $cropbox
    ): self {
        $this->setOption(
            self::OPTIONS_CROPBOX,
            $cropbox
        );

        return $this;
    }

    public function unsetCropbox(): self
    {
        $this->unsetOption(self::OPTIONS_CROPBOX);

        return $this;
    }

    public function isTime(): bool
    {
        return $this->hasOption(self::OPTIONS_TIME);
    }

    public function setTime(): self
    {
        $this->setOption(self::OPTIONS_TIME);

        return $this;
    }

    public function unsetTime(): self
    {
        $this->unsetOption(self::OPTIONS_TIME);

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
