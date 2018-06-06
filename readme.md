# Kirby Google Analytics [![Release](https://img.shields.io/github/release/pedroborges/kirby-google-analytics.svg)](https://github.com/pedroborges/kirby-google-analytics/releases) [![Issues](https://img.shields.io/github/issues/pedroborges/kirby-google-analytics.svg)](https://github.com/pedroborges/kirby-google-analytics/issues)

A Kirby CMS snippet that adds the Google Analytics tracking script to your site!

## Requirements
- Kirby 2.4.0+
- PHP 5.4+

## Installation
After installing the plugin using any of the methods below, add the snippet to the `site/snippet/footer` file (or anywhere in your templates):

```php
    <?php snippet('google-analytics') ?>
</body>
</html>
```

> You will also need to set the `google.analytics` option (see below).

### Download
[Download the files](https://github.com/pedroborges/kirby-google-analytics/archive/master.zip) and place them inside `site/plugins/google-analytics`.

### Kirby CLI
Kirby's [command line interface](https://github.com/getkirby/cli) makes installing the Google Analytics plugin a breeze:

    $ kirby plugin:install pedroborges/kirby-google-analytics

Updating couldn't be any easier, simply run:

    $ kirby plugin:update pedroborges/kirby-google-analytics

### Git Submodule
You can add the Google Analytics plugin as a Git submodule.

    $ cd your/project/root
    $ git submodule add https://github.com/pedroborges/kirby-google-analytics.git site/plugins/google-analytics
    $ git submodule update --init --recursive
    $ git commit -am "Add Google Analytics plugin"

Updating is as easy as running a few commands.

    $ cd your/project/root
    $ git submodule foreach git checkout master
    $ git submodule foreach git pull
    $ git commit -am "Update submodules"
    $ git submodule update --init --recursive

## Options
In order to enable the snippet you need to set the `google.analytics` option:

```php
// Google Analytics tracking code
c::set('google.analytics', 'UA-98765432-1');
```

To activate anonymous tracking (aka `anonymizeIp`):

```php
// Anonymous tracking
c::set('google.analytics.anonymize-ip', true);
```

## Change Log
All notable changes to this project will be documented at: <https://github.com/pedroborges/kirby-google-analytics/blob/master/changelog.md>

## License
Google Analytics plugin is open-sourced software licensed under the [MIT license](http://www.opensource.org/licenses/mit-license.php).

Copyright © 2017 Pedro Borges <oi@pedroborg.es>
