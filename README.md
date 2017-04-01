# Laravel Theme

**The simpliest of theme switching for Laravel 5**

<a href="#installation">Installation</a>
<a href="#usage">Usage</a>


## <a id="installation"></a>Installation

### Laravel 5.1+

Install Laravel Theme manager:

``` json
composer require codewithtony/larathemes
```

At `config/app.php`, add the Service Provider and the Facade:

```php
    'providers' => [
        Tony\Themes\ThemeServiceProvider::class,
    ]

    //...

    'aliases' => [
        'Theme' => Tony\Themes\Themes\ThemeFacade::class,
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

Changing your theme is easy

```php
Theme::set('my-theme')
```

Easily use the Middleware to change themes for an entire group

```php
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'theme:admin'], function () {
    //...
});
```

### Calling a view

Load your views like normal, Laravel Theme will look for your view in the set theme and if it isn't found, view finding will remain the same 

You can reuse views by storing them outside of your theme and just uses view('layout.master') and have your layout/master.blade.php inside you themes.

### Assets

Your assets will need to be sent to your public folder still.

## <a id="contibute"></a>Contribute

Your help is more than welcome!

## <a id="license"></a>License

Licensed under the [The MIT License (MIT)](http://opensource.org/licenses/MIT). Please see [LICENSE](LICENSE) for more information.
