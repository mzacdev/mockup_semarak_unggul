<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set proper headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

try {
    $mediaDir = 'assets/gambar/semarak_unggul/SEMARAK UNGGUL/';
    $mediaFiles = [];

    // Check if directory exists
    if (!is_dir($mediaDir)) {
        throw new Exception("Directory not found: " . $mediaDir);
    }

    // Check if directory is readable
    if (!is_readable($mediaDir)) {
        throw new Exception("Directory not readable: " . $mediaDir);
    }

    $files = scandir($mediaDir);
    if ($files === false) {
        throw new Exception("Failed to scan directory: " . $mediaDir);
    }

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') {
            continue;
        }

        $fullPath = $mediaDir . $file;

        // Check if file is readable
        if (!is_readable($fullPath)) {
            continue; // Skip unreadable files
        }

        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $isVideo = in_array($extension, ['mp4', 'mov', 'avi']);
        $isImage = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']);

        if ($isVideo || $isImage) {
            $mediaFiles[] = [
                'path' => $fullPath,
                'type' => $isVideo ? 'video' : 'image',
                'filename' => $file
            ];
        }
    }

    // Check if we found any media files
    if (empty($mediaFiles)) {
        throw new Exception("No media files found in directory");
    }

    echo json_encode($mediaFiles);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage(),
        'details' => [
            'directory' => $mediaDir ?? 'not set',
            'files_found' => count($mediaFiles ?? []),
            'php_version' => PHP_VERSION,
            'server_software' => $_SERVER['SERVER_SOFTWARE'] ?? 'unknown'
        ]
    ]);
}
?>