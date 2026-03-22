<?php

use App\Http\Middleware\DepartmentMiddleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\QueryException;
use Illuminate\Encryption\MissingAppKeyException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'auth' => Authenticate::class,
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class,
            'dept' => DepartmentMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {

        // Handle Missing App Key
        $exceptions->render(function (MissingAppKeyException $e) {
            echo view('errors.500', [
                'title' => 'Setup Required - Missing App Key',
                'heading' => 'Encryption Key Missing',
                'message' => 'Your application requires a secure encryption key to function. Please run \'php artisan key:generate\' in your terminal and refresh this page.',
                'actionText' => 'Retry',
            ])->render();
            exit;
        });

        // Handle Database Errors
        $exceptions->render(function (QueryException $e) {

            // Connection Refused
            if (str_contains($e->getMessage(), 'Connection refused') || str_contains($e->getMessage(), 'SQLSTATE[HY000] [2002]')) {

                $dbHost = config('database.connections.mysql.host', 'N/A');
                $dbPort = config('database.connections.mysql.port', 'N/A');

                echo view('errors.500', [
                    'title' => 'Database Connection Error',
                    'heading' => 'Database Offline',
                    'message' => "Could not connect to the database at '{$dbHost}:{$dbPort}'. Please ensure your database service is running and active.",
                    'actionText' => 'Retry Connection',
                ])->render();
                exit;
            }

            // Missing Tables (Migration Required)
            if (str_contains($e->getMessage(), 'SQLSTATE[42S02]')) {
                echo view('errors.500', [
                    'title' => 'Database Setup Required',
                    'heading' => 'Database Tables Missing',
                    'message' => "The database is connected, but the required tables haven't been created yet. Please run 'php artisan migrate' & refresh this page.",
                    'actionText' => 'Refresh Page',
                ])->render();
                exit;
            }
        });
    })->create();
