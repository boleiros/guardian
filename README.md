# Guardian plugin for CakePHP ACL

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require boleiros/guardian
```

## Enable Plugin

```php
// config/bootstrap.php

Plugin::load('Guardian', ['bootstrap' => true, 'routes' => true]);
```
Or, in your terminal:

```
bin/cake plugin load -b -r Gardian
```

## Run Migrations

```
bin/cake migrations migrate --plugin Guardian
```

