Polyfill for the dd-trace PHP extension.

[![Total Downloads](https://img.shields.io/packagist/dt/yoopies/dd-trace-polyfill.svg?style=flat-square)](https://packagist.org/packages/yoopies/dd-trace-polyfill)

Using [Datadog Trace's PHP extension](https://docs.datadoghq.com/fr/security_platform/application_security/setup_and_configure/#add-user-information-to-traces) requires us to use this pattern everywhere:

```php
if (extension_loaded('ddtrace')) {
    $rootSpan = \DDTrace\root_span();
    $rootSpan->meta['usr.id'] = '123456789';
}
```

This package is a polyfill re-declaring all the functions provided by Datadog when the extension is not installed. In other words, after installing this polyfill you can rely on the function to exist:

```php
$span = \DDTrace\active_span();
```

If the extension is installed, everything will work as expected. If not (for example on your development machine) nothing will happen.

### Installation

```
composer require yoopies/dd-trace-polyfill-php
```

That's all you need to do!
