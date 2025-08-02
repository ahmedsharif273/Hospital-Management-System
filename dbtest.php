<?php

use Illuminate\Support\Facades\DB;

require 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Connected to database: " . DB::connection()->getDatabaseName();
