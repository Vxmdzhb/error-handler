<?php
declare(strict_types=1);

use AstrX\ErrorHandler\UncaughtThrowableDiagnostic;
use AstrX\I18n\Translator;
use AstrX\Result\DiagnosticInterface;

/**
 * Diagnostics — en: error handling.
 */
return [

    // ErrorHandler
    'astrx.error_handler/uncaught_throwable' => function (
        DiagnosticInterface $d,
        Translator $t
    )
    : string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "Uncaught {$d->getThrowableClass()}: {$d->getMessage()}";
    },

    'astrx.error_handler/php_error' => function (
        DiagnosticInterface $d,
        Translator $t
    ): string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "PHP error: {$d->getMessage()}";
    },

    'astrx.error_handler/fatal_error' => function (
        DiagnosticInterface $d,
        Translator $t
    ): string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "Fatal error: {$d->getMessage()}";
    },
];
