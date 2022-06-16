<?php

namespace Astrogoat\Greenhouse\Commands;

use Illuminate\Console\Command;

class GreenhouseCommand extends Command
{
    public $signature = 'greenhouse';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
