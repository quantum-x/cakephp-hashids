# cakephp-hashids

[Hashids](http://www.hashids.org) Component for [CakePHP](http://cakephp.org/)

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

And use on your Controllers like this:

```php
$this->Hashids->encrypt(1, 2, 3);
```

Or in your Components, Views or anywhere else:

```php
HashidsComponent::encrypt(1, 2, 3);
```
