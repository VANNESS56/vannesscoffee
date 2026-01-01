<?php

if (!is_dir('/tmp/storage/bootstrap/cache')) {
    mkdir('/tmp/storage/bootstrap/cache', 0755, true);
}


require __DIR__ . '/../public/index.php';
