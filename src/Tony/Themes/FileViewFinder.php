<?php namespace Tony\Themes;

use Illuminate\View\FileViewFinder as IlluminateViewFinder;

class FileViewFinder extends IlluminateViewFinder
{
	/**
	 * This overrides the parent method and adds the location to the
	 * beginning of the paths array vs the end.
	 *
	 * @param string $location
	 * @return void
	 */
	public function addLocation($location)
	{
		//add location to the top of paths
		array_unshift($this->paths, $location);
	}

	/**
	 * Allows us to remove view paths
	 *
	 * @param $location
	 * @return void
	 */
	public function removeLocation($location)
	{
		//find and remove location if set
		if($key = array_search($location, $this->paths)) {
			unset($this->paths[$key]);
		}
	}
}