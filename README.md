# Damavis corp. website v.X.X

## How to get it up and running:

### Method 1 (the fastest) 
    
>docker-compose up --build 

and navigate to http://localhost. 
If port 80 is busy you can change exposed port in docker-compose.yml in ports section for http service.

This will create a temporary development environment where you can 
make your changes and see what they do in real time.

### Method 2 - static html

> docker build . -t php-damavis:latest

creates a docker image with all the stuff necessary to generate static files.

> docker run --env-file=.env -v "$(pwd)":/var/www/html php-damavis:latest php regen-static-html.php

generates static html files inside `./html`. Make sure `./html` exists!

> docker-compose -f static.docker-compose.yml up

sets up an http server for static html files. The only thing that changes from _normal_ docker-compose.yml is that this one overrides .htaccess to serve static html instead of php.

### Deploying to production

First regenerate html following *Method 2*

Upload contents of `./html` into your document root. Something like 

> scp ./html/* user@example.com:/path/to/htdocs/

Make sure **mod_rewrite** is enabled.

> a2enmod rewrite && systemctl restart apache2

Finally upload `./.htacess.static` as `.htaccess` into yet again the same document root. 
> scp ./.htaccess.static user@example.com:/path/to/htdocs/.htaccess

**N.B.** See requirements for Production below.

## Requirements

### Development

Not awfully outdated Docker with docker-compose.

### Production

Any http server (Apache2, nginx, IIS) that is capable of serving static files.
Relevant configuration must take place. This document describes how to configure
**Apache2** with **mod_rewrite** enabled.

## Making changes

### HTML
Making changes to html structure is easy! Just find the part you want to change
in php file inside `./view` or `./include` and make your change!

### CSS 
Make sure to run 

> scss css/damavis.scss:css/damavis.css

after changing it or have it on `--watch`

### LOCALIZATION

The most difficult of all changes. Let's say we need to add a phrase to footer.
To localize it, first we have to add it into html, calling `_` (shorthand for `gettext`).
Let's say now footer.php looks something like this: 
```html
<footer>© Aneior Studio S.L.</footer>
```
 
Now we add our localized string
```html
<footer>© Aneior Studio S.L. <?= _('Translate me please!') ?></footer>
```

Note that the original localized string should look exactly what you want it to look like in your default language (in our case English).
So far so good. Now we need `poedit`. It's a nice tool to deal with .po files. 

> poedit i18n/es_ES/LC_MESSAGES/messages.po

will open poedit and it will be almost ready to translate our "Translate me please!" to Spanish (`es_ES`).
Once  it opens, click "Update from sources" button. It should find our new piece of code 
and add the new string to be translated. To translate it first click on the row
with `Translate me please!` and translate it inside the big "Translation:" textarea at the bottom of the screen. 
Click Save. 

If you are working using "Method 1", make sure to `docker-compose down` and up again. This is because 
`gettext` uses lots of memory magics to be fast and can be unreliable unless you kill
host process after any changes are made to compiled translation files (*.mo).

### MORE LOCALIZATION

There will be times when you will need to embed a dynamic string or another translation inside a message.
The easiest way to go about it is using `__` (two items of low dash together) function.
It accepts format-to-be-translated as a first parameter and the rest would be elements 
to embed passed as you would pass arguments to a `sprintf` family function.

_Quick example:_

```php
$currentHour = (int)date('H');
// Si son entre las 8 de la mañana y 8 de la tarde, el cielo es azul.
$skyColor = (($currentHour > 8 && $currentHour < 20) ? _('blue') : _('black')); 
echo __('The sky today is: %s', $skyColor) . PHP_EOL;
```

### AND MORE LOCALIZATION

When using a dynamic key for gettext, something like 

```php
echo '<title>' . _($currentPage . '_title') . '</title>'; 
```
...something to avoid by the way. 

Poedit won't be able to reconstruct your key and won't try to volunteer you into translating it.
Solution is simple: open `./include/_gettext_hints.php`, dive to the bottom of it and add
```php
_('home_title');
_('work_title');
// ...
```