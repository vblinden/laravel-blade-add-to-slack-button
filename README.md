# Add to Slack button

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vblinden/laravel-blade-add-to-slack-button.svg?style=flat-square)](https://packagist.org/packages/vblinden/laravel-blade-add-to-slack-button)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/vblinden/laravel-blade-add-to-slack-button/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/vblinden/laravel-blade-add-to-slack-button/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/vblinden/laravel-blade-add-to-slack-button/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/vblinden/laravel-blade-add-to-slack-button/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/vblinden/laravel-blade-add-to-slack-button.svg?style=flat-square)](https://packagist.org/packages/vblinden/laravel-blade-add-to-slack-button)

Easily add an "Add to Slack" button to your site.

## Installation

You can install the package via composer:

```bash
composer require vblinden/laravel-blade-add-to-slack-button
```

Run the install command
```bash
php artisan add-to-slack:install
```

Add CSS via build tool or simply add with stylesheet link
```css
@import '../../public/vendor/add-to-slack/css/button.css';
```

```html
<link rel="stylesheet" href="/vendor/add-to-slack/css/button.css">
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-blade-add-to-slack-button-views"
```

## Usage

### Basic Usage

Use the Blade component to render an "Add to Slack" button:

```blade
<x-add-to-slack::button href="your-oauth-flow" />
```

### Customization Options

#### Large Button

```blade
<x-add-to-slack::button href="your-oauth-url" large />
```

#### Custom Label

```blade
<x-add-to-slack::button href="your-oauth-flow" label="Install App" />
```

#### Additional HTML Attributes

You can pass any additional HTML attributes to the button:

```blade
<x-add-to-slack::button 
    href="your-oauth-flow"
    target="_blank"
    rel="noopener"
    class="my-custom-class"
/>
```

### Slack Icon Component

You can also use the Slack icon separately:

```blade
<x-add-to-slack::icon />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [vblinden](https://github.com/vblinden)
- [All Contributors](../../contributors)

## Disclaimer

Slack is a trademark of Slack Technologies, LLC, a Salesforce company. This package is not affiliated with, endorsed by, or sponsored by them.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
