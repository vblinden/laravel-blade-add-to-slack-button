<?php

namespace Vblinden\LaravelBladeAddToSlackButton\Commands;

use Illuminate\Console\Command;

class LaravelBladeAddToSlackButtonCommand extends Command
{
    public $signature = 'laravel-blade-add-to-slack-button';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
