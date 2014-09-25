# cakephp-hashids

[Hashids](http://www.hashids.org) Component for [CakePHP](http://cakephp.org/) 2.x

## Usage

First, get **Hashids.php** from http://www.hashids.org/php/ and put it in your app's **Vendor/Hashids** folder.

Then, add this to your **AppController.php**:
```php
public $components = array (
	// ...
	'Hashids' => array (
		'salt' => 'YOUR_SALT_HERE', // Required
		'min_hash_length' => 0, // Optional
		'alphabet' => '', // Optional
	)
);
```

###Encoding

Use on your Controllers like this:
```php
$encoded = $this->Hashids->encode(1, 2, 3);
```

Or in your Components, Views or anywhere else:
```php
$encoded = HashidsComponent::encode(1, 2, 3);
```

###Decoding

By default, this component retruns the first element of the resulting decode:
```php
$this->Hashids->decode($encoded); // --> 1
```

If you wish to get an array instead, set the second parameter to `true`, like this:
```php
$this->Hashids->decode($encoded, true); // --> array(1, 2, 3);
```

## Update

Since v1.0.0, several public functions of Hashids were renamed to be more appropriate:

* Function `encrypt()` changed to `encode()`
* Function `decrypt()` changed to `decode()`
* Function `encrypt_hex()` changed to `encode_hex()`
* Function `decrypt_hex()` changed to `decode_hex()`

The component's method names were also changed to maintain consistency.
