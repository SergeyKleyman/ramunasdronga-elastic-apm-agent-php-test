<?php

header('X-Accel-Buffering: no');

require __DIR__ . '/vendor/autoload.php';

$delay = random_int(1, 10);
echo 'Sleeping ', $delay, PHP_EOL;
@ob_end_flush();
@flush();

sleep($delay);

echo 'OK', PHP_EOL;
