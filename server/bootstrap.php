<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Create new Capsule instance
$capsule = new Capsule;

// Configure connection
$capsule->addConnection($config['database']);
$capsule->setAsGlobal();

// Boot Eloquent ORM
$capsule->bootEloquent();

// Set default timezone
date_default_timezone_set('UTC');