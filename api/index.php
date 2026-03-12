<?php

// Forward Vercel requests to Laravel's public/index.php
// Ensure that required environment variables are handled correctly for Vercel
// For example, Laravel needs a temporary directory for view/config caching in Vercel's read-only environment.

// Set temporary storage paths for Vercel's read-only environment
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_EVENTS_CACHE=/tmp/events.php');
putenv('APP_PACKAGES_CACHE=/tmp/packages.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');
putenv('APP_SERVICES_CACHE=/tmp/services.php');

// Ensure storage/framework/views exists (sometimes needed for view compilation)
if (!is_dir('/tmp/views')) {
    mkdir('/tmp/views', 0755, true);
}
putenv('VIEW_COMPILED_PATH=/tmp/views');

require __DIR__ . '/../public/index.php';
