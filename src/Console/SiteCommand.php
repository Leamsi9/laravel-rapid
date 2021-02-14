<?php

namespace Rapid\Console;

use Illuminate\Console\Command;

class SiteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rapid:site';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Build a full website';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment("Welcome to your site's birth!");
        $this->call('wink:install');
        $this->call('wink:migrate');

        $this->comment("Creating storage links");
        $this->call('storage:link');

        $this->comment("Please register your details to access your CMS");
        $this->call('wink:register');

        $this->comment('Building BlogController...');
        $this->call('wink:controller');


        $this->comment('Building /blog route...');
        $this->call('wink:route');


        $this->comment('Publishing public blog views...');
        $this->call('wink:view');

        $this->line('Your website is ready for use. Enjoy!');

        $this->line("You may view your site at the <info>'/blog'</info> endpoint of your website");


        $this->info('Site was installed successfully. Go to your /wink endpoint for the CMS and /blog for your blog');
    }
}
