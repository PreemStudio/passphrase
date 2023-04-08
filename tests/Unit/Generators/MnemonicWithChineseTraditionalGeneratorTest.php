<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithChineseTraditionalGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithChineseTraditionalGenerator::class)->generate())->toBeString();
});
