# LaraTheme

**The simpliest of theme switching for Laravel 5**

<a href="#installation">Installation</a>
<a href="#usage">Usage</a>


## <a id="installation"></a>Installation

### Laravel 5.1+

At `composer.json` of your Laravel installation, add the following require line:

``` json
{
    "require": {
        "codewithtony/larathemes": "~1.0"
    }
}
```

Run `composer update` to add the package to your Laravel app.

At `config/app.php`, add the Service Provider and the Facade:

```php
    'providers' => [
        Tony\Themes\ThemeServiceProvider::class,
    ]
```

## <a id="usage"></a>Usage

### Recommended Structure

```
themes
  ├── [theme name]
  |   └── assets
  |   └── views
  |
  └── [theme name]
      └── assets
      └── views
```

### Setting a theme

Changing your theme is easy. 

```php
app('theme')->set('my-theme')
```

Easily use it to change the theme for an entire group

```php
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    app('theme')->set('admin');
    
    //...
});
```

### Calling a view

Load your views like normal, LaraTheme will look for you view in the set theme. If it does not find it, view finding will remain the same 

You can reuse views by storing them outside of your theme and just uses view('layout.master') and have your layout/master.blade.php inside you themes.

### Assets

Your assets will need to be in your public folder still.

## <a id="contibute"></a>Contribute

Your help is more than welcome!

## <a id="license"></a>License

Licensed under the [The MIT License (MIT)](http://opensource.org/licenses/MIT). Please see [LICENSE](LICENSE) for more information.
