# phpinfo() Plugin

A plugin for [Kirby 2 CMS](http://getkirby.com) that adds a route for `phpinfo()`.

## Installation

Copy or link the `phpinfo.php` directory to `site/plugins/` **or** use the [Kirby CLI](https://github.com/getkirby/cli):

```
kirby plugin:install schnti/kirby-phpinfo
```

### Config Variables

* ka.phpinfo.active: true / false (Default: true)

```php
c::set('ka.phpinfo.active', false);
```

## How to use it

Visit the phpinfo at this url: http://example.com/phpinfo.php
