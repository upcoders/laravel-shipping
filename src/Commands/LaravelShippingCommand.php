<?php

namespace Upcoders\LaravelShipping\Commands;

use Illuminate\Console\Command;

class LaravelShippingCommand extends Command
{
    public $signature = 'laravel-shipping';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
