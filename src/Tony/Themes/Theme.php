<?php namespace Tony\Themes;


class Theme
{
	protected static $theme = "";

	/**
	 * Set the Theme
	 *
	 * @param $name
	 * @param null $absolute_path
	 */
	public static function set($name, $absolute_path = null)
	{
		// Use default /larathemes/ directory if other is not set
		if (empty($absolute_path)) $absolute_path = base_path('themes/' . $name);
		// remove any other theme that was previously set
		if (!empty(self::$theme)) app('view.finder')->removeLocation(self::$theme . '/views');
		//set theme and add location to view file finder
		if (is_dir($absolute_path)) self::$theme = $absolute_path;
		app('view.finder')->addLocation($absolute_path . '/views');
	}
}