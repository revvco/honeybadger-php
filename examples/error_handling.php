<?php
/**
 * When all else fails, capture *everything* else that slips through.
 */

use Honeybadger\Honeybadger;

$options = include 'config.php';

Honeybadger::$config->values($options);

Honeybadger::handle_errors();

// Reference an undefined variable.
echo $foo;
