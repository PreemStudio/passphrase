<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithSpanishGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithSpanishGenerator::class)->generate())->toBeString();
});
