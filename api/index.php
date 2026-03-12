<?php

// Forward Vercel requests to Laravel's public/index.php
// Ensure that required environment variables are handled correctly for Vercel
// For example, Laravel needs a temporary directory for view/config caching in Vercel's read-only environment.

// Ensure storage/framework/views exists (sometimes needed for view compilation)
if (!is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}
putenv('VIEW_COMPILED_PATH=/tmp/views');

// Ensure bootstrap/cache exists for Vercel
if (!is_dir('/tmp/bootstrap/cache')) {
    mkdir('/tmp/bootstrap/cache', 0755, true);
}

// Set temporary storage paths for Vercel's read-only environment
// We point them to /tmp so Laravel can write to them if it needs to
putenv('APP_SERVICES_CACHE=/tmp/bootstrap/cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap/cache/packages.php');
putenv('APP_CONFIG_CACHE=/tmp/bootstrap/cache/config.php');
putenv('APP_ROUTES_CACHE=/tmp/bootstrap/cache/routes.php');
putenv('APP_EVENTS_CACHE=/tmp/bootstrap/cache/events.php');

putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=:memory:');

require __DIR__ . '/../public/index.php';
