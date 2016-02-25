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
		$this->app['view.finder'] = $this->app->share(function($app) {
			$paths = View::getFinder()->getPaths();
			return new FileViewFinder($app['files'], $paths);
		});
		View::setFinder(app('view.finder'));
		$this->app->bind('tony.larathemes', 'Tony\Themes\Theme');
	}
}