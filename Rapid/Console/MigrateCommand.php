<?php

namespace Rapid\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Rapid\WinkAuthor;

class MigrateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rapid:migrate {email?} {password?}
                {--force : Force the operation to run when in production}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run database migrations for Wink';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $this->call('migrate', [
            '--database' => config('wink.database_connection'),
            '--path' => 'vendor/leamsi9/rapid/src/Migrations',
            '--force' => $this->option('force') ?? true,
        ]);


        $this->line('');
        $this->line('');
        $this->line('Wink is ready for use. Enjoy!');
    }
}
