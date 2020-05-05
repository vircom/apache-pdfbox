# vircom/apache-pdfbox
-----

[![Build Status](https://travis-ci.org/vircom/apache-pdfbox.svg?branch=master)](https://travis-ci.org/vircom/apache-pdfbox)
[![Coverage Status](https://coveralls.io/repos/github/vircom/apache-pdfbox/badge.svg)](https://coveralls.io/github/vircom/apache-pdfbox)
[![Latest Stable Version](https://poser.pugx.org/vircom/apache-pdfbox/v/stable.png)](https://packagist.org/packages/vircom/apache-pdfbox)
[![Total Downloads](https://poser.pugx.org/vircom/apache-pdfbox/downloads.png)](https://packagist.org/vircom/apache-pdfbox)
[![License](https://poser.pugx.org/vircom/apache-pdfbox/license.png)](https://packagist.org/packages/vircom/apache-pdfbox)

This package provides an implementation to wrap Apache PDFBox command line tool functionality.


# Prerequisites

- PHP 7.4+ with enabled at last on of these functions: `exec`, `system`, `passthru`, `shell_exec`
- Java JRE 1.8+
- [pdfbox-app-2.0.9.jar](https://archive.apache.org/dist/pdfbox/2.0.9/pdfbox-app-2.0.9.jar)

# Installation

## Install by composer

To install vircom/apache-pdfbox with Composer, run the following command:

```sh
$ composer require vircom/apache-pdfbox
```

You can see this library on [Packagist](https://packagist.org/packages/vircom/apache-pdfbox).

Composer installs autoloader at `./vendor/autoloader.php`. If you use vircom/apache-pdfbox in your php script, add:

```php
require_once 'vendor/autoload.php';
```

# Usage:

## Creating instance of library
```php
use VirCom\ApachePDFBox\ApachePDFBoxServiceFactory;

$service = (new ApachePDFBoxServiceFactory())
    ->createService(
        '/path/to/java/interpreter',
        '/path/to/apache/pdfbox/binary/file/pdfbox-app-2.0.9.jarg'
    );
```

## Decrypt
```php
use VirCom\ApachePDFBox\Command\DecryptCommand;

$service->execute(
    (new DecryptCommand(
        '/path/to/input/pdf/file.pdf',
        '/path/to/output/pdf/file.pdf'
    ))
    ->setAlias('alias') // The alias of the key in the certificate file (mandatory if several keys are available)
    ->setKeyStore('/path/to/certificate/file') // The KeyStore that holds the certificate
    ->setPassword('password'); // The password to open the certificate and extract the private key from it
);
```

## Encrypt
```php
use VirCom\ApachePDFBox\Command\EncryptCommand;

$servce->execute(
    (new EncryptCommand(
        '/path/to/input/pdf/file.pdf',
        '/path/to/output/pdf/file.pdf'
    ))
    ->setOwnerPassword('owner password') // Set the owner password (ignored if cert is set)
    ->setUserPassword('user password') // Set the user password (ignored if cert is set)
    ->setCertFile('/path/to/certificate/file') // Path to X.509 certificate
    ->setCanAssemble() // Set the assemble permission
    ->setCanExtractContent() // Set the extraction permission
    ->setCanExtractForAccessibility() // Set the extraction permission
    ->setCanFillInForm() // Set the fill in form permission
    ->setCanModify() // Set the modify permission
    ->setCanModifyAnnotations() // Set the modify annots permission
    ->setCanPrint() //  Set the print permission
    ->setCanPrintDegraded() // Set the print degraded permission
    ->setKeyLength(40 / 128 / 256); // The length of the key in bits (valid values: 40, 128 or 256 default is 40)
);
```

## Extract images
```php
use VirCom\ApachePDFBox\Command\ExtractImagesCommand;

$servce->execute(
    (new ExtractImagesCommand(
        '/path/to/input/pdf/file.pdf'
    ))
    ->setPassword('password') // Password to decrypt document
    ->setPrefix('prefix') // Image prefix (default to pdf name)
    ->setDirectJPEG() // Forces the direct extraction of JPEG/JPX images regardless of colorspace or masking
);
```

## Extract text
```php
use VirCom\ApachePDFBox\Command\ExtractTextCommand;

$servce->execute(
    (new ExtractTextCommand(
        '/path/to/input/pdf/file.pdf',
        '/path/to/output/pdf/file.pdf'
    ))
    ->setPassword('password') // Password to decrypt document
    ->setEncoding('encoding') // UTF-8 (default) or ISO-8859-1, UTF-16BE, UTF-16LE, etc.
    ->setConsole() // Send text to console instead of file
    ->setHtml() // Output in HTML format instead of raw text
    ->setSort() // Sort the text before writing
    ->setIgnoreBeads() // Disables the separation by beads
    ->setDebug() // Enables debug output about the time consumption of every stage
    ->setStartPage(page number) // The first page to start extraction(1 based)
    ->setEndPage(page number) // The last page to extract(inclusive)
);
```

## Overlay
```php
use VirCom\ApachePDFBox\Command\OverlayPDFCommand;

$servce->execute(
    (new OverlayPDFCommand(
        '/path/to/input/pdf/file.pdf',
        '/path/to/output/pdf/file.pdf',
        '/path/to/overlay/pdf/file.pdf'
    ))
    ->setOdd('/path/to/overlay/odd/file.pdf') // Overlay file used for odd pages
    ->setEven('/path/to/overlay/even/file.pdf') // Overlay file used for even pages
    ->setFirst('/path/to/overlay/first/file.pdf') // Overlay file used for first page
    ->setLast('/path/to/overlay/last/file.pdf') // Overlay file used for last page
    ->setUseAllPages('/path/to/overlay/use-all-pages/file.pdf') // Overlay file used for overlay, all pages are used by simply repeating them
    ->setPage('page number /path/to/overlay/specific-page/file.pdf') // Overlay file used for the given page number, may occur more than once
    ->setPosition('foreground / background') // Where to put the overlay file: foreground or background
);
```

## Merge
```php
use VirCom\ApachePDFBox\Command\PDFMergerCommand;

$servce->execute(
    (new PDFMergerCommand(
        [
            '/path/to/input/pdf/file1.pdf',
            '/path/to/input/pdf/file2.pdf',
        ]
        '/path/to/overlay/pdf/file.pdf'
    ))
);
```

## Split
```php
use VirCom\ApachePDFBox\Command\PDFSplitCommand;

$servce->execute(
    (new PDFSplitCommand(
        '/path/to/input/pdf/file.pdf'
    ))
    ->setPassword('password') // Password to decrypt document
    ->setSplit(split pages number) // Split after this many pages (default 1, if startPage and endPage are unset)
    ->setStartPage(start page number) // Start page
    ->setEndPage(end page number) // End page
    ->setOutputPrefix('output prefix') // Filename prefix for splitted files
);
```

## To image
```php
use VirCom\ApachePDFBox\Command\PDFToImageCommand;

$servce->execute(
    (new PDFToImageCommand(
        '/path/to/input/pdf/file.pdf'
    ))
    ->setPassword('password') // Password to decrypt document
    ->setFormat('format') // Image format: JPG, jpg, tiff, bmp, BMP, gif, GIF, WBMP, png, PNG, JPEG, JBIG2, tif, TIF, TIFF, jpeg, wbmp, jbig2
    ->setPrefix('prefix') // Filename prefix for image files
    ->setPage(page number) // The only page to extract (1-based)
    ->setStartPage(page number) // The first page to start extraction (1-based)
    ->setEndPage(page number) // The last page to extract (inclusive)
    ->setColor('color') // The color depth (valid: bilevel, gray, rgb, rgba)
    ->setDpi(dpi) // The DPI of the output image
    ->setCropbox(leftTop rightTop leftBottom rightBotton) // The page area to export
    ->setTime() // Prints timing information to stdout
);
```

## From text
```php
use VirCom\ApachePDFBox\Command\TextToPDFCommand;

$servce->execute(
    (new TextToPDFCommand(
        '/path/to/input/text/file.txt',
        '/path/to/overlay/pdf/file.pdf'
    ))
    ->setStandardFont('standard font name') // One of: Helvetica (default), Courier-Bold, Courier-BoldOblique, Times-Roman, Helvetica-Oblique, Courier-Oblique, Symbol, Times-Italic, Helvetica, Helvetica-Bold, Times-BoldItalic, ZapfDingbats, Times-Bold, Helvetica-BoldOblique, Courier
    ->setTtf('/path/to/ttf/file.ttf') //  The TTF font to use
    ->setFontSize(font size) // Default: 10
    ->setPageSize('page size') // One of: Letter (default), Legal, A0, A1, A2, A3, A4, A5, A6
    ->setLandscape() // Sets orientation to landscape
);
```

## To DOC
```php
use VirCom\ApachePDFBox\Command\WriteDecodedDocCommand;

$servce->execute(
    (new WriteDecodedDocCommand(
        '/path/to/input/pdf/file.pdf',
        '/path/to/output/doc/file.doc'
    ))
    ->setPassword('password') // Password to decrypt document
    ->setSkipImages() // Don't uncompress images
);
```

## ResultObject
```php
use VirCom\ApachePDFBox\Command\Result\CommandResult;

/** @var CommandResult $result */
$result = $service->execute(...);

$result->getCommandLine(); // Executed command line
$result->isSuccessful(); // Checks if the process ended successfully
$result->getOutput(); // Executed process output
$result->getErrorOutput(); // Executed process error output
$result-getExitCode(); // Executed process exit code status
$result->getExitCodeText(); // Executed process exit code status text
```

# About

## Submitting bugs and feature requests

Bugs and feature request are tracked on [GitHub](https://github.com/vircom/apache-pdfbox/issues)

## License

Monolog is licensed under the MIT License - see the `LICENSE` file for details