# Laravel Docusign
A Laravel 5 wrapper for the [Docusign Rest Client](https://github.com/Tucker-Eric/docusign-rest-client)

### Install Through Composer

```
composer require tucker-eric/laravel-docusign
```

After updating composer, add the service provider to the `providers` array in `config/app.php`

```php
LaravelDocusign\DocusignServiceProvider::class
```

Add the facade to the `aliases` array in `config/app.php`

```php
'DocuSign'  => LaravelDocusign\Facades\DocuSign::class,
```

Generate the config file:
```
php artisan vendor:publish --provider="LaravelDocusign\DocusignServiceProvider"
```
Add the following to your `.env` file (matching the config):
```
DOCUSIGN_USERNAME=[YOUR_DOCUSIGN_USERNAME]
DOCUSIGN_PASSWORD=[YOUR_DOCUSIGN_PASSWORD]
DOCUSIGN_INTEGRATOR_KEY=[YOUR_DOCUSIGN_INTEGRATOR_KEY]
```

## Usage
For usage see the [Docusign Rest Client](https://github.com/Tucker-Eric/docusign-rest-client)

### Using the Facade
You can create a new instance of the DocuSign Client with:

```php
$client = DocuSign::create();
```

Access DocuSign Models:

```php
$signer = DocuSign::signer([
    'name'  => 'John Doe',
    'email' => 'Jdoe123@example.com'
]);
```

Access DocuSign Api endpoints using `get()`;

```php
DocuSign::get('folders')->list();
```
OR

### Using the `LaravelDocusign\Client` class
You can create a new instance of the DocuSign Client with:
```php
$client = new LaravelDocusign\Client;
```