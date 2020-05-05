<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Process\Adapter;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use VirCom\ApachePDFBox\Process\Adapter\SymfonyProcessAdapter;

class SymfonyProcessAdapterTest extends TestCase
{
    private string $processResultCommandLine = 'command line';
    private bool $processResultIsSuccessful = true;
    private string $processResultOutput = 'output';
    private string $processResultErrorOutput = 'error output';
    private int $processResultExitCode = 0;
    private string $processResultExitCodeText = 'exit code text';

    /**
     * @var Process|MockObject
     */
    private $process;

    private SymfonyProcessAdapter $symfonyProcessAdapter;

    protected function setUp(): void
    {
        $this->process = $this->createMock(Process::class);
        $this->process
            ->method('getCommandLine')
            ->willReturn($this->processResultCommandLine);

        $this->process
            ->method('isSuccessful')
            ->willReturn($this->processResultIsSuccessful);

        $this->process
            ->method('getOutput')
            ->willReturn($this->processResultOutput);

        $this->process
            ->method('getErrorOutput')
            ->willReturn($this->processResultErrorOutput);

        $this->process
            ->method('getExitCode')
            ->willReturn($this->processResultExitCode);

        $this->process
            ->method('getExitCodeText')
            ->willReturn($this->processResultExitCodeText);

        $this->symfonyProcessAdapter = new SymfonyProcessAdapter(
            $this->process
        );
    }

    public function testThatRunsProcess(): void
    {
        $this->process
            ->expects($this->once())
            ->method('run');

        $this->symfonyProcessAdapter->run();
    }

    public function testThatRunsProcessReturnsExpectedCommandLine(): void
    {
        $this->assertSame(
            $this->processResultCommandLine,
            $this->symfonyProcessAdapter->run()->getCommandLine()
        );
    }

    public function testThatRunsProcessReturnsExpectedIsSuccessfulStatus(): void
    {
        $this->assertSame(
            $this->processResultIsSuccessful,
            $this->symfonyProcessAdapter->run()->isSuccessful()
        );
    }

    public function testThatRunsProcessReturnsExpectedOutput(): void
    {
        $this->assertSame(
            $this->processResultOutput,
            $this->symfonyProcessAdapter->run()->getOutput()
        );
    }

    public function testThatRunsProcessReturnsExpectedErrorOutput(): void
    {
        $this->assertSame(
            $this->processResultErrorOutput,
            $this->symfonyProcessAdapter->run()->getErrorOutput()
        );
    }

    public function testThatRunsProcessReturnsExpectedExitCode(): void
    {
        $this->assertSame(
            $this->processResultExitCode,
            $this->symfonyProcessAdapter->run()->getExitCode()
        );
    }

    public function testThatRunsProcessReturnsExpectedExitCodeText(): void
    {
        $this->assertSame(
            $this->processResultExitCodeText,
            $this->symfonyProcessAdapter->run()->getExitCodeText()
        );
    }
}
