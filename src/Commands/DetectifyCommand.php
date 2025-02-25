<?php

namespace MarJose123\Detectify\Commands;

use Illuminate\Console\Command;

class DetectifyCommand extends Command
{
    public $signature = 'detectify';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
