<?php namespace Tony\Themes;

use Illuminate\Routing\Router;
use View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

	public function boot(Router $router)
	{
		$router->aliasMiddleware('theme', ThemeMiddleware::class);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('view.finder', function($app) {
			$paths = $app['config']['view.paths'];
			return new FileViewFinder($app['files'], $paths);
		});
		View::setFinder(app('view.finder'));

		$this->app->singleton('theme', function($app) {
			return new Theme();
		});
	}
}