<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if (file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false; // serve static files (css, jpg, svg...) as-is
}

if (preg_match('#^/letter/([a-z0-9_-]+)/?$#i', $uri, $m)) {
    $_GET['for'] = $m[1];
    require __DIR__ . '/letter.php';
} elseif ($uri === '/contact' || $uri === '/contact/') {
    require __DIR__ . '/contact.php';
} elseif ($uri === '/targets' || $uri === '/targets/') {
    require __DIR__ . '/list-targets.php';
} elseif (preg_match('#^/([a-z0-9_-]+)/?$#i', $uri, $m)) {
    $_GET['for'] = $m[1];
    require __DIR__ . '/index.php';
} else {
    require __DIR__ . '/index.php';
}
