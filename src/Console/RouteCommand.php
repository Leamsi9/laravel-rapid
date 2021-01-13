<?php

namespace Wink\Console;

use Illuminate\Console\Command;

class RouteCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'wink:route';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wink:route {controller=BlogController}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create routes to publicly display Laravel Wink blog posts in your app. Creates GET routes for endpoints `/blog` and `/blog{slug}`,  which link to the default  BlogController. The command takes as  an optional argument a controller name, which will be used instead of the default ';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Route';


    /**
     * Appends two routes to the routes/web.php file in your Laravel application. The routes link to the default BlogController, class or any named controller specified in the command.
     *
     * @return string
     */
    public function handle()
    {
        $controller = $this->argument('controller');
        $boilerplateRoute = "return view('welcome');";
        $boilerplateRedirect = "return redirect('blog');";
        $routesFilePath = $this->laravel['path'] . './../routes/web.php';
        $routesFileContent =file_get_contents($routesFilePath);
        $winkRoutes = "\nRoute::get('/blog', '" . $controller . "@index');\nRoute::get('/blog/{slug}', '" . $controller . "@show');\n";

        $updatedFileContent = str_replace($boilerplateRoute,$boilerplateRedirect,$routesFileContent);
        file_put_contents($routesFilePath,$updatedFileContent);
        If (strpos($updatedFileContent, $winkRoutes)) {
            $this->error("your blog's public routes already exist in your app's routes/web.php file");
        } else {
            file_put_contents($routesFilePath, $winkRoutes, FILE_APPEND | LOCK_EX);
            $this->info("your blog's public routes have been added to your app's routes/web.php file");
        }

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
