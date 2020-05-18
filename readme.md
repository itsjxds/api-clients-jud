## Basic Usage

### Necesitarás poner esto en tu composer.json para que se instale el componente
```json
{
    "minimum-stability": "dev"
}
```

### Autoloading
```php
<?php
require_once __DIR__ . '/vendor/autoload.php';
```

### Ejemplo para ver todos los clientes
```php
<?php 

require_once __DIR__ . '/vendor/autoload.php';

use judithaguilar\ApiClientsJud\apiClients;

$api = new ApiClients();

$api->getAll();
```