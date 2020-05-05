<?php

declare(strict_types=1);

namespace VirCom\ApachePDFBox;

use VirCom\ApachePDFBox\Factory\Process\Adapter\SymfonyProcessAdapterFactory;
use VirCom\ApachePDFBox\Service\ApachePDFBoxService;

class ApachePDFBoxServiceFactory
{
    public function createService(
        string $javaPath,
        string $jarPath
    ): ApachePDFBoxService {
        return new ApachePDFBoxService(
            new SymfonyProcessAdapterFactory(
                $javaPath,
                $jarPath
            )
        );
    }
}
