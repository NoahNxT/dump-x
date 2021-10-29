<?php

namespace Codana\DumpX;

class DumpX
{
    private int $cycle;

    public function __construct()
    {
        $this->cycle = 0;
    }

    public function amount($value, int $loops = null): void
    {
        if ($this->cycle === $loops) {
            exit();
        }
        dump($value);
        ++$this->cycle;
    }
}
