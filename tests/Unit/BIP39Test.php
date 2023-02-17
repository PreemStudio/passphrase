<?php

declare(strict_types=1);

use PreemStudio\Passphrase\BIP39;

it('should generate a random passphrase', function ($method): void {
    expect(explode(' ', BIP39::{$method}()->generate(12)))->toHaveCount(12);
    expect(explode(' ', BIP39::{$method}()->generate(24)))->toHaveCount(24);
})->with([
    'useChineseSimplified',
    'useChineseTraditional',
    'useCzech',
    'useEnglish',
    'useFrench',
    'useItalian',
    'useJapanese',
    'useKorean',
    'useSpanish',
]);
