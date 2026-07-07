<?php
header('Content-Type: application/json');

// Check request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed. Only POST is supported.']);
    exit;
}

// Get raw POST payload
$input = file_get_contents('php://input');
$data = json_decode($input, true);

if (!is_array($data) || count($data) !== 3) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid data format. Expected an array of exactly 3 items.']);
    exit;
}

// Verify and clean links
$reels = [];
foreach ($data as $index => $item) {
    if (!isset($item['url']) || empty($item['url'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing URL for item ' . ($index + 1)]);
        exit;
    }
    $url = trim($item['url']);
    $reels[] = [
        'id' => $index + 1,
        'url' => $url
    ];
}

// Save to reels.json
$json_data = json_encode($reels, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
$filePath = __DIR__ . '/reels.json';

if (file_put_contents($filePath, $json_data) !== false) {
    echo json_encode(['success' => true, 'message' => 'Reels updated successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Failed to write data to reels.json. Check folder write permissions.']);
}
?>
