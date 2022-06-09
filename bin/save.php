<?php

require dirname(__DIR__) . '/vendor/autoload.php';

file_put_contents(__DIR__ . '/cache', serialize(new A));
