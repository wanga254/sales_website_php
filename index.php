<?php
/**
 * index.php
 * Redirects user to the dashboard or shows fallback message if redirection fails.
 */

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$redirectPath = '/dashboard/';

$location = $protocol . $host . $redirectPath;

// Validate if redirect target exists (optional check)
if (is_dir(__DIR__ . $redirectPath)) {
    header("Location: $location");
    exit;
} else {
    echo "<h2>🚧 We're setting up your dashboard...</h2>";
    echo "<p>If you're the developer, make sure the <code>/dashboard/</code> directory exists.</p>";
}
?>
