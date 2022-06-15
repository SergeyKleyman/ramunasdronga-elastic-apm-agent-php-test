<?php

if (opcache_reset()) {
    echo 'Reset pending...', PHP_EOL;
} else {
    $status = opcache_get_status(false);
    echo 'Status:';
    if ($status['opcache_enabled']) {
        echo ' enabled';
    }
    if ($status['restart_pending']) {
        echo ' restart pending';
    }
    if ($status['restart_in_progress']) {
        echo ' restart in progress';
    }
    echo PHP_EOL;
}
