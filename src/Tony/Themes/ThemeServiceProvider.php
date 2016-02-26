<?php namespace Tony\Themes;

use View;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{

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