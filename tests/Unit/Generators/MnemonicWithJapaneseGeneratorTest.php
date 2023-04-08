<?php

declare(strict_types=1);

namespace Tests\Unit\Generators;

use PreemStudio\Passphrase\Generators\MnemonicWithJapaneseGenerator;

it('should generate a string', function (): void {
    expect(resolve(MnemonicWithJapaneseGenerator::class)->generate())->toBeString();
});
