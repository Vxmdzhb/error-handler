<?php
declare(strict_types=1);

use AstrX\ErrorHandler\UncaughtThrowableDiagnostic;
use AstrX\I18n\Translator;
use AstrX\Result\DiagnosticInterface;

/**
 * Diagnostics — it: error handling.
 */
return [

    // ErrorHandler
    'astrx.error_handler/uncaught_throwable' => function (
        DiagnosticInterface $d,
        Translator $t
    )
    : string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "Eccezione non gestita {$d->getThrowableClass()}: {$d->getMessage()}";
    },

    'astrx.error_handler/php_error' => function (
        DiagnosticInterface $d,
        Translator $t
    ): string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "Errore PHP: {$d->getMessage()}";
    },

    'astrx.error_handler/fatal_error' => function (
        DiagnosticInterface $d,
        Translator $t
    ): string {
        assert($d instanceof UncaughtThrowableDiagnostic);

        return "Errore fatale: {$d->getMessage()}";
    },
];
