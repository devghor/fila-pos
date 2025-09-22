<?php

namespace App\Console\Commands\Pos;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class PosInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pos:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the POS module with fresh migrations and seeders';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh --seed');
        Artisan::call('shield:install admin');
        Artisan::call('shield:super-admin --panel=admin');
    }
}
