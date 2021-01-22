<?php

namespace Wink\Console;

use Illuminate\Console\Command;

class ViewCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'wink:view';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rapid:view {directory=blog}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Creates views to publicly display your Laravel Wink blog posts in your app. Publishes blade templates to your app's resources/views/blog directory.";

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'View';

    /**
     * Appends two routes to the routes/web.php file in your Laravel application. The routes link to the default BlogController, class or any named controller specified in the command.
     *
     * @return string
     */
    public function handle()
    {
        $this->comment('Publishing public blog templates...');
        $this->callSilent('vendor:publish', ['--tag' => 'wink-views']);
        $this->info("Your public  public blog templates are now in your app's resources/views/blog directory .");

    }


    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [

        ];
    }
}
