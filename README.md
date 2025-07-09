# Request Object

[![Latest Stable Version](https://img.shields.io/packagist/v/laralgato/request-object.svg)](https://packagist.org/packages/laralgato/request-object)
[![License](https://img.shields.io/packagist/l/laralgato/request-object.svg)](LICENSE)

Simple way to convert your request data to an object.

## Installation

Install via Composer:

```bash
composer require laralgato/request-object
```

## Usage

After installing the package, you can simply add a trait and an attribute to your Request.
The Attribute accepts the object that you want as a result of the toObject method.

```php
use Laragato\RequestObject\Attributes\FormObject;
use Laragato\RequestObject\Traits\useObjectRequest;

#[FormObject(MyObject::class)]
class TestRequest extends FormRequest
{
    use useObjectRequest;
    ...
}
```

In your controller you can simply use:
```php
class TestController extends Controller
{
    public function __invoke(TestRequest $request)
    {
        $request->toObject();
    }
}
```
This line will perform the validation and return the object giving in the request.

Enjoy :)