<?php

namespace App\Console\Commands\Setup;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class Setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set up the application by running migrations and installing admin panel';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh --seed');
    }
}
