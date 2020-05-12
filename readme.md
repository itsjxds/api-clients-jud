## Basic Usage

### Autoloading
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
```

### Example to get all the clients
```php
<?php 

require_once __DIR__ . '/vendor/autoload.php';

use judithaguilar\ApiClientsJud\apiClients;

$api = new ApiClients();

$api->getAll();
```