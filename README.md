<p align="center">
    <a href="https://github.com/felixdorn/singleton">
        <img src="https://res.cloudinary.com/dy3jxhiba/image/upload/v1588684928/maps-and-location_1_nwrztz.svg" width="150" alt="">
    </a>
    <h1 align="center">
        Utilities to work with the singleton pattern
    </h1>
    <p align="center">
        <img src="https://github.com/felixdorn/singleton/workflows/CI/badge.svg?branch=master" alt="CI badge" />
        <img src="https://github.styleci.io/repos/261477787/shield?branch=master&style=flat" alt="Style CI badge" />
        <img alt="Codecov" src="https://img.shields.io/codecov/c/github/felixdorn/singleton" alt="Code coverage badge">
        <img src="https://img.shields.io/packagist/l/delights/singleton" alt="License badge" />
        <img src="https://img.shields.io/packagist/v/delights/singleton" alt="Last Version badge" />
    </p>
</p>

## Getting started

### Installation
This library can be installed using composer, if you don't have it already, [download it](https://getcomposer.org/download).

You can either run this command :
```bash
composer require delights/singleton
```
Or by adding a requirement in your `composer.json` :
```json
{
  "require": {
    "delights/singleton": "1.0.0"  
  }
}
```
Don't forget to run `composer install` after adding the requirement.

## Disclaimer
Most of the time, you **don't** want to use a Singleton, most of the time it's a **bad** practice. It just as bad as using global variables. But this pattern exists for a reason, it can be useful! I assume that you know what you're doing and using a singleton is the best solution for your problem.

## Singleton
Use it on any class you want to transform into a singleton and there you are, it's done!

Let me show you a small example.
```php
use \Delight\Singleton\Singleton;

class MySingleton {
    use Singleton;
}

MySingleton::getInstance() // will always return the same instance
```

### Non Cloneable
You may want to prevent cloning. There is a simple trait for that. Let me show you an example.
```php
use Delight\Singleton\NotCloneable;

class SomeClass {
    use NotCloneable;
}
$instance = new SomeClass();

clone $instance // throws an NonCloneableException
```
### Not constructable
You may want to prevent constructing the object at all (excepted in the `getInstance` method or any object methods).

> This applies for child classes as well

```php
use Delight\Singleton\NotConstructable;

class SomeOtherClass {
    use NotConstructable;
}

$someOtherClass = new SomeOtherClass(); // throws an Error, SomeOtherClass is protected
```
> You may think that this behavior is inconsistent regarding of how the cloning prevention works. However, this is the simplest way to achieve this without touching at the backtrace.

## Security 
If you discover any security related issues, please email oss@dorns.fr instead of using the issue tracker.

## Credits
* [Félix Dorn](https://felixdorn.fr)

## Licensing
Copyright 2020 Félix Dorn

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
