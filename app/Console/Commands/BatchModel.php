<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;

class BatchModel extends Command
{
    protected $signature = 'make:batch-model
        {models : Daftar model, pisahkan dengan koma}
        {--a|all : Generate migration, factory, seeder, policy, and resource controller}
        {--c|controller : Create a new controller for the model}
        {--f|factory : Create a new factory for the model}
        {--force : Create the class even if the model already exists}
        {--m|migration : Create a new migration file for the model}
        {--policy : Create a new policy for the model}
        {--seed : Create a new seeder for the model}
        {--p|pivot : Indicates if the generated model should be a custom intermediate table model}
        {--r|resource : Indicates if the generated controller should be a resource controller}
        {--api : Indicates if the generated controller should be an API controller}
        {--test : Create a new test for the model}
        {--ns|namespace= : Generate the model within a custom namespace (ex: Admin/User)}
        {--view : Automatically generate basic views (index, create, edit, show) for each model}';

    protected $description = 'Generate multiple Eloquent models at once, with all options from make:model and auto-generate basic views.';

    public function handle()
    {
        $models = explode(',', $this->argument('models'));
        $options = [
            '--all' => $this->option('all'),
            '--controller' => $this->option('controller'),
            '--factory' => $this->option('factory'),
            '--force' => $this->option('force'),
            '--migration' => $this->option('migration'),
            '--policy' => $this->option('policy'),
            '--seed' => $this->option('seed'),
            '--pivot' => $this->option('pivot'),
            '--resource' => $this->option('resource'),
            '--api' => $this->option('api'),
            '--test' => $this->option('test'),
        ];

        if ($this->option('namespace')) {
            $options['--namespace'] = $this->option('namespace');
        }

        foreach ($models as $model) {
            $model = trim($model);
            $params = array_merge(['name' => $model], $options);
            $this->call('make:model', $params);
            $this->info("Model $model berhasil dibuat.");

            if ($this->option('controller') || $this->option('all')) {
                $resourceName = Str::plural(Str::kebab(class_basename($model))); // post => posts
                $controllerClass = $model . 'Controller';
                $controllerNamespace = "App\Http\Controllers\\$controllerClass";
                $routeEntry = "Route::resource('$resourceName', \\$controllerNamespace::class);";
                $routesFile = base_path('routes/web.php');
                $routesContent = file_get_contents($routesFile);

                if (strpos($routesContent, $routeEntry) === false) {
                    file_put_contents($routesFile, PHP_EOL . $routeEntry . PHP_EOL, FILE_APPEND);
                    $this->info("Route resource untuk '$resourceName' berhasil ditambahkan ke web.php.");
                } else {
                    $this->warn("Route untuk '$resourceName' sudah ada di web.php, dilewati.");
                }
            }

            if ($this->option('view')) {
                $modelLower = strtolower($model);
                $views = ['index', 'create', 'edit', 'show'];
                $viewDir = resource_path('views/pages/' . $modelLower);
                if (!is_dir($viewDir)) {
                    mkdir($viewDir, 0755, true);
                }
                foreach ($views as $view) {
                    $viewPath = $viewDir . '/' . $view . '.blade.php';
                    if (!file_exists($viewPath)) {
                        file_put_contents($viewPath, "@extends('layouts.app')\n@section('content')\n<!-- $model - $view view -->\n@endsection\n");
                        $this->info("View $modelLower/$view.blade.php berhasil dibuat.");
                    } else {
                        $this->warn("View $modelLower/$view.blade.php sudah ada, dilewati.");
                    }
                }
            }
        }

        $this->info("Semua model berhasil dibuat!");
    }
}