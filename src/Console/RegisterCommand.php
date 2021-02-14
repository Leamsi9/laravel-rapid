<?php

namespace Rapid\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;
use Rapid\WinkAuthor;

class RegisterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rapid:register';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register your CMS credentials and author details';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $title = $this->ask("What is your blog's title?");
        $emailInput = $this->ask('What is your email address?');
        $passwordInput = $this->secret('Choose a password for your CMS?');
        $bio = $this->ask('Type a brief author bio (you can always edit it in the CMS later)');
        $email = $emailInput;
        $password = $passwordInput;

        $author = WinkAuthor::create([
            'id' => (string)Str::uuid(),
            'name' => $title,
            'slug' => preg_replace("/[\s]+/", "-", $title),
            'bio' => $bio,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->line('');
        $this->info('Your details have been stored in the author table');
        $this->line("You may log into your CMS at the /wink  endpoint using <info> $author->email </info> and your chosen password");

    }
}
