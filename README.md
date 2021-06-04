Please see [this repo](https://github.com/laravel-notification-channels/channels) for instructions on how to submit a channel proposal.

# Laravel Textit Channel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/laravel-notification-channels/textit.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/textit)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/laravel-notification-channels/textit/master.svg?style=flat-square)](https://travis-ci.org/laravel-notification-channels/textit)
[![StyleCI](https://styleci.io/repos/:style_ci_id/shield)](https://styleci.io/repos/:style_ci_id)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/:sensio_labs_id.svg?style=flat-square)](https://insight.sensiolabs.com/projects/:sensio_labs_id)
[![Quality Score](https://img.shields.io/scrutinizer/g/laravel-notification-channels/textit.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/textit)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/laravel-notification-channels/textit/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/laravel-notification-channels/textit/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel-notification-channels/textit.svg?style=flat-square)](https://packagist.org/packages/laravel-notification-channels/textit)

This package makes it easy to send notifications using [Textit](link to service) with Laravel 5.5+, 6.x and 7.x

**Note:** Replace ```Textit``` ```Textit``` ```Upeksha Liyanage``` ```glupeksha``` ```https://www.owaslo.com``` ```upeksha@owaslo.com``` ```textit``` ```Laravel notification channel for textit Sri Lanka``` ```:style_ci_id``` ```:sensio_labs_id``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md), [composer.json](composer.json) and other files, then delete this line.
**Tip:** Use "Find in Path/Files" in your code editor to find these keywords within the package directory and replace all occurences with your specified term.

This is where your description should go. Add a little code example so build can understand real quick how the package can be used. Try and limit it to a paragraph or two.



## Contents

- [Installation](#installation)
	- [Setting up the Textit service](#setting-up-the-Textit-service)
- [Usage](#usage)
	- [Available Message methods](#available-message-methods)
- [Changelog](#changelog)
- [Testing](#testing)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)


## Installation

You can install this package via composer:
``` bash
composer require laravel-notification-channels/textit
```

### Setting up the Textit service

Add your Textit sms gate user, password and baseurl to your config/services.php:

```php
// config/services.php
...
    'textit' => [
        'user' => env('TEXTIT_USER'),
        'password' => env('TEXTIT_PASSWORD'),
        'baseurl' => env('TEXTIT_BASEURL'),
    ],
...
```


## Usage

You can use the channel in your via() method inside the notification:

```php
use Illuminate\Notifications\Notification;
use NotificationChannels\TurboSMS\TurboSMSMessage;

class AccountApproved extends Notification
{
    public function via($notifiable)
    {
        return ["textit"];
    }

    public function toTextit($notifiable)
    {
        return (new TextitMessage("Your account was approved!"));       
    }
}
```

### Available Message methods

A list of all available options

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please email upeksha@owaslo.com instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Upeksha Liyanage](https://github.com/glupeksha)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
