<?php
// build.php

// Define the project's root directory
$root_dir = '/home/u799688243/domains/zdeveloper.online'; // Replace u799688243 with your actual user ID!

// Define the full path to the Node executable (common paths are /usr/bin/node or /usr/local/bin/node)
$node_path = 'node'; // Start with a simple call, but be ready to change this to the full path if it fails (e.g., '/usr/bin/node')

// Function to execute a shell command and capture output
function execute_command($command, $chdir) {
    // Escape the change directory command for safety
    $cmd = "cd " . escapeshellarg($chdir) . " && {$command} 2>&1";
    $output = shell_exec($cmd);
    return $output;
}

// 1. Install dependencies
$install_command = "{$node_path} npm install";
$install_output = execute_command($install_command, $root_dir);

// 2. Run the Vite build command
$build_command = "{$node_path} npm run build";
$build_output = execute_command($build_command, $root_dir);

// Log output to a file for debugging (CRITICAL STEP)
$log_file = $root_dir . '/build_log.txt';
$log_content = "Build Attempt at: " . date('Y-m-d H:i:s') . "\n";
$log_content .= "--- NPM Install Output ---\n" . $install_output . "\n\n";
$log_content .= "--- Vite Build Output ---\n" . $build_output . "\n";

file_put_contents($log_file, $log_content, FILE_APPEND);

echo "Build script executed. Check build_log.txt for status.";
?>
