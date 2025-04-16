# Get Table Name

This package provides a way to get statically table name and primary key in laravel
## Features

- Implement 2 methods to retrieve table name & primary key name

## Installation

To install the package, use the following command:

```bash
composer require theoLuirard/laravel-get-table-name 
```

## Configuration

### Add the trait to your model 

Simply add the trait to your model definition 

```php

<?php

namespace App\Models;

use HasTreeStructure;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasTreeStructure;
}

```

## Usage

To get the table name statically 
```php
MyModel::getTableName(); // Returns "my_table_name"
MyModel::getTableName(true); // Returns "my_connection.my_table_name"
```

To get the primary key name statically 
```php
MyModel::getTableName(); // Returns "my_primary_key"
MyModel::getTableName(true); // Returns "my_table_name.my_primary_key"
```



