<?php

declare(strict_types=1);

namespace BombenProdukt\Passphrase\Generators;

use Illuminate\Config\Repository;
use BombenProdukt\Passphrase\Contracts\Generator;
use BombenProdukt\Passphrase\Mnemonic;

final class MnemonicWithFrenchGenerator implements Generator
{
    public function __construct(private readonly Repository $config)
    {
        //
    }

    public function generate(): string
    {
        return Mnemonic::useFrench()->generate($this->config->get('passphrase.wordCount'));
    }
}
