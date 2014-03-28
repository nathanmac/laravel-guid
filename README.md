laravel-guid
==================

[![Build Status](https://travis-ci.org/nathanmac/laravel-guid.svg?branch=master)](https://travis-ci.org/nathanmac/laravel-guid)
[![Still Maintained](http://stillmaintained.com/nathanmac/laravel-guid.png)](http://stillmaintained.com/nathanmac/laravel-guid)

Simple GUID generator Package for Laravel 4

Installation
------------

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `Nathanmac/laravel-guid`.

	"require": {
		"nathanmac/laravel-guid": "dev-master"
	}

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

    'Nathanmac\GUID\GUIDServiceProvider'

##### Generate GUID
```php
echo "GUID: " . GUID::generate(); // GUID: 582B5733-8AE1-79D2-DB8F-5720ECBE4306
```

##### Generate GUID with a salt value
```php
echo "GUID: " . GUID::generate('custom salt value'); // GUID: 582B5733-8AE1-79D2-DB8F-5720ECBE4306
```

##### Generate GUID with braces
```php
echo "GUID: " . GUID::generate(false, true); // GUID: {582B5733-8AE1-79D2-DB8F-5720ECBE4306}
```
