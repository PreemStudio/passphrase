<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Passphrase;

final class EFF
{
    private array $wordList;

    private string $glue = '-';

    private function __construct(string $wordList)
    {
        $this->wordList = \explode("\n", \file_get_contents(\realpath(__DIR__.'/eff/'.$wordList.'.txt')));
    }

    public static function useFourDiceList(): self
    {
        return new self('eff_short_wordlist_1');
    }

    public static function useFiveDiceList(): self
    {
        return new self('eff_large_wordlist');
    }

    public static function useUniqueThreeCharacterList(): self
    {
        return new self('eff_short_wordlist_2_0');
    }

    public function useSeperator(string $glue): self
    {
        $this->glue = $glue;

        return $this;
    }

    public function generate(int $count): string
    {
        $passphrase = [];
        $max = \count($this->wordList) - 1;

        foreach (\range(1, $count) as $i) {
            $passphrase[] = $this->wordList[\random_int(0, $max)];
        }

        return \implode($this->glue, $passphrase);
    }
}
