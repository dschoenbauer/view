# VIEW [![Build Status](https://travis-ci.org/dschoenbauer/view.svg?branch=develop)](https://travis-ci.org/dschoenbauer/view)

View is a quick and dirty view generator, designed to reduce complexity and to seperate logical pices of the application.

## To Install:
Add the follwoing to your composer.json
```
{
    "repositories": [
        {
            "url": "https://github.com/dschoenbauer/view.git",
            "type": "git"
        }
    ],
    "require": {
        "dschoenbauer/view": "~1.0"
    }
}
```

## To Test:
### Windows:
```
.\vendor\bin\phpunit.bat tests
```
### Linux:
```
./vendor/bin/phpunit tests
```