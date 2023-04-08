<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithKoreanGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithKoreanGenerator::class)->generate())->toBeString();
});