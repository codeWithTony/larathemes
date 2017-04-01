<?php namespace Tony\Themes;

use Closure;
use Theme;

/**
 * Class ThemeMiddleware
 * @package Modules\Base\Http\Middleware
 */
class ThemeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $theme = null)
    {
        Theme::set($theme);

        return $next($request);
    }
}