<?php

declare(strict_types=1);

namespace VirComTest\ApachePDFBox\Service;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\MockObject\Stub;
use PHPUnit\Framework\TestCase;
use VirCom\ApachePDFBox\Command\CommandInterface;
use VirCom\ApachePDFBox\Command\Result\CommandResult;
use VirCom\ApachePDFBox\Factory\Process\Adapter\ProcessAdapterFactoryInterface;
use VirCom\ApachePDFBox\Process\ProcessInterface;
use VirCom\ApachePDFBox\Service\ApachePDFBoxService;

class ApachePDFBoxServiceTest extends TestCase
{
    /**
     * @var CommandInterface|Stub
     */
    private $command;

    /**
     * @var CommandResult|Stub
     */
    private $commandResult;

    /**
     * @var ProcessAdapterFactoryInterface|MockObject
     */
    private $processAdapterFactory;

    /**
     * @var ProcessInterface|MockObject
     */
    private $process;

    private ApachePDFBoxService $apachePDFBoxService;

    protected function setUp(): void
    {
        $this->command = $this->createStub(CommandInterface::class);
        $this->commandResult = $this->createStub(CommandResult::class);
        $this->process = $this->createMock(ProcessInterface::class);
        $this->processAdapterFactory = $this->createMock(ProcessAdapterFactoryInterface::class);

        $this->process
            ->method('run')
            ->willReturn($this->commandResult);

        $this->processAdapterFactory
            ->method('createProcess')
            ->willReturn($this->process);

        $this->apachePDFBoxService = new ApachePDFBoxService(
            $this->processAdapterFactory
        );
    }

    public function testThatExecuteCreatesProcess(): void
    {
        $this->processAdapterFactory
            ->expects($this->once())
            ->method('createProcess');

        $this->apachePDFBoxService
            ->execute($this->command);
    }

    public function testThatExecuteRunsProcess(): void
    {
        $this->process
            ->expects($this->once())
            ->method('run');

        $this->apachePDFBoxService
            ->execute($this->command);
    }

    public function testThatExecuteReturnsCommandResult(): void
    {
        $this->assertSame(
            $this->commandResult,
            $this->apachePDFBoxService
                ->execute($this->command)
        );
    }
}
