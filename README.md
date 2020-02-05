# Validator
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mohammedalkutrani/validator.svg?style=flat-square)](https://packagist.org/packages/mohammedalkutrani/validator)

<center>

It's a simple packge for validation the data before touch your database.
</center>

## Core Features
- PSR-4 for autoloading.
- PSR-2 for coding style.
- Strategy Pattern for changing the rules in the runtime.
- Facade Pattern for make it esey to use.
- Implements your own rule.
- Test 100%.

## Installation
`composer require mohammedalkutrani/validator`

## Simple Usage
``` php
    use Validator\Facade\Validation;
    use Validator\Rules;

    $v = Validation::make(
        [
            // the given data.
            'name' => 'mohammedalkutrani@gmail.com',
            'age' => 25
        ], [
            // the rules for the data.
            'name' => [Rules::NUMBER, Rules::MIN.'|4'],
            'age' => [Rules::EMAIL]
        ]
    );

    // check if it passed
    if(!$v->isPassed()) // it will return boolean
    { 
        print_r($v->getMessages()); // getting the messages.
    }
    
```

The result

```php
    Array
    (
        [name] => Array
            (
                [0] => the name should be a number
                [1] => the name should shorter then 4
            )

        [age] => Array
            (
                [0] => the age should be an email
            )

    )
```

<!-- ## Advanced Usage

#### How can I implement my own rules ?
to implement your own rules  -->
