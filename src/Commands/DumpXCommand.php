<?php

namespace Codana\DumpX\Commands;

use Illuminate\Console\Command;

class DumpXCommand extends Command
{
    public $signature = 'dump-x';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
